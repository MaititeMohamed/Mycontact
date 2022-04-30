<?php


      class Dbconnect{

        protected function connect(){
           try {
               $username="root";
               $password="";
               $db=new PDO('mysql:host=localhost;dbname=DBcontact',$username,$password);
               return $db; //return db conection
                } catch (PDOException $e) {
                    print "Connection failed  error:".$e->getMessage()."<br>";
                    die();
                }
        }
    
    }
 