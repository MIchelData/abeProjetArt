Il s'agit ici du repo qui se trouve sur le serveur pour voir la version sur laquelle nous avons travaillé cliquez [ici](https://github.com/MIchelData/BackendProjArt)

# Installation
Cloner ce répértoire Ensuite, modifier le fichier “.env.example” en le renommant “.env”. Il faut aussi modifier une partie de ce document afin de le rendre utilisable. Voici les variables d’environnement à modifier : DB_CONNECTION=”sqlite”Il  faut  changer  les  termes  entre  guillemets  pour  qu’ils  correspondent  aux informations nécessaires pour se connecter à une base de données.Pour que l’application soit fonctionnelle, il va falloir faire une série de commandes :composer install     npm install    npm install bootstrap composer require laravel/ui npm install    Si  vous  voulez  installer  la  base  de  données  dans  un  autre  environnement que le database.sqlite fourni, il vous faudra, dans le fichier du projet, faire les commandes servant à créer la table migration dans notre projet et, dans un deuxième temps, seed les tables de données. Cela va remplir les tables avec les élèves, les professeurs, les matières, etc.$> php artisan migrate   $> php artisan db:seed 
