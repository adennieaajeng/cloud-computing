<?php if(isset($_SESSION['username'])){?>
<title>Blogs | Dasboard</title>

<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand mr-1" href="<?php echo $dir;?>">Ajeng news web</a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fa fa-bars"></i>
        </button>



        <!-- Navbar -->
        <ul class="navbar-nav ml-auto mr-0 mr-md-4">

            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user-circle fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="?add=user">Tambah User</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                </div>
            </li>
        </ul>

    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <li class="nav-item <?php $data = (!isset($_GET['v'])) ? 'active': ' ' ; echo $data;?>">
                <a class="nav-link" href="<?= $dir; ?>">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span>Ajeng news web</span>
                </a>
            </li>


            <li class="nav-item <?php $data = ($_GET['v']=='add') ? 'active': ' ' ; echo $data;?>">
                <a class="nav-link" href="?v=add">
                    <i class="fa fa-fw fa-table"></i>
                    <span>Tambah Berita</span></a>
            </li>
            
        </ul>

        <div id="content-wrapper">

            <div class="container-fluid">

                <!-- Breadcrumbs-->


                <!-- Icon Cards-->


                <!-- Area Chart Example-->


                <!-- DataTables Example -->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-table"></i> data berita</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Judul</th>
                                        <th>Tanggal upload</th>
                                        <th>pengaturan</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php foreach($show as $x){ ?>
                                    <tr>
                                        <td><?= substr($x['title'],0,20)."...";?></td>
                                        <td><?= $x['post_date']?></td>
                                        <td>
                                            <a href="?id=<?php echo $x['ID'];?>&v=edit" class="btn btn-outline-info"
                                                role="button">Edit</a>
                                            <a name="delete" id="" class="btn btn-outline-danger"
                                                href="?id=<?php echo $x['ID'];?>&p=del" role="button">Delete</a></td>
                                    </tr>
                                    <?php }?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © Ajeng web portal 2020</span>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">pilih keluar data</div>
                <div class="modal-footer">
                    <button class="btn" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="http://localhost/webku/">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <?php }else{header('location:'.$dir);} ?>