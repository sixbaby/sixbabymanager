<?php
function xhtml_head() {
$name=NAME;
$title=func_get_arg(0);
echo <<<XHTML
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>{$title} - 〔{$name}〕</title>
        <link rel="stylesheet" href="./style.css">
<link href="https://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

<!-- 可选的Bootstrap主题文件（一般不使用） -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"></script>

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="https://cdn.bootcss.com/jquery/2.1.3/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div id="header">
	    六娃文件管理器
        </div>

XHTML;
}
function xhtml_footer() {
echo <<<XHTML
        <div id="footer">
	    By：<button type="button" class="btn btn-danger"><a href="http://aite.me/">爱特</a></button>原创作者，<button type="button" class="btn btn-danger"><a href="http://six.mokong.pw/">六娃</a></button>优化修改
        </div><button type="button" class="btn btn-success"><a href="./tz.php">PHP探针-查看服务器状态</a></button>|<button type="button" class="btn btn-info"><a href="./install.php">一键安装程序</a></button>
    </body>
</html>

XHTML;
}
?>
