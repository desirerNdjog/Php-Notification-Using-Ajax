<?php

use App\Database\DbConnexion;

include '../database/DbConnnexion.php';

if (isset($_POST['subject'])) {
    $DB = new DbConnexion();
    $PDO = $DB::getPDO();
    $subject = $_POST['subject'];
    $comment = $_POST['comment'];
    $status = 0;

    $query = $PDO->exec("INSERT INTO messages (comment_subject, comment_text, message_status) VALUES ('$subject','$comment', $status)");
}
