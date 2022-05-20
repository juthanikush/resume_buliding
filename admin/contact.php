<?php
require('top.php');
require('db.php');
$quer="select * from contact_us";
$res=mysqli_query($db,$quer);


?>
<div class="row">
<section id="main-content">
   <section class="wrapper">
      <div class="row">
         <div class="col-lg-12">
            
          
         </div>
      </div>
      <!-- page start-->
      
     
      <div class="row">
         <div class="col-lg-12">
            <section class="panel">
               
               <table class="table table-striped table-advance table-hover">
                  <tbody>
                     <tr>
                        <th><i class=""></i> Full Name</th>
                        <th><i class=""></i> Email</th>
                        <th><i class=""></i>Mobile</th>
                        <th><i class=""></i> Message</th>
                        <th><i class=""></i> Action</th>
                     </tr>
                     <?php while($row=mysqli_fetch_assoc($res)){ ?>
                     <tr>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $em=$row['email']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['mess']; ?></td>
                        <td>
                           <div class="btn-group">
                              <a href='delete.php?id=".<?php echo $row['id'] ?>."'>Delete</a>
                           </div>
                        </td>
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
