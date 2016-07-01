# Exercice
Exercice de vendredi. A faire tranquillement. L'exo est large, mais vous faites ce que vous pouvez, pas de pression comme les Portugais à l'heure où j'écris ce README :).

## TMP
- Renommer le fichier config.php.dist en config.php en remplaçant les données de configuration

## TODO

- Il faudrait commencer par faire un fork du dépôt
- Ensuite, le cloner en local pour pouvoir commencer à travailler dessus (Console ou Github Desktop)
- Chaque item de la liste peut représenter un commit :camel:

### Première étape

- Créer un fichier config.php avec une connexion à la base de données (bien penser au config.php.dist ;))
- Après ça, on crée un fichier index.php avec 3 includes (header, footer et config)
- On fait notre DOCTYPE, on crée un fichier script.js et un fichier script.css (chacun dans un dossier respectif js et css)

### Deuxième étape

- On crée un fichier composer.json avec composer init ou à la mano. On n'oublie pas de faire un .gitignore pour ignorer le dossier vendor.
- A partir de là, on peut utiliser Altorouter ou autre mais pas obligatoire, pour créer quelques routes.
- Il y a un fichier json dans le dépôt, il faudrait récupérer son contenu via une requête AJAX et afficher les données sur le site.
- Si possible, créer un script PHP qui peut regénérer le fichier JSON avec de nouvelles données aléatoires (Faker).

A la fin, vous pouvez proposer une petite PR ;)
