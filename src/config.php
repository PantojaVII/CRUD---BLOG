<?php
 $mysql = new mysqli('localhost', 'root', '', 'blog');
 $mysql->set_charset('utf8');
if ($mysql == false) {
    echo "Erro no banco de dados";
}

?>