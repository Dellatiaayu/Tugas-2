<?php
class Connection {

    public function get_connection(){
        $host = "localhost";
        $database = "db_skincare";
        $username = "root";
        $password = "";
        $connect = new msqli($host, $database, $username, $password);
        return $connect;
    }
}

?> 