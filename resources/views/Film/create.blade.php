<div class="card">
    <div class="card-header">
        <h4>Tambah Film</h4>
    </div>

    <div class="card-body">
        <form action="{{ route('film.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label class="form-label">Kode</label>
                <input type="text" name="kode" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Judul Film</label>
                <input type="text" name="judul" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Tahun</label>
                <input type="number" name="tahun" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Jam Tayang</label>
                <input type="time" name="jam_tayang" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Cover</label>
                <input type="file" name="cover" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('film.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>