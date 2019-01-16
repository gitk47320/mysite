<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>読書記録新規追加（管理者用）</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="開発アウトプットサイトトップ">
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/openclose.js"></script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

<div id="container">


<header>
<h1 id="logo"><a href="{{action('MysiteController@top')}}"><img src="images/dplogo.png" alt="DEVELOPMENT PRODUCTS"></a></h1>
</header>

<nav id="menubar">
<ul>
<li class="current"><a href="{{action('MysiteController@top')}}">トップ</a></li>
<li><a href="{{action('MysiteController@books')}}">読書記録</a></li>
</ul>
</nav>

<div id="contents">

<section id="new">
<h2 id="newinfo_hdr" class="close">読書記録新規追加（管理者用）</h2>
<dl id="newinfo">
<form action="books/add" method="post">
	{{ csrf_field() }}
	<dl>本のタイトル：<input type="text" name="title" size="30"></dl>
	<dl>作者：<input type="text" name="author" size="20"></dl>
	<dl>感想：<textarea cols="50" rows="30" name="impression"></TEXTAREA></dl>
	<dl>評価<input type="radio" name="eval" value="1">1
	<input type="radio" name="eval" value="2">2
	<input type="radio" name="eval" value="3">3
	<input type="radio" name="eval" value="4">4
	<input type="radio" name="eval" value="5">5</dl>
	<dl><input type="submit" value="投稿"></dl>
</form>
</section>

<h2 id="newinfo_hdr" class="close">読書記録一括追加</h2>
<dl id="newinfo">
<form action="books/bulkadd" method="post" enctype="multipart/form-data">
	<input type="file" name="bulkfile">
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	<input type="submit" value="一括投稿">
</form>
</dl>
</div>
<!--/contents-->


<footer>
<small>Copyright&copy; <a href="{{action('MysiteController@top')}}">DEVELOPMENT PRODUCTS</a> All Rights Reserved.</small>
<span class="pr">《<a href="https://template-party.com/" target="_blank">Web Design:Template-Party</a>》</span>
<small><div>Logo made with <a href="https://www.designevo.com/en/" title="Free Online Logo Maker">DesignEvo</a></div></small>
</footer>

</div>
<!--/container-->

<!--スマホ用更新情報　480px以下-->
<script type="text/javascript">
if (OCwindowWidth() <= 480) {
	open_close("newinfo_hdr", "newinfo");
}
</script>

</body>
</html>
