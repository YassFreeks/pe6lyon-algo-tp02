Début de la procédure afficherDurée

    Entrée : secondes

    1. Définir une variable heures à 0, une variable minutes à 0, et une variable secondesRestantes égale à secondes

    2. Si secondesRestantes est supérieur ou égal à 3600 :
        a. Déterminer le nombre d'heures entières contenues dans secondesRestantes et stocker le résultat dans  la variable heures

        b. Soustraire le nombre d'heures entières en secondes de secondesRestantes

    3. Si secondesRestantes est supérieur ou égal à 60 :
        a. Déterminer le nombre de minutes entières contenues dans secondesRestantes et stocker le résultat dans la variable minutes

        b. Soustraire le nombre de minutes entières en secondes de secondesRestantes

    4. Afficher le résultat sous la forme d'une chaîne de caractères :
        a. Si heures est supérieur à 0 : afficher "heures minutes secondes" avec heures, minutes et secondes remplacés par les valeurs calculées

        b. Sinon, si minutes est supérieur à 0 : afficher "minutes secondes" avec minutes et secondes remplacés par les valeurs calculées

        c. Sinon : afficher "secondes" avec secondes remplacé par la valeur calculée

Fin de la procédure afficherDurée