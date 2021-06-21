<?php

    require_once "db/connect.php";

    //create a new user
    class LoginModel{

        //insert
        function insert($Nreference,$nom,$prenom,$email,$tele,$age,$message)
        { 
            $query = "INSERT INTO `user`(`reference`, `nom`, `prenom`, `email`, `tele`, `age`, `message`) VALUES ('$Nreference','$nom','$prenom','$email','$tele','$age','$message')";        
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            if($result){
                return true;    
            }else{
                return false;
            }
        }

        function select($ref){
            $query = "SELECT * FROM  `user` where reference = '$ref' ";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetch(PDO::FETCH_ASSOC);
        }
    }