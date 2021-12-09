# concours-chants-projet-commun

## brief:

    -> Projet commun, réalisation d'une interface permettant de s'inscrire à un concours de chants.
    -> Fonctionnalités principales: -un compte utilisateur qui permet le choix de la chanson pour le concours.
                                    -un espace administration pour valider les chansons des participants.

### À faire une fois ce repo cloné pour le faire fonctionner:
    -> créer une bdd concoursChant puis y importer le fichier concoursChant.sql.
    ->Dans le fichier connexionBdd.php remplir les données  $servername = ''; $username = ''; $password = ''.
    

#### Logs Admin (pour accéder à l'interface administrateur):

    -> mail: admin@mail.fr
    -> mdp: 123

### Suivi/Lecture des fichiers:
    -> pageAccueil.php (PARTICIPER -> s'inscrire.php)
    -> s'inscrire.php -> données réceptionnées par validInscription.php
    -> seconnecter.php -> données réceptionnées par connectSiAdmin.php
    -> SI ADMIN: redirection vers compte-administration.php
    ->Si USER: redirection vers compte-utilisateur.php
   
