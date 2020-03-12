<?php
    class db{
        // Properties
        private $dbhost = 'remotemysql.com';
        private $dbuser = '5DgRZRhEhH';
        private $dbpass = '5DgRZRhEhH';
        private $dbname = 's9fVCpNYLk';

        // Connect
        public function connect(){
            $mysql_connect_str = "mysql:host=$this->dbhost;dbname=$this->dbname";
            $dbConnection = new PDO($mysql_connect_str, $this->dbuser, $this->dbpass);
            $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbConnection;
        }
    }
