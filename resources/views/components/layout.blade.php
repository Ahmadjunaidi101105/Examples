<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white dark:bg-gray-900">
    <!-- Header -->
    <header>
        <div class="mx-auto flex h-16 max-w-screen-xl items-center gap-8 px-4 sm:px-6 lg:px-8">
            
            <!-- Logo -->
            <a href="/" class="block text-teal-600 dark:text-teal-300">
                <span class="sr-only">Home</span>
                <svg class="h-8" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.41 10.3847C1.14777 7.4194 2.85643 4.7861 5.2639 2.90424C7.6714 1.02234 10.6393 0 13.695 0C16.7507 0 19.7186 1.02234 22.1261 2.90424C24.5336 4.7861 26.2422 7.4194 26.98 10.3847H25.78C23.7557 10.3549 21.7729 10.9599 20.11 12.1147C20.014 12.1842 19.9138 12.2477 19.81 12.3047H19.67C19.5662 12.2477 19.466 12.1842 19.37 12.1147C17.6924 10.9866 15.7166 10.3841 13.695 10.3841C11.6734 10.3841 9.6976 10.9866 8.02 12.1147C7.924 12.1842 7.8238 12.2477 7.72 12.3047H7.58C7.4762 12.2477 7.376 12.1842 7.28 12.1147C5.6171 10.9599 3.6343 10.3549 1.61 10.3847H0.41Z"
                        fill="currentColor"
                    />
                </svg>
            </a>

            <!-- Navigation -->
            <div class="flex flex-1 items-center justify-end md:justify-between">
                <nav aria-label="Global" class="hidden md:block">
                    <ul class="flex items-center gap-6 text-xl">
                        <li>
                            <x-nav-link href="/" :active="request()->is('/')">
                                Home
                            </x-nav-link>
                        </li>
                        <li>
                            <x-nav-link href="/about" :active="request()->is('about')">
                                About
                            </x-nav-link>
                        </li>
                        <li>
                            <x-nav-link href="/contact" :active="request()->is('contact')">
                                Contact
                            </x-nav-link>
                        </li>
                        <li>
                            <x-nav-link href="/siswa" :active="request()->is('siswa')" >
                                Daftar Siswa
                            </x-nav-link>
                        </li>
                    </ul>
                </nav>

                <!-- Auth Buttons + Mobile Toggle -->
                <div class="flex items-center gap-4">
                    <div class="sm:flex sm:gap-4">
                        <a
                            href="#"
                            class="block rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-teal-700 dark:hover:bg-teal-500"
                        >
                            Login
                        </a>
                        <a
                            href="#"
                            class="hidden rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600 transition hover:text-teal-600/75 sm:block dark:bg-gray-800 dark:text-white dark:hover:text-white/75"
                        >
                            Register
                        </a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <button
                        class="block rounded-sm bg-gray-100 p-2.5 text-gray-600 transition hover:text-gray-600/75 md:hidden dark:bg-gray-800 dark:text-white dark:hover:text-white/75"
                    >
                        <span class="sr-only">Toggle menu</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Main -->
    <main class="py-10 px-10 md:px-25">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="py-10 px-10 md:px-25">
        ini footer dari page <span>{{ $footer }}</span>
    </footer>
</body>
</html>
