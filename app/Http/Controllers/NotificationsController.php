<?php

namespace App\Http\Controllers;

use App\Notification;
use Illuminate\Http\Request;


class NotificationsController extends Controller
{
    public function index()
    {
        $notifications = Notification::all();

        return response()->json($notifications);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required|exists:users,id',
            'message' => 'required'
        ]);

        $notification = new Notification;

        $notification->user_id = $request->user_id;
        $notification->message = $request->message;

        $notification->save();

        return response()->json($notification);
    }

    public function show($id)
    {
        $notification = Notification::find($id);
        $notification->user;

        return response()->json($notification);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'user_id' => 'required|exists:users,id',
            'message' => 'required'
        ]);

        $notification= Notification::find($id);

        $notification->user_id = $request->user_id;
        $notification->message = $request->message;

        $notification->save();

        $notification->user;

        return response()->json($notification);
    }

    public function destroy($id)
    {
        $notification = Notification::find($id);
        if(!$notification){
            return response()->json('Notification not found');
        }
        $notification->delete();

        return response()->json('Notification removed successfully');
    }


}
