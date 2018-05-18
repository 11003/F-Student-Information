<?php

include_once 'db.php';

//通过action值进行对应的操作
switch ($_GET['action']){

    case "del":
            $id = $_GET['id'];
            $sql= "delete from student WHERE id='$id'";
            $conn->query($sql);
            header('location:index.php');
    break;

    case "modify":
            $id=$_GET['id'];
            $name = $_POST['name'];
            $sex  =$_POST['sex'];
            $age  =$_POST['age'];
            $class = $_POST['class'];
            $content = $_POST['content'];
            $sql = "update student set `name`='$name',`sex`='$sex',`age`='$age',`class`='$class',`content`='$content' WHERE `id`='$id'";
            $res = $conn->query($sql);
            if($res){
                header('location:index.php');
            }else{
                echo "<script>alert('修改失败');window.location.back();</script>";
            }

    break;

    case "add":
        if(isset($_POST['button'])){
            $name=$_POST['name'];
            $sex=$_POST['sex'];
            $age=$_POST['age'];
            $class=$_POST['class'];
            $content=$_POST['content'];
            //拼接sql语句
            $sql="insert into student VALUES (NULL,'$name','$sex','$age','$class','$content')";
            if($conn->query($sql)){
                echo '插入成功';
                header('location:index.php');
            }else{
                echo '插入失败';
            }
        }
    break;

}
