<x-layouts.app :title="$title">
    @push('styles')
        <style>
            .form-layout { display: grid; grid-template-columns: minmax(0, 1fr) 340px; gap: 56px; align-items: start; }
            .form-card { padding: 30px; background: #fff; border: 1px solid var(--line); border-radius: 8px; }
            .form-card label { display: block; margin: 0 0 8px; color: var(--ink); font-size: 14px; font-weight: 700; }
            .form-card input, .form-card select { width: 100%; padding: 12px 13px; border: 1px solid #becbd2; border-radius: 5px; background: #fff; color: var(--ink); font: inherit; }
            .form-card input:focus, .form-card select:focus { border-color: var(--teal); outline: 3px solid #c9ece7; }
            .form-group { margin-bottom: 21px; }
            .submit-button { width: 100%; padding: 13px 18px; border: 0; border-radius: 5px; background: var(--teal); color: #fff; cursor: pointer; font-weight: 700; }
            .submit-button:hover { background: var(--deep-teal); }
            .form-note { padding: 26px 0; border-top: 3px solid var(--gold); }
            .form-note h2 { margin: 0 0 10px; font-size: 20px; }
            .form-note p { margin: 0; color: var(--muted); line-height: 1.65; }
            @media (max-width: 760px) { .form-layout { grid-template-columns: 1fr; gap: 24px; } }
        </style>
    @endpush
    <p class="eyebrow">Input data</p>
    <h1>Tambahkan pengguna baru.</h1>
    <p class="lead">Lengkapi data di bawah untuk menambahkan mahasiswa ke daftar pengguna.</p>
    <div class="form-layout">
        <form class="form-card" method="POST" action="{{ route('user.store') }}">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input id="nama" name="nama" type="text" value="{{ old('nama') }}" required autofocus>
                @error('nama') <p class="field-error">{{ $message }}</p> @enderror
            </div>
            <div class="form-group">
                <label for="npm">NPM</label>
                <input id="npm" name="npm" type="text" value="{{ old('npm') }}" required>
                @error('npm') <p class="field-error">{{ $message }}</p> @enderror
            </div>
            <div class="form-group">
                <label for="kelas_id">Kelas</label>
                <select id="kelas_id" name="kelas_id" required>
                    <option value="">Pilih kelas</option>
                    @foreach ($kelas as $item)
                        <option value="{{ $item->id }}" @selected(old('kelas_id') == $item->id)>{{ $item->nama_kelas }}</option>
                    @endforeach
                </select>
                @error('kelas_id') <p class="field-error">{{ $message }}</p> @enderror
            </div>
            <button class="submit-button" type="submit">Simpan Pengguna</button>
        </form>
        <aside class="form-note">
            <h2>Data tersusun rapi.</h2>
            <p>Nama, NPM, dan kelas akan tampil di halaman daftar pengguna setelah data berhasil disimpan.</p>
        </aside>
    </div>
</x-layouts.app>
