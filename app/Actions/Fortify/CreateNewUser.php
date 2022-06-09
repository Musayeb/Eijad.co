<?php

namespace App\Actions\Fortify;

use App\Models\Entreprenuer;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
            Validator::make($input, [
                'full_name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => $this->passwordRules('confirm_password'),
                // 'terms' => 'required',
            ])->validate();
         

            return User::create([
                'name' => $input['full_name'],
                'email' => $input['email'],
                'role' =>"User",
                'password' => Hash::make($input['password']),
            ]);

         
 
    }
}
