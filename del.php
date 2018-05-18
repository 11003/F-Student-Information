<?php
include_once 'db.php';
$id=$_GET['id'];
$sql="delete from student WHERE id={$id}";
$conn->query($sql);
header('location:index.php');
