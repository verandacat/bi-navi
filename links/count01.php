<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>カウントダウンタイマー01</title>
<style>
body {
	margin: 0;
	padding: 0;
}
#inner {
	width: 600px;
	margin: 0 auto;
}

#countdown {
  font-family: 'Hiragino Kaku Gothic Pro';
	font-weight: bold;
	width: 600px;
  color: red;
}
.day, .hou, .min, .sec, .mil {/*カウントする数字の大きさ*/
	font-size: 38px;
}
.day {
  font-size: 28px;
}
.hou {
  font-size: 28px;
}
.min {
}
.sec {
}
.mil {
}
.moji {/*日とか時間とか秒とかの文字の色と大きさ*/
  font-size: 26px;
  margin: 5px;
  font-weight: normal;
	color:#999;
}
</style>
<script language="JavaScript" type="text/javascript">
function CountdownTimer(elm,tl,mes){
 this.initialize.apply(this,arguments);
}
CountdownTimer.prototype={
 initialize:function(elm,tl,mes) {
  this.elem = document.getElementById(elm);
  this.tl = tl;
  this.mes = mes;
 },countDown:function(){
  var timer='';
  var today=new Date();
  var day=Math.floor((this.tl-today)/(24*60*60*1000));
  var hou=Math.floor(((this.tl-today)%(24*60*60*1000))/(60*60*1000));
  var min=Math.floor(((this.tl-today)%(24*60*60*1000))/(60*1000))%60;
  var sec=Math.floor(((this.tl-today)%(24*60*60*1000))/1000)%60%60;
  var mil=Math.floor(((this.tl-today)%(24*60*60*1000))/10)%100;
  var me=this;

  if( ( this.tl - today ) > 0 ){
   if (day) timer += '<span class="day">'+day+'</span><span class="moji">日</span>';
   if (hou) timer += '<span class="hou">'+hou+'</span><span class="moji">時間</span>';
   timer += '<span class="min">'+this.addZero(min)+'</span><span class="moji">分</span><span class="sec">'+this.addZero(sec)+'</span><span class="moji">秒</span><span class="mil">'+this.addZero(mil)+'</span>';
   this.elem.innerHTML = timer;
   tid = setTimeout( function(){me.countDown();},10 );
  }else{
   this.elem.innerHTML = this.mes;
   return;
  }
 },addZero:function(num){ return ('0'+num).slice(-2); }
}

//2月

function countdown(){
 var tl = new Date('2019/02/28 00:00:00');
 //この上の部分で終了時間を設定するYO！
 var timer = new CountdownTimer('countdown2',tl,'終了しました');
 //この上の文は終了した後に表示する文字!
 timer.countDown();
}

window.onload=function(){
 countdown();
}

//3月

function countdown3(){
 var tl = new Date('2019/03/31 00:00:00');
 //この上の部分で終了時間を設定するYO！
 var timer = new CountdownTimer('countdown3',tl,'終了しました');
 //この上の文は終了した後に表示する文字!
 timer.countDown();
}

window.onload=function(){
 countdown3();
}

</script>
</head>

<body>

  <?php $nowMonth = date("n");  ?>
<div id="inner">

<?php if ($nowMonth==3) { ?>
  <div id="countdown"></div>


<?php } else if ($nowMonth==3) { ?>
  <div id="countdown3"></div>



<?php } ?>
</div>

</body>
</html>
