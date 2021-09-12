<?php
//where we want to change db

class UsersContr extends Users
{
    public function createUser($firstName, $lastName, $dob)
    {
        $this->setUser($firstName, $lastName, $dob);
    }
}