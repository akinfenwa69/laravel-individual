<nav
    class="sticky top-0 left-0 w-full h-18 flex items-center justify-between px-5 lg:px-10 bg-(--sidebar)/50 backdrop-blue-lg">
    <div>
        <span class="text-lg">Laravel Individual</span>
    </div>
    <div class="flex items-center gap-1 h-full">
        <div
            class="relative group h-15 flex transition overflow-hidden bg-(--sidebar-foreground)/5 hover:bg-(--sidebar-foreground)/10 rounded-lg">
            <a href="#pokemons" class="w-full h-full flex items-center justify-center p-5">
                Pokémons
            </a>
            <span
                class="absolute bg-blue-500 rounded-full left-1/2 -translate-x-1/2 bottom-1 h-[3px] w-7/10 scale-x-0 group-hover:scale-x-100 transition"></span>
        </div>
        <div
            class="relative group h-15 flex transition overflow-hidden bg-(--sidebar-foreground)/5 hover:bg-(--sidebar-foreground)/10 rounded-lg">
            <a href="#teams" class="w-full h-full flex items-center justify-center p-5">
                Teams
            </a>
            <span
                class="absolute bg-blue-500 rounded-full left-1/2 -translate-x-1/2 bottom-1 h-[3px] w-7/10 scale-x-0 group-hover:scale-x-100 transition"></span>
        </div>
        <div
            class="relative group h-15 flex transition overflow-hidden bg-(--sidebar-foreground)/5 hover:bg-(--sidebar-foreground)/10 rounded-lg">
            <a href="#players" class="w-full h-full flex items-center justify-center p-5">
                Players
            </a>
            <span
                class="absolute bg-blue-500 rounded-full left-1/2 -translate-x-1/2 bottom-1 h-[3px] w-7/10 scale-x-0 group-hover:scale-x-100 transition"></span>
        </div>
        <div
            class="relative group h-15 flex transition overflow-hidden bg-(--sidebar-foreground)/5 hover:bg-(--sidebar-foreground)/10 rounded-lg">
            <a href="#countries" class="w-full h-full flex items-center justify-center p-5">
                Countries
            </a>
            <span
                class="absolute bg-blue-500 rounded-full left-1/2 -translate-x-1/2 bottom-1 h-[3px] w-7/10 scale-x-0 group-hover:scale-x-100 transition"></span>
        </div>
    </div>
    <div class="flex gap-2 items-center">
        <a class="rounded hover:border-(--primary) px-5 py-3 hover:scale-105 transition border border-(--border)"
            href="/register">
            Register
        </a>
        <a class="rounded bg-blue-500 px-5 py-3 hover:bg-blue-600 hover:scale-105 transition" href="/login">
            Login
        </a>
    </div>
</nav>
