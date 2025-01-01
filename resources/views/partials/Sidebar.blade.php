<div id="sidebar" class="bg-white shadow-md fixed lg:relative h-screen z-50 transition-all duration-300 w-64 text-sky-900 font-semibold">
    <div class="flex flex-col h-full">
        <!-- Sidebar Header -->
        <div class="px-7 py-7 flex items-center justify-between">
            <div class="text-xl font-bold text-purple-600">🌟</div>
        </div>
        <button id="open-sidebar-btn" class="rounded shadow-md mb-14" onclick="toggleSidebar()">
            <i class="fa-solid fa-list text-2xl"></i>
        </button>
        <!-- Sidebar Menu -->
        <ul class="menu flex-1 px-4 space-y-2">
            <li><a class="flex items-center gap-3" href="/admin/dashboard">
                    <i class="fa-solid fa-house text-2xl"></i>
                    <span class="sidebar-text text-xl">Home</span>
                </a></li>
            <li><a class="flex items-center gap-3" href="/movie">
                    <i class="fa-solid fa-film text-2xl"></i>
                    <span class="sidebar-text text-xl">Movies</span>
                </a></li>
            <li><a class="flex items-center gap-3" href="/genre">
                    <i class="fa-solid fa-video text-2xl"></i>
                    <span class="sidebar-text text-xl">Genre</span>
                </a></li>
            <li><a class="flex items-center gap-3">
                    <i class="fa-solid fa-user text-2xl"></i>
                    <span class="sidebar-text text-xl ">User</span>
                </a></li>
        </ul>
    </div>
</div>
