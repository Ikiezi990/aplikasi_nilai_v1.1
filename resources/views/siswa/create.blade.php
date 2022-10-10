@extends('layouts.appadmin')
@section('content')
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="card-tool pull-right">
                    <a href="{{ route('siswa.index') }}" class="btn btn-danger">Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('siswa.store') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Nama Siswa</label>
                            <input type="text" name="nama" id="nama" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Nisn</label>
                            <input type="number" name="nisn" id="nisn" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Nis</label>
                            <input type="number" name="nis" id="nis" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault1"
                                    value="L">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Laki - Laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault2"
                                    value="P" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Kelas</label>
                            <select name="id_kelas" id="" class="form-control">
                                @foreach ($kelas as $kelasRow)
                                    <option value="{{ $kelasRow->id }}">{{ $kelasRow->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6"></div>
                        <div class="col-md-12 mt-3">
                            <div class="btn-group">
                                <button type="submit" class="btn btn-primary me-auto">Tambah</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
