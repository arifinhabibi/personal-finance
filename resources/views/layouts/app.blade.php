<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catatan Keuangan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="flex flex-col md:flex-row min-h-screen">
        <!-- Mobile Header -->
        <div class="md:hidden flex justify-between items-center p-4 bg-white shadow-md sticky top-0 z-30">
            <div class="flex items-center">
                <img src="{{ asset('image/logo.png') }}" alt="Logo" class="w-24">
                <h1 class="ml-2 text-lg font-semibold">@yield('title', 'Dashboard')</h1>
            </div>
            <button id="mobileMenuButton" class="text-gray-700 focus:outline-none">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>

        <!-- Sidebar - Made sticky -->
        <aside id="sidebar" class="hidden md:block w-64 bg-white shadow-md p-6 transform -translate-x-full md:translate-x-0 transition-transform duration-300 fixed md:sticky top-0 h-screen overflow-y-auto z-40">
            <div class="flex flex-col h-full">
                <!-- Top Section -->
                <div>
                    <div class="flex justify-between items-center mb-8">
                        <img src="{{ asset('image/logo.png') }}" alt="Logo" class="w-32">
                        <button id="closeSidebar" class="md:hidden text-gray-700">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <nav class="flex flex-col space-y-4">
                        <a href="{{ route('dashboard') }}" class="px-4 py-2 rounded-lg {{ request()->routeIs('dashboard') ? 'bg-blue-100 text-blue-600 font-semibold' : 'hover:bg-gray-100' }}">
                            <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
                        </a>
                        <a href="{{ route('transaksi.index') }}" class="px-4 py-2 rounded-lg {{ request()->routeIs('transaksi.index') ? 'bg-blue-100 text-blue-600 font-semibold' : 'hover:bg-gray-100' }}">
                            <i class="fas fa-exchange-alt mr-2"></i> Transaksi
                        </a>
                        <a href="{{ route('laporan.index') }}" class="px-4 py-2 rounded-lg {{ request()->routeIs('laporan.index') ? 'bg-blue-100 text-blue-600 font-semibold' : 'hover:bg-gray-100' }}">
                            <i class="fas fa-file-alt mr-2"></i> Laporan
                        </a>
                    </nav>
                </div>

                <!-- Bottom Profile Section -->
                <div class="mt-auto pt-4 border-t border-gray-200">
                    <div class="flex items-center px-4 py-2">
                        <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center mr-2">
                            <i class="fas fa-user text-blue-600"></i>
                        </div>
                        <span class="text-sm font-medium">{{ Auth::user()->name }}</span>
                    </div>
                    <div class="mt-2">
                        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg">
                            <i class="fas fa-cog mr-2"></i> Pengaturan
                        </a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg">
                                <i class="fas fa-sign-out-alt mr-2"></i> Keluar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Content Area -->
        <main class="flex-1 overflow-auto">
            <!-- Desktop Header - Sticky -->
            <div class="hidden md:flex justify-between items-center mb-6 p-6 pb-0 sticky top-0 bg-gray-100 z-20">
                <h2 class="text-2xl font-bold">@yield('title', 'Dashboard')</h2>
                <div class="relative inline-block text-left">
                    <button id="dropdownButton" onclick="toggleDropdown()" class="flex items-center space-x-2 focus:outline-none">
                        <span class="text-sm font-semibold text-gray-700">{{ Auth::user()->name }}</span>
                        <i class="fas fa-chevron-down text-xs"></i>
                    </button>
                    <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-40 bg-white rounded shadow z-50 border border-gray-200">
                        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 border-b border-gray-100">
                            <i class="fas fa-user mr-2"></i> Profil
                        </a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">
                                <i class="fas fa-sign-out-alt mr-2"></i> Keluar
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Content Section - With proper padding and scrolling -->
            <div class="p-6">
                @yield('content')
            </div>
        </main>
    </div>

    <!-- JavaScript -->
    <!-- Di file layout/app.blade.php -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script>
        // Toggle dropdown menu
        function toggleDropdown() {
            const menu = document.getElementById('dropdownMenu');
            menu.classList.toggle('hidden');
        }

        // Close dropdown if click outside
        window.addEventListener('click', function(e) {
            const button = document.getElementById('dropdownButton');
            const menu = document.getElementById('dropdownMenu');
            if (!button.contains(e.target)) {
                menu.classList.add('hidden');
            }
        });

        // Mobile menu functionality
        const mobileMenuButton = document.getElementById('mobileMenuButton');
        const closeSidebar = document.getElementById('closeSidebar');
        const sidebar = document.getElementById('sidebar');

        mobileMenuButton.addEventListener('click', () => {
            sidebar.classList.remove('hidden');
            sidebar.classList.remove('-translate-x-full');
        });

        closeSidebar.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
        });

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', (e) => {
            if (!sidebar.contains(e.target) && !mobileMenuButton.contains(e.target) && window.innerWidth < 768) {
                sidebar.classList.add('-translate-x-full');
            }
        });

        // Make sidebar responsive to window resize
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 768) {
                sidebar.classList.remove('hidden');
                sidebar.classList.remove('-translate-x-full');
            } else {
                sidebar.classList.add('-translate-x-full');
            }
        });
    </script>
</body>
</html>