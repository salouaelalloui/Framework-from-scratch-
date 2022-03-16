
<style> footer{ margin-top:499px}
#ac{
     margin-left:40%;  margin-right:10%; margin-top:10%;  font-size:50;
font-family:"Open Sans" , Tahoma,Geneva,sans-serif
}
ul li {
    margin-left: 30px;
    font-size: 400;
}
h3 {
    padding: 10px;
}
</style>

<?php $this->title = "espace Etudiant"; ?>
<h3 >Consultation des informations : </h3> 
<ul id="ul">
<li><?php print_r("Nom : "); 
print_r($Nom);?></li>
<li><?php print_r(" Prenom : ");
print_r($Prenom);?></li>
<li><?php print_r(" Age : ");
print_r($Age);?></li>
<li><?php print_r(" Cne : ");
print_r($Cne);
?></li>
</ul>