<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'PWL Modul 4' }}</title>
    <style>
        :root { --ink: #17202a; --muted: #61707d; --line: #d8e1e6; --paper: #f6faf9; --teal: #087c74; --deep-teal: #065d58; --coral: #ec755f; --gold: #ecb544; }
        * { box-sizing: border-box; }
        body { min-height: 100vh; margin: 0; background: var(--paper); color: var(--ink); font-family: Arial, sans-serif; }
        .page-shell { width: min(1100px, calc(100% - 32px)); min-height: 100vh; margin: 0 auto; display: flex; flex-direction: column; }
        .site-nav { display: flex; align-items: center; justify-content: space-between; padding: 26px 0 22px; border-bottom: 1px solid var(--line); }
        .brand { color: var(--ink); font-size: 23px; font-weight: 700; text-decoration: none; }
        .brand span { color: var(--coral); }
        .nav-links { display: flex; align-items: center; gap: 22px; }
        .nav-links a { color: var(--muted); font-size: 14px; font-weight: 600; text-decoration: none; }
        .nav-links a.active { color: var(--teal); }
        .nav-links .new-user-link { color: #fff; background: var(--teal); padding: 10px 14px; border-radius: 6px; }
        .nav-links .new-user-link:hover { background: var(--deep-teal); }
        main { flex: 1; padding: 54px 0; }
        .eyebrow { margin: 0 0 10px; color: var(--teal); font-size: 12px; font-weight: 700; text-transform: uppercase; }
        h1 { max-width: 680px; margin: 0; font-size: clamp(30px, 5vw, 48px); line-height: 1.08; }
        .lead { max-width: 600px; margin: 16px 0 34px; color: var(--muted); line-height: 1.65; }
        .site-footer { display: flex; justify-content: space-between; gap: 16px; padding: 22px 0; border-top: 1px solid var(--line); color: var(--muted); font-size: 13px; }
        .site-footer p { margin: 0; }
        .notice { margin: 0 0 24px; padding: 13px 15px; color: #075e57; background: #d8f1eb; border-left: 4px solid var(--teal); border-radius: 4px; }
        .field-error { margin: 6px 0 0; color: #b93827; font-size: 13px; }
        @media (max-width: 600px) { .site-nav, .site-footer { align-items: flex-start; flex-direction: column; } .nav-links { width: 100%; justify-content: space-between; gap: 12px; } main { padding: 38px 0; } }
    </style>
    @stack('styles')
</head>
<body>
    <div class="page-shell">
        <x-navbar />
        <main>{{ $slot }}</main>
        <x-footer />
    </div>
</body>
</html>
