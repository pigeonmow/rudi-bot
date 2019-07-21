<?php

namespace Tests\Unit;

use App\Message;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MessageTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */
    // public function it_broadcasts_an_event()
    // {
    //
    // }

    /** @test */
    public function it_can_create_a_message()
    {
        $data = [
            'message' => $this->faker->firstName
        ];

        $message = new Message($data);
        $message->save();

        $this->assertInstanceOf(Message::class, $message);
        $this->assertEquals($data['message'], $message->message);
    }
}
