<?php

//create an array for the rank of a card// 

$ranks = ['A', 2, 3, 4, 5, 6, 7, 8 ,9 ,10, 'J', 'Q', 'K'];

//create an array for the suits of each card// 

$suits = ['clubs', 'diamonds', 'hearts', 'spades'];

$random = rand(0, 3); //this will run through the suits and give a random suit//

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Deck</title>
  <link href="https://fonts.googleapis.com/css?family=BioRhyme:300" rel="stylesheet">
  <link rel="stylesheet" href="deck.css">
</head>
<body>

  <div id="deck" class="deck">

    <?php foreach ($suits as $suit) { //loop the suits//?> 
      <?php foreach ($ranks as $rank) { //loop the ranks// ?>

    <div class="card">
      <div class="number <?php echo $suit; ?>"><?php echo $rank;?></div> <!-- This is where we change the rank of each card by changing the number value to our rank suit causing it to count up-->
      <div class="suit"><img src="images/<?php echo $suit;?>.png"></div> <!-- This is where we change the suit of each card by placing our suit loop in the center of the .png causing it to cycle through the 4 images-->
      <div class="number <?php echo $suit;?>"><?php echo $rank; ?></div> <!-- This is where we change the rank of the bottom each card by changing the number value to our rank suit causing it to count up-->
    </div>
    <?php } //close the loop for ranks//?>
  <?php }//close the loops for suits?>
  </div>

  <div id="deck" class="deck">

    <?php for ($i = 0; $i < 52; $i++) : ?>
      <?php 
      $suit = $suits [rand(0, count($suits) -1)]; 
      $rank = $ranks [rand(0, count($ranks) -1)]; 
      ?>
     
    <div class="card">
      <div class="number <?php echo $suit; ?>"><?php echo $rank; ?></div> <!-- This is where we change the rank of each card by changing the number value to our rank suit causing it to count up-->
      <div class="suit"><img src="images/<?php echo $suit;?>.png"></div> <!-- This is where we change the suit of each card by placing our suit loop in the center of the .png causing it to cycle through the 4 images-->
      <div class="number <?php echo $suit; ?>"><?php echo $rank; ?></div> <!-- This is where we change the rank of the bottom each card by changing the number value to our rank suit causing it to count up-->
    </div>


  <?php endfor; ?>
  </div>

</body>
</html>