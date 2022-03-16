<?php
 require_once 'ControllerEtudiant.php'; 
 require_once 'View\view.php';

 class Route{

 private $ctrlEtudiant;

 public function __construct() {
    $this->ctrlEtudiant = new ControllerEtudiant(); 
}

public function routeRequest() { 
        $var="test";
try {
          
        if (isset($_GET['action'])) {

                if ($_GET['action'] == 'ajouterr') {
                        $this->ctrlEtudiant->viewAjouter(); 
                }
                
                else if ($_GET['action'] == 'etudiant') {
                            $this->ctrlEtudiant->welcome(); 
                }
            
                else if ($_GET['action'] == 'afficher') {
                      
                        $this->ctrlEtudiant-> getOne($_GET['id']) ;
                }
                else if($_GET['action'] == 'ajouter'){
                        
                        $this->ctrlEtudiant->ajouter($_GET['nom'],$_GET['prenom'],$_GET['age'],$_GET['cne']);
                        $this->ctrlEtudiant->welcome();
                }
                
                else if ($_GET['action'] == 'modify') {
                        $this->ctrlEtudiant->modifier($_GET['id'],$_GET['nom'],$_GET['prenom'],$_GET['age'],$_GET['cne']); 
                        $this->ctrlEtudiant->welcome();
                }
                
                else if($_GET['action'] == "modifier"){
                    
                        $this->ctrlEtudiant->viewModifier();
                } 
                
                else if($_GET['action'] == "supprimer"){
                    
                        $this->ctrlEtudiant->supprimer($_GET['id'],$_GET['nom'],$_GET['prenom'],$_GET['age'],$_GET['cne']);
                        $this->ctrlEtudiant->welcome();

                }
                
                else {
                        $this->ctrlEtudiant->viewAction();
                } 
        }else{
                $this->ctrlEtudiant->viewAjouter(); 
        } 
}catch (Exception $e) {

        $this->erreur($e->getMessage()); 
}
 }
   // Affiche une erreur
 private function erreur($msgErreur) {

 $view = new View("Error"); 
 $view->generate(array('msgErreur' => $msgErreur));

 } 

}
  