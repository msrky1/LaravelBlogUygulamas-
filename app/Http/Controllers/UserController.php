<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show()
    {
        $user = User::all();
        return response()->json($user);
    }

    public function update(Request $request , $id)
    {
        $user = user::find($id);
        $user->update($request->all());
   
    }
}
