<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Layanan Administrasi - Desa Sungai Keran</title>
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

    h5 {
      font-size: 1.2rem;
      text-align: center;
      margin-bottom: 30px;
      font-weight: bold;
    }

    .form-label {
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
        <div class="container-fluid" id="admin-layanan-administrasi">
          <div class="mt-3 mb-3">
            <h4>Kelola Layanan Administrasi</h4>
          </div>
          <div class="row">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="card" id="tambahFasilitasCard">
                    <div class="card-body">
                      <h5>Tambah Layanan Administrasi
                        <hr>
                      </h5>
                      <form id="tambahLayananForm">
                        <!-- Input Nama Layanan -->
                        <div class="form-group row mb-3">
                          <label for="namaLayanan" class="col-lg-2 col-md-3 col-sm-4 form-label">Nama Layanan:</label>
                          <div class="col-lg-10 col-md-9 col-sm-8">
                            <input type="text" class="form-control" id="namaLayanan" required>
                          </div>
                        </div>

                        <!-- Input Deskripsi Layanan -->
                        <div class="form-group row mb-3">
                          <label for="deskripsiLayanan" class="col-lg-2 col-md-3 col-sm-4 form-label">Deskripsi:</label>
                          <div class="col-lg-10 col-md-9 col-sm-8">
                            <textarea class="form-control" id="deskripsiLayanan" required></textarea>
                          </div>
                        </div>

                        <!-- Input Persyaratan Layanan -->
                        <div class="form-group row mb-3">
                          <label for="persyaratanLayanan"
                            class="col-lg-2 col-md-3 col-sm-4 form-label">Persyaratan:</label>
                          <div class="col-lg-10 col-md-9 col-sm-8">
                            <textarea class="form-control" id="persyaratanLayanan" required></textarea>
                          </div>
                        </div>

                        <!-- Tombol Submit -->
                        <div class="d-flex justify-content-end mt-4">
                          <button type="submit" class="btn btn-simpan">Simpan</button>
                          <button type="button" onclick="toggleTambahFasilitasCard()"
                            class="btn btn-batal ms-2">Batal</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

              <table class="table table-bordered mt-4">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Layanan</th>
                    <th>Deskripsi</th>
                    <th>Persyaratan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody id="layananTableBody">
                  <!-- Layanan akan ditampilkan di sini -->
                </tbody>
              </table>

              <!-- Modal untuk Edit Layanan -->
              <div class="modal fade" id="editLayananModal" tabindex="-1" aria-labelledby="editLayananModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="editLayananModalLabel">Edit Layanan Administrasi</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form id="editLayananForm">
                        <input type="hidden" id="editIndex"> <!-- Menyimpan index untuk mengedit -->
                        <div class="mb-3">
                          <label for="editNamaLayanan" class="form-label">Nama Layanan</label>
                          <input type="text" class="form-control" id="editNamaLayanan" required>
                        </div>
                        <div class="mb-3">
                          <label for="editDeskripsiLayanan" class="form-label">Deskripsi</label>
                          <textarea type="text" class="form-control" id="editDeskripsiLayanan" required></textarea>
                        </div>
                        <div class="mb-3">
                          <label for="editPersyaratanLayanan" class="form-label">Persyaratan</label>
                          <textarea type="text" class="form-control" id="editPersyaratanLayanan" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-edit">Update</button>
                      </form>
                    </div>
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


    // tambah layanan administrasi
    let layanan = [];

    // Fungsi untuk menampilkan layanan
    function displayLayanan() {
      const tableBody = document.getElementById('layananTableBody');
      tableBody.innerHTML = '';

      layanan.forEach((item, index) => {
        const row = `
      <tr>
        <td>${index + 1}</td>
        <td>${item.namaLayanan}</td>
        <td>${item.deskripsiLayanan}</td>
        <td>${item.persyaratanLayanan}</td>
        <td>
          <button class="btn btn-edit btn-sm" onclick="openEditModal(${index})">Edit</button>
          <button class="btn btn-hapus btn-sm" onclick="deleteLayanan(${index})">Hapus</button>
        </td>
      </tr>
    `;
        tableBody.innerHTML += row;
      });
    }

    // Menambahkan layanan
    document.getElementById('tambahLayananForm').onsubmit = function (event) {
      event.preventDefault();
      const namaLayanan = document.getElementById('namaLayanan').value;
      const deskripsiLayanan = document.getElementById('deskripsiLayanan').value;
      const persyaratanLayanan = document.getElementById('persyaratanLayanan').value;

      layanan.push({ namaLayanan, deskripsiLayanan, persyaratanLayanan });
      displayLayanan();
      document.getElementById('tambahLayananForm').reset();
      alert("Layanan berhasil disimpan!");
    };

    // Membuka modal edit
    function openEditModal(index) {
      document.getElementById('editIndex').value = index;
      document.getElementById('editNamaLayanan').value = layanan[index].namaLayanan;
      document.getElementById('editDeskripsiLayanan').value = layanan[index].deskripsiLayanan;
      document.getElementById('editPersyaratanLayanan').value = layanan[index].persyaratanLayanan;
      const myModal = new bootstrap.Modal(document.getElementById('editLayananModal'));
      myModal.show();
    }

    // Mengupdate layanan
    document.getElementById('editLayananForm').onsubmit = function (event) {
      event.preventDefault();
      const index = document.getElementById('editIndex').value;
      const namaLayanan = document.getElementById('editNamaLayanan').value;
      const deskripsiLayanan = document.getElementById('editDeskripsiLayanan').value;
      const persyaratanLayanan = document.getElementById('editPersyaratanLayanan').value;

      layanan[index] = { namaLayanan, deskripsiLayanan, persyaratanLayanan };
      displayLayanan();
      const myModal = bootstrap.Modal.getInstance(document.getElementById('editLayananModal'));
      myModal.hide();
      alert("Layanan berhasil diedit!");
    };

    // Menghapus layanan
    function deleteLayanan(index) {
      if (confirm("Apakah Anda yakin ingin menghapus layanan ini?")) {
        layanan.splice(index, 1);
        displayLayanan();
        alert("Layanan berhasil dihapus!");
      }
    }

  </script>
</body>

</html>