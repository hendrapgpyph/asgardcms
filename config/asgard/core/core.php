<?php

return [
    /*
   |--------------------------------------------------------------------------
   | The prefix that'll be used for the administration
   |--------------------------------------------------------------------------
   */
    'admin-prefix' => 'admin',

    /*
    |--------------------------------------------------------------------------
    | Location where your themes are located
    |--------------------------------------------------------------------------
    */
    'themes_path' => base_path() . '/Themes',

    /*
    |--------------------------------------------------------------------------
    | Which administration theme to use for the back end interface
    |--------------------------------------------------------------------------
    */
    'admin-theme' => 'Adminpress',

    /*
    |--------------------------------------------------------------------------
    | AdminLTE skin
    |--------------------------------------------------------------------------
    | You can customize the AdminLTE colors with this setting. The following
    | colors are available for you to use: skin-blue, skin-green,
    | skin-black, skin-purple, skin-red and skin-yellow.
    */
    'skin' => 'skin-blue',

    /*
   |--------------------------------------------------------------------------
   | WYSIWYG Backend Editor
   |--------------------------------------------------------------------------
   | Define which editor you would like to use for the backend wysiwygs.
   | These classes are event handlers, listening to EditorIsRendering
   | you can define your own handlers and use them here
   | Options:
   | - \Modules\Core\Events\Handlers\LoadCkEditor::class
   | - \Modules\Core\Events\Handlers\LoadSimpleMde::class
   */
    'wysiwyg-handler' => \Modules\Core\Events\Handlers\LoadCkEditor::class,
    /*
    |--------------------------------------------------------------------------
    | Custom CKeditor configuration file
    |--------------------------------------------------------------------------
    | Define a custom CKeditor configuration file to instead of the one
    | provided by default. This is useful if you wish to customise
    | the toolbar and other possible options.
    */
    'ckeditor-config-file-path' => '',

    /*
    |--------------------------------------------------------------------------
    | Middleware
    |--------------------------------------------------------------------------
    | You can customise the Middleware that should be loaded.
    | The localizationRedirect middleware is automatically loaded for both
    | Backend and Frontend routes.
    */
    'middleware' => [
        'admin' => [
            'auth.admin',
        ],
        'frontend' => [],
        'api' => [
            'api',
        ],
    ],

    /*
   |--------------------------------------------------------------------------
   | Define which assets will be available through the asset manager
   |--------------------------------------------------------------------------
   | These assets are registered on the asset manager
   */
    'admin-assets' => [
        // Css
        'bootstrap.css' => ['theme' => 'vendor/bootstrap/dist/css/bootstrap.min.css'],
        'font-awesome.css' => ['cdn' => 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'],
        'alertify.core.css' => ['theme' => 'css/vendor/alertify/alertify.core.css'],
        'alertify.default.css' => ['theme' => 'css/vendor/alertify/alertify.default.css'],
        'dataTables.bootstrap.css' => ['theme' => 'vendor/datatables.net-bs/css/dataTables.bootstrap.min.css'],
        'icheck.blue.css' => ['theme' => 'vendor/iCheck/skins/flat/blue.css'],
        'AdminLTE.css' => ['theme' => 'vendor/admin-lte/dist/css/AdminLTE.css'],
        'AdminLTE.all.skins.css' => ['theme' => 'vendor/admin-lte/dist/css/skins/_all-skins.min.css'],
        'asgard.css' => ['theme' => 'css/asgard.css'],
        //'gridstack.css' => ['module' => 'dashboard:vendor/gridstack/dist/gridstack.min.css'],
        'gridstack.css' => ['module' => 'dashboard:gridstack/gridstack.min.css'],
        'daterangepicker.css' => ['theme' => 'vendor/admin-lte/plugins/daterangepicker/daterangepicker-bs3.css'],
        'selectize.css' => ['module' => 'core:vendor/selectize/dist/css/selectize.css'],
        'selectize-default.css' => ['module' => 'core:vendor/selectize/dist/css/selectize.default.css'],
        'animate.css' => ['theme' => 'vendor/animate.css/animate.min.css'],
        'pace.css' => ['theme' => 'vendor/admin-lte/plugins/pace/pace.min.css'],
        'simplemde.css' => ['theme' => 'vendor/simplemde/dist/simplemde.min.css'],
        // Javascript
        'bootstrap.js' => ['theme' => 'vendor/bootstrap/dist/js/bootstrap.min.js'],
        'mousetrap.js' => ['theme' => 'js/vendor/mousetrap.min.js'],
        'alertify.js' => ['theme' => 'js/vendor/alertify/alertify.js'],
        'icheck.js' => ['theme' => 'vendor/iCheck/icheck.min.js'],
        'jquery.dataTables.js' => ['theme' => 'plugins/datatables/jquery.dataTables.min.js'],
        'dataTables.bootstrap.js' => ['theme' => 'plugins/datatables/dataTables.bootstrap.js'],
        'jquery.slug.js' => ['theme' => 'js/vendor/jquery.slug.js'],
        'adminlte.js' => ['theme' => 'vendor/admin-lte/dist/js/adminlte.min.js'],
        'keypressAction.js' => ['module' => 'core:js/keypressAction.js'],
        'ckeditor.js' => ['theme' => 'js/vendor/ckeditor/ckeditor.js'],
        'lodash.js' => ['module' => 'dashboard:vendor/lodash/lodash.min.js'],
        'jquery-ui-core.js' => ['module' => 'dashboard:vendor/jquery-ui/ui/minified/core.min.js'],
        'jquery-ui-widget.js' => ['module' => 'dashboard:vendor/jquery-ui/ui/minified/widget.min.js'],
        'jquery-ui-mouse.js' => ['module' => 'dashboard:vendor/jquery-ui/ui/minified/mouse.min.js'],
        'jquery-ui-draggable.js' => ['module' => 'dashboard:vendor/jquery-ui/ui/minified/draggable.min.js'],
        'jquery-ui-resizable.js' => ['module' => 'dashboard:vendor/jquery-ui/ui/minified/resizable.min.js'],
        //'gridstack.js' => ['module' => 'dashboard:vendor/gridstack/dist/gridstack.min.js'],
        'gridstack.js' => ['module' => 'dashboard:gridstack/gridstack.min.js'],
        'daterangepicker.js' => ['theme' => 'vendor/admin-lte/plugins/daterangepicker/daterangepicker.js'],
        'selectize.js' => ['module' => 'core:vendor/selectize/dist/js/standalone/selectize.min.js'],
        'main.js' => ['theme' => 'js/main.js'],
        'chart.js' => ['theme' => 'vendor/admin-lte/plugins/chartjs/Chart.js'],
        'pace.js' => ['theme' => 'vendor/admin-lte/plugins/pace/pace.min.js'],
        'moment.js' => ['theme' => 'vendor/admin-lte/plugins/daterangepicker/moment.min.js'],
        'clipboard.js' => ['theme' => 'vendor/clipboard/dist/clipboard.min.js'],
        'simplemde.js' => ['theme' => 'vendor/simplemde/dist/simplemde.min.js'],

        // adminpress CSS
        'ap-bootstrap.css' => ['theme' => 'plugins/bootstrap/css/bootstrap.min.css'],
        'ap-step-wizard.css' => ['theme' => 'plugins/wizard/steps.css'],
        'ap-morris.css' => ['theme' => 'plugins/morrisjs/morris.css'],
        'ap-custom-adminpress.css' => ['theme' => 'normal-mode/css/style.css'],
        'ap-default-dark.css' => ['theme' => 'normal-mode/css/colors/default-dark.css'],
        'ap-bootstrap-tagsinput.css' => ['theme' => 'plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css'],
        'ap-jquery-fancybox.css' => ['theme' => 'plugins/fancybox/jquery.fancybox.css'],
        'ap-select2.css' => ['theme' => 'plugins/select2/dist/css/select2.min.css'],
        'ap-loading.css' => ['theme' => 'plugins/jquery-loading-master/src/loading.css'],
        'ap-datepicker.css' => ['theme' => 'plugins/bootstrap-datepicker/bootstrap-datepicker.min.css'],
        'ap-datetimepicker.css' => ['theme' => 'plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css'],
        'ap-image-uploader.css' => ['theme' => 'plugins/drag-drop-image/dist/image-uploader.min.css'],
        'ap-element-ui.css' => ['theme' => 'plugins/element-ui/element-ui.css'],
        // AdminPress JS
        'ap-jquery.js' => ['theme' => 'plugins/jquery/jquery.min.js'],
        'ap-pooper.js' => ['theme' => 'plugins/bootstrap/js/popper.min.js'],
        'ap-bootstrap.js' => ['theme' => 'plugins/bootstrap/js/bootstrap.min.js'],
        'ap-slimscroll.js' => ['theme' => 'normal-mode/js/jquery.slimscroll.js'],
        'ap-waves.js' => ['theme' => 'normal-mode/js/waves.js'],
        'ap-sidebarmenu.js' => ['theme' => 'normal-mode/js/sidebarmenu.js'],
        'ap-sticky-kit.js' => ['theme' => 'plugins/sticky-kit-master/dist/sticky-kit.min.js'],
        'ap-custom.js' => ['theme' => 'normal-mode/js/custom.js'],
        'ap.sparkline.js' => ['theme' => 'plugins/sparkline/jquery.sparkline.min.js'],
        'ap-raphael.js' => ['theme' => 'plugins/raphael/raphael-min.js'],
        'ap-morris.js' => ['theme' => 'plugins/morrisjs/morris.min.js'],
        'ap-switcher.js' => ['theme' => 'plugins/styleswitcher/jQuery.style.switcher.js'],
        'ap-validation.js' => ['theme' => 'normal-mode/js/validation.js'],
        'ap-sweetalert2.js' => ['theme' => 'plugins/swal/sweetalert2.all.min.js'],
        'ap-fancybox.js' => ['theme' => 'plugins/fancybox/jquery.fancybox.js'],
        'ap-fancybox.pack.js' => ['theme' => 'plugins/fancybox/jquery.fancybox.pack.js'],
        'ap-select2.full.js' => ['theme' => 'plugins/select2/dist/js/select2.full.min.js'],
        'ap-loading.js' => ['theme' => 'plugins/jquery-loading-master/src/loading.js'],
        'ap-steps.js' => ['theme' => 'plugins/wizard/jquery.steps.min.js'],
        'ap-validate.js' => ['theme' => 'plugins/wizard/jquery.validate.min.js'],
        'ap-locationpicker.js' => ['theme' => 'plugins/jquery-locationpicker-plugin-master/dist/locationpicker.jquery.js'],
        'ap-moment.js' => ['theme' => 'plugins/moment/moment.js'],
        'ap-bootstrap-datetimepicker.js' => ['theme' => 'plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js'],
        'ap-bootstrap-datepicker.js' => ['theme' => 'plugins/bootstrap-datepicker/bootstrap-datepicker.min.js'],
        'ap-bootstrap-tagsinput.js' => ['theme' => 'plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js'],
        'ap-image-uploader.js' => ['theme' => 'plugins/drag-drop-image/dist/image-uploader.js'],
        'fa-fontawesome.js' => ['theme' => 'plugins/fontawesome/fontawesome.js'],
        'fa-solid.js' => ['theme' => 'plugins/fontawesome/solid.js']
    ],

    /*
    |--------------------------------------------------------------------------
    | Define which default assets will always be included in your pages
    | through the asset pipeline
    |--------------------------------------------------------------------------
    */
    // asgard AdminPress default assets
    'admin-required-assets' => [
        'css' => [
            'ap-bootstrap.css',
            'ap-step-wizard.css',
            'ap-morris.css',
            'ap-custom-adminpress.css',
            'ap-default-dark.css',
            'ap-bootstrap-tagsinput.css',
            'ap-jquery-fancybox.css',
            'ap-select2.css',
            'ap-loading.css',
            'ap-datepicker.css',
            'ap-datetimepicker.css',
            'ap-image-uploader.css',
            'ap-element-ui.css',
        ],
        'js' => [
            'ap-jquery.js',
            'ap-pooper.js',
            'ap-bootstrap.js',
            'ap-slimscroll.js',
            'ap-waves.js',
            'ap-sidebarmenu.js',
            'ap-sticky-kit.js',
            // 'ap-custom.js',
            'ap.sparkline.js',
            'ap-raphael.js',
            'ap-morris.js',
            'ap-switcher.js',
            'ap-validation.js',
            'ap-sweetalert2.js',
            'ap-fancybox.js',
            'ap-fancybox.pack.js',
            'ap-select2.full.js',
            'ap-loading.js',
            'ap-steps.js',
            'ap-validate.js',
            // 'ap-locationpicker.js',
            'ap-moment.js',
            'ap-bootstrap-datetimepicker.js',
            'ap-bootstrap-datepicker.js',
            'ap-bootstrap-tagsinput.js',
            'ap-image-uploader.js',
            'fa-solid.js',
            'fa-fontawesome.js',
            'jquery.dataTables.js',
            // 'keypressAction.js',
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Enable module view overrides at theme locations
    |--------------------------------------------------------------------------
    | By default you can only have module views in resources/views/asgard/[module]
    | setting this setting to true will add ability for you to store those views
    | in any of front or backend themes in my-theme/views/modules/[module]/...
    |
    | useViewNamespaces.backend-theme needs to be enabled at module level
    */
    'enable-theme-overrides' => false,

    /*
    |--------------------------------------------------------------------------
    | Check if asgard was installed
    |--------------------------------------------------------------------------
    */
    'is_installed' => env('INSTALLED', false)
];
