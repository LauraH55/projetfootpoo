<?php

namespace Models;
use Entites\Team AS EntityTeam;
class Teams extends Model
{
  public function getTeams ()
  {
    $stmt = $this->db->prepare('SELECT * FROM teams');
    $stmt->execute();
    return $stmt->fetchAll(\PDO::FETCH_CLASS, 'Entities\Team');
  }

  public function getTeam($id)
  {
    $stmt = $this->db->prepare('SELECT * FROM teams WHERE id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetchObject('Entities\Team');
  }
}
