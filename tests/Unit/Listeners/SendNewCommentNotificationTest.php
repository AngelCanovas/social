<?php

namespace Tests\Unit\Listeners;

use App\Events\CommentCreated;
use App\Models\Comment;
use App\Models\Status;
use App\Notifications\NewCommentNotification;
use Notification;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SendNewCommentNotificationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_notification_is_sent_when_a_status_receives_a_new_comment()
    {
        Notification::fake();

        $status = factory(Status::class)->create();
        $comment = factory(Comment::class)->create(['status_id' => $status->id]);

        CommentCreated::dispatch($comment);

        Notification::assertSentTo(
            $status->user,
            NewCommentNotification::class,
            function ($notification, $channels) use ($comment) {
                $this->assertContains('database', $channels);
                $this->assertTrue($notification->comment->is($comment));
                return true;
            }
        );

    }
}
