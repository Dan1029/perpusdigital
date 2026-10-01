<script src="https://cdn.tailwindcss.com"></script>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Siswa') }}
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
                        Selamat datang di sistem perpustakaan sekolah.
                    </p>
                </div>
            </div>

            <!-- Menu -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Data Buku -->
                <div class="bg-white shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800">
                        Daftar Buku
                    </h3>

                    <p class="text-gray-600 mt-2">
                        Lihat daftar buku yang tersedia di perpustakaan.
                    </p>

                    <a
                        href="{{ route('admin.buku.index') }}"
                        class="inline-block mt-4 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md"
                    >
                        Lihat Buku
                    </a>
                </div>

                <!-- Profil -->
                <div class="bg-white shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800">
                        Profil Saya
                    </h3>

                    <p class="text-gray-600 mt-2">
                        Lihat dan ubah informasi akun kamu.
                    </p>

                    <a
                        href="{{ route('profile.edit') }}"
                        class="inline-block mt-4 bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md"
                    >
                        Lihat Profil
                    </a>
                </div>

                <!-- Informasi -->
                <div class="bg-white shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800">
                        Informasi
                    </h3>

                    <p class="text-gray-600 mt-2">
                        Gunakan menu yang tersedia untuk mengakses fitur sistem.
                    </p>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>