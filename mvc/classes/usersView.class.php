<?php

class UsersView extends Users
{
    public function showUser($name)
    {
        $results = $this->getUser($name);
        echo "Full name: " . $results[0]['users_firstName'] . " " . $results[0]['users_lastName'] . "<br>";
        echo "Date of Birth: " . $results[0]['users_dob'];
    }
}