<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>読書記録編集（管理者用）</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="開発アウトプットサイトトップ">
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/openclose.js"></script>

<script>
var button = document.querySelector('form[name="deleteform"] > button');
button.addEventListener(function() {
  document.querySelector("form[name="deleteform"]").submit();
});
</script>

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
<li><a href="{{action('MysiteController@booklist')}}">読書記録</a></li>
</ul>
</nav>

<div id="contents">
<section id="new">
<h2 id="newinfo_hdr" class="close">読書記録編集（管理者用）</h2>
<dl id="newinfo">

<table border="1">
<tr>
<th width="20"></th>
<th width="20"></th>
<th width="150">本のタイトル</th>
<th width="50">作者</th>
<th width="400">感想</th>
<th width="20">評価</th>
</tr>
@if(isset($items))
@foreach($items as $items)
<tr>
<!--<td align="center"><a href="{{ route('foredit') }}?id={{ $items->id }}">編集</a></td>-->
<form action="edit" method="get">
	<td align="center"><input type="submit" value="編集"></td>
	<input type="hidden" name="id" value="{{ $items->id }}">
	<!--<td align="center"><a href="{{ route('delete') }}" onclick="javascript:document.getElementsByName('deleteform')[0];">削除</a>
	</td>
	-->
</form>
<form action="books/delete" method="post" name="deleteform">
{{ csrf_field() }}
	<td align="center"><input type="submit" value="削除"></td>
	<input type="hidden" name="id" value="{{ $items->id }}">

	<!--<td align="center"><a href="{{ route('delete') }}" onclick="javascript:document.getElementsByName('deleteform')[0];">削除</a>
	</td>
	-->
</form>
<td>{{$items->title}}</td>
<td>{{$items->author}}</td>
<td>{{$items->impression}}</td>
<td align="center">{{$items->eval}}</td>
</tr>
@endforeach
</table>
@else
データがありません
@endif
<!--
<input type="submit" name="delete" formmethod="post" formaction="books/delete" value="削除" onclick='return confirm("削除してもよろしいですか？");'>
-->
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
