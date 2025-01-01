<!DOCTYPE html>
<html lang="en" data-theme="cupcake">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Movies</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    @include('partials.Sidebar')

    <!-- Main Content -->
    <div id="main-content" class="flex-1 p-16 overflow-y-auto">
        @yield('content')
    </div>

    <script>
        const toggleSidebar = () => {
            const sidebar = document.getElementById('sidebar');
            const sidebarText = document.querySelectorAll('.sidebar-text');

            if (sidebar.classList.contains('w-64')) {
                sidebar.classList.remove('w-64');
                sidebar.classList.add('w-18');
                sidebarText.forEach(el => el.classList.add('hidden'));
            } else {
                sidebar.classList.remove('w-18');
                sidebar.classList.add('w-64');
                sidebarText.forEach(el => el.classList.remove('hidden'));
            }
        };
    </script>
</body>

</html>
