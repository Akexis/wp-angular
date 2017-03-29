<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dev_wpangular');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'pass123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'D>#hU}D*I-h$=?j3[P@W T-liPv1Mg[t[s0R.%|<H:{*o:ojPx-THrI[(8jk?MkV');
define('SECURE_AUTH_KEY',  '+IV8|WX+M6`HG)>4[3w.RQZI;QrhTx-mvAsa6rd4DqW<W-LxGxS.sY;0-^rF9%e$');
define('LOGGED_IN_KEY',    'Djvf|;AfL5)d20j^Y`eAn*VCmIFtJV-/kF`lXmQ#*y{:80z12/s:SQ4a8qhT?.$h');
define('NONCE_KEY',        'p7,`5lrl>c44:H!?&=.-Z7K@N@JH8#K&in3!qT4aDYuiaAzj#LG.]hmVN-GtJXVk');
define('AUTH_SALT',        '[$BzG-w/g#Omv>sgrhx 7RZ6E5ydc1=yUIyqh[68zbTuui[gj.5#J2Gu1OK|M`h+');
define('SECURE_AUTH_SALT', '[B5lbL7P+.T@fwm|5H.QXb$7^V/+`}DoW1,I?>-i<BbYLEQ<@<E)?jfa#q;R`Qyj');
define('LOGGED_IN_SALT',   'Y%j-.##p!`{e<6a_7+xa<9-B|03Q21S+|gi]eoJz1htgrKl|UPPY+|E|2ldBxR*.');
define('NONCE_SALT',       'P65S7.wn3EplIncxBT:u{o+s!{gi9:ZrX=z_M#/>{`o8jEJcw^V+)|62zxf{5DpL');


$table_prefix = 'wp_';





/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
