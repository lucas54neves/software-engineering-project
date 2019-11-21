<?php
    class Connection {
        private $servername;
        private $username;
        private $password;
        private $bd;
        private $conn;

        function __construct() {
            $this->servername = "localhost";
            $this->username = "root";
            $this->password = "";
            $this->bd = "imobiliaria";
            $this->conn = null;
        }

        function getConnection() {
            if ($this->conn == null) {
                $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->bd);
            }
            if (!$this->conn) {
                die("Conexão falhou: ".$conn->connect_error);
            }
            return $this->conn;
        }

    }

?>
