<?php $this->title = "espace Etudiant"; ?>
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
        font-family: "Open Sans",Roboto,Ubuntu,Tahoma,Geneva,sans-serif;
    }
    #sub{margin-left: 90%;
        background:#0d1428 ;
       border-color: #0d1428;}
    input{ width: 30%;
       /* border-width: 10; */
    }
</style>

</head>
<body >

<form style="background-color: rgb(255, 255, 255);" class ="form" method="GET" action="" id="form" > 
   
    <h1 style ="color : #0d1428"> Modification: </h1> </br>
     
     <div class="input-group mb-3">
    <input class="form-control" type="hidden" name="action" value="modify">
    </div>
    <div>
    <input class="form-control" type="hidden" name="id" value=<?php echo $_GET['id']?>>
   </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nom :</span>
        <input  class="form-control" type="text" name="nom" value=<?php echo $_GET['nom']?>>
      
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Prenom :</span>
        <input style="width:30%"  class="form-control" type="text" name="prenom" value=<?php echo $_GET['prenom']?>>
   </div>

   <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-sm">Age :</span>
    <input class="form-control" type="number" name="age" value=<?php echo $_GET['age']?>>
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Cne :</span>

        <input  class="form-control" type="text" name="cne" value=<?php echo $_GET['cne']?> required>
    </div>

      
</br>
    <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3" id="sub"  > modifier </button>
      
      </div>
      

</form>

</body>
