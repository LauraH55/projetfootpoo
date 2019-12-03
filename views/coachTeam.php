<?php $extend = 'public/index.php'; ?>

<div class="container description" style="color: black;">
  <div class="row">
    <div class="col-md-8" style="font-family: 'Dosis', sans-serif;">
      <h1><?php echo $coach['name']; ?></h1>
      <img  class="pic" src="<?php echo $coach['photo'];?>" alt="photo entraineur">
      <p>Nom : <strong><?php echo $coach['name']; ?></strong></p>
      <p>Date de naissance : <strong><?php echo (new DateTime($coach['birthday_date']))->format('d/m/Y'); ?></strong></p>
      <p>Pays : <strong><?php echo $coach['nationality']; ?></strong></p>
    </div>
  </div>
</div>
