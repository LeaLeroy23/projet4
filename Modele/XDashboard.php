<?php
require_once 'Modele/Modele.php';

class Dashboard extends Modele {

  //renvoie la liste des CHAlets du blog
  public function getChapitres(){
    $sql = 'select id, date, title, content from chapters'
      . ' order by id desc';
    $chapitres = $this->executerRequete($sql);
    return $chapitres;
  }

  public function countChapters(){
    $sql = 'select count(id) from chapters';
    $this->numChapters = $chapters->fetchColumn();
    
  }

  /* Renvoie les informations sur un chapitre
  function getChapitre($idChapitre) {
    $sql = 'select id, date, title, content from chapters'
      . ' where id=?';
    $chapitre = $this->executerRequete($sql, array($idChapitre));
    if ($chapitre->rowCount() == 1){
      return $chapitre->fetch();  // Accès à la première ligne de résultat
    } else {
      throw new Exception("Aucun chapitre ne correspond à l'identifiant '$idChapitre'");
    }
  }*/


  }