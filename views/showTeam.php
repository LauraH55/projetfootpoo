<?php $extend = 'public/index.php'; ?>

<div class="container description" style="color: black;">
  <div class="row">
    <div class="col-md-8">
      <h1><?php  echo $team['name']; ?></h1>
      <img src="<?php echo $team['logo'];?>" alt="">
      <p>Nom : <?php echo $team['name']; ?> </p>
      <p>Fondé en : <?php echo (new \DateTime($team['fundation_date']))->format('d/m/Y'); ?> </p>
      <p>Président : <?php echo $team['president']; ?></p>
      <p>
        Entraîneur : <a href="./coachs/<?php echo $coach['id']; ?>"><?php echo $coach['name']; ?></a></p>
      </div>
    </div>
  </div>
