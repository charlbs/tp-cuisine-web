
<?php
try { 
  
    $bdd = new PDO ('mysql:host=localhost;dbname=camtourist1', 'root', '');
     $pseudo = htmlspecialchars($_GET['pseudo']);
     $mdp = htmlspecialchars( $_GET['mdp']);
     $affiche = $bdd->query('SELECT * FROM  user'); 
     $id = $affiche->fetch();

     if($id['pseudo']== $pseudo && $id['mdp']== $mdp)
     {
      ?>
      <style>
           .i{
            font-size:35px;
        }
           body{
            margin:0px;
            width:100%;
            padding:0px;
            overflow-x: hidden;
           
        }
           nav{
            color:white;
            background:#313131;
            height:50px;
            padding-left:15px;
           padding-top:1%;
           
            width:100%;
        }
        .div{
     
           width:40%;
           height: 400px;
           text-align: justify;
           margin-left: 30px;
        }
        img{
            object-fit: cover;
        }
      </style>

        <nav>
                <b><i class="i">CAMTOURIST</i></b>
            </nav>
            <br>
            <div class="div">
                <p><b><i>La Nouvelle Liberté</i></b> est un monument célèbre monté dans la ville de DOUALA au CAMEROUN, et plus précisément dans le quartier deido.</p>
            <center><img src="../img/amg.jpeg"></center>
                    <p><h3>L'œuvre</h3>

Nouvelle liberté

La statut de la nouvelle liberté

Monument de la nouvelle liberté situé au rond point Deido de Douala
La Nouvelle Liberté est la plus célèbre et emblématique œuvre de Douala. Cette sculpture monumentale est aujourd'hui devenue le symbole de la ville. Produite par Joseph-Francis Sumégné en 1996, la Nouvelle Liberté est une majestueuse sculpture de 12 mètres constituée de fer de récupération, érigée au milieu du Rond Point Deido, le plus fréquenté de Douala. Son envergure est de 5 mètres et sa masse totale de 8 tonnes.

Cette œuvre rend hommage à une pratique contemporaine de la ville: la culture du recyclage, du démontage et du ré-assemblage des objets, de la capacité des citoyens à «se débrouiller» dans de nombreuses situations complexes. Bien qu'aujourd'hui La Nouvelle Liberté soit devenue une icône de la ville, cette sculpture a été surnommée le Njo Njo de Deido (ce qui signifie le mal, le monstre de Deido).

Cette désignation négative est basée sur les fortes protestations menées par les médias locaux et les populations indigènes contre La Nouvelle Liberté. Les premières polémiques concernaient principalement les caractéristiques esthétiques de la sculpture, réalisée à partir d'un ensemble de pièces métalliques de récupération montées sur une ossature de chaudronnerie.

Cependant, une violente polémique a aussi été soulevée par les médias sur les origines de l'artiste (en provenance de la région de l'Ouest du Cameroun) en prenant le pli d'une lutte ethnique entre la population indigène et non indigène de Douala. Ces diatribes ont conduit à des attaques et du vandalisme envers l'œuvre.

Pour ces raisons, La Nouvelle Liberté n'a été achevé par son créateur, et officiellement inaugurée par le Délégué du Gouvernement auprès de la communauté urbaine que onze ans plus tard au cours du Salon Urbain SUD2007, et doual’art en a fait don à la municipalité de Douala. En 2007, la municipalité de Douala a financé le socle sur lequel repose la sculpture aujourd'hui. L'œuvre fait désormais partie du patrimoine municipal et est devenue l'emblème de la ville de Douala.

Le rond-point où La Nouvelle Liberté a été installée est considéré comme la porte d'entrée de la ville, carrefour circulatoire le plus important, d'où partent les principaux boulevards de la ville vers le centre (à travers le quartier Akwa), vers les quartiers populaires de l'Est, et hors de Douala (par le biais du pont du Wouri et du quartier Bonabéri). Après l'installation et le don de La Nouvelle Liberté à la municipalité de Douala, cette dernière a beaucoup investi sur l'urbanisation du Rond Point Deido, en particulier par l'éviction des marchés informels autour de la zone, l'installation de lampadaires, l’aménagement des routes, et l'entretien du jardin du rond-point.
</p>
                  
            </div>
        <?php
     }
       else{
           ?><center>
           <b>Vous n'etes pas inscrit veuillez vous inscrit</b>
           <br>
           <a href="inscription.php">clicker ici</a>
             </center>
           <?php
       }
    

     }
     

 catch(Exception $e) { // En cas d'erreur, on affiche un message et on arrête tout        
    die('Erreur : '.$e->getMessage()); } 
    ?>            
                
             