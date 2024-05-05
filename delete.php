<?php
    include 'connect.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql2="delete from `contact` where id=$id";
        $result=mysqli_query($con,$sql2);
        if($result){
           header('location:admin.php');
        }else{
            die(mysqli_error($con));
        }
        $sql="delete from `signup` where id=$id";
        $result=mysqli_query($con,$sql);
        if($result){
           header('location:admin.php');
        }else{
            die(mysqli_error($con));
        }
    }
?> 