<html>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">

    <head>
        <title>exercice </title>
        <meta charset="utf-8">
     <style>
         body{
             background-color: lemonchiffon;
         }
            .div_princi{
                margin: 5%;
                position: relative;
                border: solid green 3px;
                border-radius: 5px;
                width: 90%;
               height: 75%;
            }
            .div_princi_1{
                background: url(img/images.png)no-repeat;
                background-size: cover;
                border-top-left-radius: 5px;
                border-bottom-left-radius: 5px;
                width:50%;
                height: 100%;
                
            }
            .div_princi_2{
                position: absolute;
                left: 50%;
                top: 0%;
                border-top-right-radius: 5px;
                border-bottom-right-radius: 5px;
                width:50%;
                height: 95.5%;
                background-color: white;
                padding-top: 2.5%;
            }
            .img{
                border-top-left-radius: 5px;
                border-bottom-left-radius: 5px;
                width:100%;
                height: 100%;
            }
            h1{
                color: royalblue;
            }
            b{
                color: royalblue;
                margin-left: 21.5%;
               
                font-size: 20px;
            }
            textarea:focus, input:focus{
                outline: none;
                }
            .text{
                margin-left: 21.5%;
                margin-right: 8px;
                margin-top: 8px;
                width: 70%;
                height: 8%;
                border-radius: 5px;
                border: solid 1px grey;
            }
            .texts{
                background-color: royalblue;
                color: white;
                margin-left: 21.5%;
                margin-right: 8px;
                margin-top: 8px;
                width: 70%;
                height: 8%;
                border-radius: 5px;
                border: none;
                cursor: pointer;
            }
            .check{
                margin-left: 21.5%;
                margin-top: 8px;
                
            }
            
            .select{
                width: 100%;
                
            }
            
            #nom:focus:invalid, #email:focus:invalid,#phone:focus:invalid{
                border-bottom:red 3px solid;
               
            }
            #nom:focus:valid, #email:focus:valid,#phone:focus:valid{
                border-bottom:green 3px solid;
            }
        </style>
         
    </head>
    <body>
           <div class="div_princi">
            <div class="div_princi_1">
           
            </div> 
            <div class="div_princi_2">
              <center>
                  <h1>Welcome to Hotel Arina </h1>
            </center>
            <br>
            <b>Sing up buddy</b>
            <br>
            <form method="GET" action="exo6.php">
            <input type="text" placeholder="Name" class="text"name="nom"id="nom"pattern="[A-Z][a-z]{9,}"title="entrez les lettres la tailles maximal est de 5 "><br>
            <input type="email" placeholder="Email"class="text" name="email"id="email"pattern="[a-z0-9._%+-]+@webcodepack.com"><br>
            <input type="text" placeholder="Phone"class="text"name="phone"id="phone"pattern="[6][0-9]{8}"title="veuillez entrez un numéro corecte"><br>
            <input type="text" placeholder="Adresse"class="text"name="adresse"required><br>
            <div class="select"><input type="checkbox"class="check"checked>I agree the terms & conditions</div>
            <input type="submit" value="Send Request"class="texts"name="submit">
            </form>
            
            </div> 
           </div> 
           
    </body>
</html>