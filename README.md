# BaboWeb

Babo est un site internet permettant la vente de vin en ligne

## Environnement de développement

## Pré-requis

* PHP 7.4
* Composer
* Symfony CLI
* Docker
* Docker-compose
* nodejs et npm

Vous pouvez vérifier les pré-requis (sauf Docker et Docker-compose) avec la commande suivante :

```bash
symfony check:requirements
```

## Lancer l'environnement de développement

```bash
Docker-compose
npm install
npm run build
symfony serve -d
```

## Lancer des tests
```bash
php ./vendor/bin/phpunit --testdox
```