# concours-chants-projet-commun

Projet commun: réalisation d'une interface permettant de s'inscrire à un concours de chants.

Suivi des fichiers:



-pageAccueil.php (PARTICIPER -> s'inscrire.php)

-s'inscrire.php -> données réceptionnées par validInscription.php

-seconnecter.php -> données réceptionnées par connectSiAdmin.php 
			SI ADMIN: redirection vers compte-administration.php
			Si USER: redirection vers compte-utilisateur.php
			
Autres fichiers:
-connexionBdd: à reprendre à chaque fois qu'une page a besoin de se connecter à la Bdd, à inclure en début de file: //<?php include './connexionBdd.php'; ?>
