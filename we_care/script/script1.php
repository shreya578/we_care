<?php
        $server = "localhost";
        $username = "root";
        $password = "";

        $con = mysqli_connect($server, $username, $password);

        if(!$con){
            die("connection to the database failed due to ".mysqli_connect_error());
        }

        // else{
        //     echo "Sucess to db";
        // }

        $fname = $_POST['donar_first_name'];
        $lname = $_POST['donar_last_name'];
        $age = $_POST['DOB'];
        $blood = $_POST['group'];
        $ldate = $_POST['Last_date'];
        $phno = $_POST['ph_no'];
        $add = $_POST['st_add'];
        $city = $_POST['city'];
        $state = $_POST['state'];


        $sql = "INSERT INTO `blood`.`donation` (`first_name`, `last_name`, `dob`, `bd_group`, `last_donate`, `ph_number`, `st_add`, `city`, `state`, `dt`) VALUES ('$fname', '$lname', '$age', '$blood', '$ldate', '$phno', '$add', '$city', '$state', current_timestamp());";

        // echo $sql;

        if($con->query($sql) == true){
            echo "Sucessfully inserted";
        }

        else{
            echo "ERROR: $sql <br> $con->error";
        }

        $con->close();
?>