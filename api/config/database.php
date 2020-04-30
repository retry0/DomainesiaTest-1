<?php


class Database{


    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "dmnsa";
    public $connect;
  
    function __construct()
    {
      $this->connect = mysqli_connect($this->host,
      $this->user,
      $this->password,
      $this->database);

      if (!$this->database)
        echo "Database tidak ditemukan";
      if (!$this->connect)
        echo "Tidak bisa terkoneksi dengan database";
    }

}
