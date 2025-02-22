<?php
namespace App\Services;

class UserService {
    protected $users;

    public function __construct($users){
        $this->users  = $users;
    }

    public function ListUsers(){
        return $this->users;
    }
}