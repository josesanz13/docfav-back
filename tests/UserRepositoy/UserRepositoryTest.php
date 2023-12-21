<?php

declare(strict_types=1);

namespace Test\Unit;

use App\class\User;
use App\class\UserRepository;

use PHPUnit\Framework\TestCase;


class UserRepositoryTest extends TestCase
{
    /** @test */
    public function testAddUser()
    {
        $userRepository = new UserRepository();
        $user = new User(1, 'john_doe', 'jhon@gmail.com', 'admin123', 'john', 'test', 1, '2023-12-20', 2);

        $userRepository->addUser($user);
        $storedUser = $userRepository->getUserById(1);

        $this->assertEquals($user, $storedUser);
    }

    /** @test */
    public function testUpdateUser()
    {
        $userRepository = new UserRepository();
        $user = new User(1, 'john_doe', 'jhon@gmail.com', 'admin123', 'john', 'test', 1, '2023-12-20', 1);

        $userRepository->addUser($user);

        // Changing user information
        $user->setUsername('new_john_doe');
        $user->setEmail('new_email@example.com');

        $userRepository->updateUser($user);
        $updatedUser = $userRepository->getUserById(1);

        $this->assertEquals($user, $updatedUser);
    }

    /** @test */
    public function testDeleteUser()
    {
        $userRepository = new UserRepository();
        $user = new User(1, 'john_doe', 'jhon@gmail.com', 'admin123', 'john', 'test', 0, '2023-12-20', 1);

        $userRepository->addUser($user);
        $userRepository->deleteUser($user);

        $deletedUser = $userRepository->getUserById(1);

        $this->assertNull($deletedUser);
    }
}
