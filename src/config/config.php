<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Standard
    |--------------------------------------------------------------------------
    |
    | One or more coding standard do check for violations.
    | Available options are: SocialEngine, PEAR, Squiz, PHPCS, MySource, PSR2 and PSR1
    |
    */
    'standard' => [
        'SocialEngine',
    ],

    /*
    |--------------------------------------------------------------------------
    | Files to watch
    |--------------------------------------------------------------------------
    |
    | One or more files and/or directories to check
    |
    */
    'files' => [
        'app/',
    ],

    /*
    |--------------------------------------------------------------------------
    | Files to ignore
    |--------------------------------------------------------------------------
    |
    | Sometimes you want Sniffer to run over a very large number of files,
    | but you want some files and folders to be skipped. The ignored config key
    | can be used to tell Sniffer to skip files and folders that match one
    | or more patterns.
    |
    | Ex: 'ignored' => array('*blade.php', 'app/database', 'app/lang'),
    |
    */
    'ignored' => [
        'app/lang',
        'app/views',
    ],
    /*
    |--------------------------------------------------------------------------
    | Files to ignore Namespace for Class
    |--------------------------------------------------------------------------
    |
    | Some Laravel files cannot contain a namespace as the class names are hardcoded
    | into the framework.
    | You can modify which folders/files get ignored when running the namespace check
    | below. The ignoreNamespace config key can be used to tell Sniffer to skip files
    | and folders that match one or more patterns.
    |
    | Ex: 'ignoreNamespace' => ['app/database', 'app/lang'],
    |
    */
    'ignoreNamespace' => [
        'app/database',
    ],
];
