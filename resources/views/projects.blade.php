<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ben C</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/css/app.css" />

    @vite('resources/css/app.css')

</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50 overflow-hidden  ">
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
    <div id="background" class="absolute w-full h-full" style="width: 100vw;height: 110vh;position: fixed;display: block;overflow: hidden;margin-top: -10vh;z-index: -100;background-image: linear-gradient(0deg, transparent 24%, rgba(255, 255, 255, .05) 25%, rgba(255, 255, 255, .05) 26%, transparent 27%, transparent 74%, rgba(255, 255, 255, .05) 75%, rgba(255, 255, 255, .05) 76%, transparent 77%, transparent), linear-gradient(90deg, transparent 24%, rgba(255, 255, 255, .05) 25%, rgba(255, 255, 255, .05) 26%, transparent 27%, transparent 74%, rgba(255, 255, 255, .05) 75%, rgba(255, 255, 255, .05) 76%, transparent 77%, transparent);height: 110VH;background-size: 64px 64px;" />
    <div
            class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#ff20da] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl overflow-hidden ">
                <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                    <div class="flex lg:justify-center lg:col-start-2">
                    @component('components.Nav')
                    @endcomponent

                    </div>

                </header>
                <main class="mt-6 gap-x-10 sm:overflow-y-hidden sm:h-[50rem] md:h-full xl:h-full">
                    <div class="container xl:overflow-hidden overflow-y-auto h-[550px] xl:h-full">

                        <div class="grid gap-6 lg:grid-cols-3 lg:gap-8 sm:overflow-auto md:overflow-auto">
                        <a
                                    href="https://builtbybit.com/resources/originalmenus-deluxemenus-starter-pack.30493/"
                                    id="docs-card"
                                    class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                                >
                                    <div id="screenshot-container" class="relative flex w-full flex-1 items-stretch">
                                        <img
                                            src="/assets/originalmenus.png"
                                            alt="Original Menus - Logo"
                                            class="hidden aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.25)] dark:block"
                                        />
                                        <div
                                            class="absolute -bottom-16 -left-16 h-40 w-[calc(100%+8rem)] bg-gradient-to-b from-transparent via-white to-white dark:via-zinc-900 dark:to-zinc-900"
                                        ></div>
                                    </div>
    
                                    <div class="relative flex items-center gap-6 lg:items-end">
                                        <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">
    
                                            <div class="pt-3 sm:pt-5 lg:pt-0">
                                                <h2 class="text-xl font-semibold text-white">Original Menus</h2>
    
                                                <p class="mt-4 text-md/relaxed">
                                                This configuration contains 5 different menus, all ones that most server owners will require making whether they're a first-time server owner or an experienced server owner looking to start a new project. Each menu is configured in the same modern, minimal and simplistic style providing easy access and readability for all players.
                                                <br/><br/><b>PRICE</b> £0.00
                                                </p>
                                            </div>
                                        </div>
    
    
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-6 shrink-0 self-center stroke-[#ffffff]">
                                    <path fill-rule="evenodd" d="M2 10a.75.75 0 0 1 .75-.75h12.59l-2.1-1.95a.75.75 0 1 1 1.02-1.1l3.5 3.25a.75.75 0 0 1 0 1.1l-3.5 3.25a.75.75 0 1 1-1.02-1.1l2.1-1.95H2.75A.75.75 0 0 1 2 10Z" clip-rule="evenodd" />
                                </svg>                                </div>
                                </a>
                                <a
                                    href="https://builtbybit.com/resources/originalcoinflip-deluxecoinflip-config.28595/"
                                    id="docs-card"
                                    class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                                >
                                    <div id="screenshot-container" class="relative flex w-full flex-1 items-stretch">
                                        <img
                                            src="/assets/originalcoinflip.png"
                                            alt="Original Menus - Logo"
                                            class="hidden aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.25)] dark:block"
                                        />
                                        <div
                                            class="absolute -bottom-16 -left-16 h-40 w-[calc(100%+8rem)] bg-gradient-to-b from-transparent via-white to-white dark:via-zinc-900 dark:to-zinc-900"
                                        ></div>
                                    </div>
    
                                    <div class="relative flex items-center gap-6 lg:items-end">
                                        <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">
    
                                            <div class="pt-3 sm:pt-5 lg:pt-0">
                                                <h2 class="text-xl font-semibold text-white">Original Coin Flip</h2>
    
                                                <p class="mt-4 text-md/relaxed">
                                                OriginalCoinflip is a Minecraft configuration pack that introduces a fun and fair coin-flip system to your server. Easy to install and use, it integrates seamlessly with your existing setup. Players can engage in chance-based activities with customizable coin appearance, flip animations, and probabilities. Designed with a robust randomization algorithm, it ensures fair and unbiased outcomes, enhancing your Minecraft gameplay with a unique element of chance.
                                                <br/><br/><b>PRICE</b> £0.00
                                                </p>
                                            </div>
                                        </div>
    
    
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-6 shrink-0 self-center stroke-[#ffffff]">
                                    <path fill-rule="evenodd" d="M2 10a.75.75 0 0 1 .75-.75h12.59l-2.1-1.95a.75.75 0 1 1 1.02-1.1l3.5 3.25a.75.75 0 0 1 0 1.1l-3.5 3.25a.75.75 0 1 1-1.02-1.1l2.1-1.95H2.75A.75.75 0 0 1 2 10Z" clip-rule="evenodd" />
                                </svg>                                </div>
                                </a>
                                <a
                                    href="https://builtbybit.com/resources/originaltags-100-deluxetags-tags.45544/"
                                    id="docs-card"
                                    class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                                >
                                    <div id="screenshot-container" class="relative flex w-full flex-1 items-stretch">
                                        <img
                                            src="/assets/originaltags.png"
                                            alt="Original Menus - Logo"
                                            class="hidden aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.25)] dark:block"
                                        />
                                        <div
                                            class="absolute -bottom-16 -left-16 h-40 w-[calc(100%+8rem)] bg-gradient-to-b from-transparent via-white to-white dark:via-zinc-900 dark:to-zinc-900"
                                        ></div>
                                    </div>
    
                                    <div class="relative flex items-center gap-6 lg:items-end">
                                        <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">
    
                                            <div class="pt-3 sm:pt-5 lg:pt-0">
                                                <h2 class="text-xl font-semibold text-white">Original Tags</h2>
    
                                                <p class="mt-4 text-md/relaxed">
                                                OriginalTags is a Minecraft configuration pack that adds a dynamic tagging system to your server. Easy to install and use, it integrates seamlessly with your existing setup. Players can earn and display custom tags based on achievements, ranks, or events. With a variety of customization options, including tag appearance and conditions for earning tags, it enhances player interaction and engagement. Designed to be lightweight and efficient, OriginalTags enriches your Minecraft server with a unique and interactive feature.
                                                <br/><br/><b>PRICE</b> £0.00
                                                </p>
                                            </div>
                                        </div>
    
    
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-6 shrink-0 self-center stroke-[#ffffff]">
                                    <path fill-rule="evenodd" d="M2 10a.75.75 0 0 1 .75-.75h12.59l-2.1-1.95a.75.75 0 1 1 1.02-1.1l3.5 3.25a.75.75 0 0 1 0 1.1l-3.5 3.25a.75.75 0 1 1-1.02-1.1l2.1-1.95H2.75A.75.75 0 0 1 2 10Z" clip-rule="evenodd" />
                                </svg>                                </div>
                                </a>
                    </main>
                    </div>

                @component('components.Footer')
                @endcomponent
            </div>
        </div>
    </div>
</body>

</html>
