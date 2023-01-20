<?php

// use \PDO;

class Conn {
    
    private static $conn;
    private static $instance;
    private const DSN = 'mysql:host=localhost;dbname=mibasedatos';
    private const USER = 'nataly';
    private const PASSWD = '1234';
    private const OPTIONS = [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    private const KEY = "7fa8a6e9fde2f4e1dfe6fb029af47c9633d4b7a616a42c3b2889c5226a20238d";
    private const CYPHER = "aria128";

    public static function singleton() {
        if(!isset(self::$instance)) {
            self::$instance = new Conn();
        }

        return self::$instance;
    }

    private function __construct() {
        try {
            self::$conn = new PDO(self::DSN, self::USER, self::PASSWD, self::OPTIONS);
        } catch (\PDOException $e) {
            echo "!ERROR: ".$e->getMessage();
        }
    }

    public function getConn() {
        return self::$conn;
    }

    public function encrypt($data) {
        // $data = openssl_encrypt($data, self::CYPHER, self::KEY);

        return base64_encode($data);
    }

    public function decrypt($data) {
        // $data = openssl_decrypt(base64_decode($data), self::CYPHER, self::KEY);
        
        // return $data;

        return base64_decode($data);
    }
}

?>