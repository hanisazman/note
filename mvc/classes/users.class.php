<?php

class Users extends Dbh
{
    protected function getUser($name)
    {
        $sql = "SELECT * FROM user_uat.tbl_user WHERE users_firstName = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);

        $results = $stmt->fetchAll();

        return $results;
    }

    protected function setUser($firstName, $lastName, $dob)
    {
        $sql = "INSERT INTO user_uat.tbl_user (users_firstName, users_lastName, users_dob)
                VALUES(?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstName, $lastName, $dob]);
    }
}