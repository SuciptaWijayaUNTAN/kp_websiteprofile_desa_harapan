<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Profile Desa - Desa Sungai Keran</title>
  <link rel="stylesheet" href="style.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Inter:wght@400;700&family=Lora:wght@400;700&family=Poppins:wght@400;700&family=Lato:wght@400;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    *,
    ::after,
    ::before {
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      font-size: 0.875rem;
      opacity: 1;
      overflow-y: scroll;
      margin: 0;
    }

    a {
      cursor: pointer;
      text-decoration: none;
      font-family: 'Poppins', sans-serif;
    }

    li {
      list-style: none;
    }

    h4 {
      font-family: 'Poppins', sans-serif;
      font-size: 1.3rem;
      color: rgb(196, 0, 39);
    }

    .main .form-label {
      font-weight: bold;
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <aside id="sidebar" class="sticky-top" style="height: 100vh; overflow-y: auto;">
      <!-- Content fo Sidebar -->
      <div class="h100">
        <div class="sidebar-logo collapsed-icon">
          <a href="#">Desa Sungai Keran</a>
        </div>
        <ul class="sidebar-nav">
          <li class="sidebar-item">
            <a href="admin-dashboard.html" class="sidebar-link" id="admin-dashboard">
              <i class="fa-solid fa-list pe-2"></i>
              <span class="link-text">Dashboard</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="admin-profile-desa.html" class="sidebar-link" id="admin-profile-desa">
              <i class="fa-solid fa-id-card pe-2"></i>
              <span class="link-text">Profile Desa</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="admin-perangkat-desa.html" class="sidebar-link" id="admin-perangkat-desa">
              <i class="fa-solid fa-user-tie pe-2"></i>
              <span class="link-text">Perangkat Desa</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="admin-lembaga-desa.html" class="sidebar-link" id="admin-lembaga-desa">
              <i class="fa-solid fa-landmark pe-2"></i>
              <span class="link-text">Lembaga Desa</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="admin-layanan-publik.html" class="sidebar-link" id="admin-layanan-publik">
              <i class="fa-solid fa-hands-helping pe-2"></i>
              <span class="link-text">Layanan Publik</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="admin-layanan-administrasi.html" class="sidebar-link" id="admin-layanan-administrasi">
              <i class="fa-solid fa-file-signature pe-2"></i>
              <span class="link-text">Layanan Administrasi</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="admin-pengumuman.html" class="sidebar-link" id="admin-pengumuman">
              <i class="fa-solid fa-bullhorn pe-2"></i>
              <span class="link-text">Pengumuman</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="admin-kegiatan.html" class="sidebar-link" id="admin-kegiatan">
              <i class="fa-solid fa-calendar-day pe-2"></i>
              <span class="link-text">Kegiatan</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="admin-kontak.html" class="sidebar-link" id="admin-kontak">
              <i class="fa-solid fa-address-book pe-2"></i>
              <span class="link-text">Kontak</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="kelola-pengguna.html" class="sidebar-link" id="kelola-pengguna">
              <i class="fa-solid fa-user pe-2"></i>
              <span class="link-text">Pengguna</span>
            </a>
          </li>
        </ul>

      </div>
    </aside>
    <div class="main">
      <nav class="navbar navbar-expand px-3 border-bottom">
        <button class="btn" id="sidebar-toggle" type="button">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse navbar">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                <img src="img/6.jpg" class="avatar img-fluid" alt="User Avatar">
              </a>
              <div class="dropdown-menu dropdown-menu-end">
                <a href="#" class="dropdown-item">
                  <i class="fa-solid fa-user-gear pe-2"></i>
                  Profile
                </a>
                <a href="#" class="dropdown-item">
                  <i class="fa-solid fa-right-from-bracket pe-2"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <main class="content px-3 py-2">
        <div class="container-fluid" id="admin-profile-desa">
          <div class="mt-3 mb-3">
            <h4>Kelola Profile Desa</h4>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">

                  <!-- Nama Desa -->
                  <div class="form-group row mb-3">
                    <label for="namaDesa" class="col-lg-2 col-md-3 col-sm-4 form-label">Nama Desa:</label>
                    <div class="col-lg-10 col-md-9 col-sm-8">
                      <input type="text" class="form-control" id="namaDesa" placeholder="Masukkan nama desa" required>
                    </div>
                  </div>

                  <!-- Sejarah Desa -->
                  <div class="form-group row mb-3">
                    <label for="sejarahDesa" class="col-lg-2 col-md-3 col-sm-4 form-label">Sejarah Desa:</label>
                    <div class="col-lg-10 col-md-9 col-sm-8">
                      <textarea class="form-control" id="sejarahDesa" placeholder="Masukkan Sejarah Desa"
                        required></textarea>
                    </div>
                  </div>

                  <!-- Foto Desa -->
                  <div class="form-group row mb-3">
                    <label for="fotoDesa" class="col-lg-2 col-md-3 col-sm-4 form-label">Foto Desa:</label>
                    <div class="col-lg-10 col-md-9 col-sm-8">
                      <input type="file" class="form-control" id="fotoDesa" accept="image/*" required multiple
                        onchange="previewImages()">
                    </div>
                    <div id="imagePreview" class="mt-3"></div>
                  </div>



                  <!-- Visi Desa -->
                  <div class="form-group row mb-3">
                    <label for="visiDesa" class="col-lg-2 col-md-3 col-sm-4 form-label">Visi Desa:</label>
                    <div class="col-lg-10 col-md-9 col-sm-8">
                      <textarea class="form-control" id="visiDesa" placeholder="Masukkan Visi Desa" required></textarea>
                    </div>
                  </div>

                  <!-- Misi Desa -->
                  <div class="form-group row mb-3">
                    <label for="misiDesa" class="col-lg-2 col-md-3 col-sm-4 form-label">Misi Desa:</label>
                    <div class="col-lg-10 col-md-9 col-sm-8">
                      <textarea class="form-control" id="misiDesa" placeholder="Masukkan Misi Desa" required></textarea>
                    </div>
                  </div>

                  <!-- Additional Details (Total Jiwa, Total KK, Total Dusun, Total RT) -->
                  <div class="form-group row gx-3 gy-3">
                    <div class="col-lg-3 col-md-6">
                      <label for="totalJiwa" class="form-label">Total Jiwa:</label>
                      <input type="number" class="form-control" id="totalJiwa" required>
                    </div>
                    <div class="col-lg-3 col-md-6">
                      <label for="totalKK" class="form-label">Total KK:</label>
                      <input type="number" class="form-control" id="totalKK" required>
                    </div>
                    <div class="col-lg-3 col-md-6">
                      <label for="totalDusun" class="form-label">Total Dusun:</label>
                      <input type="number" class="form-control" id="totalDusun" required>
                    </div>
                    <div class="col-lg-3 col-md-6">
                      <label for="totalRT" class="form-label">Total RT:</label>
                      <input type="number" class="form-control" id="totalRT" required>
                    </div>
                  </div>

                  <!-- Suku -->
                  <div class="form-group row mt-3 mb-3">
                    <label class="col-lg-2 col-md-3 col-sm-4 form-label"> Suku:</label>
                    <div class="col-lg-10 col-md-9 col-sm-8">
                      <div class="row gx-3 gy-2">
                        <div class="col-lg-2 col-md-3">
                          <label for="sukuMelayu" class="form-label">Melayu</label>
                          <input type="number" class="form-control" id="sukuMelayu" placeholder="" min="0">
                        </div>
                        <div class="col-lg-2 col-md-3">
                          <label for="sukuMadura" class="form-label">Madura</label>
                          <input type="number" class="form-control" id="sukuMadura" placeholder="" min="0">
                        </div>
                        <div class="col-lg-2 col-md-3">
                          <label for="sukuTionghoa" class="form-label">Tionghoa</label>
                          <input type="number" class="form-control" id="sukuTionghoa" placeholder="" min="0">
                        </div>
                        <div class="col-lg-2 col-md-3">
                          <label for="sukuDayak" class="form-label">Dayak</label>
                          <input type="number" class="form-control" id="sukuDayak" placeholder="" min="0">
                        </div>
                        <div class="col-lg-2 col-md-3">
                          <label for="sukuJawa" class="form-label">Jawa</label>
                          <input type="number" class="form-control" id="sukuJawa" placeholder="" min="0">
                        </div>
                        <div class="col-lg-2 col-md-3">
                          <label for="sukuBugis" class="form-label">Bugis</label>
                          <input type="number" class="form-control" id="sukuBugis" placeholder="" min="0">
                        </div>
                        <div class="col-lg-2 col-md-3">
                          <label for="sukuLainnya" class="form-label">Lainnya</label>
                          <input type="number" class="form-control" id="sukuLainnya" placeholder="" min="0">
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Agama -->
                  <div class="form-group row mt-3 mb-3">
                    <label class="col-lg-2 col-md-3 col-sm-4 form-label"> Agama:</label>
                    <div class="col-lg-10 col-md-9 col-sm-8">
                      <div class="row gx-3 gy-2">
                        <div class="col-lg-2 col-md-3">
                          <label for="agamaIslam" class="form-label">Islam</label>
                          <input type="number" class="form-control" id="agamaIslam" placeholder="" min="0">
                        </div>
                        <div class="col-lg-2 col-md-3">
                          <label for="agamaKatolik" class="form-label">Katolik</label>
                          <input type="number" class="form-control" id="agamaKatolik" placeholder="" min="0">
                        </div>
                        <div class="col-lg-2 col-md-3">
                          <label for="agamaProtestan" class="form-label">Protestan</label>
                          <input type="number" class="form-control" id="agamaProtestan" placeholder="" min="0">
                        </div>
                        <div class="col-lg-2 col-md-3">
                          <label for="agamaBuddha" class="form-label">Buddha</label>
                          <input type="number" class="form-control" id="agamaBuddha" placeholder="" min="0">
                        </div>
                        <div class="col-lg-2 col-md-3">
                          <label for="agamaHindu" class="form-label">Hindu</label>
                          <input type="number" class="form-control" id="agamaHindu" placeholder="" min="0">
                        </div>
                        <div class="col-lg-2 col-md-3">
                          <label for="agamaKonghuchu" class="form-label">Konghuchu</label>
                          <input type="number" class="form-control" id="agamaKonghuchu" placeholder="" min="0">
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Peta Desa -->
                  <div class="form-group row mt-3 mb-3">
                    <label for="petaDesa" class="col-lg-2 col-md-3 col-sm-4 form-label">Peta Desa:</label>
                    <div class="col-lg-10 col-md-9 col-sm-8">
                      <input type="url" class="form-control" id="petaDesa"
                        placeholder="Masukkan tautan alamat peta Desa" required>
                    </div>
                  </div>

                  <!-- Kantor Desa -->
                  <div class="form-group row mt-3 mb-3">
                    <label for="kantorDesa" class="col-lg-2 col-md-3 col-sm-4 form-label">Kantor Desa:</label>
                    <div class="col-lg-10 col-md-9 col-sm-8">
                      <textarea type="text" class="form-control" id="kantorDesa"
                        placeholder="Masukkan alamat Kantor Desa" required></textarea>
                    </div>
                  </div>

                  <!-- Submit Button -->
                  <div class="d-flex justify-content-end mt-4">
                    <button type="submit" class="btn btn-simpan" onclick="showAlert()">Simpan</button>
                  </div>

                </div>
              </div>
            </div>
          </div>


        </div>
      </main>
    </div>
  </div>


  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <script>
    function showAlert() {
      alert("Data telah disimpan!");
    }

    const sidebarToggle = document.querySelector("#sidebar-toggle");
    sidebarToggle.addEventListener("click", function () {
      document.querySelector("#sidebar").classList.toggle("collapsed");
    });

    // Active sidebar
    const currentUrl = window.location.href;

    const sidebarItems = [
      { id: 'admin-dashboard', url: 'admin-dashboard.html' },
      { id: 'admin-profile-desa', url: 'admin-profile-desa.html' },
      { id: 'admin-perangkat-desa', url: 'admin-perangkat-desa.html' },
      { id: 'admin-lembaga-desa', url: 'admin-lembaga-desa.html' },
      { id: 'admin-layanan-publik', url: 'admin-layanan-publik.html' },
      { id: 'admin-layanan-administrasi', url: 'admin-layanan-administrasi.html' },
      { id: 'admin-pengumuman', url: 'admin-pengumuman.html' },
      { id: 'admin-kegiatan', url: 'admin-kegiatan.html' },
      { id: 'admin-kontak', url: 'admin-kontak.html' },
      { id: 'kelola-pengguna', url: 'kelola-pengguna.html' }
    ];

    sidebarItems.forEach(item => {
      if (currentUrl.includes(item.url)) {
        const sidebarLink = document.getElementById(item.id);
        if (sidebarLink) {
          sidebarLink.classList.add('active');
        }
      }
    });


    // preview image
    function previewImages() {
      const previewContainer = document.getElementById('imagePreview');
      const files = document.getElementById('fotoDesa').files;

      previewContainer.innerHTML = '';

      Array.from(files).forEach((file) => {
        const reader = new FileReader();

        reader.onload = function (event) {
          const imageDiv = document.createElement('div');
          imageDiv.style.position = 'relative';
          imageDiv.style.display = 'inline-block';
          imageDiv.style.marginRight = '10px';

          const img = document.createElement('img');
          img.src = event.target.result;
          img.style.width = '100px';
          img.style.height = 'auto';
          img.style.borderRadius = '5px';

          const removeBtn = document.createElement('span');
          removeBtn.innerHTML = '✖';
          removeBtn.style.position = 'absolute';
          removeBtn.style.top = '0';
          removeBtn.style.right = '0';
          removeBtn.style.color = 'red';
          removeBtn.style.cursor = 'pointer';
          removeBtn.onclick = function () {
            // Remove the image and its corresponding file from the input
            const newFileList = Array.from(files).filter(f => f !== file);
            const dataTransfer = new DataTransfer();
            newFileList.forEach(f => dataTransfer.items.add(f));
            document.getElementById('fotoDesa').files = dataTransfer.files;

            imageDiv.remove();
          };

          imageDiv.appendChild(img);
          imageDiv.appendChild(removeBtn);
          previewContainer.appendChild(imageDiv);
        };

        reader.readAsDataURL(file);
      });
    }
  </script>
</body>

</html>