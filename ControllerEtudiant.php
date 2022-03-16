<?php
require_once 'Model\etudiant.php'; 
require_once 'Model\etudiantTransaction.php';
require_once 'View\view.php'; 

class ControllerEtudiant {
private $etudiant ;
private $etudiantTransaction;

public function __construct() {

    $this->etudiant = new Etudiant();
    $this->etudiantTransaction = new EtudiantTransaction(); 
}
 
//pour afficher la liste des étdiants inscrits 
public function welcome() {
        $etudiants = $this->etudiantTransaction->getList(); 
       $view = new View("Welcome"); 
       $view->generate(array('etudiants' => $etudiants));
} 

// la génération de la vue de formule d'inscription 
public function viewAjouter(){
    $view=new View("Ajouter");
    $view->generate([]);
    
}
public function ajouter($nom,$prenom,$age,$cne){
   
    $etudiant=new Etudiant($nom,$prenom,$age,NULL,$cne);
    $this->etudiantTransaction->add($etudiant);
   
}

//pour selectionner par le id 
public function getOne($id) {
    $etudiant = $this->etudiantTransaction->get($id); 
   $view = new View("Etudiant"); 
   $view->generate(array('Nom' => $etudiant->getNom(),'Prenom' => $etudiant->getPrenom(),'Age' => $etudiant->getAge(),'Cne' => $etudiant->getCne(),));
} 

//pour générer la vue de modififcations 
public function viewModifier(){
    $view=new View("Modifier");
    $view->generate([]);
}
//pour faire les modifications 
public function modifier($id,$nom,$prenom,$age,$cne){
    $etudiant=new Etudiant($nom,$prenom,$age,$id,$cne);
    $this->etudiantTransaction->update($etudiant);
}


public function supprimer($id,$nom,$prenom,$age,$cne){
    $etudiant=new Etudiant($nom,$prenom,$age,$id,$cne);
    $this->etudiantTransaction->delete($etudiant);


}
public function viewAction(){
    $view=new View("Action");
    $view->generate([]);
    
}
}