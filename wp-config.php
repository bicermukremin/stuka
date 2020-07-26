<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'stuka' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'S-QGzteeVp&i#+?qsxLs@o)])TF=oM&1?s_do0P)F2Sd;QB?]/ j)GGG/I5:Z3Y0' );
define( 'SECURE_AUTH_KEY',  '%NkB0zd@nyTYg}DL`0mmk_+}ci`*XE`kr>iuQ3$FVPQnmR#Ek.Dop/*ift[&e~z2' );
define( 'LOGGED_IN_KEY',    '#)=w?&O-p-LvK}mHxfFGQdj&X#8&YL4?/@Q{2nVm^5a 3FQ=Q~$ET`:j-:0tb*w{' );
define( 'NONCE_KEY',        'BY{F}D~sN$km/Fw5aeeXxcEYcMq2MXt2=CN[%!&9&HK2:POx[ 2j7 TMFnPqPFbL' );
define( 'AUTH_SALT',        '|YgG3pY_zYweajiy^_oP^~l359]^aH[p#SIcqj%t+J38Yp%ZGHdcaf`Sxfloh<Ss' );
define( 'SECURE_AUTH_SALT', '<|*_VTH78]|1QI@<<Xp^e_h])bF]{#q/*|V4nZDp<^xau6pg8E0TcKR>x3Rhk,ca' );
define( 'LOGGED_IN_SALT',   '_lYIUHrd=,6;%U7/-}URrk(}Q$3VN<h>lh6jf( 1~bKMWKfQ+K2w} MER9L$6:7@' );
define( 'NONCE_SALT',       'GOQF^-%v@&TL63<U8(|Hs.@ q>cY%fB{ZI((F:zy2TM:}VQMUJa*whAl)2!o@R6c' );
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
