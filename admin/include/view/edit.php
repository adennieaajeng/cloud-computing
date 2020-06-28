<title>EDIT POST | <?php echo $edit[0]['title'];?></title>

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
                    <span>MENU UTAMA</span>
                </a>
            </li>


            <li class="nav-item <?php $data = ($_GET['v']=='add') ? 'active': ' ' ; echo $data;?>">
                <a class="nav-link" href="?v=add">
                    <i class="fa fa-fw fa-table"></i>
                    <span>TAMBAH</span></a>
            </li>
            
        </ul>



<div class="container-fluid">
<div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-table"></i> Tambah postingan</div>
                    <div class="card-body">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="?p=update" method="post">
            <?php foreach($edit as $x){?>
                    <input type="hidden" name="id" value="<?php echo $x['ID']; ?>">
                    <div class="form-group">
                        <label for="title">Title :</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Title" value="<?php echo $x['title']; ?>">
                    </div>
               
                        <input type="hidden" name="sub_title" id="sub_title" class="form-control" placeholder="Sub Title" value="<?php echo $x['sub_title']; ?>">
                
                    <div class="form-group">
                        <label for="content">kontenku :</label>
                        <textarea name="content" id="content" class="form-control"><?php echo $x['content'];?></textarea>
                    </div>
                    <script>editor.replace( 'content' );</script>
                    <div class="form-group float-md-right">
                        <a href="<?php echo $dir;?>" style="text-decoration:none; color:#a2a2a2;" class="btn btn-link">tutup</a>
                        <button type="submit" class="btn btn-outline-primary">KLIK SAJA</button>
                    </div>
                <?php }?>
            </form>
        </div>
    </div>
                    </div></div>
</div>
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
                <div class="modal-body">pilih keluar untuk melanjutkan .</div>
                <div class="modal-footer">
                    <button class="btn" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="?logout">keluar</a>
                </div>
            </div>
        </div>
    </div>