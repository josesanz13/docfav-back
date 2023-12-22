<?php

declare(strict_types=1);

namespace Test\Unit;

use App\class\User;
use App\Controllers\UserController;
use App\useCase\UserUseCase;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /** @test */
    public function testGetters()
    {
        $user = new User(1, 'john_doe', 'jhon@gmail.com', 'admin123', 'john', 'test', 1, '2023-12-20', 2);

        $this->assertEquals(1, $user->getId());
        $this->assertEquals('john_doe', $user->getUsername());
        $this->assertEquals('jhon@gmail.com', $user->getEmail());
        $this->assertEquals('admin123', $user->getPassword());
        $this->assertEquals('john', $user->getFirstName());
        $this->assertEquals('test', $user->getLastName());
        $this->assertEquals(1, $user->getStatus());
        $this->assertEquals('2023-12-20', $user->getCreatedAt());
        $this->assertEquals(2, $user->getRoleId());
    }

    /** @test */
    public function testSetters()
    {
        $user = new User(1, 'john_doe', 'jhon@gmail.com', 'admin123', 'john', 'test', 1, '2023-12-20', 2);

        $user->setUsername('new_john_doe');
        $user->setEmail('new_email@example.com');
        $user->setPassword('new_password');
        $user->setFirstName('New');
        $user->setLastName('User');
        $user->setStatus(0);
        $user->setCreatedAt('2023-12-22');
        $user->setRoleId(1);


        $this->assertEquals('new_john_doe', $user->getUsername());
        $this->assertEquals('new_email@example.com', $user->getEmail());
        $this->assertTrue(password_verify('new_password', $user->getPassword()));
        $this->assertEquals('New', $user->getFirstName());
        $this->assertEquals('User', $user->getLastName());
        $this->assertEquals(0, $user->getStatus());
        $this->assertEquals('2023-12-22', $user->getCreatedAt());
        $this->assertEquals(1, $user->getRoleId());
    }

    public function testUserUseCase() {
        $userController = new UserController();
        $userUseCase = new UserUseCase($userController);

        $newUser = $userUseCase->createUser(
            2,
            'jane_doe',
            'jane@example.com',
            'new_password',
            'Jane',
            'Doe',
            'active',
            '2023-01-03',
            1
        );

        $this->assertEquals(2, $newUser->getId());
        $this->assertEquals('jane_doe', $newUser->getUsername());
        $this->assertEquals('jane@example.com', $newUser->getEmail());
        $this->assertEquals('Jane', $newUser->getFirstName());
        $this->assertEquals('Doe', $newUser->getLastName());
        $this->assertEquals('active', $newUser->getStatus());
        $this->assertEquals('2023-01-03', $newUser->getCreatedAt());
        $this->assertEquals(1, $newUser->getRoleId());
    }
}
