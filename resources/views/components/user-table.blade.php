<div class="table-wrap">
    <table>
        <thead>
            <tr><th>No.</th><th>Pengguna</th><th>NPM</th><th>Kelas</th></tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><strong>{{ $user->nama }}</strong></td>
                    <td>{{ $user->npm }}</td>
                    <td><span class="class-badge">{{ $user->nama_kelas }}</span></td>
                </tr>
            @empty
                <tr><td class="empty-state" colspan="4">Belum ada data pengguna. Tambahkan pengguna pertama untuk memulai.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
