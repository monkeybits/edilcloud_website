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
define( 'AUTH_KEY',         'dN`!yEBj(Umh_CcJ.x%`n],9+n88Ozir_nkZHV)9PH!#U46N3:BdlR1}r2IX$(P#' );
define( 'SECURE_AUTH_KEY',  'O8vHRO}GHvH[uY_ENaS>{~Cb0Y$D%~L,H6?mJQ-X!<1/uUC( f&8VtNhwrBXBB-T' );
define( 'LOGGED_IN_KEY',    'aRO`FkTp)U:8})=?o52:]kz6OJdIES2y!^7urB!|cih,=fJRuE{gb`^mfQ*Orp4U' );
define( 'NONCE_KEY',        'AxS>qnx]@*ZsU[PCmX=30?BZ-&V6RmBP@f51:o[{vc 0tpMK*TdR]v&EwBob}Gm@' );
define( 'AUTH_SALT',        'erq4}&a)I-5.lE)&/6.aA./K<JE ,b%u EH2dK3O4%{t>+H<[D#w{4K6*w;MP.xY' );
define( 'SECURE_AUTH_SALT', ' tq&_ld.{3(njAy19QW>ST8CQme{L%#&c&6PoK0`6NT:e(kzVU!Z%~B2Q2p2/t7B' );
define( 'LOGGED_IN_SALT',   'uIw0]sfXd2I+XXtX2f]uPLi;5b)f0<`(}K>6<Hf]Vi]8T;N2Gv=V4j>&2%}bJ6GY' );
define( 'NONCE_SALT',       '{5g~^?Hq|IEa(9RFwh]j1Dn !kMdQ]Gt^n%He9r!?+}[MC~WEZ0|Tze>`)xD%f>t' );

/**#@-*/


/**
 * API SENDINBLUE.
 */

define('SEND_IN_BLUE_KEY', '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');

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
