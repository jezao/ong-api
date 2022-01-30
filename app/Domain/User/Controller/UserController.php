<?php

namespace App\Domain\User\Controller;

use App\Domain\User\Models\User;
use App\Domain\User\Requests\UserAuth;
use App\Domain\User\Requests\UserCreate;
use App\Domain\User\Resources\UserResource;
use Illuminate\Support\Facades\Auth;

class UserController
{

    public function me(): UserResource
    {
        return new UserResource(Auth::user());
    }

    public function create(UserCreate $userCreate): UserResource
    {
        $user = new User;
        $user->name = $userCreate->get('name');
        $user->email = $userCreate->get('email');
        $user->password = bcrypt($userCreate->get('password'));
        $user->save();

        if (
            $userCreate->has('role')
            && in_array($userCreate->get('role'), config('permission.allowed_roles'))
        ) {
            $user->assignRole($userCreate->get('role'));
        }

        return new UserResource($user);
    }
}

