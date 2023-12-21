<?php

namespace App\class;

use App\class\User;

class UserRepository
{
    private $users = [];

    public function addUser(User $user)
    {
        // Add a new user to the repository
        $this->users[$user->getId()] = $user;
        echo "Usuario guardado en el repositorio.<br>";
    }

    public function updateUser(User $user)
    {
        // Update a user in the repository
        if (isset($this->users[$user->getId()])) {
            $this->users[$user->getId()] = $user;
            echo "Usuario actualizado en el repositorio.<br>";
        } else {
            echo "Error: El usuario no existe en el repositorio.<br>";
        }
    }

    public function deleteUser(User $user)
    {
        // Remove a user from the repository
        if (isset($this->users[$user->getId()])) {
            unset($this->users[$user->getId()]);
            echo "Usuario eliminado del repositorio.<br>";
        } else {
            echo "Error: El usuario no existe en el repositorio.<br>";
        }
    }

    public function getUserById($userId)
    {
        // Get a user by ID from the repository
        return $this->users[$userId] ?? null;
    }

    public function getAllUsers()
    {
        // Get all repository users
        return $this->users;
    }
}
