<?php
/**
 * Data accessor class
 *
 * Provides a connection a mySQL database
 * and exposes common db functions.
 *
 * User: aengeln
 * Date: 2013-02-13
 * Time: 22:32
 */

class aenDBaccessor {

    var $mysqli;
    var $database;

    /**
     * Database connect
     *
     * Connects to a database using provided parameters
     * @param string $host Hostname or ip
     * @param int $port Port for database server
     * @param string $db Database name
     * @param string $user Database username
     * @param string $password Database password
     */
    function Connect($host, $port = 8889, $db, $user, $password) {
        $mysqli = new mysqli($host, $user, $password, $db);
        if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        } else {
            echo 'Connected successfully to ' . $mysqli->server_info ;
        }
    }

    /**
     * Closes the database connection
     */
    function CloseConnection() {
        $mysqli->close($dblink);
    }

    function __destruct() {
        $this->CloseConnection();
    }
}

?>