<?php
    class Model
    {
        protected $dbconn;

        public function __construct(){
            $host = 'localhost';
            $dbuser = 'root';
            $dbuserpass = '11RFmaritz@'; //ganti ini ya man teman, sesuai dengan punyanya masing masing
            $dbname = 'ngopagkuy';
            $dbport = '3306';

            $this->dbconn = new mysqli($host, $dbuser, $dbuserpass, $dbname, $dbport);

            if ($this->dbconn->connect_errno) {
                die('Database connection failure on' . $this->dbconn->connect_error);
            }
        }
    }
?>
