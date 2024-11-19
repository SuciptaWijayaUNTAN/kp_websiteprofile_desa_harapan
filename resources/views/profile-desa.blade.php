<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Desa - Desa Sungai Keran</title>
  <link rel="stylesheet" href="style.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@400;700&family=Lato:wght@400;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
  <!-- Navbar -->
  <section id="navbar">
    <nav class="navbar navbar-expand-lg navbar-dark p-md-3">
      <div class="container-fluid">
        <a class="navbar-brand ms-3 d-flex align-items-center" href="#">
          <img src="img/logo.png" width="50" class="me-2">
          <span style="line-height: 1.1; font-size:medium;">
            Desa<br>
            Sungai<br>
            Keran
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="beranda.html" id="beranda">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile-desa.html" id="profile-desa">Profile Desa</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="pemerintahan-desa" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Pemerintahan Desa
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="perangkat-desa.html" id="perangkat-desa">Perangkat Desa</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="lembaga-desa.html" id="lembaga-desa">Lembaga Desa</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="layanan-publik.html" id="layanan-publik">Layanan Publik</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="informasi-publik" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Informasi Publik
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="layanan-administrasi.html" id="layanan-administrasi">Layanan
                    Administrasi Desa</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="pengumuman.html" id="pengumuman">Pengumuman</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="kegiatan.html" id="kegiatan">Kegiatan</a></li>
              </ul>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto me-3">
            <li class="nav-item">
              <a class="nav-link" href="kontak.html"
                style="color:#f8f9fa ; background-color: #1E90FF; border-radius: 8px; padding-left: 15px; padding-right: 15px;">Kontak</a>
            </li>
          </ul>
          <!-- Tombol Close -->
          <button id="closeSidebar" class="btn-close" aria-label="Close"></button>
        </div>
      </div>
    </nav>
  </section>
  <!-- End of Navbar -->

  <!-- Banner -->
  <section id="banner">
    <div class="container-fluid banner-image w-100 vh-60 d-flex justify-content-center align-items-center">
      <div class="row">
        <div class="text-center">
          <h1 class="text-banner">Profile Desa</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Banner -->

  <!-- Content -->
  <section id="sejarah-desa" class="container transition-container py-5">
    <h2 class="subjudul text-center mb-4">Sejarah Desa</h2>
    <div class="row">
      <div class="container">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam dolorem
          cupiditate iste dignissimos adipisci sapiente nesciunt, exercitationem dolore consectetur
          praesentium rerum, labore quod maiores! Voluptatem accusantium, ipsa nihil libero aspernatur
          corrupti saepe consectetur suscipit. Repellendus, assumenda tempore, aliquid illo cumque, atque
          illum architecto reprehenderit magni voluptatibus delectus quas exercitationem eos. Non quod
          voluptate impedit, quis neque architecto voluptatum eligendi, est illo quasi ratione tempora esse
          commodi rerum perspiciatis atque obcaecati, omnis ipsam voluptas reiciendis? Cumque tempore
          obcaecati, expedita sed doloribus atque ex officiis similique accusantium libero ea, praesentium
          odit ducimus ipsa porro, pariatur necessitatibus? Quod facere doloribus modi dignissimos odio?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam dolorem
          cupiditate iste dignissimos adipisci sapiente nesciunt, exercitationem dolore consectetur
          praesentium rerum, labore quod maiores! Voluptatem accusantium, ipsa nihil libero aspernatur
          corrupti saepe consectetur suscipit. Repellendus, assumenda tempore, aliquid illo cumque, atque
          illum architecto reprehenderit magni voluptatibus delectus quas exercitationem eos. Non quod
          voluptate impedit, quis neque architecto voluptatum eligendi, est illo quasi ratione tempora esse
          commodi rerum perspiciatis atque obcaecati, omnis ipsam voluptas reiciendis? Cumque tempore
          obcaecati, expedita sed doloribus atque ex officiis similique accusantium libero ea, praesentium
          odit ducimus ipsa porro, pariatur necessitatibus? Quod facere doloribus modi dignissimos odio?</p>
      </div>
      <div class="container transition-container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <img src="img/1.jpg" id="image-desa" alt="Gambar Desa" class="img-fluid">
          </div>
          <div class="col-lg-4 col-md-6">
            <img src="img/2.jpg" id="image-desa" alt="Gambar Desa" class="img-fluid">
          </div>
          <div class="col-lg-4 col-md-6">
            <img src="img/3.jpg" id="image-desa" alt="Gambar Desa" class="img-fluid">
          </div>
          <div class="col-lg-4 col-md-6">
            <img src="img/4.jpg" id="image-desa" alt="Gambar Desa" class="img-fluid">
          </div>
          <div class="col-lg-4 col-md-6">
            <img src="img/5.jpg" id="image-desa" alt="Gambar Desa" class="img-fluid">
          </div>
          <div class="col-lg-4 col-md-6">
            <img src="img/6.jpg" id="image-desa" alt="Gambar Desa" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- End of Content -->

  <!-- Visi Misi -->
  <section id="visi-misi" class="py-5">
    <div class="container transition-container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="card-visimisi mb-3">
            <div class="card-header">
              <h5 class="mb-2">Visi</h5>
            </div>
            <div class="card-body">
              <p class="card-text">
                Mewujudkan masyarakat desa yang mandiri, sejahtera, dan berdaya saing dengan
                memanfaatkan
                potensi sumber daya alam dan manusia secara berkelanjutan.
              </p>
            </div>
          </div>
          <div class="card-visimisi mt-3 mb-5">
            <div class="card-header">
              <h5 class="mb-2">Misi</h5>
            </div>
            <div class="card-body">
              <ol class="card-text" style="list-style-type: disc;">
                <li>Meningkatkan kualitas sumber daya manusia melalui pendidikan dan pelatihan.</li>
                <li>Meningkatkan kesejahteraan masyarakat dengan menciptakan lapangan pekerjaan.</li>
                <li>Mengembangkan potensi ekonomi lokal melalui pertanian, pariwisata, dan UMKM.</li>
                <li>Meningkatkan infrastruktur dan fasilitas umum untuk kesejahteraan masyarakat.</li>
                <li>Mewujudkan pemerintahan desa yang transparan dan akuntabel.</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Visi Misi -->

  <!-- Kependudukan -->
  <section id="kependudukan" class="py-5">
    <div class="container-fluid transition-container">
      <h2 class="subjudul mb-5 text-center">Kependudukan</h2>
      <div class="row text-center justify-content-center">
        <div class="col-lg-6 mb-3">
          <div class="card p-3">
            <div class="card-body">
              <h5 class="card-title">Total Jiwa</h5>
              <span class="counter display-4" data-target="5000">0</span>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-3">
          <div class="card p-3">
            <div class="card-body">
              <h5 class="card-title">Total KK</h5>
              <span class="counter display-4" data-target="1200">0</span>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-3">
          <div class="card p-3">
            <div class="card-body">
              <h5 class="card-title">Dusun</h5>
              <span class="counter display-4" data-target="15">0</span>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-3">
          <div class="card p-3">
            <div class="card-body">
              <h5 class="card-title">Jumlah RT</h5>
              <span class="counter display-4" data-target="50">0</span>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid my-5 mt-1">
        <div class="row text-center justify-content-center">
          <!-- Diagram Lingkaran Suku -->
          <div class="col-lg-6 mb-4 d-flex flex-column align-items-center">
            <h5 class="mb-4 text-center w-100">Suku</h5>
            <div class="card chart-card w-75 p-3">
              <canvas id="sukuChart"></canvas>
            </div>
          </div>

          <!-- Diagram Lingkaran Agama -->
          <div class="col-lg-6 mb-4 d-flex flex-column align-items-center">
            <h5 class="mb-4 text-center w-100">Agama</h5>
            <div class="card chart-card w-75 p-3">
              <canvas id="agamaChart"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Kependudukan -->

  <!-- Kantor Desa -->
  <section id="kantor-desa" class="py-5">
    <div class="container transition-container">
      <h2 class="subjudul text-center mb-4">Kantor Desa Sungai Keran</h2>
      <div class="row">
        <div class="col-lg-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17596.69517182833!2d108.89841217452445!3d0.692050119300173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31e305ab91cca753%3A0x10d868d0d0d897e3!2sSungai%20Keran%20Village%20Office!5e0!3m2!1sen!2sid!4v1728940315050!5m2!1sen!2sid" width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Kantor Desa -->

  <!-- Footer -->
  <footer class="text-center text-dark bg-light p-4 border-top">
    <p>Copyright &copy; 2024 Desa Sungai Keran</p>
  </footer>
  <!-- End of Footer -->

  <!-- Tombol Kembali ke Atas -->
  <button onclick="scrollToTop()" id="backToTopBtn" class="btn">
    <i class="fas fa-arrow-up"></i>
  </button>

  <!-- Script -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>


  <script>
    document.addEventListener("DOMContentLoaded", function () {
      var currentPage = window.location.pathname;

      var navBeranda = document.getElementById("beranda");
      var navProfile = document.getElementById("profile-desa");
      var navPemerintahan = document.getElementById("pemerintahan-desa");
      var navLayananPublik = document.getElementById("layanan-publik");
      var navInformasiPublik = document.getElementById("informasi-publik");
      var navKontak = document.getElementById("kontak");

      if (currentPage.endsWith("beranda.html") || currentPage === "/") {
        navBeranda.classList.add("active-link");
      } else if (currentPage.endsWith("profile-desa.html")) {
        navProfile.classList.add("active-link");
      } else if (currentPage.endsWith("perangkat-desa.html") || currentPage.endsWith("lembaga-desa.html")) {
        navPemerintahan.classList.add("active-link");
      } else if (currentPage.endsWith("layanan-publik.html")) {
        navLayananPublik.classList.add("active-link");
      } else if (
        currentPage.endsWith("layanan-administrasi.html") ||
        currentPage.endsWith("pengumuman.html") ||
        currentPage.endsWith("kegiatan.html")
      ) {
        navInformasiPublik.classList.add("active-link");
      } else if (currentPage.endsWith("kontak.html")) {
        navKontak.classList.add("active-link");
      }
    });

    // Navbar
    let lastScrollTop = 0;
    const navbar = document.querySelector('.navbar');
    const scrollThreshold = 150; // Batas scroll untuk memicu hide

    window.addEventListener('scroll', function () {
      let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

      // Sembunyikan navbar saat scroll ke bawah
      if (scrollTop > scrollThreshold) {
        navbar.style.top = '-100px';
      }
      // Tampilkan navbar hanya saat di posisi paling atas
      else if (scrollTop === 0) {
        navbar.style.top = '0';
      }
    });



    // Menutup sidebar
    document.addEventListener('DOMContentLoaded', function () {
      const navbarCollapse = document.getElementById('navbarSupportedContent');
      const closeBtn = document.getElementById('closeSidebar');
      const toggleBtn = document.querySelector('.navbar-toggler');

      // Event listener untuk membuka dan menutup sidebar
      toggleBtn.addEventListener('click', function () {
        navbarCollapse.classList.toggle('show');
      });

      // Event listener untuk menutup sidebar menggunakan tombol 'X'
      closeBtn.addEventListener('click', function () {
        navbarCollapse.classList.remove('show'); // Menutup sidebar
        closeBtn.style.display = 'none'; // Sembunyikan tombol 'X'
        toggleBtn.style.display = 'block'; // Tampilkan ikon sidebar
      });

      // Event listener untuk menghilangkan ikon sidebar saat sidebar terbuka
      navbarCollapse.addEventListener('show.bs.collapse', function () {
        closeBtn.style.display = 'block'; // Tampilkan tombol 'X'
        toggleBtn.style.display = 'none'; // Sembunyikan ikon toggler
      });

      // Event listener untuk mengembalikan ikon sidebar saat sidebar ditutup
      navbarCollapse.addEventListener('hide.bs.collapse', function () {
        closeBtn.style.display = 'none'; // Sembunyikan tombol 'X'
        toggleBtn.style.display = 'block'; // Tampilkan ikon toggler
      });
    });


    // Ketika user scroll, tampilkan tombol
    window.onscroll = function () {
      scrollFunction();
    };

    function scrollFunction() {
      let backToTopBtn = document.getElementById("backToTopBtn");

      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        backToTopBtn.style.display = "block"; // Tampilkan tombol jika scroll lebih dari 20px
      } else {
        backToTopBtn.style.display = "none";  // Sembunyikan tombol jika posisi di atas
      }
    }

    // Fungsi untuk scroll ke atas
    function scrollToTop() {
      document.body.scrollTop = 0; // Untuk Safari
      document.documentElement.scrollTop = 0; // Untuk browser lain
    }

    // Fungsi untuk mengecek posisi elemen dan menambahkan kelas 'show'
    function checkPosition() {
      const containers = document.querySelectorAll('.transition-container');

      containers.forEach(container => {
        const containerPosition = container.getBoundingClientRect().top;
        const screenPosition = window.innerHeight / 1.2;

        if (containerPosition < screenPosition) {
          container.classList.add('show');
        }
      });
    }

    document.addEventListener('scroll', checkPosition);
    window.onload = checkPosition;

    // untuk menjalankan counter
    document.addEventListener("DOMContentLoaded", function () {
      const counters = document.querySelectorAll(".counter");

      counters.forEach(counter => {
        const updateCounter = () => {
          const target = +counter.getAttribute("data-target");
          const count = +counter.innerText;

          const increment = target / 400;

          if (count < target) {
            counter.innerText = Math.ceil(count + increment);
            setTimeout(updateCounter, 10);
          } else {
            counter.innerText = target;
          }
        };

        updateCounter();
      });
    });

    // Diagram Lingkaran Suku
    const sukuCtx = document.getElementById('sukuChart').getContext('2d');
    const sukuChart = new Chart(sukuCtx, {
      type: 'pie',
      data: {
        labels: ['Melayu', 'Madura', 'Tionghoa', 'Dayak', 'Jawa', 'Bugis', 'Lainnya'],
        datasets: [{
          label: 'Jumlah Suku',
          data: [200, 150, 100, 50, 30, 20, 10],
          backgroundColor: ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'magenta'],
          hoverOffset: 0
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: 'bottom',
            labels: {
              usePointStyle: true,
              pointStyle: 'circle'
            }
          },
          datalabels: {
            color: '#000',
            anchor: 'end',
            align: 'end',
            offset: -50,
            formatter: (value, context) => {
              const total = context.chart.data.datasets[0].data.reduce((a, b) => a + b, 0);
              const percentage = (value / total * 100).toFixed(1) + '%';
              return percentage;
            },
            font: {
              weight: 'medium'
            }
          }
        },
        layout: {
          padding: 0
        }
      },
      plugins: [ChartDataLabels]
    });

    // Diagram Lingkaran Agama
    const agamaCtx = document.getElementById('agamaChart').getContext('2d');
    const agamaChart = new Chart(agamaCtx, {
      type: 'pie',
      data: {
        labels: ['Islam', 'Katolik', 'Protestan', 'Buddha', 'Hindu', 'Kong Hu Chu'],
        datasets: [{
          label: 'Jumlah Agama',
          data: [300, 100, 50, 30, 20, 10],
          backgroundColor: ['red', 'orange', 'yellow', 'green', 'blue', 'magenta'],
          hoverOffset: 0
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: 'bottom',
            labels: {
              usePointStyle: true,
              pointStyle: 'circle'
            }
          },
          datalabels: {
            color: '#000',
            anchor: 'end',
            align: 'end',
            offset: -50,
            formatter: (value, context) => {
              const total = context.chart.data.datasets[0].data.reduce((a, b) => a + b, 0);
              const percentage = (value / total * 100).toFixed(1) + '%';
              return percentage;
            },
            font: {
              weight: 'medium'
            }
          }
        },
        layout: {
          padding: 0
        }
      },
      plugins: [ChartDataLabels]
    });

  </script>
</body>

</html>