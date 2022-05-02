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
    /**
     *the's methode use id use for select data from databs
     
     */
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
    /**
     *the's methode acount information from form and use this infomation 
     * for create a new contact in the datase using FK_Userid for add this contact to 
     * user login in this tame 
     * @param string $Avatar
     * @param string $Name
     * @param string $PhoneNumber
     * @param string $email
     * @param string $Address
     * @param string $FK_Userid
     * @return 
     */
    function AddContact($Avatar, $Name, $PhoneNumber, $email, $Address, $FK_Userid)
    {
        $FK_Userid = $_SESSION['Userid'];
        $id = $FK_Userid;
        $sql = $this->connect()->prepare("INSERT INTO `Contact`( `Avatar`, `Name`, PhoneNumber, `email`, 
        `Address`, FK_Userid) VALUES (?,?,?,?,?,?)"); // 
        if (empty($Avatar) || empty($Name) || empty($PhoneNumber) || empty($email)  || empty($Address) || empty($FK_Userid)) {
            echo "<script>alert('fill all input')</script>";
            header('location: ../contactList.php');
        } else {
            $sql->bindParam(1, $Avatar, PDO::PARAM_STR);
            $sql->bindParam(2, $Name, PDO::PARAM_STR);
            $sql->bindParam(3, $PhoneNumber, PDO::PARAM_STR);
            $sql->bindParam(4, $email, PDO::PARAM_STR);
            $sql->bindParam(5, $Address, PDO::PARAM_STR);
            $sql->bindParam(6, $id, PDO::PARAM_INT);

            try {
                $sql->execute();
                header('location: ../contactList.php');
            } catch (EXCEPTION $e) {
                echo "Error : " . $e->getMessage();
            }
        }
    }

    //delete contact
    /**
     * 
     * the's methode take  id f from query string  and use it for   
     * Delete contact   from  database
     * @param int $id
     * @return 
     */
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
    /**
     *the's methode use id use for select data from databs
     
     */
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

    //update  contact
    /**
     *the's methode take  acount information from form and use the is infomation 
     * for update   contact in the datase using id 
     * @param string $Avatar
     * @param string $Name
     * @param string $PhoneNumber
     * @param string $email
     * @param string $Address
     * @param int $id
     * @return 
     */
    function UpdateCotact($Avatar, $Name, $PhoneNumber, $email, $Address, $id)
    {

        $sql = $this->connect()->prepare("UPDATE `Contact` SET `Avatar`=?,`Name`=?,`PhoneNumber`=?,`email`=?,`Address`=? where id = ?"); // 
        if (empty($Avatar) || empty($Name) || empty($PhoneNumber) || empty($email)  || empty($Address) || empty($id)) {
            echo "<script>alert('fill all input')</script>";
        } else {
            $sql->bindParam(1, $Avatar, PDO::PARAM_STR);
            $sql->bindParam(2, $Name, PDO::PARAM_STR);
            $sql->bindParam(3, $PhoneNumber, PDO::PARAM_STR);
            $sql->bindParam(4, $email, PDO::PARAM_STR);
            $sql->bindParam(5, $Address, PDO::PARAM_STR);
            $sql->bindParam(6, $id, PDO::PARAM_INT);


            try {
                $sql->execute();
                header('location: ../contactList.php');
            } catch (EXCEPTION $e) {
                echo "Error : " . $e->getMessage();
            }
        }
    }
}
