<?php

namespace App\Models;



class User
{

    private string $name;
    private string $document;
    private string $email;
    private string $password;
    private string $user_type;
    private float $balance;
    private ?int $id;

    public function __construct(array $user)
    {
        $this->name = $user["name"];
        $this->document = $user["document"];
        $this->email = $user["email"];
        $this->password = $user["password"];
        $this->user_type = $user["user_type"];
        $this->balance = $user["balance"];
        $this->id = array_key_exists('id', $user) ? $user["id"] : null;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDocument(): string
    {
        return $this->document;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return int
     */
    public function getUserType(): string
    {
        return $this->user_type;
    }

    /**
     * @return float
     */
    public function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    public function updateBalance(float $balance)
    {
        $this->balance = $balance;
    }
}
