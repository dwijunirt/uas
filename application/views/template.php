<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Administrator</title>
    <link href="<?=base_url()?>template/https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>template/fontawesome/css/all.min.css" type="text/css">
    <!-- <link rel="stylesheet" href="<?=base_url()?>template/bootstrap3/css/bootstrap.css" type="text/css"> -->
    <link rel="stylesheet" href="<?=base_url()?>template/bootstrap4/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?=base_url()?>template/bootstrap/css/bootstrap.css" type="text/css">
    <link href="<?= base_url() ?>assets/backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">



    <link rel="stylesheet" href="<?=base_url()?>template/dist/css/admin.css">

</head>

<body>
    <div class="wrapper">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light  " style="background-color:#1a69bbe6;">
                <div class="navbar_left">
                    <div class="icon_wrap">
                        <img src="<?=base_url()?>template/dist/img/logo.png" alt="logo">
                        <!-- <span class="name" >Bani Saleh</span> -->
                    </div>
                    <!-- <img src="<?=base_url()?>template/dist/img/logo.png" alt="logo" class="img-circle " width="60px" height="50px"> -->
                </div>
                <!-- <div class="image"> -->
                <!-- </div> -->
                <marquee width="1500" behavior="" direction="left" class="marquee" style="color:honeydew">
                WELCOME TO PEMROGRAMAN WEB 2
                    <img src="<?=base_url()?>template/dist/img/logo.png" alt="" width="30px">
                </marquee>
                <!-- <div class="navbar_right float-right">
                    <div class="profil">
                        <div class="icon_wrap">
                            <img src="<?=base_url()?>template/dist/img/digidaw.jpeg" class="rounded-circle" alt="logo">
                            <span class="name">Digidaw</span>
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <div class="profil_show">
                            <ul class="profil">
                                <li class="profil">
                                    <a class="profil" href="<?=base_url()?>template/#">
                                        <span class="picon">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                        </span>
                                        profil
                                    </a>
                                    <div class="btn">My Profil</div>
                                </li>
                                <li>
                                    <a class="address" href="<?=base_url()?>template/#">
                                        <span class="picon">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        </span>
                                        address
                                    </a>
                                </li>
                                <li>
                                    <a class="logout" href="<?=base_url()?>template/#">
                                        <span class="picon">
                                            <i class="fa fa-sign-out-alt" aria-hidden="true"></i>
                                        </span>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
            </nav>
        </header>
        <?php if ($this->session->userdata('level') == 'admin' OR $this->session->userdata('level') == 'petugas') : ?>
        <aside class="sidebar sidebar-collapse">
            <div class="menu">
            
                <ul class="menu-content">
                    
                    <li>
                        <a class="home" href="<?=site_url()?>admin/dashboardController">
                            <span class="picon">
                                <i class="fa fa-home" aria-hidden="true"></i>
                            </span>
                            Home
                        </a>
                    </li>
                    <?php endif; ?>
                    <li>
                        <a class="master" href="#">
                            <span class="picon">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                            Profile
                            <i class="fa fa-angle-right float-right"></i></a>

                        </a>
                        <ul> 
                            <li>
                                <a class="kelas" href="<?=base_url()?>User/profilecontroller">
                                    <!-- <span class="picon">
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                    </span> -->
                                   Ganti Foto
                                </a>
                            </li>
                            <li>
                                <a class="kelas" href="<?=base_url()?>Auth/changepasswordcontroller">
                                    <!-- <span class="picon">
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                    </span> -->
                                   Ganti Password
                                </a>
                            </li>
                        </ul>
                    <li>

                        <a class="master" href="#">
                            <span class="picon">
                                <i class="fa fa-user-cog" aria-hidden="true"></i>
                            </span>
                            Admin
                            <i class="fa fa-angle-right float-right"></i></a>

                        </a>

                        <ul>
                            
                            <li>
                                <a class="kelas" href="<?=base_url()?>Admin/petugascontroller#">
                                    <!-- <span class="picon">
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                    </span> -->
                                   Tambah Petugas
                                </a>
                            </li>
                            <!-- <li>
                                <a class="matkul" href="<?=base_url()?>Admin/tanggapancontroller">
                                    <span class="picon">
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                    </span>
                                    Tanggapan
                                </a>
                            </li> -->
                            <!-- <li>
                                <a class="dosen" href="<?=base_url()?>template/#">
                                    <span class="picon">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </span>
                                    Master Dosen
                                </a>
                            </li>
                            <li>
                                <a class="mahasiswa" href="<?=base_url()?>template/#">
                                    <span class="picon">
                                        <i class="fa fa-users" aria-hidden="true"></i>
                                    </span>
                                    Master Mahasiswa
                                </a>
                            </li> -->
                            
                            
                        </ul>
                    </li>
                    <li>
                    
                        <a class="relasi" href="#">
                            <span class="picon">
                                <i class="fa fa-folder" aria-hidden="true"></i>
                            </span>
                            Laporan Pengaduan
                            <i class="fa fa-angle-right float-right"></i></a>
                        </a>
                        <ul>
                            <li>
                                <a class="kelas_dosen" href="<?=base_url()?>Masyarakat/pengaduancontroller">
                                    <!-- <span class="picon">
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                    </span> -->
                                    Pengaduan
                                </a>
                            </li>
                            <li>
                                <a class="kelas_dosen" href="<?=base_url()?>masyarakat/pengaduancontroller">
                                    <!-- <span class="picon">
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                    </span> -->
                                    Pengaduan detail
                                </a>
                            </li>
                        </ul>
                    <li>
                        <a class="relasi" href="#">
                            <span class="picon">
                                <i class="fa fa-folder" aria-hidden="true"></i>
                            </span>
                            Tanggapan
                            <i class="fa fa-angle-right float-right"></i></a>
                        </a>
                        <ul>
                            <li>
                                <a class="kelas_dosen" href="<?=base_url()?>Admin/tanggapancontroller">
                                    <!-- <span class="picon">
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                    </span> -->
                                    Tanggapan Masuk
                                </a>
                            </li>
                            <li>
                                <a class="jurusan" href="<?=base_url()?>Admin/tanggapancontroller/tanggapan_proses">
                                    <!-- <span class="picon">
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                    </span> -->
                                    Tanggapan Proses
                                </a>
                            </li>
                            <li>
                                <a class="kelas_dosen" href="<?=base_url()?>Admin/tanggapancontroller/tanggapan_tolak">
                                    <!-- <span class="picon">
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                    </span> -->
                                    Tanggapan Ditolak
                                </a>
                            </li>

                            <li>
                                <a class="jurusan" href="<?=base_url()?>Admin/tanggapancontroller/tanggapan_selesai">
                                    <!-- <span class="picon">
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                    </span> -->
                                    Pengaduan Selesai
                                </a>
                            </li>
       
                        </ul>
                    </li>

                            <li>
                                <a class="jurusan" href="<?=base_url()?>admin/laporancontroller">
                                    <span class="picon">
                                        <i class="fa fa-file-pdf" aria-hidden="true"></i>
                                    </span>
                                     Generate Laporan
                                </a>
                            </li>
                    <!-- <li>
                        <a class="soal" href="<?=base_url()?>template/#">
                            <span class="picon">
                                <i class="fa fa-file" aria-hidden="true"></i>
                            </span>
                            Bank Soal
                        </a>
                    </li>
                    <li>
                        <a class="soal" href="<?=base_url()?>template/#">
                            <span class="picon">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                            </span>
                            Hasil Ujian
                        </a>
                    </li> -->
                    <!-- <li>
                        <a class="soal" href="<?=base_url()?>template/#">
                            <span class="picon">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </span>
                            User Management
                        </a>
                    </li>
                    <li>
                        <a class="soal" href="<?=base_url()?>template/#">
                            <span class="picon">
                                <i class="fa fa-cog" aria-hidden="true"></i>
                            </span>
                            Setting
                        </a>
                    </li> -->
                    <li>
                        <a class="soal" href="<?=base_url()?>">
                            <span class="picon">
                                <i class="fa fa-sign-out-alt" aria-hidden="true"></i>
                            </span>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <div class="content">
            <div class="inner">
                <!-- <section class="content-header">
                    <nav aria-label="breadcrumb ">
                        <ol class="breadcrumb ">
                            <li class="breadcrumb-item "><a href="<?=base_url()?>template/#">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?=base_url()?>template/#">Library</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                </section> -->
                <?php echo $contents; ?>


                
            </div>
        </div>
        <div class="footer mt-4">
            <p>&copy;All Rights Reserved by Team Work</p>
        </div>



    </div>






    <script src="<?=base_url()?>template/dist/js/jquery.slim.min.js"></script>
    <script src="<?=base_url()?>template/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>template/dist/js/admin.js"></script>
    <!-- <script>
        $(document).ready(function () {
            $(".profil .icon_wrap").click(function () {
                $(this).parent().toggleClass("active");
            })
        })
    </script> -->
    <script>
  // selected file show
  $('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
  });
</script>

</body>

</html>