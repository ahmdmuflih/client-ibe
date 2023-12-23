<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SukLib</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/Photo/suklib.png" rel="icon">
  <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/css/style.css" rel="stylesheet">

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/" class="logo d-flex align-items-center"> <!-- kalau udah selesai ini ganti href ke index.php-->
        <img src="assets/Photo/suklib.png" alt="">
        <span class="d-none d-lg-block">SukLib</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <!-- <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <div class="input-group-sm ">
          <select class="form-select form-select-sm shadow-none rounded-start-pill">
              <option>All</option>
              <option>One</option>
              <option>Two</option>
              <option>Three</option>
              <option>Four</option>
          </select>
        </div>
        <input class="rounded-end-pill" type="text" name="query" placeholder="Search" title="Enter search keyword">
        <div class="btn-group" role="group" aria-label="Basic outlined example">
          <button class="btn" type="submit" title="Search"><i class="bi bi-search"></i></button>
          <button id="scan" class="btn" type="button"><i class="bi bi-upc-scan"></i></button>
        </div>
      </form>
    </div>End Search Bar -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="searching.php">
        <input type="text" name="query" placeholder="Cari" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

       
        <!-- <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-translate"></i>
            <span class="d-none d-md-block dropdown-toggle ps-2">Lang</span>
          </a>End Profile Iamge Icon -->

          <!-- <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center">
                <i class="bi bi-person"></i>
                <span>Bahasa 1</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center">
                <i class="bi bi-gear"></i>
                <span>Bahasa 2</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center">
                <i class="bi bi-question-circle"></i>
                <span>Bahasa 3</span>
              </a>
            </li>

          </ul>End Profile Dropdown Items
        </li>End Profile Nav -->


        <!-- <li class="nav-item">
          <button type="button" id="btnNavTime" class="nav-profile btn btn-outline-primary rounded-pill">
            <i class="bi bi-clock"></i>
            09:00 AM
            <i class="bi bi-calendar4-week"></i>
            4-MAR-2023
          </button>
 
        </li>End Notification Nav -->

       
            <li class="nav-item dropdown">
    
              <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                <i class="bi bi-bell"></i>
                <span class="badge bg-primary badge-number">4</span>
              </a><!-- End Notification Icon -->
    
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                <li class="dropdown-header">
                  You have 4 new notifications
                  <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <li class="notification-item">
                  <i class="bi bi-exclamation-circle text-warning"></i>
                  <div>
                    <h4>Lorem Ipsum</h4>
                    <p>Quae dolorem earum veritatis oditseno</p>
                    <p>30 min. ago</p>
                  </div>
                </li>
    
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <li class="notification-item">
                  <i class="bi bi-x-circle text-danger"></i>
                  <div>
                    <h4>Atque rerum nesciunt</h4>
                    <p>Quae dolorem earum veritatis oditseno</p>
                    <p>1 hr. ago</p>
                  </div>
                </li>
    
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <li class="notification-item">
                  <i class="bi bi-check-circle text-success"></i>
                  <div>
                    <h4>Sit rerum fuga</h4>
                    <p>Quae dolorem earum veritatis oditseno</p>
                    <p>2 hrs. ago</p>
                  </div>
                </li>
    
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <li class="notification-item">
                  <i class="bi bi-info-circle text-primary"></i>
                  <div>
                    <h4>Dicta reprehenderit</h4>
                    <p>Quae dolorem earum veritatis oditseno</p>
                    <p>4 hrs. ago</p>
                  </div>
                </li>
    
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li class="dropdown-footer">
                  <a href="#">Show all notifications</a>
                </li>
    
              </ul><!-- End Notification Dropdown Items -->
    
            </li><!-- End Notification Nav -->
    
            <li class="nav-item dropdown">
    
              <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                <i class="bi bi-chat-left-text"></i>
                <span class="badge bg-success badge-number">3</span>
              </a><!-- End Messages Icon -->
    
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                <li class="dropdown-header">
                  You have 3 new messages
                  <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <li class="message-item">
                  <a href="#">
                    <img src="/img/messages-1.jpg" alt="" class="rounded-circle">
                    <div>
                      <h4>Maria Hudson</h4>
                      <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                      <p>4 hrs. ago</p>
                    </div>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <li class="message-item">
                  <a href="#">
                    <img src="/img/messages-2.jpg" alt="" class="rounded-circle">
                    <div>
                      <h4>Anna Nelson</h4>
                      <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                      <p>6 hrs. ago</p>
                    </div>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <li class="message-item">
                  <a href="#">
                    <img src="/img/messages-3.jpg" alt="" class="rounded-circle">
                    <div>
                      <h4>David Muldon</h4>
                      <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                      <p>8 hrs. ago</p>
                    </div>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <li class="dropdown-footer">
                  <a href="#">Show all messages</a>
                </li>
    
              </ul><!-- End Messages Dropdown Items -->
    
            </li><!-- End Messages Nav -->
    
            <li class="nav-item dropdown pe-3">
    
              <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                <img src="/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
              </a><!-- End Profile Iamge Icon -->
    
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li class="dropdown-header">
                  <h6>Kevin Anderson</h6>
                  
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                    <i class="bi bi-person"></i>
                    <span>My Profile</span>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <!-- <li>
                  <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                    <i class="bi bi-gear"></i>
                    <span>Account Settings</span>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li> -->
    
              
    
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Sign Out</span>
                  </a>
                </li>
    
              </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->
    
          </ul>
        </nav><!-- End Icons Navigation -->
    
      </header><!-- End Header -->
 

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item" style="padding-top: 10px">
        <a class="nav-link collapsed" href="/">
          <i class="bi bi-house-door"></i>
          <span>Home</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/search">
          <i class="bi bi-search"></i>
          <span>Cari</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link " href="/riwayat">
          <i class="bi bi-journals"></i>
          <span>Riwayat</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="sumbangan_buku.php">
          <i class="bi bi-box2-heart"></i>
          <span>Sumbang Buku</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-graph-up-arrow"></i>
          <span>Literasi</span>
        </a>
      </li><!-- End Register Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li>End Profile Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li>End Login Page Nav

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.php">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li>End Register Page Nav -->

      <li class="nav-item" style="padding-top: 9cm">
        <a class="nav-link collapsed" href="#" style="font-size: 12px; color: #808080;">
          <span>Tentang Kami</span>
        </a>
      </li><!-- Tentang Kami Page Nav -->


      

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Riwayat Peminjaman</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Riwayat Peminjaman</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section dashboard">
      <div class="row">
        <!-- Top Selling -->
        <div class="col-12">
          <div class="card top-selling overflow-auto">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>
                <li><a class="dropdown-item" href="#">Currently Borrowed</a></li>
                <li><a class="dropdown-item" href="#">Returned</a></li>
                <li><a class="dropdown-item" href="#">Over Due</a></li>
              </ul>
            </div>
            <div class="card-body pb-0">
              <h5 class="card-title">Riwayat <span>| All</span></h5>

              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">Judul</th>
                    <th scope="col"></th>
                    <th scope="col">Format Buku</th>
                    <th scope="col">Dipinjam Pada</th>
                    <th scope="col">Dipinjam Sampai</th>
                    <th scope="col">Status</th>
                    <th scope="col"> </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                      <a><img src="/Photo/book1.png" alt=""></a>
                    </th>
                    <td>
                      <a class="text-dark fw-bold">DON'T MAKE ME THINK</a><br>
                      <a class="text-dark">Steve Krug, 2000</a><br>
                      <a class="text-dark fw-light">Second Edition</a>
                    </td>
                    <td>Hard Copy</td> 
                    <td>02 Dec 2023</td>
                    <td>08 Dec 2023</td>
                    <td>Returned</td>
                    <td>
                      <a class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#myModal">Pengembalian</a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <a><img src="/Photo/book6.png" alt=""></a>
                    </th>
                    <td>
                      <a class="text-dark fw-bold">RICH DAD POOR DAD</a><br>
                      <a class="text-dark">Robert T.Kiyosaki, 1997</a><br>
                      <a class="text-dark fw-light"></a>
                    </td>
                    <td>Hard Copy</td> 
                    <td>10 Dec 2023</td>
                    <td>14 Dec 2023</td>
                    <td class="text-success">Currently Borrowed</td>
                    <td>
                      <a class="btn btn-sm btn-success" href="/riwayatform">Pengembalian</a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <a><img src="/Photo/new1.png" alt=""></a>
                    </th>
                    <td>
                      <a class="text-dark fw-bold">FILOSOFI TERAS</a><br>
                      <a class="text-dark">Henry. M, 2018</a><br>
                      <a class="text-dark fw-light"></a>
                    </td>
                    <td>Hard Copy</td> 
                    <td>08 Dec 2023</td>
                    <td>11 Dec 2023</td>
                    <td class="text-danger">Over Due</td>
                    <td>
                      <a class="btn btn-sm btn-danger" href="bayar.html">Bayar Denda</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
        </div><!-- End Top Selling -->
      </div>
    </section>
    <!-- Modal -->
    <div class="modal" tabindex="-1" id="myModal">
      <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="modal-title fw-bold">Isi data Pengembalian Buku</h6>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="list-group">
              <div class="list-group-item fw-bold border-0 mb-1">
                <!-- Vertical Form -->
                <form class="row g-3">
                  <div class="col-12">
                    <label for="inputDate" class="col-sm-2 col-form-label">Dari</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control border-0 bg-secondary-light">
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="inputDate" class="col-sm-2 col-form-label">Sampai</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control border-0 bg-secondary-light">
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="inputNanme4" class="form-label">Nomor Buku</label>
                    <input type="text" class="form-control" id="inputNanme4" placeholder="65XC2023">
                  </div>
                  <div class="col-12">
                    <label for="inputNanme3" class="form-label">Denda</label>
                    <input type="text" class="form-control" id="inputNanme3" placeholder="RP 0,00">
                  </div>
                </form>
                <!-- Vertical Form -->
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
              <a class="text-white" target="_blank">Return</a>
            </button>
          </div>
        </div>
      </div>
    </div>
  </main><!-- End #main -->
  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/vendor/chart.js/chart.umd.js"></script>
  <script src="/vendor/echarts/echarts.min.js"></script>
  <script src="/vendor/quill/quill.min.js"></script>
  <script src="/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="/vendor/tinymce/tinymce.min.js"></script>
  <script src="/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/js/main.js"></script>

</body>

</html>