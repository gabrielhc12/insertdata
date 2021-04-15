<?php
    $MySQLiconn = new MySQLi('localhost','root','','semana5');

    if($MySQLiconn->connect_error){
        die("ERROR : -> ".$MySQLiconn->connect_error);
    }

