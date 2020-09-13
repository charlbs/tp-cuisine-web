<!Doctype html>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" href="css/style.css">
<link rel="stylesheet" href="css/style.css">

        <html>
         <head>
        <title>exercice </title>
        <meta charset="utf-8">
    <style>
     .i{
            position: absolute;
            background-color: peachpuff;
    font-size: 35px;
    top: -7%;
    left: 30%;
        }
        div{
            position:relative;
            border:solid 1px black;
            width:50%;
            height:80vh;
           text-align: center;
          
        }
        .input_text{
            border:none;
            margin:8px;
            width:30%;
            height:40px;
            background:none;
            border-bottom:solid 1px black;
        }
        .input_text:focus{
            outline: none;
            background:none;
            
        }
        .input_text:focus:valid{
            border:solid 2px green;
            
        }
        .input_text:focus:invalid{
            border:solid 2px red;
            
        }
        .input_submit_connexion{
            margin:8px;
            width:50%;
            height:40px;
            background-color:green;
            cursor:pointer;
            border:none;
        }
        
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: peachpuff;
        }
        span{
            font-size: 30px;
            color:green;
            font-style:italic;
        }
        a{
          text-decoration: none;
           color:green;
           font-size: 25px;
            cursor:pointer;
            border:none;
        }
        .buton{
           
            margin:8px;
            width:50%;
            height:40px;
            background:none;
            border:solid 1px green;
        }
        
    </style>
 
    </head>
        <body>
            <div>
            <?php
        $bdd = new PDO ('mysql:host=localhost;dbname=camtourist1', 'root', '');

        if(isset($_GET['submit']))
        {
        
            if(isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['email']) AND isset($_GET['pseudo']) AND isset($_GET['mdp']) AND isset($_GET['mdp1']))
            {
                if($_GET['prenom'] !="" && $_GET['nom'] !="" && $_GET['email'] !="" && $_GET['pseudo'] !="" && $_GET['mdp'] !="" && $_GET['mdp1'] !="")
                {
                    $prenom = htmlspecialchars($_GET['prenom']);
                    $nom = htmlspecialchars( $_GET['nom']);
                    $email = htmlspecialchars( $_GET['email']);
                    $pseudo = htmlspecialchars( $_GET['pseudo']);
                    $mdp = htmlspecialchars( $_GET['mdp']);
                    $mdp1 = htmlspecialchars( $_GET['mdp1']);

                    $requete = "INSERT INTO user(prenom, nom, email, pseudo, mdp, mdp_confirm) VALUES('$prenom','$nom', '$email', '$pseudo', '$mdp', '$mdp1')";
                    $execute = $bdd-> query($requete);
                    $valider="vous étes maintenant menbre de camtourist"
                    ?>
                   <p><?php echo($valider) ?></p>
                    <?php  
                }
            }
        }
        ?>

            <form method="GET" action="">
            <b><i class="i">CAMTOURIST</i></b><br>
            <center><span>Inscription</span></center><br>
           <input type="text" placeholder="Prénom" name="prenom"class="input_text"pattern="[a-z]{5,}">
           <input type="text" placeholder="nom" name="nom"class="input_text"pattern="[a-z]{5,}">
           <br><input type="email" placeholder="email" name="email"class="input_text"required>
           <br><input type="text" placeholder="pseudo" name="pseudo"class="input_text"pattern="[a-z]{5,}" title="le pseudo doit contenir des chifres">
           <input type="password" placeholder="password" name="mdp"class="input_text" pattern="[a-z]{8,}">
           <input type="password" placeholder="confirmé" name="mdp1"class="input_text"  pattern="[a-z]{8,}">
           <br><input type="submit" value="enregistrer" name="submit" class="buton"><br></input><br><br><a href="conection.php" >conectez vous</a>
        </form>
    </div>
    
         </body>
         </html>
       

         
            