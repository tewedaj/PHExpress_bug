<?php
  class connect{
     public $connect;
	 public $querys;
	 public $valid;
	 var $target_file;
	public function __construct(){
			$this->connect=mysqli_connect('localhost','root','','live');
	}
	
	public function q($sql){
		$this->querys=$this->connect->query($sql);
	}

	public function rawQuery(String $sql){
		
		return $this->connect->query($sql);
	}

  }
?>