<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'ds8_binavi' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'ds8_binavi' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'z9cg7bitacqe' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@Ly4b*gdZ(RFS]2rEt]@6,7zza#Z:y_q9=jRybIS6>]K^T@*C,s1]YL[GU9Pp`~#' );
define( 'SECURE_AUTH_KEY',  '6|G0mp^y7y13B:I/pOftSc@oWCzH3KFymDli]3hYt8QV#5(xvbSsq5TXV$%FQy*Q' );
define( 'LOGGED_IN_KEY',    'NX/Zg/CQ4^IGnm=u!!M#A(O~3=0ApD3@@V.yu: s&IF$<)Fo#rug&P>oNEHPh!gk' );
define( 'NONCE_KEY',        '@J.zobAV+U/Uj{&4s2fkZz*Sl~R>X#&f-j-B- &>-dreECsy5WB^]>2*Vp9H,UAk' );
define( 'AUTH_SALT',        'v`w|Q-EsQ6gk;[@[Jf)Yy_<Fe!{R1=EqfB/O<rM6j/Ew9`7Qny!~,CiB)*)_?q3p' );
define( 'SECURE_AUTH_SALT', 't19C+?8[g!pP.*i=eC]BnjWv%GHdN=#|GW#sO]+JMT|Jl{Z8~@}!yo|fd>wQ)Pu3' );
define( 'LOGGED_IN_SALT',   '7KV[fx-LfNTK+v+R#1lca9=uH`0kLU=+&rM.e]gTSSZ9]W1~]`GYO};kyLjU@+J}' );
define( 'NONCE_SALT',       '<^zkS%}J] mNEX@D`[ONdqeeil>|<r%?]UK({?@DDmL[}(nX~}&$F@xT}YPh:.}E' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
