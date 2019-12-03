<?php

namespace Models;
use Entities\Coach as EntityCoach;

class Coachs extends Model
{
  public function getCoachByTeam($id)
  {
    $stmt = $this->db->prepare('SELECT coachs.*
      FROM coachs INNER JOIN coachs_has_teams AS cht ON cht.id_coach = coachs.id
      INNER JOIN teams ON cht.id_team = teams.id
      WHERE teams.id = :id');
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch();
  }
}
