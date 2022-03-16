<style>
table {
    font-family: "Open Sans",Tahoma,Geneva,sans-serif;
    border-style:ouset ;
    
}
table thead{
    background-color: #0c1934;
    color: white;
}
footer{ margin-top:500px}
</style>


<body>
<?php $this->title = "espace Etudiant"; ?>
<table id="liste"  class="table table-hover">
    <thead>
    <th    scope="col"> Id </th>
    <th   scope="col"> Nom</th>
    <th   scope="col"> Prenom </th>
    <th   scope="col"> Age </th>
    <th   scope="col"> Cne </th>
    <th   scope="col"></th>
    <th    scope="col"></th> </thead> <tbody>
<?php foreach ($etudiants as $etudiant): ?>
    <article>
        <header>
       
<tr >
    <td  class="table-light" scope="row"><a class="btn btn-secondary" href="?action=afficher&id=<?= $etudiant->getId() ?>"><?= $etudiant->getId() ?></td>
    <td  class="table-light"><?= $etudiant->getNom() ?></td>
    <td  class="table-light"><?= $etudiant->getPrenom(); ?></td>
    <td  class="table-light"><?= $etudiant->getAge(); ?></td>
    <td  class="table-light"><?= $etudiant->getCne(); ?></td>
    <td class="table-light"><a  class="btn btn-secondary" href="?action=modifier&id=<?php echo $etudiant->getId()?>&nom=<?php echo $etudiant->getNom()?>&prenom=<?php echo $etudiant->getPrenom()?>&age=<?php echo $etudiant->getAge()?>&cne=<?php echo $etudiant->getCne()?>"> Modify </a> </td>
    <td  class="table-light">
     <a class="btn btn-danger" class="button" role="button" href="?action=supprimer&id=<?php echo $etudiant->getId()?>&nom=<?php echo $etudiant->getNom()?>&prenom=<?php echo $etudiant->getPrenom()?>&age=<?php echo $etudiant->getAge()?>&cne=<?php echo $etudiant->getCne()?> " ><span>Supprimer</span>
<div class="icon">
<i class="fa fa-remove"></i>
<i class="fa fa-check"></i>
</div> </a> </td>


<?php endforeach; ?> <tr>

</tbody></table>

</body>
 