<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">


    <title>Historique</title>
</head>
<body>
<!-- HEADER -->

<div class="titre">
               
               <h1>Avec  <img src="IMG/ampoule2.png" alt=""> gérer vos ampoules devient cool</h1>
      </div>
      <br>
  <!-- Section -->

    <h1>Historique des changements d'ampoules</h1>
    

   
    <table>
    

        <tr>
            <th>ID</th>
            <th>Date_changement</th>
            <th>Etage</th>
            <th>Position</th>
            <th>Prix(€)</th>
            <th>Modifier/Supprimer</th>
        </tr>

        <tr>
            
                <?php
                 require_once('db.php');  

                ?> 
           
        </tr>
        

    </table>

    <p><a href="index.php"> Ajouter </a></p>


   
    
</body>
</html>