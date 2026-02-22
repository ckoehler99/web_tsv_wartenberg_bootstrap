# TSV Wartenberg – Sitepackages (TYPO3 v13)

Monorepo fuer die TYPO3-Sitepackages von [tsv-wartenberg.de](https://www.tsv-wartenberg.de/).

## Struktur

```
v1/   tsvwartenberg           (aktuelles/originales Design)
v2/   tsvwartenberg_modern    (modernisiertes Design)
```

Beide Sitepackages nutzen TYPO3 v13 mit Site Sets und Bootstrap Package v15.

## Umschalten auf dem Server

```bash
# v2 als Composer-Package einrichten (einmalig):
composer config repositories.tsv-modern path packages/tsvwartenberg_modern
composer require tsvwartenberg/tsvwartenberg-modern:@dev

# Im TYPO3-Backend: Sites > Site Configuration
# Site Set von "tsvwartenberg" auf "tsvwartenberg-modern" aendern

# Cache leeren:
php vendor/bin/typo3 cache:flush
```

## Zurueck zu v1

Im TYPO3-Backend die Site Configuration wieder auf das originale
Site Set "tsvwartenberg/tsvwartenberg" umstellen und Cache leeren.

## Deployment

Beide Extensions werden automatisch per GitHub Action deployed:
- Push auf `main` → typo313-prod
- Push auf `test` → typo313-test
