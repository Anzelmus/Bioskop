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
                    @forelse ($buku as $item)
                        <tr>
                            <td>{{ $item->kode }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->tahun }}</td>
                            <td>{{ $item->jam_tayang }}</td>
                            <td>
                                @if($item->cover)
                                    <img src="{{ asset('storage/' . $item->cover) }}" 
                                         width="80">
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">Data Film belum tersedia</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>