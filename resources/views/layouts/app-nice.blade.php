<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ isset($title) ? $title.' - '.config('app.name') : config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen font-sans antialiased bg-base-200">
<div class="flex h-screen w-full flex-col bg-[#0f0f0f] p-2 text-slate-300 p-5">


    <div class="flex flex-1 gap-2 overflow-hidden">

        <aside class="flex w-64 flex-col rounded-xl bg-[#1e1e1e] shadow-sm">
            <div class="w-30 h-30">
                <x-app-brand />
            </div>

            <div class="p-4 font-bold text-sm border-b border-white/5">Project</div>
            <div class="flex-1 overflow-y-auto p-2">
                <ul class="menu menu-sm gap-1">
                    <li><a><x-icon name="o-folder" class="w-4 h-4" /> app</a></li>
                    <li><a><x-icon name="o-folder" class="w-4 h-4" /> config</a></li>
                    <li><a class="active"><x-icon name="o-document-text" class="w-4 h-4" /> Migration.php</a></li>
                </ul>
            </div>
        </aside>

        <main class="flex flex-1 flex-col rounded-xl bg-[#1e1e1e] overflow-hidden shadow-sm">
            <div class="flex h-10 border-b border-white/5 bg-[#252525] px-2 items-center gap-1">
                <div class="bg-[#1e1e1e] px-4 py-1 rounded-t-lg text-xs border-t border-x border-white/10">
                    Migration.php
                </div>
                <div class="px-4 py-1 text-xs opacity-50">User.php</div>
            </div>

            <div class="flex-1 overflow-auto p-6 font-mono text-sm leading-relaxed">
                <pre><code><span class="text-purple-400">return new class</span> extends <span class="text-yellow-200">Migration</span> { ... }</code></pre>
            </div>
        </main>
    </div>

    <div class="mt-2 flex h-6 items-center px-4 text-[10px] opacity-50">
        <span>UTF-8</span>
        <span class="ml-4">PHP 8.4</span>
    </div>
</div>

</body>
</html>
