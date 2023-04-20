<?php
  class connect{
     public $connect;
	 public $querys;
	 public $valid;
	 var $target_file;
	public function __construct($setting){

			$this->connect=mysqli_connect($setting["server"],$setting["userName"],$setting["serverPassword"],$setting["databaseName"]);
	}
	
	public function q($sql){
		$this->querys=$this->connect->query($sql);
	}

	public function rawQuery(String $sql){
		
		return $this->connect->query($sql);
	}

  }
?>