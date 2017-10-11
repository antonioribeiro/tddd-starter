<?php

$basePath = base_path();

return [

    /**
     * Names & titles
     *
     */
    'names' => [
        'dashboard' => $name = 'Laravel Tests-Watcher',

        'watcher' => $name.' - Watcher',

        'worker' => $name.' - Worker',
    ],

    /**
     * Route URI prefix
     *
     */
    'url_prefix' => '/tests-watcher',

    /**
     * Regex to match file names and li
     *
     */
    'regex_file_matcher' => '/([A-Za-z0-9\/._-]+):([1-9][0-9]*)/',

    /**
     * Projects
     *
     */
    'projects' => [
//        'PHPUnit' => [
//            'path' => $basePath,
//            'watch_folders' => [
//                'app',
//                'tests'
//            ],
//            'exclude' => [],
//            'depends' => [],
//            'tests_path' => 'tests',
//            'suites' => [
//                'feature' => [
//                    'tester' => 'phpunit',
//                    'tests_path' => 'Feature',
//                    'command_options' => '',
//                    'file_mask' => '*Test.php',
//                    'retries' => 0,
//                ],
//
//                'unit' => [
//                    'tester' => 'phpunit',
//                    'tests_path' => 'Unit',
//                    'command_options' => '',
//                    'file_mask' => '*Test.php',
//                    'retries' => 0,
//                ],
//            ],
//        ],
//
//        'Laravel Dusk' => [
//            'path' => $basePath,
//            'watch_folders' => [
//                'app',
//                'tests/Browser'
//            ],
//            'exclude' => [
//                'tests/Browser/console/',
//                'tests/Browser/screenshots/',
//            ],
//            'depends' => [],
//            'tests_path' => 'tests',
//            'suites' => [
//                'browser' => [
//                    'tester' => 'dusk',
//                    'tests_path' => 'Browser',
//                    'command_options' => '',
//                    'file_mask' => '*Test.php',
//                    'retries' => 0,
//                ],
//            ],
//        ],
//
//        'Vanilla Javascript (Jest)' => [
//            'path' => $basePath,
//            'watch_folders' => [
//                'examples/javascript'
//            ],
//            'exclude' => [
//                'storage',
//                '.idea',
//            ],
//            'depends' => [],
//            'tests_path' => 'examples/javascript/tests',
//            'suites' => [
//                'unit' => [
//                    'tester' => 'jest',
//                    'tests_path' => '',
//                    'command_options' => '',
//                    'file_mask' => '*.spec.js',
//                    'retries' => 0,
//                ],
//            ],
//        ],
//
//        'VueJS (Jest)' => [
//            'path' => $basePath.'/examples/vue-jest',
//            'watch_folders' => [
//                'src',
//                'tests'
//            ],
//            'exclude' => [
//            ],
//            'depends' => [],
//            'tests_path' => 'tests',
//            'suites' => [
//                'unit' => [
//                    'tester' => 'jest',
//                    'tests_path' => '',
//                    'command_options' => '',
//                    'file_mask' => '*.test.js',
//                    'retries' => 0,
//                ],
//            ],
//        ],
//
//        'VueJS (vue-test-utils)' => [
//            'path' => $basePath.'/examples/vue-test-utils',
//            'watch_folders' => [
//                'components',
//            ],
//            'exclude' => [
//                'node_modules'
//            ],
//            'depends' => [],
//            'tests_path' => 'components',
//            'suites' => [
//                'unit' => [
//                    'tester' => 'jest',
//                    'tests_path' => '',
//                    'command_options' => '',
//                    'file_mask' => '*.test.js',
//                    'retries' => 0,
//                ],
//            ],
//        ],
//
//        "React" => [
//            'path' => $basePath.'/examples/react',
//            'watch_folders' => [
//                'src',
//            ],
//            'exclude' => [
//            ],
//            'depends' => [],
//            'tests_path' => 'src',
//            'suites' => [
//                'unit' => [
//                    'tester' => 'react-scripts',
//                    'tests_path' => '',
//                    'command_options' => '',
//                    'file_mask' => '*.test.js',
//                    'retries' => 0,
//                ],
//            ],
//        ],

        "Ruby on Rails" => [
            'path' => $basePath.'/examples/ruby-on-rails',
            'watch_folders' => [
                'app',
                'config',
                'db',
                'lib',
                'test',
            ],
            'exclude' => [
            ],
            'depends' => [],
            'tests_path' => 'test',
            'suites' => [
                'unit' => [
                    'tester' => 'rake',
                    'tests_path' => '',
                    'command_options' => '',
                    'file_mask' => '*_test.rb',
                    'retries' => 0,
                    'editor' => 'phpstorm',
                ],
            ],
        ],

//        'Multiple suites' => [
//            'path' => $basePath,
//            'watch_folders' => [
//                'app',
//                'resources/assets/js/tests'
//            ],
//            'exclude' => [
//                'storage',
//                '.idea',
//            ],
//            'depends' => [],
//            'tests_path' => 'tests/Multiple/',
//            'suites' => [
//                'page_module' => [
//                    'tester' => 'phpunit',
//                    'tests_path' => 'Modules/Page/Tests',
//                    'command_options' => '',
//                    'file_mask' => '*Test.php',
//                    'retries' => 0,
//                ],
//                'core_module' => [
//                    'tester' => 'phpunit',
//                    'tests_path' => 'Modules/Core/Tests',
//                    'command_options' => '',
//                    'file_mask' => '*Test.php',
//                    'retries' => 0,
//                ],
//            ],
//        ],

    ],

    /**
     * Notifications
     *
     */
    'notifications' => [
        'enabled' => true,

        'notify_on' => [
            'panel' => false,
            'check' => true,
            'string' => true,
            'resource' => false,
        ],

        'routes' => [
            'dashboard' => 'tests-watcher.dashboard'
        ],

        'action-title' => 'Tests Failed',

        'action_message' => "One or more tests have failed.",

        'from' => [
            'name' => $name,

            'address' => 'laravel-tw@mydomain.com',

            'icon_emoji' => '',

            'icon_url' => 'https://emojipedia-us.s3.amazonaws.com/thumbs/120/apple/96/lady-beetle_1f41e.png'
        ],

        'users' => [
            'model' => PragmaRX\TestsWatcher\Vendor\Laravel\Entities\User::class, // App\User::class,

            'emails' => [
                'laravel-ci@mydomain.com'
            ],
        ],

        'channels' => [
            'mail' => [
                'enabled' => false,
                'sender' => PragmaRX\TestsWatcher\Notifications\Channels\Mail::class,
            ],

            'slack' => [
                'enabled' => true,
                'sender' => PragmaRX\TestsWatcher\Notifications\Channels\Slack::class,
            ],
        ],

        'notifier' => 'PragmaRX\TestsWatcher\Notifications',
    ],

    /**
     * Editors
     *
     */
    'editors' => [
        'phpstorm' => [
            'type' => 'PHPStorm',

            'bin' => '/usr/local/bin/pstorm',

            'default' => true,
        ],

        'sublime' => [
            'type' => 'SublimeText 3',

            'bin' => '/usr/local/bin/subl',
        ],
    ],

    /**
     * tee
     *
     */
    'tee' => '/usr/bin/tee',

    /**
     * script
     *
     */
    'script' => '/usr/bin/script -q %s %s', // sprintf()

    /**
     * Temp path
     *
     */
    'tmp' => sys_get_temp_dir(),

    /**
     * Testers
     *
     */
    'testers' => [

        'phpunit' => [
            'command' => 'vendor/bin/phpunit',
            'require_script' => true,
        ],

        'dusk' => [
            'command' => 'php artisan dusk',
            'output_folder' => "{$basePath}/tests/Browser/screenshots",
            'output_html_fail_extension' => '.fail.html',
            'output_png_fail_extension' => '.fail.png',
            'require_tee' => false,
            'require_script' => true,
            'error_pattern' => '(Failures|Errors): [0-9]+', // regex, only for tee results
        ],

        'codeception' => [
            'command' => 'sh %project_path%/vendor/bin/codecept run',
            'output_folder' => 'tests/_output',
            'output_html_fail_extension' => '.fail.html',
            'output_png_fail_extension' => '.fail.png',
        ],

        'phpspec' => [
            'command' => 'phpspec run',
        ],

        'behat' => [
            'command' => 'sh vendor/bin/behat',
        ],

        'atoum' => [
            'command' => 'sh vendor/bin/atoum',
        ],

        'tester' => [
            'command' => 'sh vendor/bin/tester',
        ],

        'jest' => [
            'command' => 'npm test',
            'require_script' => true,
            'output_folder' => "tests/__snapshots__",
            'output_html_fail_extension' => '.snap',
        ],

        'react-scripts' => [
            'env' => 'CI=true',
            'command' => 'npm test',
            'require_script' => true,
            'error_pattern' => 'Test\s+Suites:\s+[0-9]+\s+failed', // regex, only for tee results
        ],

        'rake' => [
            'command' => 'bin/rails test',
            'require_script' => true,
            'error_pattern' => 'Test\s+Suites:\s+[0-9]+\s+failed', // regex, only for tee results
        ],

    ],

    /**
     * Progress
     *
     */
    'show_progress' => false,

];
