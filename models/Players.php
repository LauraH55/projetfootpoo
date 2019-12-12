<?php

namespace Models;


class Players extends Model
{
  public function getPlayersByTeam($id)
  {
    $stmt = $this->db->prepare('SELECT
      players.* , teams.name AS team_name, teams.id AS team_id, players_has_teams.number
      FROM `players`
      INNER JOIN players_has_teams
      ON players.id = players_has_teams.id_player
      INNER JOIN teams
      ON teams.id = players_has_teams.id_team
      WHERE teams.id = :id_team
      AND players_has_teams.number != 0
      ORDER BY players_has_teams.number');
    $stmt->bindValue(':id_team', $id);
    $stmt->execute();
    return $stmt->fetchAll();
  }
}
