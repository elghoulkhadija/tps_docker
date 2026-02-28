
# TP Docker – Application Web PHP / MySQL

Ce projet est une application web simple qui affiche une liste de produits. Il est conteneurisé avec Docker et utilise Docker Compose.

## Structure du projet
      .
      ├── screenshots/
      │ ├── vscode_workspace.png # Arborescence du projet dans VS Code
      │ ├── docker_build.png # Dockerfile du backend
      │ ├── docker_compose.png # Fichier docker-compose.yml
      │ └── other_163019.png # Page web affichant la liste des produits
      ├── tp_backend/
      │ ├── Dockerfile
      │ ├── api.php
      │ ├── config.php
      │ └── index.html
      ├── tp_frontend/
      │ ├── tp1/
      │ └── style.css
      ├── docker-compose.yml
      └── README.md



## Captures d’écran

### Arborescence du projet (VS Code)
![Arborescence VS Code](screenshots/vscode_workspace.png)
*Aperçu de l’organisation des fichiers et dossiers dans l’éditeur.*

### Dockerfile du backend
![Dockerfile](screenshots/docker_build.png)
*Contenu du `Dockerfile` utilisé pour construire l’image PHP/Apache.*

### Fichier docker-compose.yml
![docker-compose](screenshots/docker_compose.png)
*Extrait du fichier de composition décrivant les services `web` et `db`.*

### Page web des produits
![Page produits](screenshots/other_163019.png)
*Rendu de l’application affichant la liste des produits en provenance de la base de données.*

## Installation et exécution

1. **Prérequis** : Docker (version 20.10+) et Docker Compose.
2. **Lancez les services** :
   ```bash
   docker-compose up -d

## Installation

```bash
  docker-compose up -d
  Accédez ensuite à http://localhost:8080.
  
  Détails techniques
  Backend : PHP 8.2 + Apache, extension mysql (à migrer vers mysqli).
  
  Base de données : MySQL 8.0 avec volume persistant.
  
  Réseau : communication via le nom de service db.
