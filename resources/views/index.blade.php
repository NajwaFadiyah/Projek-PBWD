<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Home | MyList </title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <nav>
        <div class="wrapper">
        <div class="logo"><a href="/">MyList</a></div>
        <div class="menu">
            <ul>
            <li><a href="#Home">Home</a></li>
            <li><a href="#About">About</a></li>
            <li><a href="#Contact us">Contact us</a></li>
            <li><a href="{{ route('signin') }}" class="tbl-ungu">Sign In</a></li>
            </ul>
        </div>
        </div>
    </nav>
    <div class="wrapper">
        <!--untuk home-->
        <section id="Home">
        <img src="Gambar/Gambar 1.png" width="50%" height="40%"></img>
        <div class="kolom">
            <p class="deskripsi">MyList</p>
            <h2>Selamat datang di MyList</h2>
            <p> MyList adalah ruang pribadi anda untuk menuliskan pikiran, ide, dan pengingat. My Notes
            dirancang untuk membantu anda menjaga segala sesuatu yang penting di satu tempat. Mudah untuk diorganisir,
            diakses, dan diamankan dari perangkat mana pun.</p>
            <p><a href="{{ route('signin') }}" class="tbl-biru">Start your list </a></p>
        </div>
        </section>
        <!-- untuk about -->
        <section id="About">
        <div class="kolom">
            <p class="deskripsi">MY NOTES</p>
            <h2>About</h2>
            <p>My Notes adalah platform sederhana dan intuitif yang dirancang untuk membantu anda mengelola catatan secara
            efektif. Baik untuk penggunaan pribadi atau tugas profesional, My Notes menyediakan alat untuk tetap
            terorganisir dan produktif.</p>
            <p><a href="" class="tbl-ungu">Selengkapnya</a></p>
        </div>
        <img src="Gambar/gambar2.jpg" width="50%" height="50%"></img>
        </section>

        <!-- untuk Contact us-->
        <section id="Contact us">
        <div class="tengah">
            <div class="kolom">
            <p class="deskripsi">MY NOTES</p>
            <h2>Contact us</h2>
            </div>

            <div class="Contact-list">
            <div class="kartu-contact">
                <img src="Gambar/fb.jpg" />
            </div>
            <div class="kartu-contact">
                <img src="Gambar/wa.png" />
            </div>
            <div class="kartu-contact">
                <img src="Gambar/ig.webp" />
            </div>
            <div class="kartu-contact">
                <img src="Gambar/TWIT.png" />
            </div>
            </div>
        </div>
        </section>
    </div>

    <footer>
        <p> PBWD Projek by Us | 2024 </p>
    </footer>
</body>
</html>