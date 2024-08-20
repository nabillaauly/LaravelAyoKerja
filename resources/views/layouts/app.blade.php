<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AyoKerja.co Forum')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <nav class="container">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="AyoKerja.co Logo">
            </div>
            <ul class="nav-links" id="nav-links">
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Pelatihan</a></li>
                <li><a href="#">Info Loker</a></li>
                <li><a href="#">CV</a></li>
                <li><a href="#" class="active">Forum Diskusi</a></li>
                <li><a href="#">About Us</a></li>
            </ul>
            <a href="{{ route('login') }}" class="login">Masuk</a>
            <a href="{{ route('login.perusahaan') }}" class="loginperusahaan">Perusahaan</a>
        </nav>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3 class="footer-header">Tentang AyoKerja.co</h3>
                <ul class="footer-menu">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Kontak Kami</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3 class="footer-header">Perusahaan</h3>
                <ul class="footer-menu">
                    <li><a href="#">Daftar Gratis</a></li>
                    <li><a href="#">Pasang Iklan Lowongan Kerja</a></li>
                    <li><a href="#">Iklan Pelatihan</a></li>
                    <li><a href="#">Melakukan Webinar</a></li>
                    <li><a href="#">Privacy & Keamanan</a></li>
                    <li><a href="#">Support</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3 class="footer-header">Pencari Kerja</h3>
                <ul class="footer-menu">
                    <li><a href="#">Info Loker</a></li>
                    <li><a href="#">Lihat Profil</a></li>
                    <li><a href="#">Lamaran Kerja</a></li>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Jelajahi Pekerjaan</a></li>
                    <li><a href="#">Course</a></li>
                    <li><a href="#">Tes Minat Bakat</a></li>
                    <li><a href="#">Psikotes</a></li>
                    <li><a href="#">Webinar</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 AyoKerja.co. All rights reserved.</p>
            <div class="social-icons">
                <a href="https://id-id.facebook.com/"><img src="{{ asset('images/Facebook.png') }}" alt="Facebook"></a>
                <a href="https://www.instagram.com/"><img src="{{ asset('images/Instagram.png') }}" alt="Instagram"></a>
                <a href="https://www.linkedin.com/"><img src="{{ asset('images/Linkedin.png') }}" alt="LinkedIn"></a>
                <a href="https://x.com/"><img src="{{ asset('images/Twitter.png') }}" alt="X"></a>
            </div>
        </div>
    </footer>

    <script>
        const replyDivs = document.querySelectorAll('.reply');
        replyDivs.forEach(div => {
            div.addEventListener('click', () => {
                const repliesSection = div.nextElementSibling;
                if (repliesSection.style.display === 'none' || repliesSection.style.display === '') {
                    repliesSection.style.display = 'block';
                } else {
                    repliesSection.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
