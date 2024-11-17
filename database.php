<!-- config/database.php -->
<?php
class Database {
    private static $instance = null;
    private $connection;
    
    private $server = 'localhost';
    private $database = 'proyecto3';
    private $username = 'root';
    private $password = '';
    
    private function __construct() {
        try {
            $this->connection = new mysqli(
                $this->server,
                $this->username,
                $this->password,
                $this->database
            );
            $this->connection->set_charset("utf8");
            
            if ($this->connection->connect_error) {
                throw new Exception("Error de conexión: " . $this->connection->connect_error);
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    public function getConnection() {
        return $this->connection;
    }
}

?>