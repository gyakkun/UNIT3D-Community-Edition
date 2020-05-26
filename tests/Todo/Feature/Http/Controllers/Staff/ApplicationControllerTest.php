<?php

namespace Tests\Todo\Feature\Http\Controllers\Staff;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Staff\ApplicationController
 */
class ApplicationControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function approve_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $application = factory(\App\Models\Application::class)->create();
        $user = factory(\App\Models\User::class)->create();

        $response = $this->actingAs($user)->post(route('staff.applications.approve', ['id' => $application->id]), [
            // TODO: send request data
        ]);

        $response->assertRedirect(withErrors($v->errors()));

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function index_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = factory(\App\Models\User::class)->create();

        $response = $this->actingAs($user)->get(route('staff.applications.index'));

        $response->assertOk();
        $response->assertViewIs('Staff.application.index');
        $response->assertViewHas('applications');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function reject_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $application = factory(\App\Models\Application::class)->create();
        $user = factory(\App\Models\User::class)->create();

        $response = $this->actingAs($user)->post(route('staff.applications.reject', ['id' => $application->id]), [
            // TODO: send request data
        ]);

        $response->assertRedirect(withSuccess('Application Rejected'));

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function show_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $application = factory(\App\Models\Application::class)->create();
        $user = factory(\App\Models\User::class)->create();

        $response = $this->actingAs($user)->get(route('staff.applications.show', ['id' => $application->id]));

        $response->assertOk();
        $response->assertViewIs('Staff.application.show');
        $response->assertViewHas('application');

        // TODO: perform additional assertions
    }

    // test cases...
}
