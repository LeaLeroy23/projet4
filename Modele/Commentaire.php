<?php

require_once 'Modele/Modele.php';

class Commentaire extends Modele {

  // Renvoie la liste des commentaires associés à un chapitre
  public function getCommentaires($idchapitre) {
    $sql = 'select COM_ID as id, date, author, content from comments'
      . ' where id=?';
    $commentaires = $this->executerRequete($sql, array($idchapitre));
    return $commentaires;

  }

  // Ajoute un commentaire dans la base
  public function ajouterCommentaire($auteur, $contenu, $idchapitre) {
    $sql = 'insert into comments(date, author, Ccontent, id)'
      . ' values(?, ?, ?, ?)';
    $date = date(DATE_W3C);  // Récupère la date courante
    $this->executerRequete($sql, array($date, $auteur, $contenu, $idchapitre));
  }

}
