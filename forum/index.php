<?php
$project = "BIS15-Bootstrap";
$jumbo = array('title'=>'Dynamisch','lead'=>'Lead Text dynamisch');

$blocks = array(array('title'=>'first','danger'=>'Gefährlich','lead'=>'leadtext',
'text'=>'der text'),
array('title'=>'second','lead'=>'leadtext 2',
'text'=>'der text'),
array('title'=>'third','lead'=>'leadtext 3',
'text'=>'der text'));


$js = '$(document).ready(function(){
	setTimeout(function(){	
	$.ajax({
		url: "form.php",	
		success: function(result){
			$(".jumbotron").html(result);
		},
	});
},3000);
});';

include 'template/bootstrap-justified.php';