<?php

namespace App\Notifications;

use App\Models\Announcement;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewAnnouncement extends Notification
{
    use Queueable;

    public function __construct(public Announcement $announcement)
    {
    }

    public function via(object $notifiable): array
    {
        return ['database', 'mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Pengumuman baru: '.$this->announcement->title)
            ->line($this->announcement->body);
    }

    public function toArray(object $notifiable): array
    {
        return [
            'announcement_id' => $this->announcement->id,
            'course_id' => $this->announcement->course_id,
            'title' => $this->announcement->title,
        ];
    }
}

