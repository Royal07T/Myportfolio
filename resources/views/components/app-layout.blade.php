<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Royalty | Laravel Full-Stack Developer') }}</title>
    <meta name="description" content="Portfolio of Timothy Jehwo Oghenero (Royalty), a Senior Laravel Full-Stack Developer & Systems Engineer specializing in fintech, POS, and scalable systems.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Outfit:wght@100..900&display=swap" rel="stylesheet">

    <!-- Styles & Scripts -->
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-zinc-950 text-zinc-50 selection:bg-indigo-500/30 selection:text-indigo-200">
    <div class="relative min-h-screen">
        <!-- Navigation -->
        <header class="fixed top-0 left-0 right-0 z-50 glass" x-data="{ mobileMenuOpen: false }">
            <nav class="container mx-auto px-6 py-4 flex items-center justify-between">
                <a href="/" class="text-2xl font-bold tracking-tighter text-gradient outfit">
                    ROYALTY
                </a>
                
                <div class="hidden md:flex items-center space-x-8 text-sm font-medium text-zinc-400">
                    <a href="#about" class="hover:text-white transition-colors">About</a>
                    <a href="#stack" class="hover:text-white transition-colors">Stack</a>
                    <a href="#projects" class="hover:text-white transition-colors">Projects</a>
                    <a href="#approach" class="hover:text-white transition-colors">How I Work</a>
                    <a href="#contact" class="px-5 py-2 rounded-full bg-white text-black hover:bg-zinc-200 transition-all font-semibold">
                        Get in Touch
                    </a>
                </div>

                <button class="md:hidden text-zinc-400 p-2" @click="mobileMenuOpen = !mobileMenuOpen">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-show="!mobileMenuOpen">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-show="mobileMenuOpen" style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </nav>

            <!-- Mobile Menu -->
            <div 
                x-show="mobileMenuOpen" 
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 -translate-y-4"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-4"
                class="md:hidden bg-zinc-950 border-b border-zinc-900 px-6 py-8 space-y-6"
                style="display: none;"
            >
                <a href="#about" @click="mobileMenuOpen = false" class="block text-xl font-medium text-zinc-400 hover:text-white transition-colors">About</a>
                <a href="#stack" @click="mobileMenuOpen = false" class="block text-xl font-medium text-zinc-400 hover:text-white transition-colors">Stack</a>
                <a href="#projects" @click="mobileMenuOpen = false" class="block text-xl font-medium text-zinc-400 hover:text-white transition-colors">Projects</a>
                <a href="#approach" @click="mobileMenuOpen = false" class="block text-xl font-medium text-zinc-400 hover:text-white transition-colors">How I Work</a>
                <a href="#contact" @click="mobileMenuOpen = false" class="block w-full py-4 rounded-xl bg-white text-black text-center font-bold">
                    Get in Touch
                </a>
            </div>
        </header>

        <main>
            {{ $slot }}
        </main>

        <footer class="py-12 border-t border-zinc-900">
            <div class="container mx-auto px-6 flex flex-col md:flex-row items-center justify-between">
                <div class="text-zinc-500 text-sm">
                    © {{ date('Y') }} Timothy Jehwo Oghenero. All rights reserved.
                </div>
                <div class="flex items-center space-x-6 mt-6 md:mt-0">
                    <a href="https://github.com/Royal07T" class="text-zinc-500 hover:text-white transition-colors"><span class="sr-only">GitHub</span>GitHub</a>
                    <a href="https://www.linkedin.com/in/timothy-jehwo-15b12930a" class="text-zinc-500 hover:text-white transition-colors"><span class="sr-only">LinkedIn</span>LinkedIn</a>
                </div>
            </div>
        </footer>
    </div>

    @livewireScripts
</body>
</html>
