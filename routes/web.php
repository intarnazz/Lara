<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return <<<HER
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <link rel="icon" type="image/svg+xml" href="/vite.svg" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Vite + Vue</title>
        <script type="module" crossorigin src="/assets/index-8sIJn2w7.js"></script>
        <link rel="stylesheet" crossorigin href="/assets/index-OTKw1HEq.css">
      </head>
      <body>
        <script src="src/cropper/cropper.js"></script>
        <div id="app"></div>
      </body>
    </html>
HER;
});

Route::get('/phpinfo', function () {
    return phpinfo();
});
