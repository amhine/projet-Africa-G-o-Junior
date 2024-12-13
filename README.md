# Gestion des Pays Africains et Villes
## Description
Ce projet permet de gérer les informations sur les pays africains et leurs villes. Les utilisateurs peuvent ajouter, modifier, supprimer et afficher les pays, ainsi que leurs villes, avec des détails comme la population, la langue officielle et le type de ville (capitale ou autre). Le système est basé sur une base de données relationnelle et un script PHP pour gérer les actions CRUD (Créer, Lire, Mettre à jour, Supprimer).

## Fonctionnalités
- **Ajout de pays  :** Permet d’ajouter un pays africain avec ses informations (nom, population, langue, etc.).
- **Modification et suppression :** Permet de modifier ou supprimer un pays existant et ses villes associées.
- **Affichage des pays et villes :** Affiche la liste des pays africains avec leurs villes clés et informations associées.
- **Gestion des villes :** Ajout et gestion des villes d’un pays avec des détails comme le type (capitale ou autre).
## Structure de la Base de Données
La base de données est composée de deux tables principales :

- **Pays :** ID, Nom, Population, Langues officielles, Continent.
- **Villes :** ID, Nom, Description, Type (Capitale ou autre), ID pays.
## Technologies Utilisées
- **PHP :** Pour gérer la logique côté serveur et les actions CRUD.
- **MySQL :** Pour la gestion de la base de données.
- **HTML/CSS :** Pour l'interface utilisateur.
