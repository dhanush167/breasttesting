<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\UltraSoundScanFactor;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UltraSoundScanFactorTest extends TestCase
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
    public function it_gets_ultra_sound_scan_factors_list()
    {
        $ultraSoundScanFactors = UltraSoundScanFactor::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.ultra-sound-scan-factors.index'));

        $response->assertOk()->assertSee($ultraSoundScanFactors[0]->name);
    }

    /**
     * @test
     */
    public function it_stores_the_ultra_sound_scan_factor()
    {
        $data = UltraSoundScanFactor::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(
            route('api.ultra-sound-scan-factors.store'),
            $data
        );

        $this->assertDatabaseHas('ultra_sound_scan_factors', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
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

        $response = $this->putJson(
            route('api.ultra-sound-scan-factors.update', $ultraSoundScanFactor),
            $data
        );

        $data['id'] = $ultraSoundScanFactor->id;

        $this->assertDatabaseHas('ultra_sound_scan_factors', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_ultra_sound_scan_factor()
    {
        $ultraSoundScanFactor = UltraSoundScanFactor::factory()->create();

        $response = $this->deleteJson(
            route('api.ultra-sound-scan-factors.destroy', $ultraSoundScanFactor)
        );

        $this->assertModelMissing($ultraSoundScanFactor);

        $response->assertNoContent();
    }
}
