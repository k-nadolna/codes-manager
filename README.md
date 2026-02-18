# Codes Manager

## Opis aplikacji
Codes Manager to aplikacja webowa stworzona w Laravel 11, umożliwiająca zarządzanie kodami liczbowymi (10-cyfrowymi).  
Główne funkcjonalności:  
- Wyświetlanie listy wszystkich kodów w bazie danych  
- Generowanie nowych, losowych i unikalnych kodów  
- Usuwanie wybranych kodów z bazy danych  
  

Frontend wykorzystuje **Tailwind CSS** do szybkiego stylowania formularzy i tabel.

---

## Instrukcja uruchomienia projektu

1. Sklonuj repozytorium

git clone https://github.com/k-nadolna/codes-manager

cd codes-manager


2. Zainstaluj zależności PHP

composer install


3. Skonfiguruj plik środowiskowy .env

Skopiuj plik .env.example do .env

cp .env.example .env


4. Ustaw dane bazy danych:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=codes-manager
DB_USERNAME=
DB_PASSWORD=


5. Wygeneruj klucz aplikacji

php artisan key:generate


6. Uruchom migracje bazy danych

php artisan migrate


7. Zainstaluj zależności frontendowe

npm install

8. Kompilacja assetów

npm run build


9. Uruchomienie projektu w web serwerze 
(Przykład dla Homestead:)

vagrant up



