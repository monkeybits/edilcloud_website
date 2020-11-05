<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Chiavi Segrete
 * * Prefisso Tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'edilcloud.io' );

/** Nome utente del database MySQL */
define( 'DB_USER', 'root' );

/** Password del database MySQL */
define( 'DB_PASSWORD', '' );

/** Hostname MySQL  */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'GAL|,VYORR/W<,5Xh#EJ=Tq@1V/9@c$]1bEi#2M_&+FE1!;QBag(W:D#dKTNN*}3' );
define( 'SECURE_AUTH_KEY',  '}@&Jb=gw_3CM}`9Y%`)k1AnpH[8w:kf}tHk1HDTK[!O$^0[mueJqHY+7)W,z Z7P' );
define( 'LOGGED_IN_KEY',    '8kA}v;f;,x-i2f)_U/`APAFg,=s:3etUWy*CrV>YbTcVY.Wm{r6VLiD_=]A%q_w?' );
define( 'NONCE_KEY',        'wcJ9_!2fcVda iunIB|tGeJ5Wtq}Z+B6<fv-$i>&T+ B}V.yu*1+FI9t#RJ583f(' );
define( 'AUTH_SALT',        'rpYz{w(5DNA:ew-|T[ElMYWJyqL<81;D^D7OV3f`U3!mV+bL/a( FRDI}isY5<^Q' );
define( 'SECURE_AUTH_SALT', 'ji)&Yw_U=W{O]/Z4[;sYLy4s|v9)b}qi|,8K@zp5|Jpc %`iZNUPe8Jz6(lv_14]' );
define( 'LOGGED_IN_SALT',   '=#E8rQ`V8aF1tZqWKzxvzt2=9pc|=8QT^_CE1,+ki3:.px;L v4CO;sXN,^2nZEr' );
define( 'NONCE_SALT',       '[DjIvZMNz]D~({*2wsMN&}wMx)xvYSmS0_`6}G=qxo@I$yal]L#w$%ns[,}BPzgE' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
