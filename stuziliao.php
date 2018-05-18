<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <link rel="stylesheet" type="text/css" href="layui/css/layui.css"/>
</head>
<body>
<?php
include_once 'db.php';
$sql = "select * from student";
$res=$conn->query($sql);
while($rows=$res->fetch_assoc()){
?>
<form action="">
	<div class="layui-collapse">
		<div class="layui-colla-item">
			<h2 class="layui-colla-title"><?php echo $rows['name'] ?>
            </h2>
			<div class="layui-colla-content layui-show">
                性別:<?php echo $rows['sex'] ?>
                <br>
                年齡:<?php echo $rows['age'] ?>
                <br>
                班級:<?php echo $rows['class'] ?>
                <br>
                个人简历:
                <?php echo $rows['content'] ?>
            </div>
		</div>
	</div>
</form>
<?php
}
?>
</body>
<script src="layui/layui.js"></script>
<script>
    //注意：折叠面板 依赖 element 模块，否则无法进行功能性操作
    layui.use('element', function(){
        var element = layui.element;
    });
</script>
</html>