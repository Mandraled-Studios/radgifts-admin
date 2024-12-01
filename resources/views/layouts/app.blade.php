<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{ $seo ?? ""}}
        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        <link rel="shortcut icon" href="{{asset('/images/favicon.png')}}" type="image/x-icon" />
        @livewireStyles

    </head>
    <body class="font-sans antialiased overflow-x-hidden w-screen">
        @php
            $bannerBg = \App\Models\MarqueeBanner::where('key', 'banner_bg')->get()->first()->value;
            $textColor = \App\Models\MarqueeBanner::where('key', 'banner_text_color')->get()->first()->value;
            $bannerText = \App\Models\MarqueeBanner::where('key', 'banner_text')->get()->first()->value;
            $ctaLabel = \App\Models\MarqueeBanner::where('key', 'banner_cta_label')->get()->first()->value;
            $ctaStyle = \App\Models\MarqueeBanner::where('key', 'banner_cta_style')->get()->first()->value;
            $ctaUrl = \App\Models\MarqueeBanner::where('key', 'banner_cta_url')->get()->first()->value; 
        @endphp

        <x-marqueebanner :bgcolor="$bannerBg" :textcolor="$textColor" :text="$bannerText" :ctalabel="$ctaLabel" :ctastyle="$ctaStyle" :ctaurl="$ctaUrl"></x-marqueebanner>
        <x-banner />

        <div class="min-h-screen">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            @livewire('footer')
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
