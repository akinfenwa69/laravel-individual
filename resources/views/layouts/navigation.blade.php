<nav x-data="{ open: false }" class="border-r border-zinc-600!">
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="/styles/globals.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    @php
        $user = auth()->user();
    @endphp

    <!-- Primary Navigation Menu -->
    <div class="w-64 h-full">
        <div class="flex justify-between flex-col h-full">
            <div class="flex flex-col">
                <!-- Logo -->
                <div class="shrink-0">
                    <a href="{{ route('dashboard') }}" class="flex items-center text-xl gap-3 w-full p-5">
                        <x-application-logo class="block h-12 w-auto fill-current text-gray-200" />
                        Dashboard
                    </a>
                </div>
                <hr class="border-zinc-500!">
                <!-- Navigation Links -->
                <div class="hidden sm:flex">
                    <nav class="w-80 p-3 flex flex-col gap-3 text-(--sidebar-foreground)">
                        <x-nav-link :href="route('pokemons.index')" :active="request()->routeIs('pokemons.index')"
                            class="flex items-center text-base! gap-2 p-2 transition hover:bg-(--sidebar-accent) text-white">
                            <span class="material-symbols-outlined">bug_report</span>
                            <span class="hidden active:flex">active</span>
                            {{ __('Pokémons') }}
                        </x-nav-link>
                        <x-nav-link :href="route('teams.index')" :active="request()->routeIs('teams.index')"
                            class="flex items-center text-base! gap-2 p-2 transition hover:bg-(--sidebar-accent) text-white">
                            <span class="material-symbols-outlined">group</span>
                            {{ __('Teams') }}
                        </x-nav-link>
                        @if ($user->rol === 'ADMIN')
                            <x-nav-link :href="route('players.index')" :active="request()->routeIs('players.index')"
                                class="flex items-center text-base! gap-2 p-2 transition hover:bg-(--sidebar-accent) text-white">
                                <span class="material-symbols-outlined">person</span>
                                {{ __('Players') }}
                            </x-nav-link>
                        @endif
                        <x-nav-link :href="route('countries.index')" :active="request()->routeIs('countries.index')"
                            class="flex items-center text-base! gap-2 p-2 transition hover:bg-(--sidebar-accent) text-white">
                            <span class="material-symbols-outlined">globe</span>
                            {{ __('Countries') }}
                        </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center mt-auto">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="flex items-center p-3 text-sm leading-4 font-medium text-white border-t border-zinc-500! w-64 h-14 bg-zinc-800! focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }} {{ Auth::user()->surname }}</div>

                            <div class="ml-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-chevrons-up-down-icon lucide-chevrons-up-down">
                                    <path d="m7 15 5 5 5-5" />
                                    <path d="m7 9 5-5 5 5" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>


                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
