<?php
/**
 * Plugin Name: DB_info
 * Description: Информация о запросах к базе данных
 * Author:Andrew Proz
* Author URI: http://prozius.github.io
* Version: 1.0
 */

// мой первый плагин (код ниже скопирован с мануала wp-kama)

add_filter( 'admin_footer_text', 'pr_usage' );
function pr_usage(){
	echo sprintf(
		__( 'SQL: %d за %s сек. %s MB', 'km' ),
		get_num_queries(),
		timer_stop( 0, 3 ),
		round( memory_get_peak_usage()/1024/1024, 2 )
	);
}
