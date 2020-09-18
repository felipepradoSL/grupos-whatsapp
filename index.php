<?php

	/**
	* Plugin Name: Grupo VIP Whatsapp
	* Plugin URI: https://www.swetleads.com.br
	* Description: Utilizar o shortcode [grupo-whatsapp]
	* Version: 1.0
	* Author: Sweet Leads
	* Author URI: https://www.swetleads.com.br
	**/

	setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' );
	date_default_timezone_set( 'America/Sao_Paulo' );

	require('registerTable.php');

	register_activation_hook( __FILE__, 'jal_install' );
	register_activation_hook( __FILE__, 'jal_install_data' );
	register_deactivation_hook( __FILE__, 'my_plugin_remove_database' );

	function distribui_grupos(){ 
		global $wpdb;
		$table_name = $wpdb->prefix . 'countClicks'; 		

		?>
		<script>
			window.onload = setTimeout(myFunction, 5000);
			function myFunction(){
				<?php			
				$results1 = $wpdb->get_row("SELECT * FROM $table_name WHERE id = 1");							

				//first group
				if ($results1->flag == 0) {
					if ($results1->contador < 256) {
						$wpdb->update($table_name, 
							array(
								'contador' => $results1->contador + 1
							), array(
								'id' => $results1->id
							)
						);
						?>
						window.open('https://chat.whatsapp.com/grupo1', '_blank');
						<?php
					}
					else
					{	
						$results2 = $wpdb->get_row("SELECT * FROM $table_name WHERE id = 2");
						$wpdb->update($table_name, 
							array(
								'flag' => 0
							), array(
								'id' => $results2->id
							)
						);
						$wpdb->update($table_name, 
							array(
								'flag' => 1
							), array(
								'id' => $results1->id
							)
						);
					}
					
				}

				$results2 = $wpdb->get_row("SELECT * FROM $table_name WHERE id = 2");
				
				//second group
				if ($results2->flag == 0) {
					if ($results2->contador < 256) {
						$wpdb->update($table_name, 
							array(
								'contador' => $results2->contador + 1
							), array(
								'id' => $results2->id
							)
						);
						?>
						window.open('https://chat.whatsapp.com/grupo2', '_blank');
						<?php
					}
					else
					{
						$results3 = $wpdb->get_row("SELECT * FROM $table_name WHERE id = 3");
						$wpdb->update($table_name, 
							array(
								'flag' => 0
							), array(
								'id' => $results3->id
							)
						);
						$wpdb->update($table_name, 
							array(
								'flag' => 1
							), array(
								'id' => $results2->id
							)
						);
					}
					
				}

				$results3 = $wpdb->get_row("SELECT * FROM $table_name WHERE id = 3");
				
				//third group
				if ($results3->flag == 0) {
					if ($results3->contador < 256) {
						$wpdb->update($table_name, 
							array(
								'contador' => $results3->contador + 1
							), array(
								'id' => $results3->id
							)
						);
						?>
						window.open('https://chat.whatsapp.com/grupo3', '_blank');
						<?php
					}
					else
					{
						$wpdb->update($table_name, 
							array(
								'flag' => 1
							), array(
								'id' => $results3->id
							)
						);
						$results3 = $wpdb->get_row("SELECT * FROM $table_name WHERE id = 3");
					}
					
				}

				if(($results1->flag == 1)&&($results2->flag == 1)&&($results3->flag == 1))
				{
					?>alert("GRUPOS LOTADOS") <?php 
				}
				
				?>
			}
		</script>
		<?php 

	}
	add_shortcode('grupo-whatsapp','distribui_grupos');