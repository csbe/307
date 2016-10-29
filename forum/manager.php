<?php
$PROJEKT="test";
var_DUMP($projekt);

$project = "BIS15-Datenbank Beispiel";

$sqlite = new SQLite3('db/307.db');


if(isset($_POST['title'])) {
	$statement = $sqlite->prepare("insert into content (pagefk,title,lead,content) values (:id,:title,:lead,:content);");
	$statement->bindValue(':id',$_POST['pageid']);
	$statement->bindValue(':title',$_POST['title']);
	$statement->bindValue(':lead',$_POST['lead']);
	$statement->bindValue(':content',$_POST['content']);
	$statement->execute();
}

$pages = $sqlite->query("select * from page;");

$options = '';
while($page = $pages->fetchArray()){
	$options .= '<option value="'.$page['id'].'">'.$page['jumbo'].'</option>';  	
}

$lead =<<<EOT
<form id="myform" method="post" action="">
	<div class="form-group">
    <label for="page">Page</label>
    <select name="pageid" class="form-control" id="page" required>
    	$options
    </select>
  </div>
  <div class="form-group">
    <label for="title">Titel</label>
    <input type="text" class="form-control" id="title" placeholder="Title" required name="title">
  </div>
  <div class="form-group">
    <label for="lead">Lead</label>
    <textarea class="form-control editor" id="lead" placeholder="lead" name="lead"></textarea>
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <textarea class="form-control editor" id="content" placeholder="content" name="content"></textarea>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>    
EOT;

$jumbo = array('title'=>'Content erfassen','lead'=>$lead);
$blocks = array();

$js = '$(document).ready(function(){
	$(".editor").summernote();
});';	


include 'template/bootstrap-justified.php';