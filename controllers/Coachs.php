<?php

namespace Controllers;

use Models\Teams as ModelTeams;
use Models\Coachs as ModelCoachs;

class Coachs extends Controller
{
  private $model;
  public function __construct()
  {
    $this->model = new ModelCoachs;
  }


  public function showCoach(int $id)
  {
    $this->render('views/coachTeam.php', [
      'team' => (new ModelTeams)->getTeam($id),
      'coach' => $this->model->getCoach($id)
    ]);

  }
}
