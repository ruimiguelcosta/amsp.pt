<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    @php
        $appName = config('app.name', 'i-H1');
        $appUrl = config('app.url', 'https://amsp.test');
        $description = 'Transforme sua casa em uma residência inteligente com tecnologia de ponta. Automação residencial, segurança, climatização e mais com tecnologia PoE (Power over Ethernet).';
        $ogImagePath = 'images/hero-smart-home.jpg';
        $fullOgImage = url($ogImagePath);
    @endphp

    <title>{{ $appName }} - Casas Inteligentes em Portugal</title>
    <meta name="description" content="{{ $description }}" />
    <meta name="keywords" content="casa inteligente, automação residencial, tecnologia PoE, smart home, Portugal, segurança residencial, climatização inteligente" />
    <meta name="author" content="{{ $appName }}" />
    <meta name="robots" content="index, follow" />
    <meta name="language" content="Portuguese" />
    <meta name="geo.region" content="PT" />
    <meta name="geo.placename" content="Portugal" />

    <link rel="canonical" href="{{ $appUrl }}" />

    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $appName }} - Casas Inteligentes em Portugal" />
    <meta property="og:description" content="{{ $description }}" />
    <meta property="og:url" content="{{ $appUrl }}" />
    <meta property="og:image" content="{{ $fullOgImage }}" />
    <meta property="og:image:width" content="1920" />
    <meta property="og:image:height" content="1080" />
    <meta property="og:image:alt" content="Casa inteligente com tecnologia PoE" />
    <meta property="og:locale" content="pt_PT" />
    <meta property="og:site_name" content="{{ $appName }}" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="{{ $appName }} - Casas Inteligentes em Portugal" />
    <meta name="twitter:description" content="{{ $description }}" />
    <meta name="twitter:image" content="{{ $fullOgImage }}" />
    <meta name="twitter:image:alt" content="Casa inteligente com tecnologia PoE" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'LocalBusiness',
        'name' => $appName,
        'description' => $description,
        'url' => $appUrl,
        'logo' => $fullOgImage,
        'image' => $fullOgImage,
        'telephone' => '+351 926 289 876',
        'email' => 'geral@amsp.pt',
        'address' => [
            '@type' => 'PostalAddress',
            'addressCountry' => 'PT',
            'addressLocality' => 'Portugal'
        ],
        'geo' => [
            '@type' => 'GeoCoordinates',
            'addressCountry' => 'PT'
        ],
        'openingHoursSpecification' => [
            [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
                'opens' => '08:00',
                'closes' => '18:00'
            ],
            [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => 'Saturday',
                'opens' => '09:00',
                'closes' => '13:00'
            ]
        ],
        'priceRange' => '$$',
        'serviceArea' => [
            '@type' => 'Country',
            'name' => 'Portugal'
        ],
        'areaServed' => [
            '@type' => 'Country',
            'name' => 'Portugal'
        ],
        'offers' => [
            '@type' => 'Offer',
            'description' => 'Soluções de automação residencial com tecnologia PoE',
            'priceCurrency' => 'EUR'
        ]
    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>

    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => $appName,
        'url' => $appUrl,
        'logo' => $fullOgImage,
        'contactPoint' => [
            '@type' => 'ContactPoint',
            'telephone' => '+351-926-289-876',
            'contactType' => 'customer service',
            'areaServed' => 'PT',
            'availableLanguage' => ['Portuguese']
        ],
        'sameAs' => [
            'https://amsp.pt'
        ]
    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>

    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        'name' => $appName,
        'url' => $appUrl,
        'potentialAction' => [
            '@type' => 'SearchAction',
            'target' => [
                '@type' => 'EntryPoint',
                'urlTemplate' => $appUrl . '/?s={search_term_string}'
            ],
            'query-input' => 'required name=search_term_string'
        ]
    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
</head>
<body class="bg-background text-foreground">
    @yield('content')
</body>
</html>
