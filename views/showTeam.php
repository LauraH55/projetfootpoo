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
        Entraîneur : <a href="./coachs/<?php echo $coach['id']; ?>"><?php echo $coach['name']; ?></a>
      </p>
    </div>
    </div>
  </div>

  <div class="dropdown menudr">
    <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
     Effectif <?php echo $team['name']; ?>
    </button>
    <div class="collapse bg-light" id="collapseExample">
      <table class="table">
        <thead class="thead-dark">
          <tr style="font-family: 'Dosis', sans-serif;">
            <th scope="col">Numéro</th>
            <th scope="col">Name</th>
            <th scope="col">Date de naissance</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($players as $key => $player): ?>
            <tr>
              <td><?php echo $player['number']; ?></td>
              <td><?php echo $player['name']; ?></td>
              <td><?php echo (new DateTime($player['birthday_date']))->format('d/m/Y'); ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
