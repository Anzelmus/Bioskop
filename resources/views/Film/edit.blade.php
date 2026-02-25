<div class="card">
    <div class="card-header">
        <h4>Edit Film</h4>
    </div>

    <div class="card-body">
        <form action="{{ route('film.update', $film->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Kode</label>
                <input type="text" name="kode" 
                       value="{{ $film->kode }}" 
                       class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Judul Film</label>
                <input type="text" name="judul" 
                       value="{{ $film->judul }}" 
                       class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Tahun</label>
                <input type="number" name="tahun" 
                       value="{{ $film->tahun }}" 
                       class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Jam Tayang</label>
                <input type="time" name="jam_tayang" 
                       value="{{ $film->jam_tayang }}" 
                       class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Cover</label><br>

                @if($film->cover)
                    <img src="{{ asset('storage/' . $film->cover) }}" 
                         width="100" class="mb-2"><br>
                @endif

                <input type="file" name="cover" class="form-control">
                <small class="text-muted">Kosongkan jika tidak ingin mengubah cover</small>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('film.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
