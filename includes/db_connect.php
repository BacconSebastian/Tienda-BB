<?php
    function db_connect(){
        $host = 'localhost'
        $usuario = 'root'
        $password = ''
        $db = 'tienda-bb'

        $conn = new mysqli($host, $usuario, $password, $db);

        $mysqli -> select_db($db) or die ("Unable to select database");
    }
