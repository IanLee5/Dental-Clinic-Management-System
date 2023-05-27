<?php
    define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_DATABASE', 'dental_mgmt');

    function tmp_db_connect($server = DB_SERVER, $username = DB_USERNAME, $password = DB_PASSWORD, $database = DB_DATABASE, $link = 'db_link') {
        global $$link;
        // if (PCONNECT == 'true') {
        //     $server = "p:" . $server;
        // }
        $$link = mysqli_connect($server, $username, $password, $database);
        if (!mysqli_connect_errno()) {
            mysqli_set_charset($$link, 'utf8');
        }
        @mysqli_query($$link, 'set session sql_mode=""');
        return $$link;
    }

    function tmp_db_disconnect($link = 'db_link'){
        global $$link;
        return mysqli_close($$link);
    }

    function tmp_query($query, $link = 'db_link') {
        global $$link;
        $result = mysqli_query($$link, $query);
        return $result;
    }

    function tmp_get_object($db_query) {
        return mysqli_fetch_object($db_query);
    }

    function tmp_get_array($db_query) {
        return mysqli_fetch_array($db_query, MYSQLI_ASSOC);
    }

    function redirect($url, $parameters = '') {
        return "<script>window.location = '" . $url . "" . $parameters . "'</script>";
    }

    function alert($string) {
        return "<script>alert('" . $string . "')</script>";
    }

    function script($string) {
        return "<script>" . $string . "</script>";
    }
?>