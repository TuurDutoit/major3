<?php

require_once(__DIR__ . "/DAO.php");

class VoteDAO extends DAO {
  public function insertVote($id) {
    $sql = "INSERT INTO `ehb_votes`(solution_id, value) VALUES(:id, 1)";
    $statement = $this->pdo->prepare($sql);
    $statement->bindValue(":id", $id);
    $statement->execute();
  }

  public function countVotesForSolution($id) {
    $sql = "SELECT COUNT(*) FROM `ehb_votes` WHERE `solution_id`=:id";
    $statement = $this->pdo->prepare($sql);
    $statement->bindValue(":id", $id);
    $statement->execute();
    return $statement->fetch(PDO::FETCH_NUM)[0];
  }
}

 ?>
