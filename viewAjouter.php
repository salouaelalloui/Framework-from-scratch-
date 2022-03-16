
<head>
<title>
    Inscription
</title>
<link href=".\css\bootstrap.min.css" rel="stylesheet">
<style>
    form{
        margin:7%;
        border:  rgba(49, 47, 73, 0.555) outset;
        border-radius:10px;
        padding: 5%;
        margin-top: 5%;
    }
    #sub{
        margin-left: 90%;
        background:#0d1428 ;
       border-color: #0d1428;
    }
    input{ 
        width: 30%;
        }
</style>

</head>
<?php $this->title = "espace Etudiant"; ?>
<body >

<form style="background-color: rgb(255, 255, 255);" class ="form" method="GET" action="" id="form" > 
   
    <h1 style ="color : #0d1428"> Inscription: </h1> </br>
     
     <div class="input-group mb-3">
    <input class="form-control" type="hidden" name="action" value="ajouter">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nom :</span>
        <input  class="form-control" type="text" name="nom" placeholder="Enter name" required>
      
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Prenom :</span>
        <input style="width:30%"  class="form-control" type="text" name="prenom" placeholder="Enter first name"required>
   </div>

   <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-sm">Age :</span>
    <input class="form-control" type="number" name="age" required>
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Cne :</span>

        <input  class="form-control" type="text" name="cne" placeholder="Enter cne" required>
    </div>

      
</br>
    <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3" id="sub"  > s'inscrire </button>
      
      </div>
      

</form>

</body>
