    <div id="pagetop">
      <a href="#wrapper">このページの先頭へ戻る</a>
    </div>



    <!-- <div id="banner-wrap">

      <a href="./contact.php">
        <img src="img/sub-header-bn.png" alt="" width="70%">
      </a>

      <a href="./supple.php">
        <img src="img/sub-header-01.png" alt="" width="70%">
      </a>
      <a href="./column.php">
        <img src="img/sub-header-02.png" alt="" width="70%">
      </a>

      <a href="./qna.php">
        <img src="img/sub-header-03.png" alt="" width="70%">
      </a>

    </div> -->

    <style>

    </style>
    <div id="menu">
      <div class="content-menu">
        <ul>
          <li>
            <a href="https://bi-navi.com/contact.php">管理栄養士無料相談</a>
          </li>
          <li>
            <a href="https://bi-navi.com/supple.php">人気サプリメント</a>
          </li>
          <?php if ($_GET['pat'] == "a" || $_GET['pat'] == "c" || $_GET['pat'] == "d") : ?>
            <li>
              <a href="https://bi-navi.com/column.php">コラム</a>
            </li>
            <li>
              <a href="https://bi-navi.com/qna.php">Q＆A</a>
            </li>
          <?php else : ?>
            <li>
              <a href="https://bi-navi.com/column.php">ダイエットコラム</a>
            </li>
            <li>
              <a href="https://bi-navi.com/qna.php">ダイエットQ＆A</a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
      <div class="menubox">
        <ul id="menu1">
          <li>
            <a href="./unei.php<?php echo "?" . $_SERVER['QUERY_STRING'] ?>">運営者情報</a>
          </li>
          <li>
            <a href="./entry4.php<?php echo "?" . $_SERVER['QUERY_STRING'] ?>">ランキング調査概要</a>
          </li>
          <li>
            <a href="./privacy.php<?php echo "?" . $_SERVER['QUERY_STRING'] ?>">プライバシーポリシー</a>
          </li>

        </ul>
      </div>


    </div>
    <br class="clear" />

    <footer>
      Copyright (C) 2019 美ナビ

      <script type="text/javascript">
        window._pt_lt = new Date().getTime();
        window._pt_sp_2 = [];
        _pt_sp_2.push('setAccount,4387eec7');
        var _protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
        (function() {
          var atag = document.createElement('script');
          atag.type = 'text/javascript';
          atag.async = true;
          atag.src = _protocol + 'js.ptengine.jp/pta.js';
          var s = document.getElementsByTagName('script')[0];
          s.parentNode.insertBefore(atag, s);
        })();
      </script>
      <script>
        (function(i, s, o, g, r, a, m) {
          i['GoogleAnalyticsObject'] = r;
          i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
          }, i[r].l = 1 * new Date();
          a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
          a.async = 1;
          a.src = g;
          m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-98179377-1', 'auto');
        ga('send', 'pageview');
      </script>
    </footer>

    <script>
      $(".ham-btn").click(function() {
        $("#ham-menu").addClass("open");
        $('.ham-btn').hide();
      });
      $(".close").click(function() {
        $("#ham-menu").removeClass("open");
        $('.ham-btn').fadeIn(2000);
      });
    </script>

    <script>
      $(function() {
        var Accordion1 = function(el, multiple) {
          this.el = el || {};
          this.multiple = multiple || false;

          var links = this.el.find('.accordion-title');
          links.on('click', {
            el: this.el,
            multiple: this.multiple
          }, this.dropdown)
        }

        Accordion1.prototype.dropdown = function(e) {
          var $el = e.data.el;
          $this = $(this),
            $next = $this.next();

          $next.slideToggle();
          $this.parent().toggleClass('open');

          if (!e.data.multiple) {
            $el.find('.accordion-contents').not($next).slideUp().parent().removeClass('open');
          };
        }
        var accordion1 = new Accordion1($('.menu-list-wrap'), false);
      });
    </script>
    <script src="countdown.js"></script>
    <?php if($_GET['pat'] == "a"|| $_GET['pat'] == "" || $_GET['pat'] == "c") : ?>
      <script type="text/javascript" charset="utf-8" src="https://kenga.tech/pop-ups-iynkwlrv.js"></script>
      
    <?php endif; ?>

    </body>

    </html>