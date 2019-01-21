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
<li><a href="{{action('MysiteController@top')}}">トップ</a></li>
<li><a href="{{action('MysiteController@booklist')}}">読書記録</a></li>
<li><a href="{{action('MysiteController@products')}}">開発成果物</a></li>
</ul>
</nav>

<div id="contents">
<section id="new">
<h2 id="newinfo_hdr" class="close">読書記録変更（管理者用）</h2>
<dl id="newinfo">
<form method="post">
{{ csrf_field() }}
@if(isset($items))
<input type='hidden' name='id' value='{{ $items->id }}'><br>
<dl>本のタイトル：<input type="text" name="title" size="30" value="{{$items->title}}"></dl>
<dl>作者：<input type="text" name="author" size="20" value="{{$items->author}}"></dl>
<dl>感想：<textarea cols="50" rows="30" name="impression">{{$items->impression}}</TEXTAREA></dl>
<dl>評価：{{$items->eval}}<input type="radio" name="eval" value="1">1
<input type="radio" name="eval" value="2">2
<input type="radio" name="eval" value="3">3
<input type="radio" name="eval" value="4">4
<input type="radio" name="eval" value="5">5
</dl>
@else
<p>データがありません</p>
@endif
<dl><input type="submit" formaction="books/edit" value="更新"></dl>
</form>
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
