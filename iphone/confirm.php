<?php
// カレントの言語を日本語に設定する
mb_language("ja");
// 内部文字エンコードを設定する
mb_internal_encoding("UTF-8");
$_SESSION['name'] = $_POST["name"];
$_SESSION['name2'] = $_POST["name2"];
$_SESSION['email'] = $_POST["email"];
$_SESSION['age'] = $_POST["age"];
$_SESSION['val'] = $_POST["val"];
$_SESSION['body'] = $_POST["body"];
$name = $_POST["name"];
$name2 = $_POST["name2"];
$email = $_POST["email"];
$age = $_POST["age"];
$val = $_POST["val"];
$body = $_POST["body"];

include('header.php');
$here = <<< EOM



<div id="wrapper">
   
<div class="padding_box white toha bbb nt">
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<div class="form">
<h1 class="midashi">お問い合わせ内容のご確認</h1>

<p>ご入力内容をご確認ください。</p>
<p>お間違いないようでしたら、「送信する」を押してご送信ください。</p>

<form action="mail.php" method="post">
<input type="hidden" name="name" value="{$name}">
<input type="hidden" name="name2" value="{$name2}">
<input type="hidden" name="email" value="{$email}">
<input type="hidden" name="age" value="{$age}">
<input type="hidden" name="val" value="{$val}">
<input type="hidden" name="body" value="{$body}">
<p>お名前<br>{$name}</p>

<p>ふりがな<br>{$name2}</p>

<p>メールアドレス<br>{$email}</p>

<p>年齢<br>{$age}歳</p>

<p>ご相談の種類<br>{$val}</p>

<p>ご相談内容</p>
<p>{$body}</p>

<input type="submit" class="submit" value="　送信する　">
</form>
</div>

<style>
.form{
padding:20px;
}
.form p{
line-height:25px;
padding:0 0 10px;
}
.form p span{
font-size:80%;
color:#f00;
}

</style>



   
           
EOM;

echo $here;
include('footer.php');

?>