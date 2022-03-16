<?php
class EtudiantTransaction {

private $_db; // Instance de PDO

public function __construct() {
        $this->_db = new PDO('mysql:host=localhost;dbname=infoetudiants;charset=utf8', 'root', ''); 
}
public function add($etud) {
    $q = $this->_db->prepare("INSERT INTO etudiant (nom, prenom, age,cne) VALUES(:nom, :prenom, :age ,:cne)");
    $q->bindValue(':nom', $etud->getNom()); 
    $q->bindValue(':prenom', $etud->getPrenom() ); 
    $q->bindValue(':age', $etud->getAge(), PDO::PARAM_INT);
    $q->bindValue(':cne', $etud->getCne() ); 
    $q->execute(); 
}
public function delete($etud) {

   $q= $this->_db->prepare('DELETE FROM etudiant WHERE id_etudiant =:id '); 
    $q->bindValue(":id",$etud->getId());
    $q->execute();
}
public function get($id) {
    $id = (int) $id;
    $q = $this->_db->query('SELECT id_etudiant, nom, prenom, age ,cne FROM etudiant WHERE id_etudiant = '.$id); 
    $donnees = $q->fetch(PDO::FETCH_ASSOC);
    return new Etudiant($donnees['nom'] , $donnees['prenom'] , $donnees['age']  , $donnees['id_etudiant'],$donnees['cne']); 

}
public function getList() {
 
    $etuds = [];
    $q = $this->_db->query('SELECT * FROM etudiant ORDER BY id_etudiant');
    while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
       // die($donnees['nom']);
         $p = new Etudiant($donnees['nom'] , $donnees['prenom'] , $donnees['age']  , $donnees['id_etudiant'],$donnees['cne']);

         array_push($etuds , $p);
        //$persos.push($p) ; 
    }
return $etuds; 

}
public function update($etud) {
    $q = $this->_db->prepare('UPDATE etudiant SET nom = :nom, prenom = :prenom, age = :age ,cne=:cne WHERE id_etudiant = :id');
    $q->bindValue(':nom', $etud->getNom() ); $q->bindValue(':prenom', $etud->getPrenom()); $q->bindValue(':age', $etud->getAge(), PDO::PARAM_INT); $q->bindValue(':cne', $etud->getCne()); $q->bindValue(':id', $etud->getId());
    $q->execute(); 

}
public function setDb(PDO $db) {
    $this->_db = $db; 

}
}

?>