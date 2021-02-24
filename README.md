# u05-imdb-clon-u05-team-8 created by GitHub Classroom

Team 8 - Laravel projekt med Breeze och Tailwind CSS installerat.

-

Instruktion nedan för att komma igång med en lokal version av repot.
Vet inte om instruktionerna fungerar för alla - vi får uppdatera här vartefter.

## Instruktioner för att komma igång - Laravel med Vagrant/Homestead-box och inloggad till GitHub med SSH.

-   1. Starta ett terminalfönster.

-   2. cd till din code mapp

-   3. git clone git@github.com:chas-academy/u05-imdb-clon-u05-team-8.git

-   4. cd till u05-imdb-clon-u05-team-8 //skapades i och med clone ovan

-   5. composer install

-   6. npm install

-   7. cp .env.example .env // kopierar ".env.example" till ".env"

-   8. php artisan key:generate

-   9. code . // starta vs code i projektmappen

-   10. Ändra nedanstående i .env filen
        DB_DATABASE=u05 // kan välja ett annat namn här för att inte krocka med andra databaser
        DB_USERNAME=homestead
        DB_PASSWORD=secret

-   11. Starta ett nytt terminalfönster.

-   12. Gå till din Homestead-mapp i nya terminalfönstret.

-   13. vagrant up //kontrollera att Vagrant startar

-   14. code . //start vs code

-   15. Ändra i homestead.yaml under "sites:" - Mappa /public i din nyskapade projektmapp till en url exempelvis: u05.test
        Eventuellt behöver du ändra under "folders:" i din homestead.yaml beroende på hur du strukturerat din utvecklingsmiljö tidigare.

-   16. Lägg till url:en (från punkt 15) i din hosts-fil.

-   17. vagrant reload --provision // starta om Vagrant från din Homestead mapp

-   18. Gå till adminer från din browser, logga in och skapa en databas (Create Database) med samma namn som du valde i .env-filen ovan.

-   19. vagrant ssh // logga in till homestead-boxen

-   20. Gör cd till din projektmapp.

-   21. php artisan migrate //skapar databastabeller - jag har lagt till "title"

-   22. php artisan db:seed // skapar användare och tre filmtitlar

-   23. Gå till din url: http://u05.test/ (om du valde den url:en ovan under punkt 15).
        Jag har lagt till några länkar på välkomstsidan för att kunna testa C-R-U-D mot Title-tabellen.

-   24. Gå tillbaka till terminalen med projektmappen, som startades under punkt 1.

-   25. git status

-   26. git checkout -b testbranch

-   27. Skriv kod / Testa lokalt / Push till GitHub / Skapa Pull request.
