
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script>
            function deleteConfirm() {
                if(confirm("Are you sure to delete?")) {
                    return true;
                }
                else {
                    return false;
                }
            }
        </script> 
        <?php
            include_once("connection.php");
            if(isset($_GET["function"])=="del") {
                if(isset($_GET['id'])) {
                    $id = $_GET['id'];
                    mysqli_query($conn, "DELETE FROM category WHERE Cat_ID='$id'");
                } 
            }
        ?>
            <form name="frm" method="post" action="">
            <h3 style="text-align: center">Category management</h3>
            <div style="padding: 0 6rem 0 6rem;">
            <p style="text-align: end">
            <img src="images/add.png" alt="Add new" width="16" height="16" border="0" />
            <a href="?page=add_category" style="color: black!important;"> Add</a>
            </p>
            <table id="tablecategory" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center;border: rgb(0, 123, 255) solid">
            <thead>
                <tr>
                    <th><strong>No.</strong></th>
                    <th><strong>Category Name</strong></th>
                     <th><strong>Description</strong></th>
                    <th><strong>Edit</strong></th>
                    <th><strong>Delete</strong></th>
                </tr>
             </thead>

            <tbody>
            <?php
                include_once("connection.php");
                $No=1;
                $result = mysqli_query($conn, "SELECT * FROM category");
                while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
                {
            ?>
            <tr>
              <td class="cotCheckBox"><?php echo $No; ?></td>
              <td><?php echo $row["Cat_Name"]; ?></td>
              <td><?php echo $row["Cat_Des"]; ?></td>
              <td style='text-align:center'> <a href="?page=update_category&&id=<?php echo $row["Cat_ID"]; ?>">
              <img src='images/edit.png' border='0' /></td>
              <td style='text-align:center'>
              <a href="?page=category_management&&function=del&&id=<?php echo $row["Cat_ID"]; ?>" onclick="return deleteConfirm()">
              <img src='images/delete.png' border='0' /></a></td>
            </tr>
            <?php
                $No++;
                }
            ?>
            </tbody>
        </table>
        </div>
        <!--New button Add, delete all-->
        <div class="row" style="background-color:#FFF"><!--Function button-->
            <div class="col-md-12">
                
            </div>
        </div><!--Function button-->
         </form>
 <?php
   /* }
    else
    {
        echo '<meta http-equiv="refresh" content="0;URL=Category_Management.php"/>';
    }*/
?>
