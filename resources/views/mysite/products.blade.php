<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>トップ</title>
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
<li><a href="{{action('MysiteController@top')}}">トップ</a></li>
<li><a href="{{action('MysiteController@books')}}">読書記録</a></li>
<li class="current"><a href="{{action('MysiteController@products')}}">開発成果物</a></li>
</ul>
</nav>

<div id="contents">

<section id="new">
<h2 id="newinfo_hdr" class="close">開発成果物一覧</h2>
<dl id="newinfo">
<dt>説明</dt>
<dd>ビンゴツール</dd>
</dl>
</section>
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
