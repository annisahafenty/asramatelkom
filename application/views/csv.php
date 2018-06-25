<?php

class csv extends mysqli{
  private $state_csv = false;
  public function __construct(){
    parent::__construct("localhost","root","","dbasrama");
    if ($this->connect_error){
      echo "Fail to connect to Database: ". $this->connect_error;
    }
  }
  public function import ($file){
    $file = fopen($file, 'r');

    while ($row = fgetcsv($file)){

      $value = "'". implode("','", $row) ."'";
      $q = "INSERT INTO tbpenghuni(nama_penghuni,jenis_kelamin,program_studi,nomor_hp,kota,provinsi,username,password) VALUES(". $value .")";

      if ($this->query($q)){
        $this->state_csv=true;
      }else{
        $this->state_csv=false;
    }
  }
  if ($this->state_csv){
    echo("<script>alert('File Uploaded');window.location.href='admin_datapenghuni.php';</script>");
  }else{
    echo("<script>alert('Error Upload File');window.location.href='admin_uploadfile.php';</script>");
  }
}
}

?>
