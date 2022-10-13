<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\CancerType;
use App\Models\FamilyHistory;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CancerTypeFamilyHistoriesTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $user = User::factory()->create(['email' => 'admin@admin.com']);

        Sanctum::actingAs($user, [], 'web');

        $this->seed(\Database\Seeders\PermissionsSeeder::class);

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_gets_cancer_type_family_histories()
    {
        $cancerType = CancerType::factory()->create();
        $familyHistories = FamilyHistory::factory()
            ->count(2)
            ->create([
                'cancer_type_id' => $cancerType->id,
            ]);

        $response = $this->getJson(
            route('api.cancer-types.family-histories.index', $cancerType)
        );

        $response->assertOk()->assertSee($familyHistories[0]->degree);
    }

    /**
     * @test
     */
    public function it_stores_the_cancer_type_family_histories()
    {
        $cancerType = CancerType::factory()->create();
        $data = FamilyHistory::factory()
            ->make([
                'cancer_type_id' => $cancerType->id,
            ])
            ->toArray();

        $response = $this->postJson(
            route('api.cancer-types.family-histories.store', $cancerType),
            $data
        );

        $this->assertDatabaseHas('family_histories', $data);

        $response->assertStatus(201)->assertJsonFragment($data);

        $familyHistory = FamilyHistory::latest('id')->first();

        $this->assertEquals($cancerType->id, $familyHistory->cancer_type_id);
    }
}
