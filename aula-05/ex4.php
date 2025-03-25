<?php
$a = json_decode(file_get_contents('./usuarios.json'), true);

$email = "usu3@email.com";

foreach ($a as $u) {
    if ($u['email'] == $email) {
        echo "Encontrado: <br>";
        echo print_r($u);
        return;
    }
}

echo "Não encontrado: $email";
?>