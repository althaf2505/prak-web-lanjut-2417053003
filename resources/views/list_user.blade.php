<x-layouts.app :title="$title">
    @push('styles')
        <style>
            .list-top { display: flex; justify-content: space-between; gap: 24px; align-items: end; margin-bottom: 30px; }
            .count { margin: 0; min-width: 120px; color: var(--teal); font-size: 15px; font-weight: 700; text-align: right; }
            .table-wrap { overflow-x: auto; background: #fff; border: 1px solid var(--line); border-radius: 8px; }
            table { width: 100%; min-width: 620px; border-collapse: collapse; }
            th { padding: 15px 20px; background: #e3f1ee; color: #37605c; font-size: 12px; letter-spacing: 0; text-align: left; text-transform: uppercase; }
            td { padding: 19px 20px; border-top: 1px solid #e5edef; color: var(--muted); font-size: 15px; }
            td:first-child { width: 76px; color: var(--teal); font-weight: 700; }
            td strong { color: var(--ink); }
            .class-badge { display: inline-grid; width: 32px; height: 28px; place-items: center; border-radius: 4px; color: #8e4e00; background: #ffefc9; font-weight: 700; }
            .empty-state { padding: 46px 20px; text-align: center; }
            @media (max-width: 600px) { .list-top { align-items: start; flex-direction: column; } .count { text-align: left; } }
        </style>
    @endpush
    <div class="list-top">
        <div>
            <p class="eyebrow">Data mahasiswa</p>
            <h1>Daftar pengguna.</h1>
            <p class="lead">Semua data pengguna yang tersimpan ditampilkan dalam satu daftar yang mudah dipindai.</p>
        </div>
        <p class="count">{{ $users->count() }} pengguna</p>
    </div>
    @if (session('success'))
        <p class="notice">{{ session('success') }}</p>
    @endif
    <x-user-table :users="$users" />
</x-layouts.app>
