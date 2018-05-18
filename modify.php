<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
</head>
<body>
<center>
<?php
    @$id=$_GET['id'];

    include_once 'db.php';

    //拼接语句,取出信息
    $sql = "select * from student WHERE id='$id'";

    $res=$conn->query($sql);

    $rows = $res ->fetch_assoc();
?>
    <form style="margin-top:30px;" action="action.php?action=modify&id=<?php echo $rows['id'] ?>" method="post" id="mdfform">
        <h2>修改学生信息</h2>
        <table class="table table-hover">
            <tr>
                <td>
                    <input type="hidden" name="id" id="id" value="<?php echo $rows['id'] ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label>姓名:</label>
                    <input type="text" name="name" id="name" value="<?php echo $rows['name'] ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label>性别:</label>
                    男:<input type="radio" name="sex" value="男" <?php echo ($rows['sex']=="男")?"checked":"" ?> id="sex">&nbsp;&nbsp;
                    女:<input type="radio" name="sex" value="女" <?php echo ($rows['sex']=="女")?"checked":"" ?> id="sex">&nbsp;&nbsp;
                </td>
            </tr>
            <tr>
                <td>
                    <label>年龄:</label>
                    <input type="text" name="age" id="age" value="<?php echo $rows['age'] ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label>班级:</label>
                    <input type="text" name="class" id="class" value="<?php echo $rows['class']?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label>资料:</label>
                    <textarea  name="content" rows="8" value=""><?php echo $rows['content'] ?></textarea>
                </td>
            </tr>
        </table>
            <input type="submit" value="修改" name="button" class="btn btn-success">&nbsp;&nbsp;
            <input type="reset"  value="重置" class="btn btn-info">&nbsp;&nbsp;
            <input type="button" value="返回" onclick="location.href='index.php'" class="btn btn-warning">
    </form>
</center>
</body>
</html>