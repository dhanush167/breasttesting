<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\Patient;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PatientControllerTest extends TestCase
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
    public function it_displays_index_view_with_patients()
    {
        $patients = Patient::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('patients.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.patients.index')
            ->assertViewHas('patients');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_patient()
    {
        $response = $this->get(route('patients.create'));

        $response->assertOk()->assertViewIs('app.patients.create');
    }

    /**
     * @test
     */
    public function it_stores_the_patient()
    {
        $data = Patient::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('patients.store'), $data);

        $this->assertDatabaseHas('patients', $data);

        $patient = Patient::latest('id')->first();

        $response->assertRedirect(route('patients.edit', $patient));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_patient()
    {
        $patient = Patient::factory()->create();

        $response = $this->get(route('patients.show', $patient));

        $response
            ->assertOk()
            ->assertViewIs('app.patients.show')
            ->assertViewHas('patient');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_patient()
    {
        $patient = Patient::factory()->create();

        $response = $this->get(route('patients.edit', $patient));

        $response
            ->assertOk()
            ->assertViewIs('app.patients.edit')
            ->assertViewHas('patient');
    }

    /**
     * @test
     */
    public function it_updates_the_patient()
    {
        $patient = Patient::factory()->create();

        $user = User::factory()->create();

        $data = [
            'reg_no' => $this->faker->text(255),
            'reg_date' => $this->faker->date,
            'age' => $this->faker->randomNumber(0),
            'gender' => \Arr::random(['male', 'female', 'other']),
            'marital_status' => $this->faker->text(255),
            'children' => $this->faker->boolean,
            'address' => $this->faker->text,
            'reason_for_visit' => $this->faker->text,
            'pmhx' => $this->faker->text,
            'pshx' => $this->faker->text,
            'pre_pap_date' => $this->faker->date,
            'pre_pap_result' => $this->faker->text,
            'pre_uss_date' => $this->faker->date,
            'pre_uss_result' => $this->faker->text,
            'pre_hpv_date' => $this->faker->date,
            'pre_hpv_result' => $this->faker->text,
            'user_id' => $user->id,
        ];

        $response = $this->put(route('patients.update', $patient), $data);

        $data['id'] = $patient->id;

        $this->assertDatabaseHas('patients', $data);

        $response->assertRedirect(route('patients.edit', $patient));
    }

    /**
     * @test
     */
    public function it_deletes_the_patient()
    {
        $patient = Patient::factory()->create();

        $response = $this->delete(route('patients.destroy', $patient));

        $response->assertRedirect(route('patients.index'));

        $this->assertModelMissing($patient);
    }
}
