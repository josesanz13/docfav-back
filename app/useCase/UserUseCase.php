<?php

namespace App\useCase;

use App\Controllers\UserController;

class UserUseCase {
    private $userController;

    public function __construct(UserController $userController) {
        $this->userController = $userController;
    }

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
        return $this->userController->createUser(
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
    }
}

