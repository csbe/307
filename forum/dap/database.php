<?php 

class Database{

 public static function db(){
	return new SQLite3('db/forum.db'); 
 }

}
