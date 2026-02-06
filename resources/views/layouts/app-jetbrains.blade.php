<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ isset($title) ? $title.' - '.config('app.name') : config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen font-sans antialiased bg-[#0f0f0f] text-slate-300">

{{-- 1. Main Container --}}
<x-main full-width>

    {{-- 2. Sidebar Slot --}}
    <x-slot:sidebar drawer="main-drawer" class="bg-[#0f0f0f] p-2">
        <x-nav-sidebar />
    </x-slot:sidebar>

    {{-- 3. Content Slot --}}
    <x-slot:content class="flex flex-col rounded-xl bg-[#1e1e1e] overflow-hidden shadow-sm m-5">
        {{-- Your Header --}}
        <x-nav-header />

        {{-- Main View --}}
        <div class="flex-1 overflow-auto p-6 font-mono text-sm leading-relaxed">
            {{ $slot }}
        </div>

        {{-- Footer --}}
        <div class="mt-auto flex h-6 items-center px-4 text-[10px] opacity-50">
            <span>{{config('app.name')}}</span>
            <span class="ml-4">by BearnyCodes</span>
        </div>
    </x-slot:content>

</x-main>

<x-toaster-hub />
</body>
</html>
