<?php
$project = "BIS15-LB2";

$sqlite = new SQLite3('db/307.db');

$page = (isset($_GET['page']))? $_GET['page']:1;
// $page = 1 or page.id = 2
/*$statement = $sqlite->prepare("select jumbo as jumbotitle,page.lead as jumbolead, content.title, content.lead, content.content from page left join content on content.pagefk = page.id where page.id = :id;");
$statement->bindValue(':id',$page);
$result = $statement->execute();*/
$result = $sqlite->query("select jumbo as jumbotitle,page.lead as jumbolead, content.title, content.lead, content.content from page left join content on content.pagefk = page.id where page.id = $page;");

$row = $result->fetchArray();
$jumbo = array('title'=>$row['jumbotitle'],'lead'=>$row['jumbolead']);
$blocks = array();
do{
 $blocks[] = $row;
}while($row = $result->fetchArray());

include 'template/bootstrap-blog.php';