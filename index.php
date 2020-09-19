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
					if ($results1->contador < 400) {
						$wpdb->update($table_name, 
							array(
								'contador' => $results1->contador + 1
							), array(
								'id' => $results1->id
							)
						);
						?>
						window.open('https://chat.whatsapp.com/Gah7Br18hy1ChN0pGMckdt', '_blank');	
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
					if ($results2->contador < 400) {
						$wpdb->update($table_name, 
							array(
								'contador' => $results2->contador + 1
							), array(
								'id' => $results2->id
							)
						);
						?>
						window.open('https://chat.whatsapp.com/IZ0u8WYMcqV2rE4vjsOpUa', '_blank');							
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
					if ($results3->contador < 400) {
						$wpdb->update($table_name, 
							array(
								'contador' => $results3->contador + 1
							), array(
								'id' => $results3->id
							)
						);
						?>
						window.open('https://chat.whatsapp.com/EYXK3tkWRhr99ZCi5MHy5D', '_blank');						
						<?php
					}
					else
					{
						$results4 = $wpdb->get_row("SELECT * FROM $table_name WHERE id = 4");
						$wpdb->update($table_name, 
							array(
								'flag' => 0
							), array(
								'id' => $results4->id
							)
						);
						$wpdb->update($table_name, 
							array(
								'flag' => 1
							), array(
								'id' => $results3->id
							)
						);						
					}
					
				}

				$results4 = $wpdb->get_row("SELECT * FROM $table_name WHERE id = 4");

				//fourth group
				if ($results4->flag == 0) {
					if ($results4->contador < 400) {
						$wpdb->update($table_name, 
							array(
								'contador' => $results4->contador + 1
							), array(
								'id' => $results4->id
							)
						);
						?>
						window.open('https://chat.whatsapp.com/FbbSz5ZXCLkKIERy2mUvuK', '_blank');						
						<?php
					}
					else
					{
						$results5 = $wpdb->get_row("SELECT * FROM $table_name WHERE id = 5");
						$wpdb->update($table_name, 
							array(
								'flag' => 0
							), array(
								'id' => $results5->id
							)
						);
						$wpdb->update($table_name, 
							array(
								'flag' => 1
							), array(
								'id' => $results4->id
							)
						);						
					}
					
				}

				$results5 = $wpdb->get_row("SELECT * FROM $table_name WHERE id = 5");

				//fifth group
				if ($results5->flag == 0) {
					if ($results5->contador < 400) {
						$wpdb->update($table_name, 
							array(
								'contador' => $results5->contador + 1
							), array(
								'id' => $results5->id
							)
						);
						?>
						window.open('https://chat.whatsapp.com/DJtszYpvI0AEKPOYknqPHu', '_blank');						
						<?php
					}
					else
					{
						$results6 = $wpdb->get_row("SELECT * FROM $table_name WHERE id = 6");
						$wpdb->update($table_name, 
							array(
								'flag' => 0
							), array(
								'id' => $results6->id
							)
						);
						$wpdb->update($table_name, 
							array(
								'flag' => 1
							), array(
								'id' => $results5->id
							)
						);						
					}
					
				}

				$results6 = $wpdb->get_row("SELECT * FROM $table_name WHERE id = 6");

				//sixth group
				if ($results6->flag == 0) {
					if ($results6->contador < 400) {
						$wpdb->update($table_name, 
							array(
								'contador' => $results6->contador + 1
							), array(
								'id' => $results6->id
							)
						);
						?>
						window.open('https://chat.whatsapp.com/KfkHhImg71B2EFUT22Mmic', '_blank');						
						<?php
					}
					else
					{
						$results7 = $wpdb->get_row("SELECT * FROM $table_name WHERE id = 7");
						$wpdb->update($table_name, 
							array(
								'flag' => 0
							), array(
								'id' => $results7->id
							)
						);
						$wpdb->update($table_name, 
							array(
								'flag' => 1
							), array(
								'id' => $results6->id
							)
						);						
					}
					
				}

				$results7 = $wpdb->get_row("SELECT * FROM $table_name WHERE id = 7");

				//seventh group
				if ($results7->flag == 0) {
					if ($results7->contador < 400) {
						$wpdb->update($table_name, 
							array(
								'contador' => $results7->contador + 1
							), array(
								'id' => $results7->id
							)
						);
						?>
						window.open('https://chat.whatsapp.com/FSolOno1d9OCIhwCQBEUJ8', '_blank');						
						<?php
					}
					else
					{
						$results8 = $wpdb->get_row("SELECT * FROM $table_name WHERE id = 8");
						$wpdb->update($table_name, 
							array(
								'flag' => 0
							), array(
								'id' => $results8->id
							)
						);
						$wpdb->update($table_name, 
							array(
								'flag' => 1
							), array(
								'id' => $results7->id
							)
						);						
					}
					
				}


				$results8 = $wpdb->get_row("SELECT * FROM $table_name WHERE id = 8");

				//eighth group
				if ($results8->flag == 0) {
					if ($results8->contador < 400) {
						$wpdb->update($table_name, 
							array(
								'contador' => $results8->contador + 1
							), array(
								'id' => $results8->id
							)
						);
						?>
						window.open('https://chat.whatsapp.com/DJkyvM19FLQDgBN6i8gnoe', '_blank');						
						<?php
					}
					else
					{
						$results9 = $wpdb->get_row("SELECT * FROM $table_name WHERE id = 9");
						$wpdb->update($table_name, 
							array(
								'flag' => 0
							), array(
								'id' => $results9->id
							)
						);
						$wpdb->update($table_name, 
							array(
								'flag' => 1
							), array(
								'id' => $results8->id
							)
						);						
					}
					
				}

				
				$results9 = $wpdb->get_row("SELECT * FROM $table_name WHERE id = 9");

				//nineth group
				if ($results9->flag == 0) {
					if ($results9->contador < 400) {
						$wpdb->update($table_name, 
							array(
								'contador' => $results9->contador + 1
							), array(
								'id' => $results9->id
							)
						);
						?>
						window.open('https://chat.whatsapp.com/DXcLlC1RnjsG7SxPUvHuC6', '_blank');						
						<?php
					}
					else
					{
						$results10 = $wpdb->get_row("SELECT * FROM $table_name WHERE id = 10");
						$wpdb->update($table_name, 
							array(
								'flag' => 0
							), array(
								'id' => $results10->id
							)
						);
						$wpdb->update($table_name, 
							array(
								'flag' => 1
							), array(
								'id' => $results9->id
							)
						);						
					}
					
				}


				$results10 = $wpdb->get_row("SELECT * FROM $table_name WHERE id = 10");

				//tenth group
				if ($results10->flag == 0) {
					if ($results10->contador < 400) {
						$wpdb->update($table_name, 
							array(
								'contador' => $results10->contador + 1
							), array(
								'id' => $results10->id
							)
						);
						?>
						window.open('https://chat.whatsapp.com/JNBUDqCRxjT0TRuEjtdzVi', '_blank');						
						<?php
					}
					else
					{	
						$results11 = $wpdb->get_row("SELECT * FROM $table_name WHERE id = 11");	
						$wpdb->update($table_name, 
							array(
								'flag' => 0
							), array(
								'id' => $results11->id
							)
						);					
						$wpdb->update($table_name, 
							array(
								'flag' => 1
							), array(
								'id' => $results10->id
							)
						);	

					}
					
				}


				$results11 = $wpdb->get_row("SELECT * FROM $table_name WHERE id = 11");

				//eleventh group
				if ($results11->flag == 0) {
					if ($results11->contador < 400) {
						$wpdb->update($table_name, 
							array(
								'contador' => $results11->contador + 1
							), array(
								'id' => $results11->id
							)
						);
						?>
						window.open('https://chat.whatsapp.com/FcOkpGiUYqg0hFDkWI7PHW', '_blank');						
						<?php
					}
					else
					{							
						$wpdb->update($table_name, 
							array(
								'flag' => 1
							), array(
								'id' => $results11->id
							)
						);	
						$results11 = $wpdb->get_row("SELECT * FROM $table_name WHERE id = 11");					
					}
					
				}


				if(($results1->flag == 1)&&($results2->flag == 1)&&($results3->flag == 1)&&($results4->flag == 1)&&($results5->flag == 1)&&($results6->flag == 1)&&($results7->flag == 1)&&($results8->flag == 1)&&($results9->flag == 1)&&($results10->flag == 1)&&($results11->flag == 1))
				{
					?>alert("GRUPOS LOTADOS =(") <?php 
				}
				
				?>
			}
		</script>
		<?php 

	}
	add_shortcode('grupo-whatsapp','distribui_grupos');