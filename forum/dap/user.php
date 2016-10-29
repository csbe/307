<?php

function login($name,$passwort){
	$statement = Database::db()->prepare("select name,passwort from Benutzer where name=:name and passwort=:passwort;");
	$statement->bindValue(':name',$name);
	$statement->bindValue(':passwort',$passwort);
	$result = $statement->execute();
	$user = $result->fetchArray();
	return $user;
}

function checkUserExist($name,$email){
	$statement = Database::db()->prepare("select id,name,email from Benutzer where name=:name and email=:email;");
	$statement->bindValue(':name',$name);
	$statement->bindValue(':email',$email);
	$result = $statement->execute();
	$user = $result->fetchArray();
	return $user;
}

function register($name,$passwort,$email){
	$statement = Database::db()->prepare("insert into Benutzer (name,passwort,email) values (:name,:passwort,:email);");
	$statement->bindValue(':name',$name);
	$statement->bindValue(':passwort',$passwort);
	$statement->bindValue(':email',$email);
	$result = $statement->execute();
}
