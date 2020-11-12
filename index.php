<?php

/**
 * Plugin Name: Grupo VIP Whatsapp
 * Plugin URI: https://www.swetleads.com.br
 * Description: Utilizar o shortcode [grupo-whatsapp]
 * Version: 2.0
 * Author: Sweet Leads
 * Author URI: https://www.swetleads.com.br
 * 
 * @vars
 * 	Integer clicks
 * 	Array   groups
 *  Integer qtdGroups
 * 
 **/

setlocale(LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

require('registerTable.php');

register_activation_hook(__FILE__, 'jal_install');
register_activation_hook(__FILE__, 'jal_install_data');
register_deactivation_hook(__FILE__, 'my_plugin_remove_database');

function distribui_grupos()
{

?>
	<button id="btn-group-whats"> Whatsapp</button>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<script>
		$(document).ready(function() {
			$('#btn-group-whats').click(function() {

				$.ajax({
					type: "POST",
					url: "https://catlenguerra.com//wp-content/plugins/grupos-whatsapp/controller.php",
					data: "",
					success: function(data) {
						//alert(data);
						window.location.replace("https://chat.whatsapp.com/" + data);
					}
				});

				return false;

			})
		});
	</script>
<?php

}
add_shortcode('grupo-whatsapp', 'distribui_grupos');