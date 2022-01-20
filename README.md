## Test Technique Maline

### Pré-requis

- serveur web (Wamp64, ...)
- mise à jour des vhosts (en fonction de votre environnement)
- mise à jour des hosts (exemple ``127.0.0.1 testTech``)

### Installation

Veuillez finir d'installer le projet :
``$ composer install``

## Démarrage

Démarrer le serveur
``php -S localhost:8000 -t public
``

Rendez-vous sur la page d'accueil. Vous devriez voir apparaître : 
"Welcome to Symfony 4.4.32"

## A réaliser 

Développez une mini application qui permettra d'afficher et de modifier des appartements.

La page d'accueil actuelle "Welcome to Symfony 4.4.32" sera remplacée par la liste des appartements.

La liste des appartements permettra d'afficher les appartements et de les modifier. En effet, la sélection d'un appartement affichera un formulaire pour le mettre à jour.
Le formulaire peut-être affiché sur la même page ou sur une autre.

Un appartement est défini par : une adresse, un étage, un nombre de pièce, la présence d'un ascenceur.
La contrainte est que deux appartements ne peuvent pas avoir la même adresse.
Nous allons partir du principe qu'une adresse est stockée dans un unique champ.

Des tests unitaires devront stabiliser l'application.

N'oubliez pas de compléter le README.md (lancement des tests ect).

### Retour : 

Vous disposerez de 7 jours dès réception du test pour le renvoyer. Vous pouvez le renvoyer avant.
Une fois le test terminé, merci de l'envoyer à ``narnodo@maline-immobilier.fr`` et de préciser : 
- méthode pour récupérer le test (de préférence sur git sinon weTransfert)
- temps total passé sur le test
- reste à faire
- pistes d'amélioration dans le travail réalisé

#### Autre 

Je reste à votre disposition si nécessaire, n'hésitez surtout pas à me contacter si besoin : ``narnodo@maline-immobilier.fr``

Pour rappel, ce test évaluera principalement vos démarches et vos bonnes pratiques.

Le délais de 7 jours doit vous permettre de vous organiser, pas de travailler 10h sur le test ;)

#### Renvoi du test   

lien du projet: https://github.com/macluckie/test-maline-immobilier.git  
1: installer le projet: composer install.(avc une version de php 7.7 ou plus).     
3: installer la base données sqlite selon l'environnement.  
4: lancer la migration: php bin/console doctrine:migrations:execute --up DoctrineMigrations\\20220116211757 
5: lancer les tests unitaires: ./vendor/bin/phpunit (sous linux) et sous windows .\vendor\bin\phpunit
6: aller sur l'acceuil pour créer une annonce.   
