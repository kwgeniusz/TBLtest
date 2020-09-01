# TBLtest
Test of Developer Laravel by TBL

# Software Developer Manuel Castro
This is a project made with the next technologies: Laravel 5.5 LTS (PHP VERSION 7.0).

## Getting Started
These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

## Prerequisites
* PHP V7.0
* Laravel knowledge

## Instructions to install
-On the folder of project there is a file db: you need to import this database on mysql, it can be with PHPMYADMIN
-You need to configurate the file .ENV with your enviroment personal information 
  example:
 APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

BROADCAST_DRIVER=log
CACHE_DRIVER=file
SESSION_DRIVER=file
SESSION_LIFETIME=120
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

-In the project directory, you must run: `npm start` to the Frontend Technologies.
-you must run: `composer Install` to the Frontend Technologies.
-start your APP with the command `php artisan serve`
-open yout browser with the address "127.0.0.1"

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.

## Taks
- [x] Register, Forgot password and Update User
- [x] Can Login.
- [x] Create, Update, Delete, Search, View contacts
- [x] List of all contacts (This will be the homepage)
- [x] Fields added in the form must be, First Name, Last Name, Email and Contact Number
- [x] After adding a contact to the list, an email notification will be sent to the email of the contact user that says, “We added you in our contact list. Thank you.”
- [x] Add pagination if more than 10 contacts
- [x] Must be responsive (You can use Bootstrap)
- [x] File/Codes should be pushed to the repository (Bitbucket/Github) and make it public. 
If finished please post it to skype group 

