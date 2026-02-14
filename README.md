# Codes Manager

## Opis aplikacji
Codes Manager to aplikacja webowa stworzona w Laravel 11, umożliwiająca zarządzanie kodami liczbowymi (10-cyfrowymi).  
Główne funkcjonalności:  
- Wyświetlanie listy wszystkich kodów w bazie danych  
- Generowanie nowych, losowych i unikalnych kodów  
- Usuwanie wybranych kodów z bazy danych  
- Walidacja danych po stronie backendu  
- Obsługa kolizji i duplikatów w bazie  

Frontend wykorzystuje **Tailwind CSS** do szybkiego stylowania formularzy i tabel.

---

## Instrukcja uruchomienia projektu

1. **Sklonuj repozytorium**

```bash
git clone <URL_DO_REPO>
cd codes-manager

Zainstaluj zależności PHP

composer install


Skonfiguruj plik środowiskowy .env

Skopiuj plik .env.example do .env

cp .env.example .env


Ustaw dane bazy danych:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=codes-manager
DB_USERNAME=homestead
DB_PASSWORD=secret


Wygeneruj klucz aplikacji

php artisan key:generate


Uruchom migracje bazy danych

php artisan migrate


Zainstaluj zależności frontendowe

npm install


Uruchom Vite w trybie deweloperskim

npm run dev


Uruchom serwer Laravel (jeśli nie korzystasz z Homestead)

php artisan serve


Strona powinna być dostępna pod: http://localhost:8000/codes