<?php

namespace App\class;

use App\class\User;

class UserRepository {
    private $users = [];

    public function addUser(User $user) {
        $this->users[$user->getId()] = $user;
    }

    public function updateUser(User $user) {
        if (isset($this->users[$user->getId()])) {
            $this->users[$user->getId()] = $user;
            return true;
        }
        return false;
    }

    public function deleteUser($userId) {
        if (isset($this->users[$userId])) {
            unset($this->users[$userId]);
            return true;
        }
        return false;
    }

    public function getUser($userId) {
        return $this->users[$userId] ?? null;
    }

    public function getAllUsers() {
        return $this->users;
    }
}
