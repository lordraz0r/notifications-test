<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\PaginatedResourceResponse;


class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();

        return response()->json($users);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $user = new User;

        $user->name = $request->name;

        $user->save();

        return response()->json($user);
    }

    public function show($id)
    {
        $user = User::find($id);

        return response()->json($user);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $user = User::find($id);

        $user->name = $request->name;

        $user->save();

        return response()->json($user);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if(!$user){
            return response()->json('User not found');
        }
        $user->delete();

        return response()->json('User removed successfully');
    }


}
