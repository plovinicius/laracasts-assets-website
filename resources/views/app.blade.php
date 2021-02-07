<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laracasts Assets</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div id="app">
            <header class="py-6 px-8 mb-8" style="background: url('/images/splash.svg') no-repeat;">
                <h1>
                    <img src="/images/logo.svg" alt="Laracasts">
                </h1>
            </header>

            <div class="container px-8 pb-10">
                <main class="flex">
                    <aside class="w-64 pt-8">
                        <section class="mb-10">
                            <h5 class="uppercase font-bold mb-3 text-base">The Brand</h5>

                            <ul class="list-reset">
                                <li class="text-sm leading-loose">
                                    <router-link class="text-black" exact :to="{ name: 'logo' }">Logo</router-link>
                                </li>
                                <li class="text-sm leading-loose">
                                    <router-link class="text-black" :to="{ name: 'logo-symbol' }">Logo Symbol</router-link>
                                </li>
                                <li class="text-sm leading-loose">
                                    <router-link class="text-black" :to="{ name: 'colors' }">Colors</router-link>
                                </li>
                                <li class="text-sm leading-loose">
                                    <router-link class="text-black" :to="{ name: 'typography' }">Typography</router-link>
                                </li>
                            </ul>
                        </section>

                        <section>
                            <h5 class="uppercase font-bold mb-3 text-base">Doodles</h5>

                            <ul class="list-reset">
                                <li class="text-sm leading-loose">
                                    <router-link class="text-black" :to="{ name: 'mascot' }">Mascot</router-link>
                                </li>
                                <li class="text-sm leading-loose">
                                    <router-link class="text-black" :to="{ name: 'illustrations' }">Illustrations</router-link>
                                </li>
                                <li class="text-sm leading-loose">
                                    <router-link class="text-black" :to="{ name: 'loaders-animations' }">Loaders and Animations</router-link>
                                </li>
                                <li class="text-sm leading-loose">
                                    <router-link class="text-black" :to="{ name: 'wallpapers' }">Wallpapers</router-link>
                                </li>
                            </ul>
                        </section>
                    </aside>

                    <div class="primary flex-1">
                        <router-view></router-view>
                    </div>
                </main>
            </div>
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
