<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function list(Request $request)
        {
            $user = User::all();
            return response()->json($user);
        }

   public function add(Request $request)
        {    
            $newUser = new User();
            $newUser ->firstName = $request->firstName;
            $newUser ->lastName = $request->lastName;
            $newUser ->is_admin = $request->is_admin;
            $newUser ->email = $request->email;
            $newUser ->password = $request->password;
            $newUser ->save();

            return response()->json('succes');

        }

        public function edit(User $user, Request $request)
        {    
           
           return response()->json($user);

        }
        public function update(User $user, Request $request)
        {    
           
            $user ->firstName = $request->firstname;
            $user ->lastName = $request->lastName;
            $user ->is_admin = $request->is_admin;
            $user ->email = $request->email;
            $user ->save();

            return response()->json('succes');

        }
        public function delete(User $user, Request $request)
        {    
           $user ->delete();
           return response()->json('sucess');

        }
}
