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



$message = "

お問い合わせフォームよりメールが届きました

===========================

お名前：$name （ $name2 ）
年齢：$age 歳
メールアドレス：$email
ご相談の種類：$val

本文：
$body



";
	
	if (!mb_send_mail("nyusankin762@gmail.com","お問い合わせがありました", $message, "From: " . $email)) {
	  exit("error");
	}

$thanks = "

この度はメール無料相談にお申込いただきましてありがとうございます。

ご相談内容を確認させていただきまして、管理栄養士からご登録のメールアドレス宛てに
返信させていただきます。

今しばらくお待ちいただけますと幸いです。

よろしくお願い致します。


";

	if (!mb_send_mail($email,"お問い合わせありがとうございます。無料メール相談を承りました。", $thanks, "From:nyusankin762@gmail.com")) {
	  exit("error");
	}


header( "Location: //bi-navi.com/thanks.php" ) ;
	exit ;
?>