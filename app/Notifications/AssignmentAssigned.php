<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\DatabaseMessage;

class AssignmentAssigned extends Notification // Hapus implements ShouldQueue
{
    use Queueable;

    public $assignment;

    public function __construct($assignment)
    {
        $this->assignment = $assignment;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        return new DatabaseMessage([
            'title' => 'Tugas Baru Ditugaskan',
            'body' => 'Anda ditugaskan untuk mereview tugas "' . $this->assignment->title . '".',
            'assignment_id' => $this->assignment->id,
        ]);
    }
}