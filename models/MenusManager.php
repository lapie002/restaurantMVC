<?php

class MenusManager {

  private $_db;

  public function setDb(PDO $db)
  {
     $this->_db = $db;
  }

  public function __construct($db)
  {
    $this->setDb($db);
  }

  public function add(Menu $menu)
  {
    // Préparation de la requête d'insertion.
    // Assignation des valeurs pour le Menu.
    // Exécution de la requête.

   $q = $this->_db->prepare('INSERT INTO Menus(NOM,PRIX) VALUES(:nom,:prix)');

   $q->bindValue(':nom',$menu->getNom());
   $q->bindValue(':prix',$menu->getPrix());

   //$q->bindValue(':nom',$menu->getNom(),PDO::PARAM_STR);
   // $q->bindValue(':prix',0.0);
   // $q->bindValue(':image','hello.jpg');

   $q->execute();

  // $q = bindValue(':degats',$perso->_degats,PDO::PARAM_INT);
  //  $q = bindValue(':degats',0);


    // Hydratation du Menu passé en paramètre avec assignation de son identifiant et du prix initial.
    $menu->hydrate(
      ['id'    => $this->_db->lastInsertId(),
      'nom'    => $menu->getNom(),
      'prix'   => $menu->getPrix()]
    );

  }

  public function count()
  {
    // Exécute une requête COUNT() et retourne le nombre de résultats retourné.
    $q = $this->_db->query('SELECT count(*) FROM Menus')->fetchColumn();

    return $q;

  }

  public function delete(Menu $menu)
  {
    // Exécute une requête de type DELETE.
   $this->_db->exec('DELETE FROM Menus WHERE ID = '.$menu->getId());
  }

  public function exists($info)
  {
    // Si le paramètre est un entier, c'est qu'on a fourni un identifiant.
    if(is_int($info)){
      // On exécute alors une requête COUNT() avec une clause WHERE, et on retourne un boolean.
      return (bool) $this->_db->query('SELECT COUNT(*) FROM Menus WHERE ID = '.$info)->fetchColumn();
    }
    // Sinon c'est qu'on a passé un nom.
    else{
      // Exécution d'une requête COUNT() avec une clause WHERE, et retourne un boolean.
      $q = $this->_db->prepare('SELECT COUNT(*) FROM Menus WHERE NOM = :nom');
      $q->execute([':nom' => $info]);

      return (bool) $q->fetchColumn();
    }
  }

  public function update(Menu $menu)
  {
    // Prépare une requête de type UPDATE.
    $q = $this->_db->prepare('UPDATE Menus SET NOM = :nom, PRIX = :prix WHERE IDMENU = :id');
    // Assignation des valeurs à la requête.
    $q->bindValue(':nom',$menu->getNom());
    $q->bindValue(':prix',$menu->getPrix());

    // Exécution de la requête.
    $q->execute();
  }


   public function getMenu($info)
   {
     // Si le paramètre est un entier, on veut récupérer le menu avec son identifiant.
       // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Menu.
       if(is_int($info)){
         $q = $this->_db->query('SELECT ID, NOM, PRIX FROM Menus WHERE ID = '.$info);

         $donnees = $q->fetch(PDO::FETCH_ASSOC);

         return new Menu($donnees);
       }
     // Sinon, on veut récupérer le personnage avec son nom.
     // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personnage.
     else {
         $q = $this->_db->prepare('SELECT ID, NOM, PRIX FROM Menus WHERE NOM = :nom');
         $q->execute([':nom' => $info]);

         $donnees = $q->fetch(PDO::FETCH_ASSOC);

         return new Menu($donnees);
     }
   }


   public function associationPlatMenu(int $idplat,int $idmenu){

     $q = $this->_db->prepare('INSERT INTO COMPOSER(IDPLAT,IDMENU) VALUES(:idplat,:idmenu)');

     $q->bindValue(':idplat',$idplat);
     $q->bindValue(':idmenu',$idmenu);

     $q->execute();

   }

   public function getPrixMenu(int $idmenu){

     $q = $this->_db->query('SELECT SUM(PRIX) AS prix_total_menu FROM Plats INNER JOIN COMPOSER ON Plats.ID = COMPOSER.IDPLAT  WHERE IDMENU = '.$idmenu);

    //test debug
    //  $q->debugDumpParams();
    //  $res = $q->fetch(PDO::FETCH_ASSOC);
    //  $res = $q->fetchColumn();

    // $res = $q->fetch(PDO::FETCH_NUM);
      $res = $q->fetch();

    // $res = $q;

     var_dump($res);

     return $res;

   }

   public function updatePrixMenu(int $id){

    $newprix = $this->getPrixMenu($id);

    var_dump($newprix['prix_total_menu']);

    $p = $newprix['prix_total_menu'];
    $p = (float) $p;


    // $prix = $newprix['prix_total_menu'];
    // $prix = (float) $prix;

    //  $q = $this->_db->query('SELECT SUM(PRIX) FROM Plats INNER JOIN COMPOSER ON Plats.ID = COMPOSER.IDPLAT  WHERE IDPLAT = '.$id);
    //
    //  $res = $q->fetch(PDO::FETCH_ASSOC);

     $r = $this->_db->prepare('UPDATE Menus SET PRIX = :prix WHERE ID = :id');
     // Assignation des valeurs à la requête.
     $r->bindValue(':id',$id);
    //  $r->bindValue(':prix',$newprix);
     $r->bindValue(':prix',$p);

     // Exécution de la requête.
     $r->execute();


   }

}
