# Zadanie rekrutacyjne

## Instalacja
Uruchomienie aplikacji appA:
```bash
cd appA
./vendor/bin/sail up -d
./vendor/bin/sail share 
```

Uruchomienie aplikacji appB:

```bash
cd appB
./vendor/bin/sail up -d
./vendor/bin/sail share 
```

## Działanie
Wstawianie imienia:
```bash
curl --request POST http://localhost:8080/api/name/{imie}
```

Sprawdzenie imion w bazie danych:
```bash
curl http://localhost:80/api/name
curl http://localhost:80/api/name/{id}
```

