<?php

namespace Models;

class Teams extends Model
{

  const REQ = 'SELECT matchs.*, th.name AS team_home_name, ta.name AS team_away_name
    FROM `matchs`
    INNER JOIN teams AS th
    ON matchs.id_team_home = th.id
    INNER JOIN teams AS ta
    ON matchs.id_team_away = ta.id
    WHERE (th.id = :id_team OR ta.id = :id_team)
  ';

  public function getTeams ()
  {
    $stmt = $this->db->prepare('SELECT * FROM teams');
    $stmt->execute();
    return $stmt->fetchAll();
  }

  public function getTeam($id)
  {
    $stmt = $this->db->prepare('SELECT * FROM teams WHERE id = :id');
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch();
  }

  public function getMatchsPlayed($id) {
    $stmt = $this->db->prepare(self::REQ . ' AND matchs.score_home IS NOT NULL');
    $stmt->bindValue(':id_team', $id);
    $stmt->execute();
    return $stmt->fetchAll();


  }

  public function getMatchsNotPlayed($id) {
    $stmt = $this->db->prepare(self::REQ . ' AND matchs.score_home IS NULL');
    $stmt->bindValue(':id_team', $id);
    $stmt->execute();
    return $stmt->fetchAll();

  }



}
