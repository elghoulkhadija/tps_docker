<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Docker – Application PHP/MySQL</title>
    <style>
        /* Style intégré pour la lisibilité et la présentation */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
            color: #333;
        }
        h1, h2, h3 {
            color: #0d6efd;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin: 30px 0;
        }
        .screenshot {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            overflow: hidden;
            width: 300px;
            transition: transform 0.2s;
        }
        .screenshot:hover {
            transform: scale(1.02);
        }
        .screenshot img {
            width: 100%;
            height: auto;
            display: block;
            border-bottom: 1px solid #ddd;
        }
        .screenshot p {
            margin: 10px;
            font-size: 0.9em;
            text-align: center;
            color: #555;
        }
        pre {
            background: #1e1e1e;
            color: #d4d4d4;
            padding: 15px;
            border-radius: 5px;
            overflow-x: auto;
        }
        code {
            background: #eaeaea;
            padding: 2px 5px;
            border-radius: 3px;
            font-family: 'Courier New', monospace;
        }
        .info-box {
            background: #e7f3ff;
            border-left: 5px solid #0d6efd;
            padding: 10px 15px;
            margin: 20px 0;
            border-radius: 0 5px 5px 0;
        }
    </style>
</head>
<body>
    <h1>🐳 TP Docker – Application Web PHP / MySQL</h1>

    <p>Ce projet est une application web simple qui affiche une liste de produits. Il est conteneurisé avec Docker et utilise Docker Compose pour orchestrer les services backend (PHP/Apache) et base de données (MySQL).</p>

    <h2>📁 Structure du projet</h2>
    <pre>
.
├── screenshots/                 # Dossier contenant les captures d'écran
│   ├── Capture d’écran 2026-02-28 162804.png
│   ├── Capture d’écran 2026-02-28 162913.png
│   ├── Capture d’écran 2026-02-28 162947.png
│   └── Capture d’écran 2026-02-28 163019.png
├── tp_backend/
│   ├── Dockerfile
│   ├── api.php
│   ├── config.php
│   └── index.html
├── tp_frontend/
│   ├── tp1/                # (dossier optionnel)
│   └── style.css
├── docker-compose.yml
└── README.md                     # Ce fichier
    </pre>

    <h2>📸 Aperçu des captures d'écran</h2>
    <p>Les images suivantes illustrent la structure et le fonctionnement du projet. Cliquez sur une image pour l'agrandir (ouvre l'original).</p>

    <div class="gallery">
        <div class="screenshot">
            <a href="screenshots/Capture%20d%E2%80%99%C3%A9cran%202026-02-28%20162804.png" target="_blank">
                <img src="screenshots/Capture%20d%E2%80%99%C3%A9cran%202026-02-28%20162804.png" alt="Arborescence et extrait docker-compose">
            </a>
            <p>🔹 Arborescence et extrait docker-compose.yml</p>
        </div>
        <div class="screenshot">
            <a href="screenshots/Capture%20d%E2%80%99%C3%A9cran%202026-02-28%20162913.png" target="_blank">
                <img src="screenshots/Capture%20d%E2%80%99%C3%A9cran%202026-02-28%20162913.png" alt="Dockerfile backend">
            </a>
            <p>🔹 Dockerfile du backend (PHP 8.2 + Apache)</p>
        </div>
        <div class="screenshot">
            <a href="screenshots/Capture%20d%E2%80%99%C3%A9cran%202026-02-28%20162947.png" target="_blank">
                <img src="screenshots/Capture%20d%E2%80%99%C3%A9cran%202026-02-28%20162947.png" alt="Docker Desktop images">
            </a>
            <p>🔹 Images construites dans Docker Desktop</p>
        </div>
        <div class="screenshot">
            <a href="screenshots/Capture%20d%E2%80%99%C3%A9cran%202026-02-28%20163019.png" target="_blank">
                <img src="screenshots/Capture%20d%E2%80%99%C3%A9cran%202026-02-28%20163019.png" alt="Page d'affichage des produits">
            </a>
            <p>🔹 Rendu de la page web (liste des produits)</p>
        </div>
    </div>

    <h2>🚀 Installation et exécution</h2>
    <div class="info-box">
        <strong>Prérequis :</strong> Docker (version 20.10+) et Docker Compose.
    </div>
    <ol>
        <li>Clonez ce dépôt (ou placez les fichiers dans un répertoire).</li>
        <li>Lancez les services : <code>docker-compose up -d</code></li>
        <li>Accédez à l'application : <a href="http://localhost:8080" target="_blank">http://localhost:8080</a></li>
    </ol>

    <h2>🛠 Détails techniques</h2>
    <ul>
        <li><strong>Backend :</strong> image <code>tp_backend-web</code> basée sur <code>php:8.2-apache</code>, avec l'extension <code>mysql</code> (dépréciée ; pensez à migrer vers <code>mysqli</code>).</li>
        <li><strong>Base de données :</strong> <code>mysql:8.0</code> avec volume persistant <code>db_data</code>.</li>
        <li><strong>Réseau :</strong> communication via le nom de service <code>db</code>.</li>
    </ul>

    <h2>⚠️ Remarques</h2>
    <ul>
        <li>Dans le <code>Dockerfile</code>, la ligne <code>COPY tp2/ /var/www/html/</code> devrait probablement être <code>COPY . /var/www/html/</code> (adaptez selon votre structure).</li>
        <li>Les captures d'écran sont stockées dans le dossier <code>screenshots/</code> à la racine. Pour les visualiser hors ligne, ouvrez simplement ce dossier.</li>
    </ul>

    <hr>
    <p style="text-align: center;">📅 Février 2026 – Travaux pratiques Docker</p>
</body>
</html>
