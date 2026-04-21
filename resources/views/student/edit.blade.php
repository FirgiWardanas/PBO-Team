<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students Edit | Laravel</title>

    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <div class="container-fluid mt-4">
            <div class="card">
                <div class="card-header">
                    Edit Siswa
                    <a href="/student" class="btn btn-danger float-right">Kembali</a>
                </div>

                <form action="/student/edit/{{ $student->nim }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input name="old_nim" type="hidden" value="{{ $student->nim }}">

                    <div class="card-body">
                        @if(session('notifikasi'))
                            <div class="form-group">
                                <div class="alert alert-{{ session('type') }}">
                                    {{ session('notifikasi') }}
                                </div>
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="nim">NIM <b class="text-danger">*</b></label>
                            <input type="text" 
                                   name="nim" 
                                   id="nim" 
                                   required 
                                   placeholder="Masukkan NIM" 
                                   class="form-control @error('nim') is-invalid @enderror" 
                                   value="{{ old('nim', $student->nim) }}">
                            @error('nim')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama <b class="text-danger">*</b></label>
                            <input type="text" 
                                   name="nama" 
                                   id="nama" 
                                   required 
                                   placeholder="Masukkan Nama" 
                                   class="form-control @error('nama') is-invalid @enderror" 
                                   value="{{ old('nama', $student->nama) }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">E-Mail <b class="text-danger">*</b></label>
                            <input type="email" 
                                   name="email" 
                                   id="email" 
                                   required 
                                   placeholder="Masukkan E-Mail" 
                                   class="form-control @error('email') is-invalid @enderror" 
                                   value="{{ old('email', $student->email) }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="prodi">Prodi <b class="text-danger">*</b></label>
                            <select name="prodi" id="prodi" required class="form-control @error('prodi') is-invalid @enderror">
                                <option value="">- Pilih Prodi -</option>
                                <option value="Teknik Informatika" {{ old('prodi', $student->prodi) == 'Teknik Informatika' ? 'selected' : '' }}>Teknik Informatika</option>
                                <option value="Teknik Rekayasa Keamanan Siber" {{ old('prodi', $student->prodi) == 'Teknik Rekayasa Keamanan Siber' ? 'selected' : '' }}>Teknik Rekayasa Keamanan Siber</option>
                                <option value="Teknik Rekayasa Perangkat Lunak" {{ old('prodi', $student->prodi) == 'Teknik Rekayasa Perangkat Lunak' ? 'selected' : '' }}>Teknik Rekayasa Perangkat Lunak</option>
                            </select>
                            @error('prodi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="card-footer">
                        <a href="/student" class="btn btn-danger">Batal</a>
                        <button type="reset" class="btn btn-warning">Reset</button>
                        <button type="submit" class="btn btn-success">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>