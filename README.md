# u05-imdb-clon-u05-team-8 created by GitHub Classroom

Team 8 - IMDB Clone

Implemented with Laravel 8 using Laravel [Breeze](https://laravel.com/docs/8.x/starter-kits#laravel-breeze) for authentication, registration and presenting a dashboard.
Styled with [Tailwind](https://tailwindcss.com/) CSS.
<br>

## MODELS

These are the models used in this project.

-   User - A standard Laravel User augmented with a role.
-   Role - Indicating whether the user is an Administrator or a regular User.
-   Title - A title in the service, could be a Film, TV-show or e.g. a Video Game.
-   Genre - Every title is connected to one or more genres like Comedy, Thriller, Drama etc.
-   Listing - Users can create personal Lists in the system like a Watchlist or Wishlists.
-   Listitem - Implements one row in a User List and connects the row to one Title.
-   Review - Users can write Reviews of Titles. Reviews are published on the site when an Administator confirms the Review is OK to publish.

<br>

## VIEWS

These are the views used in this project.

-   Users
-   Titles
-   Genres
-   Listings
-   Review

Views are written as Blade files (PHP) with semantic HTML.

There are two files included in every view (except the dashboard).

-   header.blade.php - Included at the top of view's code. Opens the HTMl document and outputs a menu, and a message or an error text when applicable.
-   footer.blade.php - Included as the bottom of the view's code. Outputs the footer at the bottom of the page and closes the HTML document.

<br>
## ROUTING

### Endpoints

    /login - Signs in a user.
    /register - Signs up user.
    /logout - Logs off user.
    /dashboard - Show the logged in User's dashboard and management panels.
    /user - Shows all Users that are registered in the service, when logged in as an administrator.
    /title - Shows all titles.
    /listing - Shows logged in Users personal Lists
    /reviews - Shows logged in Users personal Lists

<br>

<br>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Cubet Techno Labs](https://cubettech.com)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[Many](https://www.many.co.uk)**
-   **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
-   **[DevSquad](https://devsquad.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
