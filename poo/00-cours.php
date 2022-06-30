<!doctype html>
<html lang="fr">
  <head>
    <title>Introduction - cours programmation orientée objet</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>

    <div class="p-5 bg-light">
        <div class="container">
            <h1 class="display-3">POO : la programmation orientée objet</h1>
            <p class="lead text-center mt-3">Introduction</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Historique</h2>
                <p>La notion d'objet a été introduite dans les langages de programmation en 1962 par le langage simula. Cette façon de programmer a évoluée avant d'être popularisée en 1983 avec la sortie du langage C++, un langage orienté objet dont l'utilisation ressemble à celle du langage C.</p>
                <p>Cette nouvelle façon de programmer répond à plusieurs besoins.</p>
                <ul>
                    <li>Elle facilite les changements importants dans le programme.</li>
                    <li>En cas de changements dans les langages elle facilite la mise à niveau</li>
                </ul>
                <p>La POO va permettre de faire face aux changements majeurs qui auraient pu demander de reprendre un programme de A à Z. Mais elle va demander également une nouvele façon de programmer et de réfléchir à l'organisation du code. 3 stratégies sont alors à mettre en place.</p>
                <ul>
                    <li>Modéliser différemment</li>
                    <li>Modulariser</li>
                    <li>Encapsuler</li>
                </ul>
            </div> <!-- Fin de la col-12 -->
            
            <div class="col-12">
                <h2 class="text-center">Les avantages de la POO</h2>
                <p>Le principal avantage de la POO est de faciliter la réutilisation d'un module. Ainsi on pourra reprendre les méthodes (fonctions) d'une classe existente dans une nouvelle classe grâce à la notion d'héritage.</p>
                <p>Une autre chose facilitée par l'orienté objet est la lecture du code. En effet on comprendra plus facilement une instruction <code>->ajout</code>, qu'un if else avec des multiples conditions dans une boucle. La force de cette façon de programmer est qu'elle se calque sur la réalité physique. Une classe sera par exemple Renault. Les objets ou instanciations de cette classe seront $voiture1, $voiture2, etc... L'objet est donc la voiture. Cet objet aura les caractéristiques représentées par des variables, appelées propriétés, et des comportements représentés par des fonctions appelées méthodes. En conclusion les avantages de cette façon de programmer sont les suivants:</p>
                <ul>
                    <li>La facilitation du travail collaboratif</li>
                    <li>La simplification de la mainenance</li>
                    <li>L'assouplissement du code</li>
                </ul>

                <p>Cette approche est tout de même moins intuitive que l'approche procédurale. La POO oblige en effet à réfléchir et modéliser avant de programmer.</p>
            </div><!-- Fin de la col-12 -->
            
        </div>
    </div>



    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>