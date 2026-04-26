<nav class="md:hidden bg-blue-600 text-white mt-5 mx-5 px-6 py-4 rounded-2xl shadow-md">
    <div class="flex items-center justify-between">
        <img src="{{ asset('images/logo.png') }}" class="h-10 border-2 border-white rounded-full">
        <button id="menu-btn" class="text-xl cursor-pointer">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>

    <div id="mobile-menu" class="hidden absolute w-auto left-0 right-0 mt-2 mx-5">
        <div class="flex mt-4 bg-blue-600 rounded-xl p-4 flex-col gap-4">

            <a href="{{ route('dashboard', ['username' => $username]) }}" class="p-3 hover:bg-blue-500 rounded-lg"><i class="fa-solid fa-house"></i>  Dashboard</a>
            <a href="{{ route('profile', ['username' => $username]) }}" class="p-3 hover:bg-blue-500 rounded-lg"><i class="fa-solid fa-user"></i>  Profile</a>
            <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="p-3 hover:bg-blue-500 rounded-lg"><i class="fa-solid fa-gear"></i>  Pengelolaan</a>

            <form action="{{ route('logout') }}" method="POST">
                @csrf <button class="bg-red-600 px-3 py-2 rounded-lg text-white w-full hover:bg-red-500 cursor-pointer">Logout</button>
            </form>

        </div>
    </div>
</nav>
