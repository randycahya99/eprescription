<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="_token" content="{{csrf_token()}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>


    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <link href="{{asset('assets/admin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

    <link href="{{ asset('assets/admin/css/sweetalert2.min.css') }}" rel="stylesheet">

    </head>

    <body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
    <!--         <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div> -->
        <div class="sidebar-brand-text mx-3">SIMPM</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item{{ request()->is('dashboard') ? ' active' : '' }}">
        <a class="nav-link" href="{{url('/dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item{{ request()->is('obat','signa') ? ' active' : '' }}">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-box-open"></i>
            <span>Master Data</span>
            </a>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('/obat')}}">Obat & Alkes</a>
                <a class="collapse-item" href="{{url('/signa')}}">Signa</a>
            </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item{{ request()->is('resep-racik','resep-non-racik') ? ' active' : '' }}">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-box-open"></i>
            <span>Manajamen Data Resep</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('/resep-racik')}}">Racik</a>
                <a class="collapse-item" href="{{url('/resep-non-racik')}}">Non-Racik</a>
            </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Alerts -->
                {{-- <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
                    <!-- Counter - Alerts -->
                    <span class="badge badge-danger badge-counter">3+</span>
                </a>
                <!-- Dropdown - Alerts -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">
                    Pemberitahuan
                    </h6>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-primary">
                        <i class="fas fa-file-alt text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">December 12, 2019</div>
                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                    </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-success">
                        <i class="fas fa-donate text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">December 7, 2019</div>
                        $290.29 has been deposited into your account!
                    </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-warning">
                        <i class="fas fa-exclamation-triangle text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">December 2, 2019</div>
                        Spending Alert: We've noticed unusually high spending for your account.
                    </div>
                    </a>
                    <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                </div>
                </li> --}}


                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{-- {{auth()->user()->username}} --}}admin</span>
                    <img class="img-profile rounded-circle" src="" alt="">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Lihat Profil
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Keluar
                    </a>
                </div>
                </li>

            </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            @yield('container')

            <!-- End of Main Content -->


            <!-- Footer -->
            <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                <span>Copyright &copy; Muhammad Randy Cahya Mardika 2022</span>
                </div>
            </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ingin keluar dari aplikasi ini?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih "Keluar" jika anda akan mengakhiri sesi ini!</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-primary" href="{{url('/logout')}}">Keluar</a>
            </div>
            </div>
        </div>
        </div>

        


        <!-- Bootstrap core JavaScript-->
        <script src="{{asset('assets/admin/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{asset('assets/admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{asset('assets/admin/js/sb-admin-2.min.js')}}"></script>

        <!-- Page level plugins -->
        <script src="{{asset('assets/admin/vendor/chart.js/Chart.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/sweetalert2.all.min.js')}}"></script>

        <!-- Page level custom scripts -->
        <script src="{{asset('assets/admin/js/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('assets/admin/js/demo/chart-pie-demo.js')}}"></script>

        <script src="{{asset('assets/admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/demo/datatables-demo.js')}}"></script>

        @if($errors->any())
        <script type="text/javascript">
        Swal.fire(
            'Gagal',
            '@foreach ($errors->all() as $error) <p>{{ $error }}</p>  @endforeach',
            'error'
            )
        </script>
        @endif

        @if(session('sukses'))    
        <script type="text/javascript">
            Swal.fire(
            'Berhasil',
            '{{session('sukses')}}',
            'success'
            )
            </script>
            @endif

            <!-- SweetAlert HapusUnit -->
            <script type="text/javascript">
            $('.hapusUnit').on('click', function(e){
                e.preventDefault();

                const href = $(this).attr('href')

                Swal.fire({
                title: 'Ingin Menghapus Data?',
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
                }).then((result) => {
                if (result.value) {
                    setTimeout(function(){ 

                    document.location.href = href;

                    }, 900);
                    Swal.fire(
                    'Terhapus',
                    'Data Berhasil dihapus',
                    'success',
                    'showConfirmButton: false',
                    'timer: 2000'
                    )
                }
                })
            })
            </script>

            <!-- SweetAlert HapusCategory -->
            <script type="text/javascript">
            $('.hapusCategory').on('click', function(e){
                e.preventDefault();

                const href = $(this).attr('href')

                Swal.fire({
                title: 'Ingin Menghapus Data?',
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
                }).then((result) => {
                if (result.value) {
                    setTimeout(function(){ 

                    document.location.href = href;

                    }, 900);
                    Swal.fire(
                    'Terhapus',
                    'Data Berhasil dihapus',
                    'success',
                    'showConfirmButton: false',
                    'timer: 2000'
                    )
                }
                })
            })
            </script>

            <!-- SweetAlert HapusProduct -->
            <script type="text/javascript">
            $('.hapusProduct').on('click', function(e){
                e.preventDefault();

                const href = $(this).attr('href')

                Swal.fire({
                title: 'Ingin Menghapus Data?',
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
                }).then((result) => {
                if (result.value) {
                    setTimeout(function(){ 

                    document.location.href = href;

                    }, 900);
                    Swal.fire(
                    'Terhapus',
                    'Data Berhasil dihapus',
                    'success',
                    'showConfirmButton: false',
                    'timer: 2000'
                    )
                }
                })
            })
            </script>

            <!-- SweetAlert HapusFoto -->
            <script type="text/javascript">
            $('.hapusFoto').on('click', function(e){
                e.preventDefault();

                const href = $(this).attr('href')

                Swal.fire({
                title: 'Ingin Menghapus Data?',
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
                }).then((result) => {
                if (result.value) {
                    setTimeout(function(){ 

                    document.location.href = href;

                    }, 900);
                    Swal.fire(
                    'Terhapus',
                    'Foto Berhasil dihapus',
                    'success',
                    'showConfirmButton: false',
                    'timer: 2000'
                    )
                }
                })
            })
            </script>


            <!-- SweetAlert HapusPemesanan -->
            <script type="text/javascript">
            $('.hapusPemesanan').on('click', function(e){
                e.preventDefault();

                const href = $(this).attr('href')

                Swal.fire({
                title: 'Ingin Menghapus Data?',
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
                }).then((result) => {
                if (result.value) {
                    setTimeout(function(){ 

                    document.location.href = href;

                    }, 900);
                    Swal.fire(
                    'Terhapus',
                    'Data Pemesanan Berhasil dihapus',
                    'success',
                    'showConfirmButton: false',
                    'timer: 2000'
                    )
                }
                })
            })
            </script>

            <!-- Menambahkan fungsi Rupiah pada bagian produk-->
            <script type="text/javascript">
            var rupiah2 = document.getElementById('purchase_price');
            rupiah2.addEventListener('keyup', function(e){
                rupiah2.value = formatRupiah(this.value, 'Rp. ');
            });

            var rupiah = document.getElementById('selling_price');
            rupiah.addEventListener('keyup', function(e){
                rupiah.value = formatRupiah(this.value, 'Rp. ');
            });

            /* Fungsi formatRupiah */
            function formatRupiah(angka, prefix){
                var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split       = number_string.split(','),
                sisa        = split[0].length % 3,
                rupiah        = split[0].substr(0, sisa),
                ribuan        = split[0].substr(sisa).match(/\d{3}/gi);

            // tambahkan titik jika yang di input sudah menjadi angka ribuan
            if(ribuan){
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp.' + rupiah : '');
        }
        </script>

        <!-- SCRIPT RP UNTUK BAYAR -->
        <script type="text/javascript">

        var rupiah3 = document.getElementById('bayarid');
        rupiah3.addEventListener('keyup', function(e){
            rupiah3.value = formatRupiah(this.value, 'Rp. ');
        });

        /* Fungsi formatRupiah */
        function formatRupiah(angka, prefix){
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split       = number_string.split(','),
            sisa        = split[0].length % 3,
            rupiah        = split[0].substr(0, sisa),
            ribuan        = split[0].substr(sisa).match(/\d{3}/gi);

            // tambahkan titik jika yang di input sudah menjadi angka ribuan
            if(ribuan){
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp.' + rupiah : '');
        }
        </script>
    </body>
    </html>
