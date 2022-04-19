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
    //coonnection 
 /* try {
        $db = new PDO('mysql:host=localhost;dbname=DBcontact;charset=utf8mb4', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      } catch (PDOException $e) {
        echo "Connection failed : ". $e->getMessage();
      }
*/