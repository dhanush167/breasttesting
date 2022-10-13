<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\FamilyHistory;

use App\Models\Patient;
use App\Models\CancerType;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FamilyHistoryControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $this->actingAs(
            User::factory()->create(['email' => 'admin@admin.com'])
        );

        $this->seed(\Database\Seeders\PermissionsSeeder::class);

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_displays_index_view_with_family_histories()
    {
        $familyHistories = FamilyHistory::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('family-histories.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.family_histories.index')
            ->assertViewHas('familyHistories');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_family_history()
    {
        $response = $this->get(route('family-histories.create'));

        $response->assertOk()->assertViewIs('app.family_histories.create');
    }

    /**
     * @test
     */
    public function it_stores_the_family_history()
    {
        $data = FamilyHistory::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('family-histories.store'), $data);

        $this->assertDatabaseHas('family_histories', $data);

        $familyHistory = FamilyHistory::latest('id')->first();

        $response->assertRedirect(
            route('family-histories.edit', $familyHistory)
        );
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_family_history()
    {
        $familyHistory = FamilyHistory::factory()->create();

        $response = $this->get(route('family-histories.show', $familyHistory));

        $response
            ->assertOk()
            ->assertViewIs('app.family_histories.show')
            ->assertViewHas('familyHistory');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_family_history()
    {
        $familyHistory = FamilyHistory::factory()->create();

        $response = $this->get(route('family-histories.edit', $familyHistory));

        $response
            ->assertOk()
            ->assertViewIs('app.family_histories.edit')
            ->assertViewHas('familyHistory');
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

        $response = $this->put(
            route('family-histories.update', $familyHistory),
            $data
        );

        $data['id'] = $familyHistory->id;

        $this->assertDatabaseHas('family_histories', $data);

        $response->assertRedirect(
            route('family-histories.edit', $familyHistory)
        );
    }

    /**
     * @test
     */
    public function it_deletes_the_family_history()
    {
        $familyHistory = FamilyHistory::factory()->create();

        $response = $this->delete(
            route('family-histories.destroy', $familyHistory)
        );

        $response->assertRedirect(route('family-histories.index'));

        $this->assertModelMissing($familyHistory);
    }
}
