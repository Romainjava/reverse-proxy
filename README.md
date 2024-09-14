# Reverse Proxy TMDB

Ce projet est un reverse proxy simple pour l'API TMDB, conçu pour protéger votre clé API tout en permettant aux consommateurs d'accéder aux données TMDB.

## Prérequis

- PHP 7.4 ou supérieur
- Composer

## Installation

1. Clonez ce dépôt :
   ```bash
   git clone https://github.com/votre-nom/reverse-proxy-tmdb.git
   cd reverse-proxy-tmdb
   ```

2. Installez les dépendances :
   ```bash
   composer install
   ```

3. Copiez le fichier `.env.example` en `.env` et ajoutez votre clé API TMDB :
   ```bash
   cp .env.example .env
   ```
   Ouvrez `.env` et remplacez `votre_clé_api_tmdb` par votre vraie clé API TMDB.

4. Démarrez le serveur PHP :
   ```bash
   php -S localhost:8000
   ```

## Utilisation

Une fois le serveur démarré, vous pouvez faire des requêtes à l'API TMDB via :

```
http://localhost:8000/chemin/vers/endpoint
```

Par exemple, pour obtenir les films populaires :

```
http://localhost:8000/movie/popular
```

Le proxy ajoutera automatiquement votre clé API à chaque requête.

## Sécurité

- Ne partagez jamais votre fichier `.env` contenant votre clé API.
- Ce proxy est conçu pour un usage local ou dans un environnement de développement contrôlé.

## Support

Pour toute question ou probl