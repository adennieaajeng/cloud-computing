<title>ADD POST</title>
<?php
include 'navbar2.php';
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="?p=add" method="post">
                    <div class="form-group">
                        <label for="title">Title :</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Title">
                    </div>
     
                        <input type="hidden" name="sub_title" id="title" class="form-control" placeholder="Title">
                    
                    <div class="form-group">
                        <label for="content">kontenku :</label>
                        <textarea name="content" id="content" class="form-control"></textarea>
                    </div>
                    <script>editor.replace( 'content' );</script>
                    <div class="form-group float-md-right">
                        <a href="<?php echo $dir;?>" style="text-decoration:none; color:#a2a2a2;" class="btn btn-link">keluar</a>
                        <button type="submit" class="btn btn-outline-primary">klik</button>
                    </div>
            </form>
        </div>
    </div>
</div>