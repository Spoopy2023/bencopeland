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

<body class="font-sans antialiased dark:bg-black dark:text-white/50 container overflow-hidden overflow-y-auto h-[40px]">
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
              <main>
              <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}
.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-0lax{text-align:left;vertical-align:top}
</style>
<table class="tg"><thead>
  <tr>
    <th class="tg-0lax">server</th>
    <th class="tg-0lax">Role</th>
    <th class="tg-0lax">Timeframe</th>
    <th class="tg-0lax">Players</th>
  </tr></thead>
<tbody>
  <tr>
    <td class="tg-0lax">Prismarine   </td>
    <td class="tg-0lax"> Owner
    </td>
    <td class="tg-0lax">June 2024 - Present</td>
    <td class="tg-0lax"> Not Applicable</td>
  </tr>
  
</tbody></table>
</main>
                    </div>
</div>
                @component('components.Footer')
                @endcomponent
            </div>
        </div>
    </div>
</body>

</html>
