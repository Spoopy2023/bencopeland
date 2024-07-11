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

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body class="font-sans antialiased bg-black dark:text-white/50">
    <div class=" text-white/50 bg-black ">
        <div id="background" class="absolute w-full h-full" style="width: 100vw;height: 110vh;position: fixed;display: block;overflow: hidden;margin-top: -10vh;z-index: -100;background-image: linear-gradient(0deg, transparent 24%, rgba(255, 255, 255, .05) 25%, rgba(255, 255, 255, .05) 26%, transparent 27%, transparent 74%, rgba(255, 255, 255, .05) 75%, rgba(255, 255, 255, .05) 76%, transparent 77%, transparent), linear-gradient(90deg, transparent 24%, rgba(255, 255, 255, .05) 25%, rgba(255, 255, 255, .05) 26%, transparent 27%, transparent 74%, rgba(255, 255, 255, .05) 75%, rgba(255, 255, 255, .05) 76%, transparent 77%, transparent);height: 110VH;background-size: 64px 64px;" />
        <div
            class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#ff20da] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                    <div class="flex lg:justify-center lg:col-start-2">
                    @component('components.Nav')
                    @endcomponent

                    </div>

    </header>
                <main class="mt-6 gap-x-10">
                    <div class="h-full w-full">
                    <a 
                            href="/about"
                            class="flex items-start gap-4 rounded-lg bg-black p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#fff] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#fff]">
                            <div
                                class="flex size-12 shrink-0 items-center justify-center rounded-full  sm:size-16">
                                <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 sm:size-6">
                                    <path d="M10 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM3.465 14.493a1.23 1.23 0 0 0 .41 1.412A9.957 9.957 0 0 0 10 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 0 0-13.074.003Z" />
                                </svg>

                            </div>

                            <div class="pt-3 sm:pt-5">
                                <h2 class="text-xl text-center font-semibold text-white dark:text-white">Quick Introduction</h2>

                                <p class="mt-4 text-xl/relaxed text-center">
                                Hey there! I’m Ben otherwise known as Cruciallity.<br> I’m a 16 year old Manager from the United Kingdom. I’ve been doing Management for nearly three years now, and after a short break, I’m looking to find myself a new position to be dedicated to! Take a look at my previous experience and skills to see if I’d be a good fit for you and your team!<br><br><i>HINT</i> Click this box to find out EVEN MORE about me!
                                </p>
                            </div>
                        </a>
                    </div>
                </main>

                @component('components.Footer')
                @endcomponent
            </div>
        </div>
    </div>
</body>

</html>
