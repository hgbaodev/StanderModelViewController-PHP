<?php
class DB{
    protected $con;
    protected $servername = "127.0.0.1";
    protected $username = "root";
    protected $dbname = "mvc";
    protected $password = "";

    function __construct()
    {
        $this->con = mysqli_connect($this->servername,$this->username,$this->password);
        mysqli_select_db($this->con,$this->dbname);
        mysqli_query($this->con,"Set names 'utf8'");
    }
}
?>