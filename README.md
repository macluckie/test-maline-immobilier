
#### Mise en place du test

lien du projet: https://github.com/macluckie/test-maline-immobilier.git  
1: installer le projet: composer install.(avc une version de php 7.7 ou plus).     
3: installer la base données sqlite selon l'environnement.  
4: lancer la migration: php bin/console doctrine:migrations:execute --up DoctrineMigrations\\20220116211757 
5: lancer les tests unitaires: ./vendor/bin/phpunit (sous linux) et sous windows .\vendor\bin\phpunit
6: aller sur l'acceuil pour créer une annonce.  

reste à faire:  
finir les tests: apartmentServiceTest, faires des test d'intégrations.  
améliorer le css. 
securiser les champs du formulaires. 



