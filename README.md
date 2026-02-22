# TSV Wartenberg – Sitepackages

Monorepo fuer die TYPO3-Sitepackages von [tsv-wartenberg.de](https://www.tsv-wartenberg.de/).

## Struktur

```
v1/   tsv_wartenberg_bootstrap       (aktuelles/originales Design)
v2/   tsv_wartenberg_bootstrap_v2    (modernisiertes Design)
```

## Umschalten auf dem Server

```bash
# Zu v2 (neues Design) wechseln:
php vendor/bin/typo3 extension:deactivate tsv_wartenberg_bootstrap
php vendor/bin/typo3 extension:activate tsv_wartenberg_bootstrap_v2
php vendor/bin/typo3 cache:flush

# Zurueck zu v1 (altes Design):
php vendor/bin/typo3 extension:deactivate tsv_wartenberg_bootstrap_v2
php vendor/bin/typo3 extension:activate tsv_wartenberg_bootstrap
php vendor/bin/typo3 cache:flush
```

Wichtig: Im TypoScript-Template (Web > Template > Includes) muss das
Static Include zur jeweils aktiven Extension passen.

## Deployment

Beide Extensions werden automatisch per GitHub Action deployed:
- Push auf `main` → Prod-Server
- Push auf `test` → Test-Server
