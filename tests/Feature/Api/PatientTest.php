<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Patient;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PatientTest extends TestCase
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
    public function it_gets_patients_list()
    {
        $patients = Patient::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.patients.index'));

        $response->assertOk()->assertSee($patients[0]->reg_no);
    }

    /**
     * @test
     */
    public function it_stores_the_patient()
    {
        $data = Patient::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.patients.store'), $data);

        $this->assertDatabaseHas('patients', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
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

        $response = $this->putJson(
            route('api.patients.update', $patient),
            $data
        );

        $data['id'] = $patient->id;

        $this->assertDatabaseHas('patients', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_patient()
    {
        $patient = Patient::factory()->create();

        $response = $this->deleteJson(route('api.patients.destroy', $patient));

        $this->assertModelMissing($patient);

        $response->assertNoContent();
    }
}
