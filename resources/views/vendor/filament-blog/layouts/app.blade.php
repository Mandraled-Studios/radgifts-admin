<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ $setting?->faviconImage }}" type="image/x-icon" />
    {!! \Firefly\FilamentBlog\Facades\SEOMeta::generate() !!}
    {!! $setting?->google_console_code !!}
    {!! $setting?->google_analytic_code !!}
    {!! $setting?->google_adsense_code !!}
    {{ $canonical ?? ''}}

    <!-- Fonts -->
    

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    
    <style>
        .line-clamp-2 {
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
        }
    </style>
    <style>
        /* Blog Posts */
        article h1 {
            line-height: 1.2;
            font-size: 2rem;
            color: #424242;
            font-weight: 900;
            padding-bottom: 20px;
        }

        article h2 {
            line-height: 1.2;
            font-size: 1.5rem;
            color: #424242;
            font-weight: 800;
            padding-bottom: 10px;
        }

        article h3 {
            line-height: 1.2;
            font-size: 1.25rem;
            color: #424242;
            font-weight: 700;
            padding-bottom: 10px;
        }

        article h4 {
            line-height: 1.2;
            font-size: 1.2rem;
            color: #424242;
            font-weight: 600;
            padding-bottom: 10px;
        }

        article p {
            line-height: 1.75;
            letter-spacing: .2px;
            font-size: 1rem;
            color: #424242;
            font-weight: 400;
            margin-bottom: 1rem;
        }

        article ul {
            line-height: 1.7;
            padding-bottom: 5px;
        }

        article table {
            margin-top: 2rem;
            margin-bottom: 2rem;
            border-radius: 10px;
        }

        article table,
        article table td,
        article table th {
            border: 1px solid #ccc;
            padding: 5px 10px;
        }

        /* share this */
        .sharethis-inline-share-buttons {
            display: flex !important;
            flex-direction: column !important;
            justify-content: center !important;
            align-items: center !important;
        }

        .sharethis-inline-share-buttons .st-btn {
            width: 50px !important;
            height: 50px !important;
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
            margin-bottom: 10px !important;
            border-radius: 50px !important;
            margin-right: 0 !important
        }

        .sharethis-inline-share-buttons .st-btn img {
            top: 0 !important
        }
    </style>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen">
        <!-- Page Header -->
        @livewire('navigation-menu')
        {{-- 
        <x-blog-header title="{{ $setting?->title }}" logo="{{ $setting?->logoImage }}" />
        --}}
        
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        <!-- Footer -->
        @livewire('footer')
        
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        function onSubmit(token) {
            document.getElementById("comment-box").submit();
        }
    </script>
</body>

</html>
