<?php

namespace Controllers;

use Models\Teams as ModelTeams;

class Teams extends Controller
{
  public function listTeams()
  {
    $model = new ModelTeams;
    $teams = $model->getTeams();
    $this->render('views/listTeams.php', [
      'teams' => $teams,
    ]);
  }

  public function showTeam(int $id)
    $this->render('views/showTeam.php', [
      'team'=> $this->modelTeams->getTeams($id),
      'coach'=> (new ModelCoachs)->getCoachByTeam($id)
    ]);
}
