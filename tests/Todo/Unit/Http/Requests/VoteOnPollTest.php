<?php

namespace Tests\Todo\Unit\Http\Requests;

use Tests\TestCase;

/**
 * @see \App\Http\Requests\VoteOnPoll
 */
class VoteOnPollTest extends TestCase
{
    /** @var \App\Http\Requests\VoteOnPoll */
    private $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = new \App\Http\Requests\VoteOnPoll();
    }

    /**
     * @test
     */
    public function authorize()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $actual = $this->subject->authorize();

        $this->assertTrue($actual);
    }

    /**
     * @test
     */
    public function rules()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $actual = $this->subject->rules();

        $this->assertEquals([], $actual);
    }

    /**
     * @test
     */
    public function messages()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $actual = $this->subject->messages();

        $this->assertEquals([], $actual);
    }

    // test cases...
}
