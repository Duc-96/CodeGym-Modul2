<?php

class DBConnection
{
  public $host;
  public $user;
  public $password;
  public $dbname;

  public function __construct($host = '127.0.0.1', $user='root', $password='',$dbname='quanlymvc')
  {
      $this->host = $host;
      $this->password = $password;
      $this->user = $user;
      $this->dbname = $dbname;
  }

  public function connect(){
      return mysqli_connect($this->host, $this->user, $this->password,$this->dbname);
  }
}