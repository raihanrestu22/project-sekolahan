<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    @include('Template.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('Template.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('Template.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Data Sekolah</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Starter Page</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- /.col-md-6 -->
                        <div class="col-lg-6">
                            <div class="card card-primary card-outline">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="m-0">Data Guru</h5>
                                    </div>
                                    <div class="card-body">
                                        {{-- <h6 class="card-title">Special title treatment</h6> --}}

                                        <p class="card-text">Kamu Bisa Melihat Data Guru Disini.</p>
                                        <a href="{{route('data-guru')}}" class="btn btn-primary">Go Data Guru</a>
                                    </div>
                                </div>
                            </div>

                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h5 class="m-0">Data Jadwal</h5>
                                </div>
                                <div class="card-body">
                                    {{-- <h6 class="card-title">Special title treatment</h6> --}}

                                    <p class="card-text">Kamu Bisa Melihat Data Jadwal Disini.</p>
                                    <a href="{{route('data-jadwal')}}" class="btn btn-primary">Go Data Jadwal</a>
                                </div>
                            </div>

                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h5 class="m-0">Data Kelas</h5>
                                </div>
                                <div class="card-body">
                                    {{-- <h6 class="card-title">Special title treatment</h6> --}}

                                    <p class="card-text">Kamu Bisa Melihat Data Kelas Disini.</p>
                                    <a href="{{route('data-kelas')}}" class="btn btn-primary">Go Data Kelas</a>
                                </div>
                            </div>

                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h5 class="m-0">Data Mapel</h5>
                                </div>
                                <div class="card-body">
                                    {{-- <h6 class="card-title">Special title treatment</h6> --}}

                                    <p class="card-text">Kamu Bisa Melihat Data Kelas Disini.</p>
                                    <a href="{{route('data-kelas')}}" class="btn btn-primary">Go Data Mapel</a>
                                </div>
                            </div>

                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h5 class="m-0">Data Siswa</h5>
                                </div>
                                <div class="card-body">
                                    {{-- <h6 class="card-title">Special title treatment</h6> --}}

                                    <p class="card-text">Kamu Bisa Melihat Data Siswa Disini.</p>
                                    <a href="{{route('data-siswa')}}" class="btn btn-primary">Go Data Siswa</a>
                                </div>
                            </div>
                            
                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            @include('Template.footer')
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    @include('Template.script')


</html>