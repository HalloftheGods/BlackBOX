<?php return array(
    'root' => array(
        'name' => 'hallofthegods/youniverse',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => null,
        'type' => 'project',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'composer/installers' => array(
            'pretty_version' => 'v2.3.0',
            'version' => '2.3.0.0',
            'reference' => '12fb2dfe5e16183de69e784a7b84046c43d97e8e',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/./installers',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'hallofthegods/blackbox-bedrock' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => '148b0e5d837e4154aab07578e4bf12510bcfbc16',
            'type' => 'wordpress-muplugin',
            'install_path' => __DIR__ . '/../../wp-content/mu-plugins/blackbox-bedrock',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
        'hallofthegods/youniverse' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => null,
            'type' => 'project',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
