<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/4/11
 * Time: 15:59
 */

$host="localhost";
$user="root";
$pwd="12345678";
$dbname="stu";


$conn=new mysqli($host,$user,$pwd,$dbname)or die('连接失败'.mysqli_error());
$conn->query("set names utf8");