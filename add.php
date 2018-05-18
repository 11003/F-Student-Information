<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="layui/css/layui.css"/>
</head>
<body>

<form class="layui-form layui-form-pane" action="action.php?action=add" style="margin-top:30px;" method="post">
    <div class="layui-form-item">
        <label class="layui-form-label">姓名</label>
        <div class="layui-input-block">
            <input name="name" required="" lay-verify="required" placeholder="请输入姓名" autocomplete="off" class="layui-input" type="text">
        </div>
    </div>
    <div class="layui-form-item" pane="">
        <label class="layui-form-label">性别</label>
        <div class="layui-input-block">
            <input name="sex" value="男" title="男" type="radio" checked="">
                <div class="layui-unselect layui-form-radio">
                    <i class="layui-anim layui-icon"></i>
                    <div>男</div>
                </div>
            <input name="sex" value="女" title="女"  type="radio">
                <div class="layui-unselect layui-form-radio layui-form-radioed">
                    <i class="layui-anim layui-icon layui-anim-scaleSpring"></i>
                    <div>女</div>
                </div>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">年龄</label>
        <div class="layui-input-block">
            <input name="age" required="" lay-verify="required" placeholder="请输入年龄" autocomplete="off" class="layui-input" type="text">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">班级</label>
        <div class="layui-input-block">
            <input name="class" required="" lay-verify="required" placeholder="请输入班级" autocomplete="off" class="layui-input" type="text">
        </div>
    </div>
    <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">文本域</label>
        <div class="layui-input-block">
            <textarea name="content" placeholder="请输入内容" class="layui-textarea"></textarea>
        </div>
    </div>
    <div class="layui-form-item">
        <button class="layui-btn" lay-submit="" lay-filter="formDemoPane" name="button">立即提交</button>
    </div>
</form>
<script src="jquery-1.10.2.min.js"></script>
<script src="layui/layui.js"></script>
<script>

//Demo
    layui.use('form', function(){
        var form = layui.form;

        //监听提交
        form.on('submit(formDemo)', function(data){
            layer.msg(JSON.stringify(data.field));
            return false;
        });
    });

</script>
</body>
</html>