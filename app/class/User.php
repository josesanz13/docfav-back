<?php

namespace App\class;

class User
{
    private $id;
    private $username;
    private $email;
    private $password;
    private $firstName;
    private $lastName;
    private $status;
    private $createdAt;
    private $roleId;

    public function __construct($id, $username, $email, $password, $firstName, $lastName, $status, $createdAt, $roleId)
    {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->status = $status;
        $this->createdAt = $createdAt;
        $this->roleId = $roleId;
    }

    // Getter methods
    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function getRoleId()
    {
        return $this->roleId;
    }

    // Setter methods
    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    public function setRoleId($roleId)
    {
        $this->roleId = $roleId;
    }
}
