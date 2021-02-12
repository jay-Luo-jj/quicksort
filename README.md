# BorrowBees

## Getting Started

 - Make sure you have node. You may need to download from https://nodejs.org/en/download/
 - Download Composer from https://getcomposer.org/composer-stable.phar
 - Move `composer-stable.phar` to this folder
 - If using uni controller:
    - Open a terminal using the "server console" button
    - Run `cd www`
 - Copy `.env.example` to `.env`, then edit things such as your database settings
 - Run `php composer-stable.phar install`
 - Run `php artisan migrate`
 - Run `npm i`
 - Run `npm run production`

This will get your project setup and working. When editing any SCSS files, you
will need to have `npm run watch` running in a terminal to ensure your changes
update on the page.

## Sending mail

In development, Mailtrap is used to "send" mail without actually sending mail.
Register for an account on https://mailtrap.io/ (google login works well), then
from the line that says `--user '...:...'` copy the `...` to the left of the `:`
to `MAIL_USERNAME`, and the part on the right to `MAIL_PASSWORD`. Pick a fun
email to use for `MAIL_FROM_ADDRESS`; it doesn't really matter what you pick.
Emails BB sends will appear listed in mailtrap's virtual inbox.

## Important files and folders

 - Routing table: `/routes/web.php`
 - Twig templates: `/resources/views/`
 - SCSS files: `/resources/sass/`
 - JS scripts: `/resources/js/`
 - Database:
    - Models: `/app/Models/`
    - Migrations: `/database/migrations` (see https://laravel.com/docs/8.x/migrations#generating-migrations to create these files)
 - Static files (favicon, etc.): `/public/`
    - Note: Do **not** edit `/public/js/` or `/public/css/`. These folders are
      automatically created, and their contents will be replaced by `npm`.
      Edit the files in `/resources/` for these instead.

## Important notes:

Source files don't end with `?>` by convention. This is not an error, and
ensures our code never accidentally gets shown to a user.
