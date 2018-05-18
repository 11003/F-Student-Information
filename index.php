<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页展现</title>
    <link rel="stylesheet" type="text/css" href="layui/css/layui.css"/>
</head>
<script>
    function del(id){
        if(confirm('确定删除吗'))
        {
            location.href='action.php?action=del&id='+id;
        }
    }
</script>
<body>
<h1 style="text-align: center;">浏览学生信息</h1>
<table border="1" cellspacing="0" class="table layui-table">
    <tr class="layui-bg-gray">
        <th>id</th>
        <th>姓名</th>
        <th>性别</th>
        <th>年龄</th>
        <th>班级</th>
        <th>资料</th>
        <th>操作</th>
    </tr>
    <?php
    //连接数据库
    include_once 'db.php';
    $sql = "select * from student";
    $res=$conn->query($sql);
    if($res->num_rows>0){
        while($rows=$res->fetch_assoc()){
            echo '<tr>';
            echo '<td>'.$rows['id'].'</td>';
            echo '<td style="color: #CC5522;font-size: 20px;font-weight: bold;">'.$rows['name'].'</td>';
            echo '<td>'.$rows['sex'].'</td>';
            echo '<td>'.$rows['age'].'</td>';
            echo '<td>'.$rows['class'].'</td>';
            echo '<td>'.$rows['content'].'</td>';
            echo '<td>
                       <input type="button" style="margin-bottom: 5px" value="删除" class="layui-btn layui-btn-md layui-btn-danger" onclick="del('.$rows['id'].')">
                       <br>
                       <input type="button" value="修改" class="layui-btn layui-btn-md layui-btn-normal" onclick="location.href=\'modify.php?id='.$rows['id'].'\'">
                  </td>';
            echo '</tr>';
        }
    }
$conn->close();
    ?>
</table>
</body>
</html>