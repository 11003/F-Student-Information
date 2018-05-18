<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet">
    <style>
        iframe{border:1px solid #000}
    </style>
    <script>
        function names(){
            var name=document.getElementById('name');
            if(name.value==""){
                alert("输入不能为空");
                name.focus();
                return false;
            }
            return true;
        }

    </script>
</head>
<body>

<form action="" method="post" onsubmit="return names()">
    <br>
    <br>
    <br>
    <input type="text" name="name" placeholder="请输入您想要搜的人" id="name">
    <button type="submit" value="" name="button" class="btn btn-primary">搜索</button>
    <br>
</form>
<?php
include_once 'db.php';
//拼接sql语句
if(isset($_POST['button'])){
    $name=$_POST['name'];

    $sql="select * from student WHERE `name` LIKE '%{$name}%'";

    $res=$conn->query($sql);
    while($rows=$res->fetch_assoc()){
        if($rows){
            echo '<h2>'.$rows['name'].'的信息是:</h2>';
            echo '<hr>';
            echo '<h3>姓名:'.$rows['name'].'</h3>';
            echo '<h3>性别:'.$rows['sex'].'</h3>';
            echo '<h3>年龄:'.$rows['age'].'</h3>';
            echo '<h3>班级:'.$rows['class'].'</h3>';
            echo '<h3>简介:'.$rows['content'].'</h3>';
            echo '<br>';
        }
    }
}

?>
</body>
</html>