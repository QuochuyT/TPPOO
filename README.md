# TPPOO
# Projet de Cartes - Application de Ligne de Commande

Ce projet est une application simple de ligne de commande permettant à l'utilisateur de créer et de gérer des cartes de questions/réponses.

## Structure du Projet

- **index.php** : Le fichier principal du projet. Il permet à l'utilisateur d'ajouter des cartes après avoir spécifié le nombre de cartes qu'il souhaite créer.
- **Card.php** : Représente une entité de carte qui contient une question et une réponse.
- **Listacards.php** : Gère une collection de cartes et fournit la fonctionnalité pour afficher les informations de chaque carte.
- **vendor/** : Contient les bibliothèques installées via Composer.

## Instructions d'Installation

1. **Cloner le dépôt :**

   ```bash
   https://github.com/QuochuyT/TPPOO.git
   ```

2. **Utiliser Composer pour l'autoloading :**

   Assurez-vous d'avoir [Composer](https://getcomposer.org/) installé sur votre machine. Ensuite, exécutez la commande suivante dans le répertoire racine du projet :

   ```bash
   composer install
   ```

## Utilisation

1. **Exécuter le script :**

   Afin de lancer le programme, exécutez la commande suivante dans le répertoire du projet :

   ```bash
   php index.php
   ```

2. **Ajouter des cartes :**

    - Suivez les instructions dans le terminal pour entrer le nombre de cartes.
    - Pour chaque carte, entrez la question et la réponse correspondante.
    - Les informations de toutes les cartes seront affichées à la fin.
