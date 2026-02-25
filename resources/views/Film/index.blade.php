<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Data Film</h4>
        <a href="{{ route('film.create') }}" class="btn btn-primary">
            + Tambah Film
        </a>
    </div>

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
                </thead>
                <tbody>
                    @forelse ($film as $item)
                        <tr>
                            <td>{{ $item->kode }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->tahun }}</td>
                            <td>{{ $item->jam_tayang }}</td>
                            <td>
                                @if($item->cover)
                                    <img src="{{ asset('storage/' . $item->cover) }}" 
                                         width="80">
                                @else
                                    Tidak ada
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('film.edit', $item->id) }}" 
                                   class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <form action="{{ route('film.destroy', $item->id) }}" 
                                      method="POST" 
                                      class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin hapus data?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">Data belum tersedia</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>