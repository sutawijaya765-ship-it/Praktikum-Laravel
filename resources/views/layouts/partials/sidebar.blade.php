<aside class="sidebar">
    <h2>Laravel Admin</h2>

    <nav>
        <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">
            <span>🏠</span> Dashboard
        </a>

        <a href="/belajar" class="{{ request()->is('belajar') ? 'active' : '' }}">
            <span>📚</span> Belajar Laravel
        </a>

        <a href="/controller">
            <span>⚙️</span> Controller
        </a>

        <a href="/daftar/mahasiswa">
            <span>🎓</span> Mahasiswa
        </a>

        <a href="/kalkulator/segitiga">
            <span>🧮</span> Kalkulator
        </a>

        <a href="/profil">
            <span>👤</span> Profil
        </a>
    </nav>
</aside>