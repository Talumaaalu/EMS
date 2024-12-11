<?php
class Connection {

    private static $connect = NULL;

    public static function getInstance() {
        if (Connection::$connect === NULL) {
            try {
                // Database credentials
                $host = "localhost";
                $database = "register";
                $username = "root";
                $password = "";

                $dsn = "mysql:host=" . $host . ";dbname=" . $database;
                Connection::$connect = new PDO($dsn, $username, $password);
                // Set PDO error mode to exception
                Connection::$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Database connection failed: " . $e->getMessage());
            }
        }

        return Connection::$connect;
    }

    public static function getMySQLDate($date) {
        if (preg_match('/^\d{2}-\d{2}-\d{4}$/', $date)) {
            $date_arr = explode('-', $date);
            return $date_arr[2] . '-' . $date_arr[1] . '-' . $date_arr[0];
        } else {
            throw new Exception("Invalid date format. Expected dd-mm-yyyy.");
        }
    }
}

// Simple MySQLi connection for legacy code
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'register';
$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} else {
    // Debug message (remove in production)
     echo "MySQLi connection successful!";
}
?>
