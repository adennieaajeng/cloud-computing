<title>ADD POST</title>

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
                    <span>Add</span></a>
            </li>
            
        </ul>



<div class="container-fluid">
<div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-table"></i> Post Add</div>
                    <div class="card-body">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="?p=add" method="post">
                    <div class="form-group">
                        <label for="title">Title :</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Title">
                    </div>
     
                        <input type="hidden" name="sub_title" id="title" class="form-control" placeholder="Title">
                    
                    <div class="form-group">
                        <label for="content">Content :</label>
                        <textarea name="content" id="content" class="form-control" style="height:560px;"></textarea>
                    </div>
                    <script>CKEDITOR.replace( 'content' );</script>
                    <div class="form-group float-md-right">
                        <a href="<?php echo $dir;?>" style="text-decoration:none; color:#a2a2a2;" class="btn btn-link">Close</a>
                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                    </div>
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
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="?logout">Logout</a>
                </div>
            </div>
        </div>
    </div>