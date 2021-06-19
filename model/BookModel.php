<?php

    require_once "db/connect.php";

    // reservation classe
    class BookModel{
        
        //select  
        function select(){
            $query ="SELECT * FROM `rendez_vous`";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result;
        }

        //inset
        function insert($date, $heure, $message,$reference){
            
            $query ="INSERT INTO `rendez_vous`(`date`,`heure`,`message`,`reference_user`) VALUES ('$date','$heure','$message','$reference')";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            if($result= $con->query($query)){
                return true;
            }else{
                return false;
            }
        }

        //edit
        function edit($id){         
            $query ="SELECT * FROM `rendez_vous` WHERE id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result =  $con->query($query);

            if($result->fetch(PDO::FETCH_ASSOC)){
                return true;
            }else{
                return false;
            }
        }

        //update
        function update($id,$date, $heure, $message,$reference){
            $query = "UPDATE `rendez_vous` SET `id`= '$id',`date`='$date',`heure`='$heure',`message`='$message',`reference_user`='$reference' WHERE id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            if($result){
                return true;
            } else{
                return false;
            }

        }
        
        //delete
        function delete($id){

            $query= "DELETE FROM `rendez_vous` WHERE id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            if($con->query($query)){
                return true;
            }else{
                return false;
            }
        }

    }
