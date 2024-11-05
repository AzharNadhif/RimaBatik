<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Rima Batik</title>
    <link rel="icon" href="{{asset('assets/img/mini-logo.png')}}" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    {{-- icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    {{-- css --}}
    <link rel="stylesheet" href="{{asset('assets/css/admin.css')}}">
    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4D280E;
            --secondary-color: #CB9E47;
            --bg-color: #f9f9f9;
            --text-color: #333;
            --border-radius: 8px;
            --sidebar-width: 250px;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
        }
        .sidenav {
            width: var(--sidebar-width);
            background-color: var(--bg-color);
            height: 100vh;
            padding-top: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            position: fixed;
            left: -250px; /* Hide initially */
            transition: 0.5s;
            z-index: 1000;
        }
        .sidenav a {
            padding: 15px;
            font-size: 18px;
            color: var(--primary-color);
            display: block;
            transition: 0.3s;
        }
        .sidenav a:hover {
            background-color: rgba(0, 0, 0, 0.1);
            color: var(--primary-color);
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;
        }
        .sidenav a.active {
            background-color: rgba(0, 0, 0, 0.1);
            color: var(--primary-color);
            border-top-left-radius: 40px;
            border-bottom-left-radius: 40px;
        }
        .sidenav .closebtn {
            font-size: 24px;
            color: var(--primary-color);
            padding-left: 15px;
            cursor: pointer;
        }
        .content {
            margin-left: 0; /* Start with no margin */
            padding: 20px;
            transition: margin-left 0.5s;
        }
        .header h4 {
            font-weight: 600;
            color: var(--primary-color);
        }
        .card {
            border-radius: var(--border-radius);
            border: none;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            margin-left: auto;
            margin-right: auto;
        }
        table {
            background-color: #fff;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.1);
        }
        table thead {
            background-color: var(--primary-color);
            color: white;
        }
        table tbody tr:hover {
            background-color: #f5f5f5;
        }
        .btn-primary {
            background-color: var(--primary-color);
            border: none;
            border-radius: var(--border-radius);
        }
        .btn-primary:hover {
            background-color: var(--secondary-color);
            color: #fff;
        }
    </style>
</head>
<body>

    <div class="sidenav" id="sidenav">
        <span class="closebtn" onclick="closeNav()">Rima Batik</span>
        <a href="#section1" onclick="openSection('section1'); setActive(this);" class="mt-3"><i class="bi bi-box mr-2"></i> Table Produk</a>
        <a href="#section2" onclick="openSection('section2'); setActive(this);" class="mt-1"><i class="bi bi-calendar-event mr-2"></i> Table Acara</a>
        <a href="#section3" onclick="openSection('section3'); setActive(this);" class="mt-1"><i class="bi bi-chat-dots mr-2"></i> Table Testimoni</a>
        <a href="#section4" onclick="openSection('section4'); setActive(this);" class="mt-1"><i class="bi bi-telephone mr-2"></i> Table Kontak</a>
        {{-- button logout --}}
        <form action="{{ route('logout')}}" method="POST" style="display:inline;">
            @csrf
            <button type="submit" class="btn btn-danger logout mt-4 mx-4"><i class="bi bi-box-arrow-left"></i> Logout</button>
        </form>

    </div>

    <div class="content" id="content">
        <span id="maggot" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
        <div class="card mt-4 p-4">
            <h4>Halo, Admin</h4>
            <p>Kelola data dengan lebih efisien.</p>
            <hr>
        </div>

        {{-- Table Produk --}}
        <div class="section-content" id="section1-content">
            <h2 class="my-4">Table Produk</h2>
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            {{-- button tambah --}}
            <div class="d-flex justify-content-end mb-3">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahProdukModal">
                    <i class="bi bi-plus-lg"></i>
                </a>
            </div>

             <!-- Modal Tambah Produk -->
             <div class="modal fade" id="tambahProdukModal" tabindex="-1" aria-labelledby="tambahProdukModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahProdukModalLabel">Tambah Produk</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="namaproduk" class="form-label">Nama Produk</label>
                                    <input type="text" class="form-control" id="namaproduk" name="namaproduk" required>
                                </div>
                                <div class="mb-3">
                                    <label for="gambar" class="form-label">Gambar</label>
                                    <input type="file" class="form-control" id="gambar" name="gambar[]" multiple required>
                                    <small class="form-text text-muted">Anda dapat mengunggah lebih dari satu gambar.</small>
                                </div>
                                <div class="mb-3">
                                    <label for="harga" class="form-label">Harga</label>
                                    <input type="number" class="form-control" id="harga" name="harga" required>
                                </div>
                                <div class="mb-3">
                                    <label for="stok" class="form-label">Stok</label>
                                    <input type="number" class="form-control" id="stok" name="stok" required>
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="bahan" class="form-label">Bahan</label>
                                    <input type="text" class="form-control" id="bahan" name="bahan" required>
                                </div>
                                <div class="mb-3">
                                    <label for="link" class="form-label">Link</label>
                                    <input type="url" class="form-control" id="link" name="link" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Aksi</th>
                        <th>Gambar</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Deskripsi</th>
                        <th>Bahan</th>
                        <th>Link</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($produks as $produk)
                    <tr>
                        <td>
                            <!-- Tombol Edit Produk -->
                            <button 
                                class="btn btn-warning btn-sm btn-edit-produk" 
                                data-id="{{ $produk->id }}" 
                                data-nama="{{ $produk->namaproduk }}" 
                                data-harga="{{ $produk->harga }}" 
                                data-stok="{{ $produk->stok }}" 
                                data-deskripsi="{{ $produk->deskripsi }}" 
                                data-bahan="{{ $produk->bahan }}" 
                                data-link="{{ $produk->link }}" 
                                data-gambar="{{ $produk->gambar }}">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                           
                            <form action="{{ route('produk.destroy', ['id_produk' => $produk->id_produk]) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirmDelete()"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                        <td>
                            <!-- Menampilkan gambar produk -->
                            @foreach(json_decode($produk->gambar, true) as $img)
                                <img src="/{{ $img }}" width="50" alt="Gambar Produk" class="me-2">
                            @endforeach
                        </td>
                        <td>{{ $produk->namaproduk }}</td>
                        <td>{{ $produk->harga }}</td>
                        <td>{{ $produk->stok }}</td>
                        <td>{{ $produk->deskripsi }}</td>
                        <td>{{ $produk->bahan }}</td>
                        <td>{{ $produk->link }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            

            <!-- Modal Edit Produk -->
            <div class="modal fade" id="editProdukModal" tabindex="-1" aria-labelledby="editProdukModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editProdukModalLabel">Edit Produk</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <!-- Form Edit Produk -->
                        <form id="editProdukForm" method="POST" enctype="multipart/form-data" action="{{ route('produk.update', ['id_produk' => $produk->id_produk]) }}">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <input type="hidden" name="id" id="editIdProduk">
                                <div class="mb-3">
                                    <label for="editNamaProduk" class="form-label">Nama Produk</label>
                                    <input type="text" class="form-control" id="editNamaProduk" name="namaproduk" required>
                                </div>
                                <div class="mb-3">
                                    <label for="editGambar" class="form-label">Gambar</label>
                                    <input type="file" class="form-control" id="editGambar" name="gambar[]" multiple>
                                    <small class="form-text text-muted">Unggah gambar baru untuk mengganti gambar yang lama.</small>
                                    <div id="existingImages" class="mt-2">
                                        <!-- Gambar yang sudah ada akan ditampilkan di sini -->
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="editHarga" class="form-label">Harga</label>
                                    <input type="number" class="form-control" id="editHarga" name="harga" required>
                                </div>
                                <div class="mb-3">
                                    <label for="editStok" class="form-label">Stok</label>
                                    <input type="number" class="form-control" id="editStok" name="stok" required>
                                </div>
                                <div class="mb-3">
                                    <label for="editDeskripsi" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" id="editDeskripsi" name="deskripsi" rows="4" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="editBahan" class="form-label">Bahan</label>
                                    <input type="text" class="form-control" id="editBahan" name="bahan" required>
                                </div>
                                <div class="mb-3">
                                    <label for="editLink" class="form-label">Link</label>
                                    <input type="url" class="form-control" id="editLink" name="link" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        {{-- Table Event --}}
        <div class="section-content" id="section2-content">
            <h2 class="my-4">Table Acara</h2>
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            {{-- button tambah --}}
            <div class="d-flex justify-content-end mb-3">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahEventModal">
                    <i class="bi bi-plus-lg"></i>
                </a>
            </div>

            <!-- Modal Tambah Event -->
            <div class="modal fade" id="tambahEventModal" tabindex="-1" aria-labelledby="tambahEventModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahEventModalLabel">Tambah Event</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="POST" action="{{ route('event.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="namaAcara" class="form-label">Nama Acara</label>
                                    <input type="text" class="form-control" id="namaAcara" name="namaacara" required>
                                </div>
                                <div class="mb-3">
                                    <label for="gambar" class="form-label">Gambar</label>
                                    <input type="file" class="form-control" id="gambar" name="gambar[]" multiple required>
                                    <small class="form-text text-muted">Anda dapat mengunggah lebih dari satu gambar.</small>
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        
            <!-- Table Event -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Aksi</th>
                        <th>Nama Acara</th>
                        <th>Gambar</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($events as $event)
                    <tr>
                        <td>
                            <!-- Button Edit -->
                            <button class="btn btn-warning btn-sm btn-edit-event"
                                data-id="{{ $event->id_event }}"
                                data-namaacara="{{ $event->namaacara }}"
                                data-deskripsi="{{ $event->deskripsi }}"
                                data-gambar="{{ $event->gambar }}"
                                data-bs-toggle="modal" data-bs-target="#editEventModal">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            
                            <!-- Button Hapus -->
                            <form action="{{ route('event.destroy', ['id_event' => $event->id_event]) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirmDelete()"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                        <td>{{ $event->namaacara }}</td>
                        <td>
                            <!-- Menampilkan gambar event -->
                            @foreach(json_decode($event->gambar, true) as $img)
                                <img src="/{{ $img }}" width="50" alt="Gambar Produk" class="me-2">
                            @endforeach
                        </td>
                        
                        <td>{{ $event->deskripsi }}</td>
                    </tr>
                    @endforeach
                </tbody>              
            </table>

            <!-- Modal Update Event -->
            <div class="modal fade" id="editEventModal" tabindex="-1" aria-labelledby="editEventModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editEventModalLabel">Edit Event</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                            <form id="editEventForm" method="POST" action="" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <input type="hidden" name="id_event" id="editIdEvent">
                                    <div class="mb-3">
                                        <label for="editNamaAcara" class="form-label">Nama Acara</label>
                                        <input type="text" class="form-control" id="editNamaAcara" name="namaacara" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="editGambar" class="form-label">Gambar</label>
                                        <input type="file" class="form-control" id="editGambar" name="gambar[]" multiple>
                                        <small class="form-text text-muted">Unggah gambar baru untuk mengganti gambar yang lama.</small>
                                        <div id="existingEventImages" class="mt-2">
                                            <!-- Gambar yang sudah ada akan ditampilkan di sini -->
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="editDesk" class="form-label">Deskripsi</label>
                                        <textarea class="form-control" id="editDesk" name="deskripsi" rows="4" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- Table Testimoni --}}
        <div class="section-content" id="section3-content">
            <h2 class="my-4">Table Testimoni</h2>
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            {{-- button tambah testimoni --}}
            <div class="d-flex justify-content-end mb-3">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahTestiModal">
                    <i class="bi bi-plus-lg"></i>
                </a>
            </div>

            <!-- Modal Tambah Testi -->
            <div class="modal fade" id="tambahTestiModal" tabindex="-1" aria-labelledby="tambahTestiModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahTestiModalLabel">Tambah Testimoni</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('testi.store') }}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                </div>
                                <div class="mb-3">
                                    <label for="isi" class="form-label">isi</label>
                                    <textarea type="text" class="form-control w-100" id="isi" name="isi" rows="4" required></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Aksi</th>
                        <th>Nama</th>
                        <th>Isi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($testimonis as $testimoni)
                    <tr>
                        <td>
                            <a href="#" 
                            class="btn btn-warning btn-sm" 
                            data-id="{{ $testimoni->id_testimoni }}" 
                            data-nama="{{ $testimoni->nama }}" 
                            data-isi="{{ $testimoni->isi }}">
                            <i class="bi bi-pencil-square"></i>
                            </a>
                            <form action="{{ route('testi.destroy', ['id_testimoni' => $testimoni->id_testimoni]) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirmDelete()"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                        <td>{{ $testimoni->nama }}</td>
                        <td>{{ $testimoni->isi }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Modal Edit Testimoni -->
            <div class="modal fade" id="editTestiModal" tabindex="-1" aria-labelledby="editTestiModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editTestiModalLabel">Edit Testimoni</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form id="editTestiForm" method="POST" action="">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <input type="hidden" name="id_testimoni" id="editIdTesti">
                                <div class="mb-3">
                                    <label for="editNama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="editNama" name="nama" required>
                                </div>
                                <div class="mb-3">
                                    <label for="editIsi" class="form-label">Isi</label>
                                    <textarea class="form-control w-100" id="editIsi" name="isi" rows="4" required></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        {{-- Table Kontak --}}
        <div class="section-content" id="section4-content">
            <h2 class="my-4">Table Kontak</h2>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <!-- Tombol Tambah Kontak -->
            <div class="d-flex justify-content-end mb-3">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahKontakModal">
                    <i class="bi bi-plus-lg"></i>
                </a>
            </div>

            <!-- Modal Tambah Kontak -->
            <div class="modal fade" id="tambahKontakModal" tabindex="-1" aria-labelledby="tambahKontakModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahKontakModalLabel">Tambah Kontak</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('kontak.store')}}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="whatsapp" class="form-label">No. Whatsapp</label>
                                    <input type="text" class="form-control" id="whatsapp" name="whatsapp" required>
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Aksi</th>
                        <th>No. Whatsapp</th>
                        <th>Alamat</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kontaks as $kontak)
                    <tr>
                        <td>
                            <a href="#" 
                            class="btn btn-warning btn-sm" 
                            data-id="{{ $kontak->id_kontak }}" 
                            data-whatsapp="{{ $kontak->whatsapp }}" 
                            data-alamat="{{ $kontak->alamat }}" 
                            data-email="{{ $kontak->email }}">
                            <i class="bi bi-pencil-square"></i>
                            </a>
                            <form action="{{ route('kontak.destroy', ['id_kontak' => $kontak->id_kontak]) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirmDelete()"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                        <td>{{ $kontak->whatsapp }}</td>
                        <td>{{ $kontak->alamat }}</td>
                        <td>{{ $kontak->email }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
            <!-- Modal Edit Kontak -->
            <div class="modal fade" id="editKontakModal" tabindex="-1" aria-labelledby="editKontakModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editKontakModalLabel">Edit Kontak</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form id="editKontakForm" method="POST" action="">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <input type="hidden" name="id_kontak" id="editIdKontak">
                                <div class="mb-3">
                                    <label for="editWhatsapp" class="form-label">No. Whatsapp</label>
                                    <input type="integer" class="form-control" id="editWhatsapp" name="whatsapp" required>
                                </div>
                                <div class="mb-3">
                                    <label for="editAlamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="editAlamat" name="alamat" required>
                                </div>
                                <div class="mb-3">
                                    <label for="editEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="editEmail" name="email" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

{{-- SCRIPT MODAL PRODUK --}}
<script>
    document.querySelectorAll('.btn-edit-produk').forEach(button => {
        button.addEventListener('click', function () {
            const produkId = this.getAttribute('data-id');
            const nama = this.getAttribute('data-nama');
            const harga = this.getAttribute('data-harga');
            const stok = this.getAttribute('data-stok');
            const deskripsi = this.getAttribute('data-deskripsi');
            const bahan = this.getAttribute('data-bahan');
            const link = this.getAttribute('data-link');
            const gambar = JSON.parse(this.getAttribute('data-gambar'));

            // Mengisi field dengan data produk yang ada
            document.getElementById('editIdProduk').value = produkId;
            document.getElementById('editNamaProduk').value = nama;
            document.getElementById('editHarga').value = harga;
            document.getElementById('editStok').value = stok;
            document.getElementById('editDeskripsi').value = deskripsi;
            document.getElementById('editBahan').value = bahan;
            document.getElementById('editLink').value = link;

            // Menampilkan gambar yang sudah ada
            const existingImages = document.getElementById('existingImages');
            existingImages.innerHTML = '';
            gambar.forEach(img => {
                const imgElement = document.createElement('img');
                imgElement.src = `/${img}`; // Menampilkan gambar
                imgElement.width = 50;
                imgElement.classList.add('me-2');
                existingImages.appendChild(imgElement);
            });

            // Mengubah action form untuk menyertakan id_produk
            // document.getElementById('editProdukForm').action = `/produk/${produkId}`;
            const editProdukModal = new bootstrap.Modal(document.getElementById('editProdukModal'));
            editProdukModal.show();
        });
    });
</script>


{{-- SCRIPT MODAL EVENT --}}
<script>
     // Event untuk tombol edit
     document.querySelectorAll('.btn-edit-event').forEach(button => {
        button.addEventListener('click', function () {
            const eventId = this.getAttribute('data-id');
            const namaacara = this.getAttribute('data-namaacara');
            const deskripsi = this.getAttribute('data-deskripsi');
            const gambar = JSON.parse(this.getAttribute('data-gambar'));

            // Mengisi field modal edit dengan data event yang ada
            document.getElementById('editIdEvent').value = eventId;
            document.getElementById('editNamaAcara').value = namaacara;
            document.getElementById('editDesk').value = deskripsi;

            // Menampilkan gambar yang sudah ada
            const existingImages = document.getElementById('existingEventImages');
            existingImages.innerHTML = '';
            gambar.forEach(img => {
                const imgElement = document.createElement('img');
                imgElement.src = `/${img}`; // Menampilkan gambar
                imgElement.width = 50;
                imgElement.classList.add('me-2');
                existingImages.appendChild(imgElement);
            });

            // Mengubah action form untuk menyertakan id_event
            document.getElementById('editEventForm').action = `/event/${eventId}`;

            // Menampilkan modal edit event
            const editEventModal = new bootstrap.Modal(document.getElementById('editEventModal'));
            editEventModal.show();
        });
    });

</script>



{{-- SCRIPT MODAL KONTAK --}}
<script>
    document.querySelectorAll('.btn-warning').forEach(button => {
        button.addEventListener('click', function () {
            const kontakId = this.getAttribute('data-id');
            const whatsapp = this.getAttribute('data-whatsapp');
            const alamat = this.getAttribute('data-alamat');
            const email = this.getAttribute('data-email');

            // Mengisi field dengan data kontak yang ada
            document.getElementById('editIdKontak').value = kontakId;
            document.getElementById('editWhatsapp').value = whatsapp;
            document.getElementById('editAlamat').value = alamat;
            document.getElementById('editEmail').value = email;

            // Mengubah action form untuk menyertakan id_kontak
            document.getElementById('editKontakForm').action = `{{ url('kontak') }}/${kontakId}`;

            // Menampilkan modal
            const editKontakModal = new bootstrap.Modal(document.getElementById('editKontakModal'));
            editKontakModal.show();
        });
    });
</script>


{{-- SCRIPT MODAL TESTIMONI --}}
<script>
    document.querySelectorAll('.btn-warning').forEach(button => {
        button.addEventListener('click', function () {
            const testiId = this.getAttribute('data-id');
            const nama = this.getAttribute('data-nama');
            const isi = this.getAttribute('data-isi');

            // Mengisi field dengan data kontak yang ada
            document.getElementById('editIdTesti').value = testiId;
            document.getElementById('editNama').value = nama;
            document.getElementById('editIsi').value = isi;

            // Mengubah action form untuk menyertakan id_kontak
            document.getElementById('editTestiForm').action = `{{ url('testimoni') }}/${testiId}`;

            // Menampilkan modal
            const editTestiModal = new bootstrap.Modal(document.getElementById('editTestiModal'));
            editTestiModal.show();

        });
    });
</script>


{{-- SCRIPT PESAN WARNING --}}
<script>
    function confirmDelete() {
        return confirm("Apakah Anda yakin ingin menghapus?");
    }
</script>


{{-- SCRIPT SIDENAV --}}
<script>
    function setActive(link) {
        // Hapus kelas active dari semua link
        const links = document.querySelectorAll('.sidenav a');
        links.forEach(item => item.classList.remove('active'));
        
        // Tambahkan kelas active ke link yang diklik
        link.classList.add('active');
    }

    function openNav() {
        document.getElementById("sidenav").style.left = "0";
        document.getElementById("content").style.marginLeft = getComputedStyle(document.documentElement).getPropertyValue('--sidebar-width');
    }

    function closeNav() {
        document.getElementById("sidenav").style.left = "-250px";
        document.getElementById("content").style.marginLeft = "0";
    }

    function openSection(sectionId) {
        const sections = document.querySelectorAll(".section-content");
        sections.forEach(section => section.style.display = "none");
        document.getElementById(sectionId + "-content").style.display = "block";
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
