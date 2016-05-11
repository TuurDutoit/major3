<?php


require_once(__DIR__ . "/dao/VoteDAO.php");

class Hearts {
  protected $dao;

  function __construct() {
    $this->dao = new VoteDAO();
  }

  public function getRatingForSolution($id) {
    return min($this->dao->countVotesForSolution($id), 10);
  }

  public function getHTMLForRating($rating) {
    $fullHearts = floor($rating / 2);
    $halfHeart = $rating % 2 != 0;
    $emptyHearts = 5 - ceil($rating / 2);

    $html = "";

    for($i = 0; $i < $fullHearts; $i++) {
      $html .= '<span class="heart full"></span>';
    }

    if($halfHeart) {
      $html .= '<span class="heart half"></span>';
    }

    for($i = 0; $i < $emptyHearts; $i++) {
      $html .= '<span class="heart empty"></span>';
    }

    return $html;
  }

  public function getHTMLForSolution($id) {
    $rating = $this->getRatingForSolution($id);
    return $this->getHTMLForRating($rating);
  }
}


 ?>
