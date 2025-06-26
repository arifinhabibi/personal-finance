<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catatan Keuangan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <link href="{{ asset('build/assets/app-CVXRYZ7Y.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('build/assets/app-DO6Blc0x.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://broadly-settled-drum.ngrok-free.app/build/assets/app-DO6Blc0x.css">

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

                <!-- Bottom Profile Section as Dropdown -->
                <div class="mt-auto pt-4 border-t border-gray-200">
                    <div class="relative">
                        <button id="profileDropdownButton" class="w-full flex items-center px-4 py-2 rounded-lg hover:bg-gray-100 focus:outline-none">
                            <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center mr-2">
                                <i class="fas fa-user text-blue-600"></i>
                            </div>
                            <span class="text-sm font-medium flex-grow text-left">{{ Auth::user()->name }}</span>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        
                        <div id="profileDropdownMenu" class="hidden absolute bottom-full left-0 right-0 mb-2 bg-white rounded-md shadow-lg py-1 z-50 border border-gray-200">
                            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <i class="fas fa-cog mr-2"></i> Pengaturan
                            </a>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-sign-out-alt mr-2"></i> Keluar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Content Area -->
        <main class="flex-1 overflow-auto">
            <!-- Desktop Header - Sticky -->
            <div class="hidden md:flex justify-start items-center mb-6 p-6 pb-0 sticky top-0 bg-gray-100 z-20">
                <h2 class="text-2xl font-bold">@yield('title', 'Dashboard')</h2>
            </div>

            <!-- Content Section - With proper padding and scrolling -->
            <div class="p-6">
                @yield('content')
            </div>
        </main>
    </div>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script>
        // Profile dropdown functionality in sidebar
        const profileDropdownButton = document.getElementById('profileDropdownButton');
        const profileDropdownMenu = document.getElementById('profileDropdownMenu');

        profileDropdownButton.addEventListener('click', (e) => {
            e.stopPropagation();
            profileDropdownMenu.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!profileDropdownButton.contains(e.target) && !profileDropdownMenu.contains(e.target)) {
                profileDropdownMenu.classList.add('hidden');
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

    {{-- <script src="{{ asset('build/assets/app-DaBYqt0m.js') }}"></script> --}}
    <script src="https://broadly-settled-drum.ngrok-free.app/build/assets/app-DaBYqt0m.js"></script>

</body>
</html>