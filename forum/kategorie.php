<?php
$project = "BIS15-Forum";
$jumbo = array('title'=>'Forum','lead'=>'Willkommen auf dem Forum der Bis15');

include 'dap/database.php';

include 'dap/kategorie.php';

$result = frageResult($_GET['kategorie']);
$row = $result->fetchArray();
$content = '<div class="row">';
do{
$content .=<<<EOT
<div class="col-lg-4">
    <p>{$row['frage']}</p>
    <p><a class="btn btn-primary" href="#" role="button">Zeige Antworten &raquo;</a></p>
</div>
EOT;
}while($row = $result->fetchArray());
$content .= '</div>';

include 'template/bootstrap-justified.php';
