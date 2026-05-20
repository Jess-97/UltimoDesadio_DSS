<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/@heroicons/v2/24/outline/index.js"></script>
</head>

<body class="bg-[#FDFBF9]"> 
<div class="flex min-h-screen">

    <aside class="w-64 bg-white flex flex-col justify-between">
        
        <div>
            <div class="p-8">
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-26 mb-2">
                    <h1 class="text-2xl font-bold text-gray-800">PetShop</h1>
                    <span class="text-[10px] font-bold text-gray-400 tracking-widest uppercase">Admin</span>
                </div>
            </div>

            <!-- Se agregó la clase 'nav-link' a cada elemento del menú -->
            <nav class="mt-4 px-4 space-y-2 text-gray-500" id="sidebar-nav">
                <a href="/dashboard" class="nav-link flex items-center gap-3 px-4 py-3 rounded-xl transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path></svg>
                    <span>Dashboard</span>
                </a>

                <a href="/categorias" class="nav-link flex items-center gap-3 px-4 py-3 rounded-xl transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z"></path></svg>
                    <span>Categorías</span>
                </a>

                <a href="/productos" class="nav-link flex items-center gap-3 px-4 py-3 rounded-xl transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007z"></path></svg>
                    <span>Productos</span>
                </a>

                <a href="/pedidos" class="nav-link flex items-center gap-3 px-4 py-3 rounded-xl transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"></path></svg>
                    <span>Pedidos</span>
                </a>

                <a href="/usuarios" class="nav-link flex items-center gap-3 px-4 py-3 rounded-xl transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.103a6.375 6.375 0 0115.75 0zM12.75 7.5a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0z"></path></svg>
                    <span>Usuarios</span>
                </a>

                <a href="/perfil" class="nav-link flex items-center gap-3 px-4 py-3 rounded-xl transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    <span>Perfil</span>
                </a>
            </nav>
        </div>

        <div class="p-6 mt-auto">
            <div class="flex justify-center mb-6">
                <img src="{{ asset('images/mascotas.png') }}" alt="Mascotas" class="w-40">
            </div>
            <a href="/logout" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:text-red-500 transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                Cerrar sesión
            </a>
        </div>
    </aside>

    <main class="flex-1 p-8 bg-[#FDFBF9]">
        @yield('content')
    </main>

</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const links = document.querySelectorAll('.nav-link');
        const currentPath = window.location.pathname;

        links.forEach(link => {
            // Verifica si el enlace coincide con la URL actual para dejarlo marcado al recargar
            if (link.getAttribute('href') === currentPath) {
                link.classList.add('bg-[#FFF1EE]', 'text-[#FF7C6B]', 'font-semibold');
            }

            // Cambia el estilo al hacer clic
            link.addEventListener('click', function() {
                links.forEach(l => l.classList.remove('bg-[#FFF1EE]', 'text-[#FF7C6B]', 'font-semibold'));
                this.classList.add('bg-[#FFF1EE]', 'text-[#FF7C6B]', 'font-semibold');
            });
        });
    });
</script>
</body>
</html>