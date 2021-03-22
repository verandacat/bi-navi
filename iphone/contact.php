<?php include('header-sub.php'); ?>



<div id="wrapper">

<a href="./">
        <img src="./img/sub-header-bn-sp-sub.png" alt="" width="100%">
    </a>    
    
    <div class="sub-header">

        <div class="top_link_sub">
        <a href="./">&lt; TOPに戻る</a>
        </div>
    
     </div>

   
<div class="padding_box white toha bbb nt">
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<div class="form">
<h1 class="midashi"><i class="far fa-tired"></i>管理栄養士へのダイエット無料メール相談</h1>
<div>



<p>「ダイエットがなかなか続かない…」<br>
「ダイエットってどうやったら成功するの？」</p>

<p>とお悩みではありませんか？</p>

<p>ダイエット成功のためには毎日の食事でストレスをためないこと、健康的な食生活が重要です。</p>


<p>ダイエット成功ガイドでは栄養指導・管理のプロである管理栄養士※に無料でメール相談ができます。</p>


<blockquote>
<p>管理栄養士は、厚生労働大臣の免許を受けた国家資格です。</p>

<p>出典：管理栄養士・栄養士を目指す方へ | 公益社団法人 日本栄養士会（<a href="https://www.dietitian.or.jp/students/dietitian/">https://www.dietitian.or.jp/students/dietitian/</a>）</p>
</blockquote>

<p>ダイエットのアドバイスや栄養指導をいただきたい方は、ダイエット成功ガイド提携の管理栄養士がご回答しますので、是非お気軽にご相談ください！</p>


<p>※お電話やお問い合わせ内容によっては返信が出来ないことがございます。</p>

<p>尚、各サプリメントの詳細や購入に関しましては直接販売メーカーにお問い合わせをお願い致します。</p>
</div>
<form action="confirm.php" method="post">
<p>お名前 <span>必須</span><br>
<input type="text" name="name" required placeholder="例）姓名"></p>

<p>ふりがな <span>必須</span><br>
<input type="text" name="name2" required placeholder="例）せいめい"></p>

<p>メールアドレス <span>必須</span><br>
<input type="email" name="email" required placeholder="例）aaa@example.com"></p>

<p>年齢 <span>必須</span><br>
<input type="number" name="age" required placeholder="例）00">歳</p>

<p>ご相談の種類 <span>必須</span><br>
<select name="val">
<option>ダイエット</option>
<option>栄養指導</option>
<option>その他</option>
</select>
</p>

<p>ご相談内容 <span>必須</span><br>
<textarea name="body" required placeholder="例）体質についてなど"></textarea></p>

<input type="submit" class="submit" value="ご入力内容の確認へ進む">
</form>
</div>
</div>

			<style>
blockquote {
    position: relative;
    padding: 7px 16px;
    box-sizing: border-box;
    font-style: italic;
    color: #464646;
    border: solid 3px #141DB2;
margin:20px 10px;
font-size:12px;
word-break: break-all;
}

blockquote:before{
    display: inline-block;
    position: absolute;
    top: -20px;
    left: -20px;
    width: 40px;
    height: 40px;
    line-height: 40px;
    border-radius: 50%;
    text-align: center;
    content: "\f10d";
    font-family: "Font Awesome 5 Free";
    background: #141DB2;
    color: #FFF;
    font-size: 22px;
    font-weight: 900;
}

blockquote:after{
    display: inline-block;
    position: absolute;
    bottom: -20px;
    right: -20px;
    width: 40px;
    height: 40px;
    line-height: 40px;
    border-radius: 50%;
    text-align: center;
    content: "\f10e";
    font-family: "Font Awesome 5 Free";
    background: #141DB2;
    color: #FFF;
    font-size: 22px;
    font-weight: 900;
}

blockquote p {
    padding: 0;
    margin: 10px 0;
    line-height: 1.7;
}

blockquote cite {
    display: block;
    text-align: right;
    color: #888888;
    font-size: 0.9em;
}
.form h1{
margin:0 0 15px;
padding:0 0 10px;
margin-bottom: 15px;    /* 周りの余白指定 */
border-bottom: solid 4px rgba(76, 175, 80, 0.6);        /* 線指定 */
border-radius: 0px 0px 160px 180px/0px 0px 20px 4px;
}
.form input{
width:100%;
height:30px;
line-height:30px;
padding:0 0 0 10px;
margin:3px 0 0;
}
.form select{
margin:3px 0 0;
display: block;
font-size: 13px;
font-family: sans-serif;
color: #444;
line-height: 1.3;
padding: .6em 1.4em .5em .8em;
width: 100%;
max-width: 100%; 
box-sizing: border-box;
margin: 0;
border: 1px solid #aaa;
box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
-moz-appearance: none;
-webkit-appearance: none;
appearance: none;
background-color: #fff;
background-repeat: no-repeat, repeat;
background-position: right .7em top 50%, 0 0;
background-size: .65em auto, 100%;
}
.form input[type=radio]{
width:20px;
height:20px;
line-height:20px;
}
.form input[type=number]{
width:30px;
height:30px;
line-height:30px;
}
.form input[type=submit]{
width:100%;
height:40px;
line-height:40px;
}
.form{
margin:30px 0 0;
padding:20px;
}
.form p{
line-height:20px;
padding:0 0 10px;
}
.form div p{
line-height:25px;
padding:0 0 10px;
}
.form form p{
padding:10px 0;
}
.form p span{
font-size:40%;
color:#fff;
display:inline-block;
background:#E26060;
padding:1px 5px;
position:relative;
left:8px;
bottom:3px;
}
.form textarea{
width:100%;
height:100px;
margin:5px 0 0;
padding:3px 0 0 10px;
}
</style>



   
           
<?php include('footer.php'); ?>