<?php

namespace App\useCase;

use App\class\User;
use App\Controllers\UserRepositoryController;

class UserRepositoryUseCase {
    private $userRepositoryController;

    public function __construct(UserRepositoryController $userRepositoryController) {
        $this->userRepositoryController = $userRepositoryController;
    }

    public function saveUser($id, $username, $email, $password, $firstName, $lastName, $status, $createdAt, $roleId ) {
        $user = new User($id, $username, $email, $password, $firstName, $lastName, $status, $createdAt, $roleId );
        $this->userRepositoryController->saveUser($user);
        return $user;
    }

    public function updateUser(User $user) {
        $this->userRepositoryController->updateUser($user);
        return $user;
    }

    public function deleteUser($userId) {
        $this->userRepositoryController->deleteUser($userId);
    }

    public function getUser($userId) {
        return $this->userRepositoryController->getUser($userId);
    }
}

?>
