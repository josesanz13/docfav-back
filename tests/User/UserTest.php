<?php

declare(strict_types=1);

namespace Test\Unit;

use App\class\User;
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
}
