<?php

$path = $_SERVER['DOCUMENT_ROOT'];

include_once $path . '/wp-load.php';

global $wpdb;
$table_name = $wpdb->prefix . 'countClicks';

$groups = array(
    "JtAGfYR8TqxJCQz7FfOj7Z",
    "EvUF3psuMHfLBCt83IVtfC",
    "DukKTht2ji4F6aRPaTwzxn",
    "LswGlgLUujt45iZEkLteFS",
    "DIaFjdrfNT5D7I4vxJTtNA",
    "I7QorgRCu1sHXpQWfqFPAE",
    "I38Miu3dzvxCEIcqNy6PVC",
    "DGKsIcLlGrrH7p2k8McNdP",
    "EJmupyyJLob95dyDov8xGN",
    "CECb5NjTEAO56odfTVcllJ",
    "LPZRurkzBio0HWK3iTPCFz",
    "BD1HYJwuzk0JvJIMAJu9xR",
    "IDVbVIu9ZN73cC8z1nwvVL",
    "CceuUkZ825C72ko4UvH5X7",
    "FgzehGikjfeDsPOcPL4X1k",
    "CxNEjpb1KJpHptODDT8gzg",
    "JOB75z3He2WLJxyd42WGJE",
    "C8JyW3CjcMqIlCeN9jxDg5",
    "L3lp7y6MLab6YN6HL8m4fk",
    "IrxMmdH9d0O3VAUQv7UPUq",
    "LR0b8w3F3SaD8bJrXlo3EX",
    "H7mJM4kG0ulJpYRUGeS7RD",
    "KOOfkdqcAyzLuArveqzQXC",
    "DiGAbFzvpF97CW3DV7EbsB",
    "IkULdUEFkPp3kjWVqQHuvf"
);

function selectGroup($table_name, $wpdb, $groups)
{
    for ($i = 0; $i < 26; $i++) {
        $id = $i + 1;
        $query = "SELECT * FROM $table_name WHERE id = $id";
        try {
            $results1 = $wpdb->get_row($wpdb->prepare($query));
        } catch (Throwable $e) {

            echo "Captured Throwable: " . $e->getMessage() . PHP_EOL;
        }

        if ($results1->flag == 0)
            break;
    }
    if ($i != 26)
        return countCliks($results1, $groups, $table_name, $wpdb, $i);
    else
        return 'Grupo Lotados = ' . $i;
}

function countCliks($results1, $groups, $table_name, $wpdb, $idx)
{
    $clicks = 300;

    if ($results1->contador < $clicks) {
        $wpdb->update(
            $table_name,
            array(
                'contador' => $results1->contador + 1
            ),
            array(
                'id' => $results1->id
            )
        );

        echo  $groups[$idx]; // ID do grupo do whatsapp

    } else {
        $wpdb->update(
            $table_name,
            array(
                'flag' => 0,
                'contador' => 1
            ),
            array(
                'id' => $results1->id + 1
            )
        );
        $wpdb->update(
            $table_name,
            array(
                'flag' => 1
            ),
            array(
                'id' => $results1->id
            )
        );

        echo $groups[$idx + 1]; // ID do proximo grupo do whatsapp
    }
}

selectGroup($table_name, $wpdb, $groups);