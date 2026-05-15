<div class="navbar bg-base-300">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </div>
            <ul tabindex="-1" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                <li><a href="/ideas/">ideas</a></li>
                <li><a href="/cats">cats</a></li>
            </ul>
        </div>
        <a class="btn btn-ghost text-xl" href="/cats">cats & ideas</a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1 gap-2">
            <li><a href="/ideas/">ideas</a></li>
            <li><a href="/cats">cats</a></li>
        </ul>
    </div>
    <div class="navbar-end">
        @guest
        <ul class="menu menu-horizontal space-x-2">
            <li><a class="btn btn-soft btn-primary" href="/login">log in</a></li>
            <li><a class="btn btn-soft btn-secondary" href="/register">register</a></li>
        </ul>
        @endguest

        @auth
        <form method="POST" action="/logout">
            @csrf
            @method('DELETE')
            <button class="btn btn-soft btn-ghost">log out</button>
        </form>
        @endauth
    </div>
</div>