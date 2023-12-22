<?php

namespace App\Controllers;

use App\class\User;

class UserController {
    public function createUser(
        $id,
        $username,
        $email,
        $password,
        $firstName,
        $lastName,
        $status,
        $createdAt,
        $roleId
    ) {
        $user = new User(
            $id,
            $username,
            $email,
            $password,
            $firstName,
            $lastName,
            $status,
            $createdAt,
            $roleId
        );
        return $user;
    }
}