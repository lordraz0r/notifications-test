<?php
use App\Notification;

class NotificationsTest extends TestCase
{
    public function testNotifications()
    {
        $this->get("api/v1/notifications", []);
        $this->seeStatusCode(200);
        $this->seeJsonStructure([
            [
                'user_id',
                'message',
                'created_at',
                'updated_at'
            ]
        ]);
    }
}
