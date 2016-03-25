<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>六娃快速安装工具</title>
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">

<!-- 可选的Bootstrap主题文件（一般不使用） -->
<script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap-theme.min.css"></script>

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>

<?php
error_reporting(0);
header("Content-type: text/html; charset=utf-8");
	ignore_user_abort(true);
if(!class_exists('ZipArchive')) {
	die("调用ZipArchive类失败,你的空间不支持本服务" );
	}
function zipExtract ($src, $dest)
    {
        $zip = new ZipArchive();
        if ($zip->open($src)===true)
        {
            $zip->extractTo($dest);
            $zip->close();
            return true;
        }
        return false;
      }
if (!isset($_GET['zip'])) {
echo '<div class="panel panel-primary">
   <div class="panel-heading">
      <h3 class="panel-title">在线远程安装程序[必须为zip，否则无法解压安装！]</h3>
   </div>
   <div class="panel-body"></div></b>
	<form method="get" action="?">
	<input type="text" name="zip" value="http://"/>
	<input type="submit" value="安装"/>
	</form></div></div>';
echo '<div class="panel panel-success">
   <div class="panel-heading">
      <h3 class="panel-title">程序在线一键安装</h3></div>
   <div class="panel-body">';
$ymdz="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."?zip=";
echo '-><a href='.$ymdz.'https://cn.wordpress.org/wordpress-4.4.2-zh_CN.zip>安装WordPress 4.4.2</a><hr>';
echo '-><a href='.$ymdz.'http://cron.aliapp.com/download.php>安装Typecho博客</a><hr>';
echo '-><a href='.$ymdz.'http://download.comsenz.com/DiscuzX/3.2/Discuz_X3.2_SC_GBK.zip>安装Discuz! X3.2简体中文GBK版</a><hr>';
echo '-><a href='.$ymdz.'http://download.comsenz.com/DiscuzX/3.2/Discuz_X3.2_SC_UTF8.zip>安装Discuz! X3.2简体中文UTF8版</a><hr>';

echo '->更多程序有待添加</div>';
echo '<div class="well well-lg"><center>六娃很乐意为你服务喔，(￣-￣)。<br>还有用完此文件请立即删除哦，本文件名称为install.php，一定要记得哦！<br/><div class=foot>六娃愿意为你永远服务！</center></div>';
exit;
}
$RemoteFile = rawurldecode($_GET["zip"]);
$ZipFile = "default.zip";
$Dir = "./";
copy($RemoteFile,$ZipFile) or die("很抱歉，六娃不能帮你了，原因是服务器安装源出问题了，请耐心等待修复哦，感谢你一直以来对六娃的肯定！故障很快就能修好哦，⊙﹏⊙<br>相信六娃一定会努力为你更好的服务！<br>以下是出错的程序地址:<br><b>".$RemoteFile);
if (zipExtract($ZipFile,$Dir)) {
echo "<b>恭喜你，".basename($RemoteFile)."</b>六娃已经帮你安装好网站了，赶快查看吧，~(≧▽≦)/~部分程序解压安装到了二级目录，请打开六娃管理器查看<br/><a href='/'>点此进入首页</a>";
unlink($ZipFile);
	}
else {
echo "抱歉，程序无法完成解压，六娃面壁思过去≧﹏≦！<b>".$ZipFile.".</b>";
if (file_exists($ZipFile)) {
unlink($ZipFile);
	}
}
?>
</div>
</body>
</html>
<!--DEFAULT_WELCOME_PAGE-->
<!--DEFAULT_WELCOME_PAGE-->
