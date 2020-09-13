<?php
 $bdd = new PDO('mysql:host=127.0.0.1;dbname=exercice_6', 'root', ''); 

 if(isset($_GET['submit']))
 {
   if(isset($_GET['nom']) AND isset($_GET['email'])AND isset($_GET['phone'])AND isset($_GET['adresse']))
   {
       if($_GET['nom'] != "" && $_GET['email'] !="" && $_GET['phone'] !="" && $_GET['adresse'] !="")
       {
        $nom = htmlspecialchars($_GET['nom']);
       $email = htmlspecialchars( $_GET['email']);
       $phone = htmlspecialchars( $_GET['phone']);
       $adresse = htmlspecialchars( $_GET['adresse']);
       $requete = "INSERT INTO client(nom, email,phone, adresse) VALUES('$nom', '$email', '$phone', '$adresse')";
       $execute=$bdd->query($requete);       
       }
   }  
 }
?>
<html>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">

    <head>
        <title>exercice </title>
        <meta charset="utf-8">
     <style>
        *{
            font-family:arial;
        }
         table{
             position:absolute;
             top:0%;
             background-color:grey;
             color:white;
             border:solid black 1px;
             width:100%;
             
             text-align:center;
         }
         tr td{
            border:dashed black 1px;
         }
         span{
                  color:black;
         }
     </style>
</head>
    <body>

        <table class="table" cellspacing="0">
            <tr><td>
                <spam><u>ID</u></spam>
            </td>
            <td>
                <spam><u>NOM</u></spam>
            </td>
            <td>
                <spam><u>Email</u></spam>
            </td>
            <td>
                <spam><u>Phone</u></spam>
            </td>
            <td>
                <spam><u>Adresse</u></spam>
            </td>
        </tr>
      
        <?php
    $affiche = $bdd -> query('SELECT * FROM  client  ');
    while( $id = $affiche->fetch())
    {
        ?>
       
            <tr>
                <td><?php echo  $id['id']?></td>
                <td><?php echo  $id['nom']?></td>
                <td><?php echo  $id['email']?></td>
                <td><?php echo  $id['phone']?></td>
                <td><?php echo  $id['adresse']?></td>
            </tr><br>
        
        <?php
    }
    
    ?>
      </table>

      
</body>
</html>
    