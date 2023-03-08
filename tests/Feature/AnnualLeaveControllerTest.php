<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\User;
use App\AnnualLeave;
use Tests\TestCase;


class AnnualLeaveControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * Test POST /annual-leaves endpoint.
     *
     * @return void
     */
    public function test_create_annual_leave()
    {
        $user = factory(User::class)->create();
        $annualLeaveData = factory(AnnualLeave::class)->make();

        $response = $this->actingAs($user, 'api')->post('/api/annual-leaves', $annualLeaveData->toArray());

        $response->assertStatus(201);
        $response->assertJsonStructure(['data' => ['id', 'user_id', 'start_date', 'end_date', 'status', 'reason']]);
        $this->assertDatabaseHas('annual_leaves', $annualLeaveData->toArray());
    }

    /**
     * Test GET /annual-leaves endpoint.
     *
     * @return void
     */
    public function test_get_annual_leaves()
    {
        $user = factory(User::class)->create();
        $annualLeaves = factory(AnnualLeave::class, 5)->create(['user_id' => $user->id]);

        $response = $this->actingAs($user, 'api')->get('/api/annual-leaves');

        $response->assertStatus(200);
        $response->assertJsonCount($annualLeaves->count(), 'data');
    }

    /**
     * Test GET /annual-leaves/{id} endpoint.
     *
     * @return void
     */
    public function test_get_annual_leave()
    {
        $user = factory(User::class)->create();
        $annualLeave = factory(AnnualLeave::class)->create(['user_id' => $user->id]);

        $response = $this->actingAs($user, 'api')->get('/api/annual-leaves/'.$annualLeave->id);

        $response->assertStatus(200);
        $response->assertJsonStructure(['data' => ['id', 'user_id', 'start_date', 'end_date', 'status', 'reason']]);
    }
}
