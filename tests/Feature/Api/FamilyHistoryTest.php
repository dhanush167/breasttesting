<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\FamilyHistory;

use App\Models\Patient;
use App\Models\CancerType;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FamilyHistoryTest extends TestCase
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
    public function it_gets_family_histories_list()
    {
        $familyHistories = FamilyHistory::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.family-histories.index'));

        $response->assertOk()->assertSee($familyHistories[0]->degree);
    }

    /**
     * @test
     */
    public function it_stores_the_family_history()
    {
        $data = FamilyHistory::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.family-histories.store'), $data);

        $this->assertDatabaseHas('family_histories', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_family_history()
    {
        $familyHistory = FamilyHistory::factory()->create();

        $cancerType = CancerType::factory()->create();
        $patient = Patient::factory()->create();

        $data = [
            'degree' => $this->faker->text(255),
            'number_of_relative' => $this->faker->randomNumber(0),
            'cancer_type_id' => $cancerType->id,
            'patient_id' => $patient->id,
        ];

        $response = $this->putJson(
            route('api.family-histories.update', $familyHistory),
            $data
        );

        $data['id'] = $familyHistory->id;

        $this->assertDatabaseHas('family_histories', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_family_history()
    {
        $familyHistory = FamilyHistory::factory()->create();

        $response = $this->deleteJson(
            route('api.family-histories.destroy', $familyHistory)
        );

        $this->assertModelMissing($familyHistory);

        $response->assertNoContent();
    }
}
