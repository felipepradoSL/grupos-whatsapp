<?php 
global $jal_db_version;
$jal_db_version = '1.0';

function jal_install() {
	global $wpdb;
	global $jal_db_version;

	$table_name = $wpdb->prefix . 'countClicks';

	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE $table_name (
	id mediumint(9) NOT NULL AUTO_INCREMENT,
	contador int DEFAULT '0' NOT NULL,			
	flag int(1) DEFAULT '1' NOT NULL,
	PRIMARY KEY  (id)
) $charset_collate;";

require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
dbDelta( $sql );

add_option( 'jal_db_version', $jal_db_version );
}

function jal_install_data() {
	global $wpdb;

	$table_name = $wpdb->prefix . 'countClicks';

	// Query the existence of row
	$results = $wpdb->get_results("SELECT * FROM $table_name");
	
	$tam = 1;
	while ($tam <= 11) {
		// Insert data
		$wpdb->insert($table_name, array(
			'contador' => 0
		));
		$tam++;
	}

	$results1 = $wpdb->get_row("SELECT * FROM $table_name WHERE id = 1");
	$wpdb->update($table_name, 
		array(
			'flag' => 0
		), array(
			'id' => $results1->id
		)
	);	
	

}

function my_plugin_remove_database() {
	global $wpdb;
	$table_name = $wpdb->prefix . 'countClicks';
	$sql = "DROP TABLE IF EXISTS $table_name";
	$wpdb->query($sql);
    //delete_option("jal_db_version");
} 