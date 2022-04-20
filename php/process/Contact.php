<?php
include_once "ConnectDB.php";
class Contact extends Dbconnect
{

    public $id;
    public $Avatar;
    public $Name;
    public $PhoneNumber;
    public $email;
    public $Address;
    public $FK_Userid;


    // show data 
    public function ShowData()
    {
        $Id = $_SESSION['Userid'];
        $sql = $this->connect()->prepare("SELECT * FROM `Contact` WHERE `FK_Userid` = ?  "); // 
        $sql->bindParam(1, $Id, PDO::PARAM_STR);
        try {
            $sql->execute();
            $datacontact = $sql->fetchAll();
        } catch (EXCEPTION $e) {
            echo "faild sql  : " . $e->getMessage();
        }
        return $datacontact;
    }
    //add new contact
    function AddContact($Avatar, $Name, $PhoneNumber, $email, $Address, $FK_Userid)
    {
        $FK_Userid = $_SESSION['Userid'];
        $id = $FK_Userid;
        $sql = $this->connect()->prepare("INSERT INTO `Contact`( `Avatar`, `Name`, PhoneNumber, `email`, 
        `Address`, FK_Userid) VALUES (?,?,?,?,?,?)"); // 
        $sql->bindParam(1, $Avatar, PDO::PARAM_STR);
        $sql->bindParam(2, $Name, PDO::PARAM_STR);
        $sql->bindParam(3, $PhoneNumber, PDO::PARAM_STR);
        $sql->bindParam(4, $email, PDO::PARAM_STR);
        $sql->bindParam(5, $Address, PDO::PARAM_STR);
        $sql->bindParam(6, $id, PDO::PARAM_STR);

        try {
            $sql->execute();
            header('location: ../contactList.php');
        } catch (EXCEPTION $e) {
            echo "Error : " . $e->getMessage();
        }
    }

    //dele contact
    function DeleteContact($id)
    {
        $sql = $this->connect()->prepare("DELETE FROM `Contact` WHERE id = ? ");
        $sql->bindParam(1, $id, PDO::PARAM_STR);
        try {
            $sql->execute();
            header('location: ../contactList.php');
        } catch (EXCEPTION $e) {
            echo "Error : " . $e->getMessage();
        }
    }
    // show data 
    public function getcotactinfo($Id)
    {

        $sql = $this->connect()->prepare("SELECT * FROM `Contact` WHERE `id` = ?  "); // 
        $sql->bindParam(1, $Id, PDO::PARAM_STR);
        try {
            $sql->execute();
            $datacontact = $sql->fetch();
        } catch (EXCEPTION $e) {
            echo "faild sql  : " . $e->getMessage();
        }
        return $datacontact;
    }

    //add new contact
    function UpdateCotact($Avatar, $Name, $PhoneNumber, $email, $Address, $id)
    {

        $sql = $this->connect()->prepare("UPDATE `Contact` SET `Avatar`=?,`Name`=?,`PhoneNumber`=?,`email`=?,`Address`=? where id = ?"); // 
        $sql->bindParam(1, $Avatar, PDO::PARAM_STR);
        $sql->bindParam(2, $Name, PDO::PARAM_STR);
        $sql->bindParam(3, $PhoneNumber, PDO::PARAM_STR);
        $sql->bindParam(4, $email, PDO::PARAM_STR);
        $sql->bindParam(5, $Address, PDO::PARAM_STR);
        $sql->bindParam(6, $id, PDO::PARAM_STR);


        try {
            $sql->execute();
            header('location: ../contactList.php');
        } catch (EXCEPTION $e) {
            echo "Error : " . $e->getMessage();
        }
    }
}
