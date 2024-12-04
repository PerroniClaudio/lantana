<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-geist antialiased scroll-smooth">

    <header class="max-w-7xl mx-auto">
        <div class="navbar bg-base-100">
            <div class="navbar-start">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                        <x-lucide-menu class="w-6 h-6" />
                    </div>
                    <ul tabindex="0"
                        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                        <li><a>Item 1</a></li>
                        <li>
                            <a>Parent</a>
                            <ul class="p-2">
                                <li><a>Submenu 1</a></li>
                                <li><a>Submenu 2</a></li>
                            </ul>
                        </li>
                        <li><a>Item 3</a></li>
                    </ul>
                </div>
                <a class="btn btn-ghost text-xl">

                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-[#d92020] via-[#d52a2a] to-[#d67a7a]">
                        {{ config('app.name') }}
                    </span>

                </a>
            </div>
            <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal px-1">
                    <li><a href="#features">Caratteristiche</a></li>
                    <li><a href="#pricing">Prezzo</a></li>
                </ul>
            </div>
            <div class="navbar-end">
                <a class="btn btn-primary">Acquista</a>
            </div>
        </div>
    </header>

    <!-- Hero -->
    <section class="relative py-12 sm:py-16 lg:pt-20 xl:pb-0">
        <div class="relative px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="max-w-3xl mx-auto text-center">
                <p
                    class="inline-flex px-4 py-2 text-base bg-primary text-primary-content border border-primary rounded-full font-pj">
                    {{ __('site.hero_badge_message') }}
                </p>
                <div class="mt-6">
                    <h1
                        class="text-4xl font-bold leading-tight neutral-content sm:text-5xl sm:leading-tight lg:text-6xl lg:leading-tight font-pj">
                        {{ __('site.hero_title_first') }}
                    </h1>
                    <h1
                        class="text-4xl font-bold leading-tight neutral-content sm:text-5xl sm:leading-tight lg:text-6xl lg:leading-tight font-pj">
                        {{ __('site.hero_title_second') }}
                    </h1>
                </div>
                <div class="mt-6">
                    <p class="mx-auto text-base leading-7 text-secondary">
                        {{ __('site.hero_subtitle_first') }}
                    </p>
                    <p class="mx-auto text-base leading-7 text-secondary">
                        {{ __('site.hero_subtitle_second') }}
                    </p>
                </div>

                <div class="relative inline-flex mt-10 group">
                    <div
                        class="absolute transition-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#d92020] via-[#d67a7a] to-[#d52a2a] rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                    </div>

                    <a href="#" title=""
                        class="relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-white transition-all duration-200 bg-primary font-pj rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                        role="button">
                        {{ __('site.hero_call_to_action') }}
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="relative py-12 sm:py-16 lg:pt-20 xl:pb-0" id="features">
        <div class="relative px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-4">
                <div class="flex flex-col gap-2 items-center">
                    <div class="bg-secondary/60 p-2 rounded-full">
                        <x-lucide-zap class="w-10 h-10 text-primary" />
                    </div>
                    <p class="font-semibold">
                        {{ __('site.feature_1_title') }}
                    </p>
                    <p class="text-center">
                        {{ __('site.feature_1_description') }}
                    </p>
                </div>
                <div class="flex flex-col gap-2 items-center">
                    <div class="bg-secondary/60 p-2 rounded-full">
                        <x-lucide-lock class="w-10 h-10 text-primary" />
                    </div>
                    <p class="font-semibold">
                        {{ __('site.feature_2_title') }}
                    </p>
                    <p class="text-center">
                        {{ __('site.feature_2_description') }}
                    </p>
                </div>
                <div class="flex flex-col gap-2 items-center">
                    <div class="bg-secondary/60 p-2 rounded-full">
                        <x-lucide-pencil class="w-10 h-10 text-primary" />
                    </div>
                    <p class="font-semibold">
                        {{ __('site.feature_3_title') }}
                    </p>
                    <p class="text-center">
                        {{ __('site.feature_3_description') }}
                    </p>
                </div>
                <div class="flex flex-col gap-2 items-center">
                    <div class="bg-secondary/60 p-2 rounded-full">
                        <x-lucide-cable class="w-10 h-10 text-primary" />
                    </div>
                    <p class="font-semibold">
                        {{ __('site.feature_4_title') }}
                    </p>
                    <p class="text-center">
                        {{ __('site.feature_4_description') }}
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section class="relative py-12 sm:py-16 lg:pt-20" id="pricing">
        <div class="relative px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl flex flex-col gap-16">
            <div class="max-w-3xl mx-auto text-center">

                <h1
                    class="text-xl font-bold leading-tight neutral-content sm:text-5xl sm:leading-tight lg:text-6xl lg:leading-tight font-pj text-center">
                    {{ __('site.pricing_title') }}
                </h1>
                <p class="mx-auto text-base leading-7 text-secondary">
                    {{ __('site.pricing_subtitle') }}
                </p>



            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mx-auto">
                <div class="card border border-secondary">
                    <div class="flex flex-col gap-2 p-8">
                        <h2 class="card-title">{{ __('site.pricing_basic_title') }}</h2>
                        <h1 class="text-5xl font-bold">€99.00</h1>
                        <p class="text-sm">
                            {{ __('site.pricing_basic_description') }}
                        </p>
                        <div class="btn btn-outline ">
                            {{ __('site.pricing_call_to_action') }}
                        </div>
                        <div>
                            <p class="text-sm font-semibold">
                                {{ __('site.pricing_basic_features') }}
                            </p>
                            <ul class="list-disc pl-6 text-sm">
                                <li>{{ __('site.pricing_basic_feature_1') }}</li>
                                <li>{{ __('site.pricing_basic_feature_2') }}</li>
                                <li>{{ __('site.pricing_basic_feature_3') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="relative inline-flex group">
                    <div
                        class="absolute transition-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#d92020] via-[#d67a7a] to-[#d52a2a] rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                    </div>
                    <div class="card bg-primary text-primary-content w-full">
                        <div class="flex flex-col gap-2 p-8">
                            <h2 class="card-title">{{ __('site.pricing_premium_title') }}</h2>
                            <h1 class="text-5xl font-bold">€199.00</h1>
                            <p class="text-sm">
                                {{ __('site.pricing_premium_description') }}
                            </p>
                            <div class="btn btn-neutral ">
                                {{ __('site.pricing_call_to_action') }}
                            </div>
                            <div>
                                <p class="text-sm font-semibold">
                                    {{ __('site.pricing_premium_features') }}
                                </p>
                                <ul class="list-disc pl-6 text-sm">
                                    <li>{{ __('site.pricing_premium_feature_1') }}</li>
                                    <li>{{ __('site.pricing_premium_feature_2') }}</li>
                                    <li>{{ __('site.pricing_premium_feature_3') }}</li>
                                    <li>{{ __('site.pricing_premium_feature_4') }}</li>
                                    <li>{{ __('site.pricing_premium_feature_5') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border border-secondary">
                    <div class="flex flex-col gap-2 p-8">
                        <h2 class="card-title">{{ __('site.pricing_enterprise_title') }}</h2>
                        <h1 class="text-5xl font-bold">€399.00</h1>
                        <p class="text-sm">
                            {{ __('site.pricing_enterprise_description') }}
                        </p>
                        <div class="btn btn-outline ">
                            {{ __('site.pricing_call_to_action') }}
                        </div>
                        <div>
                            <p class="text-sm font-semibold">
                                {{ __('site.pricing_enterprise_features') }}
                            </p>
                            <ul class="list-disc pl-6 text-sm">
                                <li>{{ __('site.pricing_enterprise_feature_1') }}</li>
                                <li>{{ __('site.pricing_enterprise_feature_2') }}</li>
                                <li>{{ __('site.pricing_enterprise_feature_3') }}</li>
                                <li>{{ __('site.pricing_enterprise_feature_4') }}</li>
                                <li>{{ __('site.pricing_enterprise_feature_5') }}</li>
                                <li>{{ __('site.pricing_enterprise_feature_6') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-base-200">
        <div class="max-w-7xl mx-auto footer text-base-content p-10">
            <nav>
                <h6 class="footer-title">Servizi</h6>
                <a class="link link-hover">Branding</a>
                <a class="link link-hover">Design</a>
                <a class="link link-hover">Marketing</a>
                <a class="link link-hover">Pubblicità</a>
            </nav>
            <nav>
                <h6 class="footer-title">Azienda</h6>
                <a class="link link-hover">Chi siamo</a>
                <a class="link link-hover">Contatti</a>
                <a class="link link-hover">Lavori</a>
                <a class="link link-hover">Press kit</a>
            </nav>
            <nav class="items-end">
                <h6 class="footer-title">Legale</h6>
                <a class="link link-hover">Termini di utilizzo</a>
                <a class="link link-hover">Informativa sulla privacy</a>
                <a class="link link-hover">Politica sui cookie</a>
            </nav>
        </div>
    </footer>
    <footer class="bg-base-200 border-primary border-t ">
        <div class="max-w-7xl mx-auto footer text-base-content px-10 py-4">
            <aside class="grid-flow-col items-center">
                <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-[#d92020] via-[#d52a2a] to-[#d67a7a] font-bold">
                    {{ config('app.name') }}
                </span>
            </aside>
            <nav class="md:place-self-center md:justify-self-end">
                <div class="grid grid-flow-col gap-4">
                    <a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            class="fill-current">
                            <path
                                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z">
                            </path>
                        </svg>
                    </a>
                    <a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            class="fill-current">
                            <path
                                d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z">
                            </path>
                        </svg>
                    </a>
                    <a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            class="fill-current">
                            <path
                                d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
                            </path>
                        </svg>
                    </a>
                </div>
            </nav>
        </div>
    </footer>
</body>

</html>
