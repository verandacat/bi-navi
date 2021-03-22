
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" rel="stylesheet">
<!-- <link href="fontawesome/css/fontawesome.min.css" rel="stylesheet" type="text/css" > -->
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css" rel="stylesheet">

<!--<div id="accordion" class="accordion-container"> -->


<article class="content-entry"> 

     <!-- <h4 class="article-title"><i></i>検索</h4> -->

     <div class="accordion-content">

<div class="searchbox">

   <div class="seachinnerbox">
     <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>" >
       <input type="hidden" name="s" class="s" />
       <?php if($_GET['pat'] == "m"||$_GET['pat'] == "d") : ?>
        <label id="cm1"><input class="checkbox" type="checkbox" name="rules[]" value="胃酸で死滅しない"><span class="checkbox1"></span></label>
       <label id="cm2"><input class="checkbox" type="checkbox" name="rules[]" value="医薬品"><span class="checkbox2"></span></label>

        <?php else : ?>
       <label id="c1"><input class="checkbox" type="checkbox" name="rules[]" value="胃酸で死滅しない"><span class="checkbox1"></span></label>
       <label id="c4"><input class="checkbox" type="checkbox" name="rules[]" value="機能性表示食品"><span class="checkbox4"></span></label>
        <?php endif; ?>
       <label id="c3"><input class="checkbox" type="checkbox" name="rules[]" value="モニター価格がある"><span class="checkbox3"></span></label>
       
       <label id="c2"><input class="checkbox" type="checkbox" name="rules[]" value="医薬品"><span class="checkbox2"></span></label>
     <div style="clear:both"></div>

       <div class="selectbox">
         <select name="price">
         <option style="color:#000;" value="">価格</option>
         <option style="color:#000;" value="3000">3000円以内</option>
         <option style="color:#000;" value="6000">6000円以内</option>
         <option style="color:#000;" value="10000">10000円以内</option>
         </select>
         
       </div>
     
       <div class="selectbox">
         <select name="onedayprice">
         <option value="">1日あたりの価格</option>
         <option style="color:#000;" value="150">150円以内</option>
         <option style="color:#000;" value="200">200円以内</option>
         <option style="color:#000;" value="250">250円以内</option>
         <option style="color:#000;" value="300">300円以内</option>
         </select>
       </div>
     
       <div class="selectbox">
         <select name="jenre2">
         <option style="color:#000;" value="">期間目安</option>
         <option style="color:#000;" value="7">１週間以内</option>
         <option style="color:#000;" value="14">２週間以内</option>
         <option style="color:#000;" value="30">1ヵ月以内</option>
         </select>
       </div>
     
       <div class="selectbox">
         <select name="jenre">
         <option style="color:#000;" value="">サプリタイプ</option>
         <option style="color:#000;" value="体内フローラサプリ">体内フローラサプリ</option>
         <option style="color:#000;" value="燃焼・カットサプリ">燃焼・カットサプリ</option>
         <option style="color:#000;" value="糖質ケアサプリ">糖質ケアサプリ</option>
         <option style="color:#000;" value="酵素サプリ">酵素サプリ</option>
         <option style="color:#000;" value="酵素ドリンク">酵素ドリンク</option>
         <option style="color:#000;" value="スムージー">スムージー</option>
         <option style="color:#000;" value="防風通聖散">防風通聖散</option>

         </select>
       </div>
     
       <div class="selectbox">
         <select name="plan">
         <option style="color:#000;" value="">割引プラン</option>
         <option style="color:#000;" value="初回限定価格あり">初回限定価格あり</option>
         <option style="color:#000;" value="定期コース割引あり">定期コース割引あり</option>
         </select>
       </div>
     
       <div class="selectbox end">
         <select name="ranking">
         <option style="color:#000;" value="">ランキング</option>
         <option style="color:#000;" value="1">1～3位</option>
         <option style="color:#000;" value="2">4位以下</option>
         </select>
       </div>
     <div style="clear:both"></div>

       <div class="searchbutton pc">
       <button type="submit"><img src="<?php print get_template_directory_uri(); ?>/img/searchbutton.png" width="100%"></button>
       </div>
     
     <div class="searchresult" style="display:none;">検索結果：<span>00</span>件</div>
   </div>
</div>

       <div class="searchbutton sp">
       <button type="submit"><img src="<?php print get_template_directory_uri(); ?>/img/spsearchbutton.png" width="100%"></button>
       </div>
     </form>

     </div>
      </article>
    <!--</div> -->

    <script>
$(function() {
		var Accordion = function(el, multiple) {
				this.el = el || {};
				this.multiple = multiple || false;

				var links = this.el.find('.article-title');
				links.on('click', {
						el: this.el,
						multiple: this.multiple
				}, this.dropdown)
		}

		Accordion.prototype.dropdown = function(e) {
				var $el = e.data.el;
				$this = $(this),
						$next = $this.next();

				$next.slideToggle();
				$this.parent().toggleClass('open');

				if (!e.data.multiple) {
						$el.find('.accordion-content').not($next).slideUp().parent().removeClass('open');
				};
		}
		var accordion = new Accordion($('.accordion-container'), false);
});
</script>