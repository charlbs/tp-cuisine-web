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
            height:340px;
            text-align:center;
            margin-left:auto;
            margin-right:auto;
        }
        .input_text{
            margin:8px;
            width:50%;
            height:40px;
            background:none;
            border:solid 1px black;
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
    </style>
    </head>
        <body>
            <div>
         

            <form method="GET" action="tourist.php">
            <b><i class="i">CAMTOURIST</i></b><br>
            <center><span>connection</span></center><br>
            <input type="text" placeholder="Pseudo"class="input_text"name="pseudo">
              <br>
              <input type="password" placeholder="Mot de passe"class="input_text"name="mdp">
              <br>
              <input type="submit" value="Connexion"class="input_submit_connexion" name="submit">
              <br>
              <a href="#">informations de compte oubliées ?</a>
              <hr>
              <a href="../php/inscription.php">Créer un compte</a>
            </form>
    </div>
    
         </body>
         </html>
       
         

         