<?php

declare(strict_types=1);

namespace App\Entity;

use Illuminate\Constracts\Auth\Authenticatable;

class User implements Authenticatable
{
    
    private $id;
    
    private $name;
    
    private $email;
    
    private $password;
    
    
    public function __construct(
        
        int $id,
        
        string $api_token,
        
        string $name,
        
        string $email,
        
        string $password = ''
        
    ){
        $this->id = $id;
        
        $this->apiToken = $apitoken;
        
        $this->name = $name;
        
        $this->email = $email;
        
        $this->password = $password;
        
    }
    
    public function getName(): string
    {
        
        return $this->name;
        
    }
    
    public function getEmail(): string
    {
        
        return $this->email;
        
    }
    
    
    public function getAuthIdentifierName(): string
    {
        
        return $this->user_id;
        
    }
    
    public function getAuthIdentifier(): int
    {
        
        return $this->id;
        
        
    }
    
    public function getAuthPassword()
    {
        
        return $this->password;
        
    }
    
    public function getRemenberToken(): string
    {
        
        return '';
        
    }
    
    public function setRememberToken($value)
    {
        
        
        
    }
    
    public function getRememberTokenName(): string
    {
        
        return '';
        
    }
    
    
    public function getName(): string
    {
        
        return $this->name;
        
    }
    
    
    
    
    
    
    
    
    
    
}







?>