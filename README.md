
# TP Docker – Application Web PHP / MySQL

Ce projet est une application web simple qui affiche une liste de produits. Il est conteneurisé avec Docker et utilise Docker Compose.

## Structure du projet
      .
      ├── screenshots/
      │ ├── docker_build.png
      │ ├── docker_compose.png
      │ ├── other_163019.png
      │ └── vscode_workspace.png
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


## 📸 Captures d’écran

### Environnement de développement (VS Code)
![Espace de travail VS Code](screenshots/vscode_workspace.png)
*Aperçu de l’arborescence des fichiers dans Visual Studio Code.*

### Dockerfile du backend
![Dockerfile](screenshots/docker_build.png)
*Le Dockerfile utilisé pour construire l’image du service web (PHP 8.2 + Apache).*

### Fichier docker-compose
![docker-compose](screenshots/docker_compose.png)
*Extrait du fichier `docker-compose.yml` décrivant les services, les ports et les volumes.*

### Page d’affichage des produits
![Liste des produits](screenshots/other_163019.png)
*Résultat final : la page web affichant les produits extraits de la base de données.*

## 🚀 Installation et exécution

1. **Prérequis** : Docker et Docker Compose installés.
2. **Lancer l’application** :
   ```bash
   docker-compose up -d
   
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
