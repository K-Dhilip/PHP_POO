<?php   
    // Pour créer une class, on va utiliser le mot-clé class suivi du nom de notre classe, avec une majuscule. Le nom du fichier, lorsqu'il contient une class doit prendre une majuscule. Attention un fichier de class ne contient que les informations relatives à la classe à l'intérieur, l'affichage se fera sur une autre page.

    class Personnage
    {
        // on définit des caractéristiques de nos personnages grâce à des propriétés. 
        protected $vie = 80;
        public $atk = 20;
        // c'est sûrement par convention et pour s'y retrouver dans le code qu'on déclare notre propriété à cet endroit (on pourrait définir le nom directement dans la page affichage.php mais c'est fortement déconseillé).
        protected $nom;
        // public est la visibilité de notre variable, on en reparlera plus tard pour définir ce qu'elle veut dire, mais il existe aussi par exemple protected.

        // lorsque l'on crée une instance de classe, on fait appel à un constructeur. Si on veut initialiser une donnée dés la création il faudra utiliser la méthode __construct grâce à cette méthode tous les paramètres qui seront passés entre parenthèses permettront de définir les données voulues.

        // En l'occurence, nous voulons définir le nom de notre personnage dés sa création

        public function __construct($nom){
            // grâce à la façon de faire qui suit nous allons pouvoir sauvegarder le nom du personnage passé lors de l'instanciation. Le constructeur permet en fait d'implémenter des propriétés de manière initiale
            $this->nom=$nom;
        }

        // Les GETTERS

    public function getNom(){
        return $this-> nom;
    }

        // Les SETTERS

    public function setNom($nom){
        $this->nom = $nom;
    }

    // On définie une fonction (méthode) qui lorsqu'on l'appelle fait un echo de la phrase

    public function crier(){
        echo "JE PARS À L'ATTAQUE!!!";
    }

    // création de la méthode regénérer. Pour cette méthode il faudra utiliser $this => fait référence au personnage (à l'objet) sur lequel on va appliquer la méthode). Pour cette méthode, le but est de mettre la vie du personnage sur lequel elle est appliquée à 100

    public function regenerer($vie = null){
        // Si on ne précise pas de chiffres en paramètres alors la vie sera régénérée à 100 sinon si en paramètres on passe 5 par exemple alors on rajoutera 5 à la vie de notre personnage
        if(is_null($vie)){
            $this->vie = 100;
        }
        else{
            $this->vie += $vie;
        }
    }

    public function mort(){
        // cette méthode renvoie le booléen false quand le personnage n'est pas mort et true si le personnage est mort
        return $this->vie <= 0;
    }

    protected function empecher_negatif(){
        if ($this->vie < 0){
            $this->vie = 0;
        }
    }


    public function attaque($cible)

    {


    /* $cible represente l'objet passé en paramètre =>en l'occurence cet objet est mario // ici $cible  =$mario*/
    // $this représente l'attaquent
    //$cible représente la personne attaquée
    /*les points de vie de la cible 
    les points d'attaque de l'attaquant */

    $cible->vie -= $this->atk;
    /*  ici je veux afficher quelque chose sur ma page affichage, je dois utiliser return*/

    $cible->empecher_negatif();


    }



    }

    

?>