<?php 

    // PDO Database Class
    // Going To Connect To Database
    // Going To Create Prepared Statements
    // Going To Bind Values
    // Going To Return Rows & Results

    class Database {
        private $host = DB_HOST;
        private $user = DB_USER;
        private $password = DB_PASSWORD;
        private $dbname = DB_NAME;

        private $dbh;
        private $stmt;
        private $error;

        public function __construct() {
            // Set DSN
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );

            // Create PDO Instance
            try{
                $this->dbh = new PDO($dsn, $this->user, $this->password, $options);
            } catch(PDOException $error) {
                $this->error = $error->getMessage();
                echo $this->error;
            }
        }
    }

?>