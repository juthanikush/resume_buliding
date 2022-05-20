<?php
require('top.php');
require('db.php');
$quer="SELECT * FROM `sing_up`";
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
                        <th><i class=""></i>Name</th>
                        <th><i class=""></i>Email</th>
                        <th><i class=""></i>Password</th>
                        
                     </tr>
                     <?php while($row=mysqli_fetch_assoc($res)){ ?>
                     <tr>
                        <td><?php echo $row['Name'];?></td>
                        <td><?php echo $em=$row['E_mail']; ?></td>
                        <td><?php echo $row['Password']; ?></td>
                        
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
