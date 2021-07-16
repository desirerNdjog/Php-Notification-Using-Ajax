<?php

//fetch.php;
include '../database/DbConnnexion.php';

use App\Database\DbConnexion;

$DB = new DbConnexion();
$PDO = $DB::getPDO();
$query = $PDO->query("SELECT * FROM messages WHERE message_status = 0 ORDER BY idmessages DESC");
$result = $query->fetchAll();
$output = '';
foreach ($result as $row) {
    $output .= '
 <div class="alert alert_default">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <p><strong>' . $row["comment_subject"] . '</strong>
   <small><em>' . $row["comment_text"] . '</em></small>
  </p>
 </div>
 ';
}
$update_query = $PDO->exec("UPDATE messages SET message_status = 1 WHERE message_status = 0");
echo $output;
