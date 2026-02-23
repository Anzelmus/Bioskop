@extends('layouts.master')

@section('content')

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Data Buku</h4>
            <a href="{{ route('buku.create') }}" class="btn btn-primary">
                + Tambah Film
            </a>
        </div>

        <div class="table-responsive"></div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle text-center">
                    <thead class="table-light">
                        <tr>
                            <th>Kode</th>
                            <th>Judul Film</th>
                            <th>Tahun</th>
                            <th>Jam Tayang</th>
                            <th>Cover</th>
                            <th width="150">Aksi</th>
                        </tr>
            </div>
@endsection