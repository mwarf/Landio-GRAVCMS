<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/user/config/site.yaml',
    'modified' => 1524256685,
    'data' => [
        'title' => 'University of Lethbridge Demo',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Michael Warf',
            'email' => 'john@email.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'University of Lethbridge'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ],
        'logo' => [
            'icon' => 'logo',
            'text' => 'University of Lethbridge',
            'url' => NULL
        ],
        'userlinks' => [
            0 => [
                'text' => 'Sample link',
                'url' => '#'
            ],
            1 => [
                'text' => 'Another Sample link',
                'url' => '#'
            ]
        ],
        'header' => [
            'title' => '<span style="font-family:Oswald; text-transform: uppercase;">University of Lethbridge</span>',
            'description' => 'Alberta\'s Destination University',
            'buttons' => [
                0 => [
                    'text' => 'Apply Now',
                    'url' => 'https://www.uleth.ca/future-student/application',
                    'icon' => 'pen'
                ]
            ]
        ],
        'footer' => [
            'links' => [
                0 => [
                    'text' => 'Terms &amp; Conditions',
                    'url' => '#'
                ],
                1 => [
                    'text' => 'Legals',
                    'url' => '#'
                ]
            ]
        ],
        'socialcount' => [
            'url' => 'http://www.ulethbridge.ca',
            'facebook_url' => 'https://www.facebook.com/ulethbridge.ca/',
            'twitter_url' => 'http://www.twitter.com/uLethbridge',
            'linkedin_url' => 'https://www.linkedin.com/school/university-of-lethbridge/'
        ],
        'copyright' => 'University of Lethbridge <br> Bootstrap 4 Demo site, developed with Grav CMS, customized by <a href="https://uleth.sharepoint.com/sites/DigitalServices/SitePages/Home.aspx">Digital Services</a>.'
    ]
];
