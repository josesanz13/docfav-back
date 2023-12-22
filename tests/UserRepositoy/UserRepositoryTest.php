<?php

declare(strict_types=1);

use App\class\UserRepository;
use App\Controllers\UserRepositoryController;
use App\useCase\UserRepositoryUseCase;
use PHPUnit\Framework\TestCase;

class UserRepositoryTest extends TestCase {

    /** @test */
    public function testSaveUser() {
        // Config
        $userRepository = new UserRepository();
        $userController = new UserRepositoryController($userRepository);
        $userUseCase = new UserRepositoryUseCase($userController);

        // Use Case Operation
        $savedUser = $userUseCase->saveUser(1, 'john_doe', 'jhon@gmail.com', 'admin123', 'john', 'test', 1, '2023-12-20', 2);

        $this->assertEquals($savedUser, $userRepository->getUser(1));
    }

    /** @test */
    public function testUpdateUser() {
        // Config
        $userRepository = new UserRepository();
        $userController = new UserRepositoryController($userRepository);
        $userUseCase = new UserRepositoryUseCase($userController);

        // Save user
        $savedUser = $userUseCase->saveUser(1, 'john_doe', 'jhon@gmail.com', 'admin123', 'john', 'test', 1, '2023-12-20', 2);

        // Update user
        $savedUser->setUsername('new_john_doe');
        $userUseCase->updateUser($savedUser,1);

        $this->assertEquals('new_john_doe', $userRepository->getUser(1)->getUsername());
    }

    /** @test */
    public function testDeleteUser() {
        // Config
        $userRepository = new UserRepository();
        $userController = new UserRepositoryController($userRepository);
        $userUseCase = new UserRepositoryUseCase($userController);

        // Save User
        $savedUser = $userUseCase->saveUser(1, 'john_doe', 'jhon@gmail.com', 'admin123', 'john', 'test', 1, '2023-12-20', 2);

        // Delete User
        $userUseCase->deleteUser(1);

        $this->assertNull($userRepository->getUser(1));
    }

    /** @test */
    public function testGetUser() {
        // Config
        $userRepository = new UserRepository();
        $userController = new UserRepositoryController($userRepository);
        $userUseCase = new UserRepositoryUseCase($userController);

        // Save User
        $savedUser = $userUseCase->saveUser(1, 'john_doe', 'jhon@gmail.com', 'admin123', 'john', 'test', 1, '2023-12-20', 2);

        // Get User
        $retrievedUser = $userUseCase->getUser(1);

        $this->assertEquals($savedUser, $retrievedUser);
    }
}
