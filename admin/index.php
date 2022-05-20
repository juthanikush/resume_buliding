<?php
require('top.php');
require('db.php');
$quer="SELECT * FROM `addtemp`";
$res=mysqli_query($db,$quer);


?>
<div class="row">
<section id="main-content">
   <section class="wrapper">
      <div class="row">
         <div class="col-lg-12">
           <a href="add_templat.php" class="btn btn-success btnclass">+Add Template</a>
          
         </div>
      </div>
      <!-- page start-->
      
     
      <div class="row">
         <div class="col-lg-12">
            <section class="panel">
               
               <table class="table table-striped table-advance table-hover">
                  <tbody>
                     <tr>
                        <th width="15%"> <i class=""></i>Name</th>
                        <th width="25%"><i class=""></i>Img</th>
                        <th width="20%"><i class=""></i>File</th>
                        
                     </tr>
                     <?php while($row=mysqli_fetch_assoc($res)){ 
                     	$file=$row['file'];
                     	$file=substr($file,13);?>
                     <tr>
                        <td><?php echo $row['title'];?></td>
                        <td><img src="<?php echo $em=$row['img']; ?>" height="150px" width="150px"></td>
                        <td><?php echo $file ?></td>
                        
                     </tr>
                     <?php } ?>
                  </tbody>
               </table>
            </section>
         </div>
      </div>
      <!-- page end-->
   </section>
</section>
<?php
require('footer.php');
?>
