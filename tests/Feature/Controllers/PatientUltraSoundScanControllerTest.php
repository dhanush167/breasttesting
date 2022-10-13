<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\PatientUltraSoundScan;

use App\Models\Patient;
use App\Models\UltraSoundScanFactor;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PatientUltraSoundScanControllerTest extends TestCase
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
    public function it_displays_index_view_with_patient_ultra_sound_scans()
    {
        $patientUltraSoundScans = PatientUltraSoundScan::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('patient-ultra-sound-scans.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.patient_ultra_sound_scans.index')
            ->assertViewHas('patientUltraSoundScans');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_patient_ultra_sound_scan()
    {
        $response = $this->get(route('patient-ultra-sound-scans.create'));

        $response
            ->assertOk()
            ->assertViewIs('app.patient_ultra_sound_scans.create');
    }

    /**
     * @test
     */
    public function it_stores_the_patient_ultra_sound_scan()
    {
        $data = PatientUltraSoundScan::factory()
            ->make()
            ->toArray();

        $response = $this->post(
            route('patient-ultra-sound-scans.store'),
            $data
        );

        $this->assertDatabaseHas('patient_ultra_sound_scans', $data);

        $patientUltraSoundScan = PatientUltraSoundScan::latest('id')->first();

        $response->assertRedirect(
            route('patient-ultra-sound-scans.edit', $patientUltraSoundScan)
        );
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_patient_ultra_sound_scan()
    {
        $patientUltraSoundScan = PatientUltraSoundScan::factory()->create();

        $response = $this->get(
            route('patient-ultra-sound-scans.show', $patientUltraSoundScan)
        );

        $response
            ->assertOk()
            ->assertViewIs('app.patient_ultra_sound_scans.show')
            ->assertViewHas('patientUltraSoundScan');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_patient_ultra_sound_scan()
    {
        $patientUltraSoundScan = PatientUltraSoundScan::factory()->create();

        $response = $this->get(
            route('patient-ultra-sound-scans.edit', $patientUltraSoundScan)
        );

        $response
            ->assertOk()
            ->assertViewIs('app.patient_ultra_sound_scans.edit')
            ->assertViewHas('patientUltraSoundScan');
    }

    /**
     * @test
     */
    public function it_updates_the_patient_ultra_sound_scan()
    {
        $patientUltraSoundScan = PatientUltraSoundScan::factory()->create();

        $patient = Patient::factory()->create();
        $ultraSoundScanFactor = UltraSoundScanFactor::factory()->create();

        $data = [
            'value' => $this->faker->text,
            'patient_id' => $patient->id,
            'ultra_sound_scan_factor_id' => $ultraSoundScanFactor->id,
        ];

        $response = $this->put(
            route('patient-ultra-sound-scans.update', $patientUltraSoundScan),
            $data
        );

        $data['id'] = $patientUltraSoundScan->id;

        $this->assertDatabaseHas('patient_ultra_sound_scans', $data);

        $response->assertRedirect(
            route('patient-ultra-sound-scans.edit', $patientUltraSoundScan)
        );
    }

    /**
     * @test
     */
    public function it_deletes_the_patient_ultra_sound_scan()
    {
        $patientUltraSoundScan = PatientUltraSoundScan::factory()->create();

        $response = $this->delete(
            route('patient-ultra-sound-scans.destroy', $patientUltraSoundScan)
        );

        $response->assertRedirect(route('patient-ultra-sound-scans.index'));

        $this->assertModelMissing($patientUltraSoundScan);
    }
}
