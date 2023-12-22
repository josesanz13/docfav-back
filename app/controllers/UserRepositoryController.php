<?php

namespace App\Controllers;

use App\class\User;
use App\class\UserRepository;

class UserRepositoryController {
    private $userRepository;

    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function saveUser(User $user) {
        $this->userRepository->addUser($user);
    }

    public function updateUser(User $user) {
        return $this->userRepository->updateUser($user);
    }

    public function deleteUser($userId) {
        return $this->userRepository->deleteUser($userId);
    }

    public function getUser($userId) {
        return $this->userRepository->getUser($userId);
    }

    public function getAllUsers() {
        return $this->userRepository->getAllUsers();
    }
}
