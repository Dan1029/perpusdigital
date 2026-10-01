<script src="https://cdn.tailwindcss.com"></script>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Welcome -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold mb-2">
                        Selamat Datang, {{ Auth::user()->name }}!
                    </h1>

                    <p class="text-gray-600">
                        Kamu login sebagai Administrator.
                    </p>
                </div>
            </div>

            <!-- Statistik -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">

                <!-- Total Buku -->
                <div class="bg-blue-500 text-white rounded-lg shadow p-6">
                    <p class="text-sm">
                        Total Buku
                    </p>

                    <h3 class="text-3xl font-bold mt-2">
                        {{ \App\Models\Buku::count() }}
                    </h3>
                </div>

                <!-- Total User -->
                <div class="bg-green-500 text-white rounded-lg shadow p-6">
                    <p class="text-sm">
                        Total User
                    </p>

                    <h3 class="text-3xl font-bold mt-2">
                        {{ \App\Models\User::count() }}
                    </h3>
                </div>

                <!-- Total Stok -->
                <div class="bg-purple-500 text-white rounded-lg shadow p-6">
                    <p class="text-sm">
                        Total Stok Buku
                    </p>

                    <h3 class="text-3xl font-bold mt-2">
                        {{ \App\Models\Buku::sum('stok') }}
                    </h3>
                </div>

            </div>

            <!-- Menu Admin -->
            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                <h3 class="text-xl font-semibold text-gray-800 mb-4">
                    Menu Admin
                </h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                    <!-- Kelola Buku -->
                    <a
                        href="{{ route('admin.buku.index') }}"
                        class="block p-5 border rounded-lg hover:bg-gray-50"
                    >
                        <h4 class="font-semibold text-lg text-gray-800">
                            Kelola Buku
                        </h4>

                        <p class="text-gray-600 mt-1">
                            Tambah, edit, lihat, dan hapus data buku.
                        </p>
                    </a>

                    <!-- Tambah Buku -->
                    <a
                        href="{{ route('admin.buku.create') }}"
                        class="block p-5 border rounded-lg hover:bg-gray-50"
                    >
                        <h4 class="font-semibold text-lg text-gray-800">
                            Tambah Buku
                        </h4>

                        <p class="text-gray-600 mt-1">
                            Tambahkan buku baru ke dalam sistem.
                        </p>
                    </a>

                    <!-- Profil -->
                    <a
                        href="{{ route('profile.edit') }}"
                        class="block p-5 border rounded-lg hover:bg-gray-50"
                    >
                        <h4 class="font-semibold text-lg text-gray-800">
                            Profil Admin
                        </h4>

                        <p class="text-gray-600 mt-1">
                            Kelola informasi akun administrator.
                        </p>
                    </a>

                </div>

            </div>

        </div>
    </div>
</x-app-layout>