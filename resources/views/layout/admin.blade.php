<!DOCTYPE html>
<html lang="en" data-theme= "nord">

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
    <div id="main-content" class="flex-1 lg:p-10 p-3 overflow-y-auto mb-30 pb-20 ">
        @yield('content')
    </div>

    <script>
        // Fungsi untuk mengatur tampilan logo berdasarkan lebar sidebar
        const updateLogoVisibility = () => {
            const sidebar = document.getElementById('sidebar');
            const images = document.querySelectorAll('.img');

            if (sidebar.classList.contains('w-64')) {
                // Jika sidebar lebar, sembunyikan logo
                images.forEach(img => img.classList.add('hidden'));
            } else {
                // Jika sidebar sempit, tampilkan logo
                images.forEach(img => img.classList.remove('hidden'));
                images.forEach(img => {
                    img.style.width = '60px'; // Sesuaikan ukuran gambar
                    img.style.margin = '0 auto';
                    img.style.paddingBottom = '2.5rem';
                });
            }
        };

        // Fungsi toggle untuk buka/tutup sidebar
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

            // Perbarui logo sesuai kondisi sidebar
            updateLogoVisibility();
        };

        // Panggil updateLogoVisibility saat halaman pertama kali dimuat
        // document.addEventListener('DOMContentLoaded', () => {
        //     updateLogoVisibility();
        // });
    </script>

</body>

</html>
