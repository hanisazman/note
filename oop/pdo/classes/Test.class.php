<?php

class Test extends Dbh
{
    public function getUsers()
    {
        $sql = "SELECT * FROM tbl_user";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch())
        {
            echo $row['users_firstName'] . ' ' . $row['users_lastName'] . '<br>';
        }
    }

    public function getUsersStmt($firstName, $lastName)
    {
        $sql = "SELECT * FROM user_uat.tbl_user WHERE users_firstName = ? AND users_lastName = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstName, $lastName]);
        $names = $stmt->fetchAll();

        foreach($names as $name)
        {
            echo $name['users_dob'] . '<br>';
        }
    }

    public function setUsersStmt($firstName, $lastName, $dob)
    {
        $sql = "INSERT INTO user_uat.tbl_user (users_firstName, users_lastName, users_dob)
                VALUES(?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstName, $lastName, $dob]);
       
    }
}