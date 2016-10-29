<?php


function kategorieResult(){
	$statement = Database::db()->prepare("select * from Kategorie;");
	
	return $statement->execute();
}

function frageResult($kategorie){
	$statement = Database::db()->prepare("select * from Frage where kategorieFk=:kategorie;");
	$statement->bindValue(':kategorie',$kategorie);
	
	return $statement->execute();
}

function antwortResult($frage){
	$statement = Database::db()->prepare("select * from Anwort where frageFk=:frage;");
	$statement->bindValue(':frage',$frage);
	
	return $statement->execute();
}

function antwortSave($antwort,$name,$frageFk,$benutzerFk){
	$statement = Database::db()->prepare("insert into Antwort (antwort,datum,name,frageFk,benutzerFk) values (:anwort,:datum,:name,:frage,:benutzer);");
	$statement->bindValue(':anwort',$antwort);
	$statement->bindValue(':datum',date());
	$statement->bindValue(':name',$name);
	$statement->bindValue(':frage',$frageFk);
	$statement->bindValue(':benutzer',$benutzerFk);
	$statement->execute();
}

function frageSave($frage,$name,$kategorieFk,$benutzerFk){
	$statement = Database::db()->prepare("insert into Frage (frage,datum,name,kategorieFk,benutzerFk) values (:frage,:datum,:name,:kategorie,:benutzer);");
	$statement->bindValue(':frage',$antwort);
	$statement->bindValue(':datum',date());
	$statement->bindValue(':name',$name);
	$statement->bindValue(':kategorie',$kategorieFk);
	$statement->bindValue(':benutzer',$benutzerFk);
	$statement->execute();
}

function freigabe($id,$whichTable='Antwort'){
	$statement = Database::db()->prepare("update $whichTable set freigabe = 1 where id = :id;");
	$statement->bindValue(':id',$id);
	$statement->execute();
}