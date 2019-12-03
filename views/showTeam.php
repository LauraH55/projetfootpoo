<?php $extend = 'public/index.php'; ?>

<div class="container description" style="color: black;">
  <div class="row">
    <div class="col-md-8">
      <h1><?php  echo $team->getName(); ?></h1>
      <img src="<?php echo $team->getLogo();?>" alt="">
      <p>Nom : <?php echo $team->getName(); ?> </p>
      <p>Fondé en : <?php echo $team->getFundationDate()->format('d/m/Y'); ?> </p>
      <p>Président : <?php echo $team->getPresident(); ?></p>
      <p>
        Entraîneur :
      </div>
    </div>
  </div>
