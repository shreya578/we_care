<?php
        $server = "localhost";
        $username = "root";
        $password = "";

        $con = mysqli_connect($server, $username, $password);

        // if(!$con){
        //     die("connection to the database failed due to ".mysqli_connect_error());
        // }

        // else{
        //     echo "Sucess to db";
        // }

        $name = $_POST['name'];
        $email = $_POST['email'];
        $sub = $_POST['subject'];
        $msg = $_POST['msg'];

        $sql = "INSERT INTO `blood`.`contact` (`name`, `email`, `subject`, `message`, `datetime`) VALUES ('$name', '$email', '$sub', '$msg', current_timestamp());";

        // echo $sql;

        if($con->query($sql) == true){
            echo "Sucessfully inserted";
        }

        else{
            echo "ERROR: $sql <br> $con->error";
        }

        $con->close();
?>