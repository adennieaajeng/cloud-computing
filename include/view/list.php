<?php
include 'navbar2.php';
?>
<title>LIST </title>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">

    <table class="table table-light">
        <thead class="table-bordered">
            <tr>
                <!-- <th>No</th> -->
                <th>Judul</th>
                <!-- <th>Content</th> -->
                <th>Tanggal release</th>
                <th>pengaturan</th>
            </tr>
            <?php
        // $no=1;
        foreach ($db->show() as $x) {
            ?>
                </thead>
                <tbody class="table-bordered">
                    <tr>
                        <!-- <td scope="row"><?php echo $x['ID'];?></td> -->
                        <td scope="row"><?php echo $x['title'];?></td>
                        <!-- <td><?php echo $x['content'];?></td> -->
                        <td><?php echo $x['post_date'];?></td>
                        <td>
                            <a href="?id=<?php echo $x['ID'];?>&view=edit" class="btn btn-outline-info"role="button">Edit</a>
                            <a name="delete" id="" class="btn btn-outline-danger" href="?id=<?php echo $x['ID'];?>&p=del" role="button">Delete</a>
                    </td>
                </tr>
                <tr>
                    </tr>
                </tbody>
                <?php
        }
        ?>          
                </table>
                <div class="float-md-right">
                    <a href="<?php echo $dir;?>" style="text-decoration:none; color:#a2a2a2;" class="btn btn-link">Close</a>
                    <a href="?view=add" class="btn btn-primary">ADD</a>
                </div>

            </div>
        </div>
    </div>