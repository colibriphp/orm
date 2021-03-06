<?php

return [
  /// ...
  'colibri_orm' => [
    
    'logs' => '/var/www/logs',
    
    'identity' => __FILE__,
    'dev_configuration' => 'config.dev.php',
    'configuration_glob_pattern' => 'glob://%s/colibri_orm/*.(php|yml|ini|json)',
    
    'connection_name' => 'production',
    'connection' => [
      'production' => [
        'dsn' => 'mysql:host=dezz.site;port=1106;dbname=beon',
        'user' => 'dezz',
        'password' => 'DezzMySQL2018!',
      ],
    ],
    
    'schema_file' => 'schema.xml',
    'build' => [
      'build_path' => './../generated-classes',
      'autoload_file' => 'autoload.php',
      'metadata_file' => 'metadata.php',
    ],
  ],
  
  'extensions' => [
    
    'softDeletion' => [
      \ProCard\Models\Category::class => [
        'slug' => [
          'properties' => ['name',],
          'prefix' => null,
          'suffix' => null,
          'separator' => '-',
        ],
      ],
    ],
    'runtimeDebugger' => [
      'streamFilename' => '{colibri_orm.logs}/lifeCycle.log',
      'logFormat' => '[:datetime] [:name.:level] :message',
      'datetimeFormat' => 'Y-m-d H:i:s.u P',
      'prefixName' => 'ORM.Runtime',
    ],
  ],
];