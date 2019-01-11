let mix = require('laravel-mix');

   mix.js(['resources/js/app.js',
        ], 'public/js/Vue-App.js' );

   mix.scripts([
      'resources/vendors/js/toastr.min.js',
    ], 'public/js/app.js'    ) ;// Archivo de salida JS

   mix.styles ([
        'resources/vendors/css/toastr.min.css',
        'resources/css/app.css',
       ], 'public/css/app.css') ;     // Archivo de salida CSS

    mix.browserSync({
      proxy: 'http://laravel57-weblinks.local',
      open: false,
      //browser : 'Google Chrome',
    });

    mix.disableNotifications();

