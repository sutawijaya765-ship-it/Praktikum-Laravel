
<aside class="sidebar">
    <h2>Laravel Admin</h2>

    <nav>
        <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">
            <span>🏠</span> Dashboard
        </a>

        <a href="/belajar" class="{{ request()->is('belajar') ? 'active' : '' }}">
            <span>📚</span> Belajar Laravel
        </a>

        <a href="/controller" class="{{ request()->is('controller') ? 'active' : '' }}">
            <span>⚙️</span> Controller
        </a>

        <a href="/daftar/mahasiswa" class="{{ request()->is('daftar/mahasiswa*') ? 'active' : '' }}">
            <span>🎓</span> Mahasiswa
        </a>

        <a href="/kalkulator/segitiga" class="{{ request()->is('kalkulator/segitiga') ? 'active' : '' }}">
            <span>🧮</span> Kalkulator
        </a>

        <a href="/profil" class="{{ request()->is('profil') ? 'active' : '' }}">
            <span>👤</span> Profil
        </a>
    </nav>
</aside>
