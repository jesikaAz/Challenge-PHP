<!DOCTYPE html>
<html>

<head>
    <title>Challenge PHP</title>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body> <!-- Exercices sur le PHP  -->

    <h1>Challenge PHP</h1>
    
   
    <div>
    
    <h2>Exercice 1 niveau 2</h2>


    <p> 

	Un algo pour créer un tableau associatif à partir de deux autres tableaux : <br>

    Résultats : 
    
        <?php 
                $cuissons = ["à point", "bien cuit", "saignant", "bleu"];
                $viandes = ["poulet", "boeuf", "mouton"];

        include  "exo1challenge.php";

            print_r(commandes($cuissons,$viandes));
        ?>
    
    </p>

    </div>
    
     <div>
        
    <h2>Exercice 2 niveau 2</h2>

    
    <p> 
        Un algo pour transformer une chaine de caractères en tableau <br>   

        
   	Résultats : 

        <?php 
                $genres = "horreur fantastique action western thriller comédie drame romance historique";

        include  "exo2challenge.php";

                    print_r (explode(" ",$array));          

         ?>
        
    </p> 
        
    </div> 

    <div>
        
    <h2>Exercice 3 niveau 2</h2>

    <p>  Un algo pour faire ressortir les deux derniers éléments d'un tableau dans un nouveau tableau   
 

    Résultats :

    <?php 
            $fruits = ["orange", "banane", "pomme", "fraise", "tomate", "framboise", "noix de coco", "ananas"];
            
        include "exo3challenge.php";

                    print_r(fruit($fruits));           
    ?>
            
    </p>
        
   </div>


   <div>
        
     <h2>Exercice 4 niveau 2</h2>

    <p> 
    Un algo pour supprimer la valeur "milieu" d'un tableau<br>

    Résultats :       
       
        <?php 
                $input = ["Harry", "Hilary", "Harrington", "Hagrid", "Holmes"];
               
                include "exo4challenge.php";

                
                    echo"Les meilleurs prénoms sont :\n";
                    print_r(output($input));
                
        ?>
    
    </p>
  
  </div>   
    
</body>

</html>