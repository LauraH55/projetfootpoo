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
  <div class="container">
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
  <div class="container">
  <div class="dropdown menudr">
    <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapseExample">
     Calendrier <?php echo $team['name']; ?>
    </button>
    <div class="collapse bg-light" id="collapse2">
      <table class="table">
        <thead class="thead-dark">
          <tr style="font-family: 'Dosis', sans-serif;">
            <th scope="col">Domicile</th>
            <th scope="col">Résultats</th>
            <th scope="col">Extérieur</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($matchsPlayed as $match): ?>
            <tr>
              <td><?php echo $match['team_home_name']; ?></td>
              <td><?php echo $match['score_home']; ?> - <?php echo $match['score_away']; ?></td>
              <td><?php echo $match['team_away_name']; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <h3 style="font-family: 'Dosis', sans-serif;">Rencontres à venir</h3>
      <table class="table">
        <thead class="thead-dark">
          <tr style="font-family: 'Dosis', sans-serif;">
            <th scope="col">Domicile</th>
            <th scope="col">Date</th>
            <th scope="col">Extérieur</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($matchsNotPlayed as $match): ?>
            <tr>
              <td><?php echo $match['team_home_name']; ?></td>
                <td><?php echo $match['date']; ?></td>
              <td><?php echo $match['team_away_name']; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
