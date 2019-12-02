<?php $extend = 'public/index.php'; ?>

<div class="container">
  <div class="row">
    <?php foreach ($teams as $team) { ?>
      <div class="card-deck col-md-3 mt-5 carte">
        <div class="card">
         <img src="<?php echo $team->getLogo();?>" class="card-img-top logo" alt="...">
         <div class="card-body">
           <h5 class="card-title">
             <a href="teams/<?php echo $team->getId(); ?>"><?php echo $team->getName();?></a>
           </h5>
         </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
