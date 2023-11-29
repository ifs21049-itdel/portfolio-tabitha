@extends('layouts.app')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('Portofolio') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#addPortofolioModal">
                            Tambah Portofolio
                        </button>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Gambar</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>URL</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($portofolios as $portofolio)
                                    <tr>
                                        <td>{{ $portofolio->id_portofolio }}</td>
                                        <td>
                                            <img src="{{ asset('storage/' . $portofolio->gambar) }}"
                                                alt="{{ $portofolio->judul }}" width="200">
                                        </td>
                                        <td>{{ $portofolio->judul }}</td>
                                        <td>{{ $portofolio->deskripsi }}</td>
                                        <td width="50">{{ $portofolio->url }}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#editPortofolioModal{{ $portofolio->id_portofolio }}">
                                                Edit
                                            </button>

                                            <!-- Modal for Editing -->
                                            <div class="modal fade" id="editPortofolioModal{{ $portofolio->id_portofolio }}"
                                                tabindex="-1" aria-labelledby="editPortofolioModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editPortofolioModalLabel">Edit
                                                                Portofolio</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- Your edit form goes here -->
                                                            <form
                                                                action="{{ route('home.update', $portofolio->id_portofolio) }}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')
                                                                <!-- Your form fields for editing go here -->
                                                                <div class="form-group">
                                                                    <label for="judul">Judul</label>
                                                                    <input type="text" class="form-control"
                                                                        id="judul" name="judul"
                                                                        value="{{ $portofolio->judul }}" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="deskripsi">Deskripsi</label>
                                                                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required>{{ $portofolio->deskripsi }}</textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="url">URL</label>
                                                                    <textarea class="form-control" id="url" name="url" rows="3" required>{{ $portofolio->url }}</textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="gambar">Gambar</label>
                                                                    <input type="file" class="form-control-file"
                                                                        id="gambar" name="gambar">
                                                                </div>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Simpan</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <!-- Tambahkan pada bagian tampilan data portofolio -->
                                        <td>
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#deletePortofolioModal{{ $portofolio->id_portofolio }}">
                                                Delete
                                            </button>

                                            <!-- Modal for Deleting -->
                                            <div class="modal fade"
                                                id="deletePortofolioModal{{ $portofolio->id_portofolio }}" tabindex="-1"
                                                role="dialog" aria-labelledby="deletePortofolioModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="deletePortofolioModalLabel">Hapus
                                                                Portofolio</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apakah Anda yakin ingin menghapus portofolio ini?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Tutup</button>
                                                            <form
                                                                action="{{ route('home.destroy', $portofolio->id_portofolio) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-danger">Hapus</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <!-- Modal -->
                        <div class="modal fade" id="addPortofolioModal" tabindex="-1"
                            aria-labelledby="addPortofolioModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addPortofolioModalLabel">Tambah Portofolio</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('home.store') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="judul">Judul</label>
                                                <input type="text" class="form-control" id="judul" name="judul"
                                                    required>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="deskripsi">Deskripsi</label>
                                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="url">URL</label>
                                                <textarea class="form-control" id="url" name="url" rows="3" required></textarea>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="gambar">Gambar</label>
                                                <input type="file" class="form-control-file" id="gambar"
                                                    name="gambar" required>
                                            </div>
                                            <br>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
@endsection
