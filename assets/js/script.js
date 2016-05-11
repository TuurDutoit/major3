(() => {

  const $rat = document.querySelector(".home .rat");
  const $voteButtons = document.querySelectorAll(".vote button");

  const animateRat = () => {
    $rat.classList.toggle("up");
  }

  const upgradeHeart = $heart => {
    if($heart.classList.contains("empty")) {
      $heart.classList.remove("empty");
      $heart.classList.add("half");
    }
    else {
      $heart.classList.remove("half");
      $heart.classList.add("full");
    }
  }

  const downgradeHeart = $heart => {
    if($heart.classList.contains("full")) {
      $heart.classList.remove("full");
      $heart.classList.add("half");
    }
    else {
      $heart.classList.remove("half");
      $heart.classList.add("empty");
    }
  }

  const getHeartToUpgrade = $rating => {
    return $rating.querySelector(".half") || $rating.querySelector(".empty");
  }

  const voted = (id, $heart) => {
    localStorage["votedFor"+id] = true;
    upgradeHeart($heart);
  }

  const notVoted = (id, $heart) => {
    localStorage["votedFor"+id] = false;
    downgradeHeart($heart);
  }

  const vote = e => {
    let $button = e.target;
    let id = $button.dataset.solutionId;

    if(!localStorage["votedFor"+id]) {
      let $article = $button.parentElement.parentElement;
      let $rating = $article.querySelector(".rating");
      let $heart = getHeartToUpgrade($rating);

      voted(id, $heart);
      fetch("vote.php?solution_id="+id).then(function(res) {
        if(!res.ok) {
          notVoted(id, $heart);
        }
      });
    }
  }



  const init = () => {
    setTimeout(animateRat, 1);
    setInterval(animateRat, 4000);

    for(var i = 0, len = $voteButtons.length; i < len; i++) {
      $voteButtons[i].addEventListener("click", vote);
    }
  }

  init();

})();
