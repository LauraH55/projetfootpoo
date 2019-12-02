<?php

namespace Controllers;

class Teams extends Controller
{
  public function listTeams()
  {
    $this->render('views/listTeams.php');
  }

}
