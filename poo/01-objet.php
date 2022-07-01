<!doctype html>
<html lang="fr">

<head>
    <title>Objet - cours programmation orientée objet</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

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
                <h2 class="text-center">Que sont les objets</h2>
                <p>Les objets ressemblent fortement aux variables que l'on connaît (string, integer, boolean, float, array, etc...) mais ces dernières sont limitées et on peut se retrouver bloqué. Par exemple lorsque l'on crée un réseau social et que l'on veut sauvegarder un utilisateur. À ce moment là on voudra définir ses limites, ses droits, etc... Ces tableaux deviennent vite très complexes et si on doit transmettre notre code, les personnes qui ne l'ont pas écrit s'y perdent facilement. Un autre exemple où le procédural est compliqué à appliquer est lorsque l'on s'occupe des dates. Elles sont en effet considérées comme des chaînes de caractères. Et faire des ajouts de jours ou de mois dessus devient très compliqué. Il faudra convertir les données et passer d'un format à l'autre. En orienté objet les manipulations de dates seront beaucoup plus simples.</p>
                <p class="alert alert-secondary">
                    <strong>MaDate</strong> est une classe <br> <strong>$date1 = new MaDate:</strong> sont des objets ou bien des instanciations de cette classe.
                </p>

            </div> <!-- Fin de la col-12 -->

            <div class="col-12">
                <h2 class="text-center">Les propriétés</h2>
                <p>Sur nos différents objets (ou instanciations) nous allons avoir des propriétés, des variables. Un objet pourra contenir plusieurs propriétés mais aussi plusieurs méthodes: sur une classe MaDate on pourra imaginer des propriétés pour afficher le nombre de jours mais aussi des méthodes pour ajouter des jours ou des mois.</p>
            </div><!-- Fin de la col-12 -->

            <div class="col-12">
                <h2 class="text-center">Les méthodes</h2>
                <p>Comme nous en avons parlé au-dessus, les classes peuvent aussi contenir des méthodes. Ces dernières sont en effet des fonctions, appelées méthodes dans le cadre de la POO. Elles ont donc la même nomenclature qu'en procédural : <code>nomMethode();</code></p>
            </div><!-- Fin de la col-12 -->

        </div>
    </div>



    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>