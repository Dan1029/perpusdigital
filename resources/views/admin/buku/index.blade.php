<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-8">

    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
        
        <!-- Header & Action Button -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">DATA BUKU</h1>
            <a href="{{ route('admin.buku.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition">
                + Tambah Buku
            </a>
        </div>

        <hr class="mb-6 border-gray-200">

        <!-- Book List -->
        <div class="space-y-4">
            @forelse ($bukus as $buku)
                <div class="p-4 border border-gray-200 rounded-lg flex justify-between items-center bg-gray-50">
                    <div>
                        <span class="text-xs font-semibold px-2 py-1 bg-blue-100 text-blue-800 rounded mr-2">
                            {{ $buku->kode_buku }}
                        </span>
                        <h3 class="font-bold text-lg text-gray-800 inline">{{ $buku->judul }}</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            Pengarang: <span class="font-medium">{{ $buku->pengarang }}</span> | 
                            Penerbit: <span class="font-medium">{{ $buku->penerbit }}</span>
                        </p>
                    </div>
                    <div class="text-right">
                        <span class="text-sm bg-green-100 text-green-800 px-3 py-1 rounded-full font-semibold">
                            Stok: {{ $buku->stok }}
                        </span>
                    </div>
                </div>
            @empty
                <div class="text-center py-8 text-gray-500">
                    <h2 class="text-lg font-medium">Belum ada data buku.</h2>
                </div>
            @endforelse
        </div>

    </div>

</body>
</html>