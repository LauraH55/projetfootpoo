<?php

namespace Controllers;

use Models\Teams as ModelTeams;
use Models\Coachs as ModelCoachs;

class Teams extends Controller
{
  private $model;
  public function __construct()
  {
    $this->model = new ModelTeams;
  }

  public function listTeams()
  {
    $this->render('views/listTeams.php', [
      'teams' => $this->model->getTeams()
    ]);
  }

  public function showTeam(int $id)
  {
    $this->render('views/showTeam.php', [
      'team' => $this->model->getTeam($id),
      'coach' => (new ModelCoachs)->getCoachByTeam($id)
    ]);

  }
}
