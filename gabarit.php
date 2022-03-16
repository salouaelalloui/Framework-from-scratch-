<!doctype html>
<html lang="fr">
<head>
      <meta charset="UTF-8" />

        <style> 
            #liste{ width:1200px;  margin-left:5%;margin-bottom: 100px;}
            #insc{ margin-left:-600px;color:#c7c8c9}
            #list{width:1200px;;margin-left:5%;color:#c7c8c9;margin-left:-1150px; }
            #piedBlog{ 
              
                color:#0d1428;
                
             
            }
            nav { 
              
                box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
            }
            body{   background: linear-gradient(#d7e6ff, 10%, 	#d7e6ff);
                background-repeat: no-repeat;
                background-size:cover;
                background-attachment: fixed;
              }
                #form{
                    margin-left:7%;
                    margin-top:53px;
                    margin-right:7%;
                    margin-bottom:3%;
                  
                    padding: 5%;
                  
                }
                input{ width: 30%;}
              #back{  background-size:cover;}
            
                table{ margin-top:30px;margin-left:50px}
                .bg-custom-1 {
              background-color: #85144b;
            }

            .bg-custom-2 {
                position:fixed;
            background-image: linear-gradient(15deg, #0d1428 0%, #5a6a96 100%);
            }
        </style>
<link href="View\bootstrap.min.css" rel="stylesheet">
<title><?= $title ?></title>
 </head>
    <body>
    <header>
      <nav  class="navbar navbar-dark bg-custom-2">
            <div class="container-fluid">
                <a class="navbar-brand" href="?action=ajouterr">Espace étudiant</a>
                <span><a  id="insc" class="navbar-brand" href="?action=ajouterr"> Inscription</a></span>
             <span> <a  id="list" class="navbar-brand" href="?action=etudiant" > Liste des étudiants  </a></span>
            </div>
  
      </nav>
    </header>
      
           
            <div id="content">
                <?= $content ?>
            </div> <!-- #contenu --> 
 <footer id="piedBlog">
Blog réalisé avec PHP, HTML5 et CSS.
</footer> 
 <!-- #global -->
    </body>
</html>