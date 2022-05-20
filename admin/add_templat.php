<?php
require('top.php');
require('db.php');
if(isset($_POST['save']))
{
   $name=$_POST['title'];
   //Img upload 
   echo $file_name = $_FILES['img']['name'];
   $file_type = $_FILES['img']['type'];
   $file_size = $_FILES['img']['size'];
   $file_tep_loca = $_FILES['img']['tmp_name'];
   $file_store="../temimg/".$file_name;
   move_uploaded_file($file_tep_loca, $file_store);
   //file upload
   $file_name1 = $_FILES['file']['name'];
   $file_type1 = $_FILES['file']['type'];
   $file_size1 = $_FILES['file']['size'];
   $file_tep_loca = $_FILES['file']['tmp_name'];
   $file_store1="../tampalate/".$file_name1;
   move_uploaded_file($file_tep_loca, $file_store1);
   echo $query="insert into addtemp (title,img,file) values('$name','$file_store','$file_store1')";

   mysqli_query($db,$query);
   ?>
   <script>
      window.location.href="index.php";
   </script>
   <?php
 




}

?>
<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            
            
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
              Add Template
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" enctype="multipart/form-data">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Title<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="title" minlength="5" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Img <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input  class="form-control " id="img" type="file" name="img" required />
                        
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">File</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="file" type="file" name="file" />
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit" name="save">Save</button>
                       
                      </div>
                    </div>
                  </form>
                </div>

              </div>
            </section>
          </div>
        </div>
        
        <!-- page end-->
      </section>
    </section>


<?php
require('footer.php');
?>
