# SimplePOS Laravel Foundations

IT0049 TFA5 — Angelo Kacey N. Pineda, TW33.

A local Laravel 12 application with Home, About, Customer Accounts, and User Accounts pages. CustomerController and UserController each define five fictional records in static PHP arrays. Blade @foreach loops render the records. Every page shares a layout with navigation to all four pages.

## Run locally

Requires PHP 8.2 or later, Composer, and the standard Laravel PHP extensions.

```powershell
composer install
Copy-Item .env.example .env
php artisan key:generate
php artisan serve --host=127.0.0.1 --port=8055
```

Open http://127.0.0.1:8055. CSS is served directly from public/css/app.css; no npm install or frontend build is needed. After the first setup, start-local.cmd starts the app.

## Pages

| URL | Controller | Blade view |
| --- | --- | --- |
| / | PageController@home | pages/home.blade.php |
| /about | PageController@about | pages/about.blade.php |
| /customers | CustomerController@index | customers/index.blade.php |
| /users | UserController@index | users/index.blade.php |

Routes are in routes/web.php. The shared layout is resources/views/layouts/app.blade.php. These foundations pages are read only; account editing and authentication are outside this activity.

## Data and database files

The displayed account records come only from the two controller arrays. No database connection or migration is required to view the four pages. File sessions and file cache are configured in .env.example. Laravel's standard migration and seeder files remain in database/ for the raw project submission; they do not supply the displayed records. No database export applies to these static arrays.

## Inspect and verify

```powershell
php artisan about
php artisan route:list --except-vendor
php artisan view:cache
php artisan test --compact
```

All four activity routes returned HTTP 200 during local verification. Both built-in starter tests passed. The three activity controllers were scaffolded with Artisan and then implemented.

## Submission status

Source repository: https://github.com/Angelowww11/TFA5_Laravel_POS

The application is prepared for local use. Hosting is pending. Screenshots and the completed worksheet are in the sibling TFA5-Submission folder, separate from this source package. No changes were made to the existing CodeIgniter midterm deployment.

## References

- https://laravel.com/docs/12.x/installation
- https://laravel.com/docs/12.x/routing
- https://laravel.com/docs/12.x/blade

## Visual design

Botanical editorial styling inspired by [Vivid Website by BL/S](https://dribbble.com/shots/27544505-Vivid-Website), with original generated landscape artwork, Cormorant Garamond headings and Manrope text. Motion includes drifting artwork, pointer parallax, circular line rotation, and gentle section entrances. Pause motion saves the preference; reduced motion settings are respected. Existing application behavior and data sources are preserved.
