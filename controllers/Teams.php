<?php

namespace Controllers;

use Models\Teams as ModelTeams;
use Models\Coachs as ModelCoachs;
use Models\Players as ModelPlayers;
use Models\Stadiums as ModelStadiums;

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
    $modelPlayer = new ModelPlayers;

    $team = $this->model->getTeam($id);


    $this->render('views/showTeam.php', [
      'team' => $team,
      'coach' => (new ModelCoachs)->getCoachByTeam($id),
      'players' => $modelPlayer->getPlayersByTeam($id),
      'matchsPlayed' => $this->model->getMatchsPlayed($id),
      'matchsNotPlayed' => $this->model->getMatchsNotPlayed($id),
      'stadium' => $this->model->getStadium($team['id_stadium']),


    ]);

  }


}
