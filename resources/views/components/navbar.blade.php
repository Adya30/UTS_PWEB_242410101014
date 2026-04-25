<nav class="hidden md:block bg-blue-600 text-white mt-3 mx-5 px-8 py-4 rounded-2xl shadow-md">

    <div class="relative flex items-center justify-between">

        <img src="{{ asset('images/logo.png') }}" class="h-10 border-2 border-white rounded-full">

        <div class="flex gap-6 absolute left-1/2 transform -translate-x-1/2">
            <a href="/dashboard" class="flex items-center gap-2 hover:bg-blue-600 p-2 rounded-lg">
                <i class="fa-solid fa-house"></i>
                Dashboard
            </a>
            <a href="/profile" class="flex items-center gap-2 hover:bg-blue-600 p-2 rounded-lg">
                <i class="fa-solid fa-user"></i>
                Profile
            </a>
            <a href="/pengelolaan" class="flex items-center gap-2 hover:bg-blue-600 p-2 rounded-lg">
                <i class="fa-solid fa-gear"></i>
                Pengelolaan
            </a>
        </div>

        <div class="flex items-center gap-4">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="bg-red-600 px-3 py-2 rounded-xl text-white flex items-center gap-2 hover:bg-red-500 cursor-pointer">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    Logout
                </button>
            </form>
        </div>

    </div>
</nav>
