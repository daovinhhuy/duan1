<?php  
require 'i.php';
class FileLogger implements ILogger{ 
	public function log($message){
		echo sprintf("Log %s to the file\n",$message);			 
	}
}


class DBLogger implements ILogger{
	public function log($message){
		echo sprintf("Log %s to the database\n",$message);
	}
}