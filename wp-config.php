<?php

/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'alura');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'k0t8K7Mn_SVI3g c!Z^2y(<:rs*LdGyd,v{+)H=: b(nC)b-c;XT}p70=E80vTk,');
define('SECURE_AUTH_KEY',  '7}n~(Mv!A&V-Gf<I)_e<9*+N:;}y,J{JA_!Mi`ZCb+:/:M.^sIm|8+u/_=S46xsI');
define('LOGGED_IN_KEY',    'LrmKx)o1l?0:I4@Au.ALM7gl.@LrkBBPdt fK4Q3Jod9x(wUdg7<UMq @pbn[|<+');
define('NONCE_KEY',        '[SCe}_:i1WQjOspR}1E_?lUYf$/QX-2fIk#$;4ydgd=HhHJ)b4]Y%~@`GUK9Y]6H');
define('AUTH_SALT',        ',Z@ZA2&IY]d/MM?-7E$%t_jvgIJzHEa_jEt&OQ4/_k!p>mg?8:piHhuj#9}I,h~W');
define('SECURE_AUTH_SALT', '{]m .}HY/1iI2%ROd$!8Fwjwu<jAS<{KWYe#?nV}B|>P%^n%7BKF+bEPs83==&5B');
define('LOGGED_IN_SALT',   'h$8q9R#,R;JkjsGwG^`Us{JYPbza]CYbRv[Fo-YQ)pL=Pj|:]F/T^2O^?exak@tT');
define('NONCE_SALT',       'Wyo|8pFM36klM874*EG2GJ2GrY$B=1I#GD:#xh5H`Yzd)knlCjt]7kQeiQ|aHD6Q');
define('FS_METHOD', 'direct');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
