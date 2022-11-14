<?php 
    // including the database connection file
    include_once("../dbConnection/mysqlconfig_connection.php");
        if(isset($_POST['update'])){
            $code = $_POST['code'];
            $name = $_POST['name'];
            $id = $_POST['id'];
            if(empty($code) || empty($name)){
                if(empty($code)){
                    echo "<font color='red'>Subject Code field is empty</font><br>";
                }
                if(empty($name)){
                    echo "<font color='red'>Subject Name field is empty</font><br>";
                }
            }else{
                // since all fied is not empty proceed to insert (add) the data into database
                $result = mysqli_query($dbc,"UPDATE tblsubjects SET subject_code='$code', subject_name='$name' WHERE subject_id='$id'");
                    // redireecting to the display page. In our case, it is index.php
                header("Location: ../index.php");
            }
        }
?>