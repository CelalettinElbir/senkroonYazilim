<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'inertia' => env('SEO_TOOLS_INERTIA', false),
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => 'Senkron Yazılım - Workcube Bayisi | Modern Yazılım Çözümleri', // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'Senkron Yazılım olarak Workcube yetkili bayisiyiz. Modern yazılım çözümleri, web tasarım, mobil uygulama geliştirme ve IT danışmanlık hizmetleri sunuyoruz.', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['workcube bayisi', 'workcube partner', 'workcube yetkili bayi', 'yazılım çözümleri', 'web tasarım', 'mobil uygulama', 'IT danışmanlık', 'senkron yazılım', 'erp çözümleri', 'iş yönetimi'],
            'canonical'    => 'current', // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => 'index,follow', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null, // Google Search Console verification code
            'bing'      => null, // Bing Webmaster verification code
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'Senkron Yazılım - Workcube Bayisi | Modern Yazılım Çözümleri', // set false to total remove
            'description' => 'Senkron Yazılım olarak Workcube yetkili bayisiyiz. Modern yazılım çözümleri, web tasarım, mobil uygulama geliştirme ve IT danışmanlık hizmetleri sunuyoruz.', // set false to total remove
            'url'         => 'current', // Set null for using Url::current(), set false to total remove
            'type'        => 'website',
            'site_name'   => 'Senkron Yazılım',
            'images'      => [asset('porto/simages/senkronlogo2.png')],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'summary_large_image',
            'site'        => '@senkronyazilim',
            'creator'     => '@senkronyazilim',
            'title'       => 'Senkron Yazılım - Workcube Bayisi',
            'description' => 'Workcube yetkili bayisi. Modern yazılım çözümleri, web tasarım, mobil uygulama geliştirme ve IT danışmanlık hizmetleri.',
            'image'       => asset('porto/simages/senkronlogo2.png'),
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'Senkron Yazılım - Workcube Bayisi | Modern Yazılım Çözümleri', // set false to total remove
            'description' => 'Senkron Yazılım olarak Workcube yetkili bayisiyiz. Modern yazılım çözümleri, web tasarım, mobil uygulama geliştirme ve IT danışmanlık hizmetleri sunuyoruz.', // set false to total remove
            'url'         => 'current', // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'Organization',
            'images'      => [asset('porto/simages/senkronlogo2.png')],
        ],
    ],
];
