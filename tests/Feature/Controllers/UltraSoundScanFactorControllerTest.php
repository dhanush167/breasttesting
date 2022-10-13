<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\UltraSoundScanFactor;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UltraSoundScanFactorControllerTest extends TestCase
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
    public function it_displays_index_view_with_ultra_sound_scan_factors()
    {
        $ultraSoundScanFactors = UltraSoundScanFactor::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('ultra-sound-scan-factors.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.ultra_sound_scan_factors.index')
            ->assertViewHas('ultraSoundScanFactors');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_ultra_sound_scan_factor()
    {
        $response = $this->get(route('ultra-sound-scan-factors.create'));

        $response
            ->assertOk()
            ->assertViewIs('app.ultra_sound_scan_factors.create');
    }

    /**
     * @test
     */
    public function it_stores_the_ultra_sound_scan_factor()
    {
        $data = UltraSoundScanFactor::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('ultra-sound-scan-factors.store'), $data);

        $this->assertDatabaseHas('ultra_sound_scan_factors', $data);

        $ultraSoundScanFactor = UltraSoundScanFactor::latest('id')->first();

        $response->assertRedirect(
            route('ultra-sound-scan-factors.edit', $ultraSoundScanFactor)
        );
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_ultra_sound_scan_factor()
    {
        $ultraSoundScanFactor = UltraSoundScanFactor::factory()->create();

        $response = $this->get(
            route('ultra-sound-scan-factors.show', $ultraSoundScanFactor)
        );

        $response
            ->assertOk()
            ->assertViewIs('app.ultra_sound_scan_factors.show')
            ->assertViewHas('ultraSoundScanFactor');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_ultra_sound_scan_factor()
    {
        $ultraSoundScanFactor = UltraSoundScanFactor::factory()->create();

        $response = $this->get(
            route('ultra-sound-scan-factors.edit', $ultraSoundScanFactor)
        );

        $response
            ->assertOk()
            ->assertViewIs('app.ultra_sound_scan_factors.edit')
            ->assertViewHas('ultraSoundScanFactor');
    }

    /**
     * @test
     */
    public function it_updates_the_ultra_sound_scan_factor()
    {
        $ultraSoundScanFactor = UltraSoundScanFactor::factory()->create();

        $data = [
            'name' => $this->faker->text(255),
        ];

        $response = $this->put(
            route('ultra-sound-scan-factors.update', $ultraSoundScanFactor),
            $data
        );

        $data['id'] = $ultraSoundScanFactor->id;

        $this->assertDatabaseHas('ultra_sound_scan_factors', $data);

        $response->assertRedirect(
            route('ultra-sound-scan-factors.edit', $ultraSoundScanFactor)
        );
    }

    /**
     * @test
     */
    public function it_deletes_the_ultra_sound_scan_factor()
    {
        $ultraSoundScanFactor = UltraSoundScanFactor::factory()->create();

        $response = $this->delete(
            route('ultra-sound-scan-factors.destroy', $ultraSoundScanFactor)
        );

        $response->assertRedirect(route('ultra-sound-scan-factors.index'));

        $this->assertModelMissing($ultraSoundScanFactor);
    }
}
