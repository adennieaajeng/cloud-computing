<title>Update | <?php echo $edit[0]['title'];?></title>
<?php
include 'navbar2.php';
?>
<!-- <?php var_dump($edit);?>    -->
<div class="container">
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
                        <label for="content">Content :</label>
                        <textarea name="content" id="content" class="form-control"><?php echo $x['content'];?></textarea>
                    </div>
                    <script>CKEDITOR.replace( 'content' );</script>
                    <div class="form-group float-md-right">
                        <a href="<?php echo $dir;?>" style="text-decoration:none; color:#a2a2a2;" class="btn btn-link">keluar</a>
                        <button type="submit" class="btn btn-outline-primary">klik</button>
                    </div>
                <?php }?>
            </form>
        </div>
    </div>
</div>