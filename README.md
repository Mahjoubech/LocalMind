# Swlni - Application de Questions Localisées

![Logo de Swlni](path/to/your/logo.png) <!-- Replace with your logo image -->

## Description du projet

**Swlni** est une application web qui permet aux utilisateurs de poser des questions sur leur environnement local et d'obtenir des réponses d'autres utilisateurs situés à proximité. L'application vise à créer une communauté d'entraide où chacun peut partager ses connaissances et ses expériences pour faciliter l'intégration des nouveaux arrivants dans une ville.

## Contexte

Amine vient d'arriver dans une nouvelle ville et se pose de nombreuses questions sur son environnement. Ne connaissant personne, il a besoin d'informations provenant des personnes proches de son lieu de résidence. L'objectif de ce projet est de développer une application qui répond à ce besoin en utilisant le framework Laravel.

## Objectifs

- Améliorer l'expérience utilisateur en réduisant les temps de chargement et en augmentant la réactivité de l'application.
- Utiliser le modèle MVC avec Laravel pour optimiser la gestion de la logique métier, la manipulation des données et la présentation.

## Fonctionnalités

### 🌍 Publication de Questions

- Les utilisateurs peuvent publier des questions liées à leur emplacement.
- Chaque question inclut :
  - **Titre descriptif**
  - **Contenu détaillé**
  - **Emplacement** (géolocalisation ou saisie manuelle)
  - **Date de publication**
- Les questions peuvent être triées par distance pour afficher les plus pertinentes en premier.
- Un champ de recherche permet de rechercher des questions par mots-clés ou lieu.

### 💬 Réponses et Interactions

- Les utilisateurs peuvent répondre aux questions publiées par d'autres membres.
- Les réponses sont visibles directement sous la question correspondante.
- Un système de **favoris** permet aux utilisateurs d’enregistrer leurs questions préférées.

### 📊 Statistiques

- Affichage du nombre total de questions publiées.
- Mise en avant des questions les plus populaires (les plus aimées ou les plus répondues).

### 🎁 Bonus

- **Authentification et Profils** : Chaque utilisateur dispose d’un profil pour gérer ses questions et ses favoris (inscription et connexion par email et mot de passe).
- **Favoris** : Les utilisateurs peuvent ajouter une question à leurs favoris et la retirer à tout moment.
- **Tri intelligent** : Les questions sont automatiquement classées en fonction de la proximité avec l’utilisateur.

## Technologies utilisées

- **Framework Backend** : Laravel (PHP)
- **Frontend** : HTML, CSS, JavaScript
- **Template Engine** : Blade
- **Base de données** : PostgreSQL

## Compétences visées

- Définir le périmètre d’un problème rencontré.
- Rechercher méthodiquement des solutions au problème.
- Installer et configurer l'environnement de travail en fonction du projet.

### Interfaces 


![Diagramme de l'architecture](path/to/your/architecture-diagram.png) <!-- Replace with your diagram image -->
*Diagramme de l'architecture de l'application*

![Interface de publication de questions](path/to/your/question-interface.png) <!-- Replace with your interface screenshot -->
*Interface de publication de questions*

![Interface des réponses](path/to/your/response-interface.png) <!-- Replace with your interface screenshot -->
*Interface des réponses*

## Instructions d'installation

1. Clonez le dépôt :
   ```bash
   git clone https://github.com/votre-utilisateur/swlni.git
