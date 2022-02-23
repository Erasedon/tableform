<?php 
//  $creertab = array("admin,admin,era,era,azerty,azerty,dev1234,dev1234");

 $creertab = [
     [
         "pseudo" => "era",
         "mdp" => "era"
        ],
        [
            "pseudo" => "azerty",
            "mdp" => "azerty"
        ],
        [
            "pseudo" => "dev1234",
            "mdp" => "dev1234"
        ],
        [
            "pseudo" => "admin",
            "mdp" => "admin"
        ], 
        [
        "pseudo" => "test4567",
        "mdp" => "test4567"
     ],
     [
        "pseudo" => "test789123",
        "mdp" => "test789123"
     ]
];
  
    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['mdp']; 
    
// var_dump($_POST);
// var_dump(($creertab[$i]["pseudo"] != $pseudo) && ($creertab[$i]["mdp"] != $mdp ));
   if(isset($pseudo ,$mdp)){
        $i = 0;      
                  $sizeoftab = sizeof($creertab)-1;
        do {

                echo( "<h1>ne correspond pas $i $sizeoftab </h1>");

                $i++;
        }
    while    ( ($i < $sizeoftab)&& ($creertab[$i]["pseudo"] != $pseudo) && ($creertab[$i]["mdp"] != $mdp ) );
                if($creertab[$i]["pseudo"] == $pseudo){
                    echo ( "<h1>valider connexion $pseudo , $mdp </h1>");
                }else{
                    echo "<h1> invalide $pseudo , $mdp </h1>"; 
                }
  
 }
   /// autres version de la boucle///

            // if (isset($mdp,$pseudo)){
                //     // if(in_array(["pseudo" => $pseudo, "mdp" =>$mdp], $creertab)){
                //     //     echo " <h1>valider connexion $pseudo , $mdp </h1>";
                //     // }else{
                //     //     echo "<h1> invalide $pseudo , $mdp </h1>";
                //     // }
                

                
                // }else{
                //     echo "<h1>  $pseudo , $mdp est vide </h1>";
                // }

    /// autres version de la boucle ///

    include 'connexion.php';

    if(isset($pseudo ,$mdp)){
          
      $sql = "INSERT INTO `users`(`pseudo`,`mdp`) VALUES ('".$pseudo."','".$mdp."')"; 
      $prepare = $bdd->prepare($sql);   
       $prepare ->execute();
      $result = $prepare->fetchAll();

    }

?>  