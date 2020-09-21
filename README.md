## Installation

Clone the repo locally:

```sh
git clone https://github.com/dhruva81/laraqpg.git laraqpg
cd laraqpg
```

Install PHP dependencies:

```sh
composer install
```

Install NPM dependencies:

```sh
npm install && npm run dev
```

Generate application key:

```sh
php artisan key:generate
```

Create Database locally 'qpg'
Import qpg.sql

Run the dev server (the output will give the address):

```sh
php artisan serve
```

Path for files

```sh
Resources/views/questions.blade.php
Resources/views/output.blade.php
```

Controller

```sh
App/Http/Controllers/QuestionController.php
```
