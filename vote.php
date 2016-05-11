<?php

require_once(__DIR__ . "/dao/VoteDAO.php");
$voteDAO = new VoteDAO();

if(isset($_GET["solution_id"])) {
  $id = $_GET["solution_id"];
  $voteDAO->insertVote($id);
}
else {
  http_response_code(400);
}

 ?>
