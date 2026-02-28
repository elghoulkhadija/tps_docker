
# TP Docker – Application Web PHP / MySQL

Ce projet est une application web simple qui affiche une liste de produits. Il est conteneurisé avec Docker et utilise Docker Compose.

## Structure du projet
.
├── screenshots/
│ ├── Capture d’écran 2026-02-28 162804.png
│ ├── Capture d’écran 2026-02-28 162913.png
│ ├── Capture d’écran 2026-02-28 162947.png
│ └── Capture d’écran 2026-02-28 163019.png
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

text

## Captures d’écran

![Arborescence et docker-compose](screenshots/Capture%20d%E2%80%99%C3%A9cran%202026-02-28%20162804.png)
*Arborescence et extrait docker-compose.yml*

![Dockerfile backend](screenshots/Capture%20d%E2%80%99%C3%A9cran%202026-02-28%20162913.png)
*Dockerfile du backend (PHP 8.2 + Apache)*

![Images Docker Desktop](screenshots/Capture%20d%E2%80%99%C3%A9cran%202026-02-28%20162947.png)
*Images construites dans Docker Desktop*

![Page d’affichage des produits](screenshots/Capture%20d%E2%80%99%C3%A9cran%202026-02-28%20163019.png)
*Rendu de la page web (liste des produits)*

## Installation

```bash
docker-compose up -d
Accédez ensuite à http://localhost:8080.

Détails techniques
Backend : PHP 8.2 + Apache, extension mysql (à migrer vers mysqli).

Base de données : MySQL 8.0 avec volume persistant.

Réseau : communication via le nom de service db.
