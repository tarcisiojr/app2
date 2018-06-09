<?php

function print_in_table($object) {
    echo "<div class='center'>";
    echo "<table class='center'>";
    foreach ($object as $key => $value) {
        echo "<tr><td>$key</td><td>$value</td></tr>";
    }
    echo "</table>";
    echo "</div>";
}

$endpoint = 'http://'.$_ENV['HOST_SERVICO_APP1'].'/servico.php';
echo "Endpoint: " . $endpoint;

print_in_table(json_decode(file_get_contents($endpoint), true));

print_in_table($_REQUEST);

print_in_table($_ENV);

print_in_table($_SERVER);

phpinfo();