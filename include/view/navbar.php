
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
    <a class="navbar-brand" href="<?php echo $dir;?>">blog kami</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
             
                <?php if(isset($_SESSION['username'])){?>
                    <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MENU</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="admin">ADMIN</a>
                    <a class="dropdown-item" href="?view=list">catatan</a>
                    <a class="dropdown-item" href="?view=add">TAMBAH</a>
                    <a class="dropdown-item" href="?p=logout">LOGOUT</a>
                </div>
                    </li>
                <?php }else{?>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $dir.'admin';?>">LOGIN</a>
                </li> <?php }?>
                </ul>

            </div>
        </div>
    </nav>
