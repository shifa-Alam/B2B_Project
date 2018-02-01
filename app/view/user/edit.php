<?php
add_log('view/user/add.php');
?>


<!-- Start right Content here -->
            <!-- ============================================================== -->
<div class="content-page">
<!-- Start content -->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-title-box">
                    <h4 class="page-title">ADD User </h4>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                            <a href="#">B2B</a>
                        </li>
                        <li>
                            <a href="#">User </a>
                        </li>
                        <li class="active">
                            Add User
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-xs-12">
                <div class="card-box">

                    <div class="row">
                        <div class="col-sm-12 col-xs-12 col-md-6">

                            <div class="p-20">
                                <?php
                                    if($getUser){
                                        while ($data=$getUser->fetch_assoc()) {?>
                    
                                            <form action="" method="post" data-parsley-validate novalidate>
                                                <input type='hidden' value='<?php echo $data['id'];?>' name='id'>
                                                <div class="form-group">
                                                    <label for="user-title">User Name<span class="text-danger">*</span></label>
                                                    <input type="text" value="<?php echo $data['user_name'];?>" name="user_name" parsley-trigger="change" required class="form-control" id="user-title">
                                                </div>
                                                <div class="form-group">
                                                    <label for="pro-price">Email <span class="text-danger">*</span></label>
                                                    <input type="text" name="email" value="<?php echo $data['email'];?>" parsley-trigger="change" required class="form-control" id="pro-price">
                                                </div>
                                        
                                                
                                                <div class="form-group">
                                                    <label for="full_name">Full name<span class="text-danger">*</span></label>
                                                    <input type="text" name="full_name" value="<?php echo $data['full_name'];?>" parsley-trigger="change" required  class="form-control" id="full_name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="company_name">Company  name<span class="text-danger">*</span></label>
                                                    <input type="text" name="company_name" value="<?php echo $data['company_name'];?>" parsley-trigger="change" required  class="form-control" id="company_name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="address">Address<span class="text-danger">*</span></label>
                                                    <input type="text" name="address" value="<?php echo $data['address'];?>" parsley-trigger="change" required class="form-control" id="address">
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="contact_no">Contact_no<span class="text-danger">*</span></label>
                                                    <input type="text" name="contact_no" value="<?php echo $data['contact_no'];?>" parsley-trigger="change" required  class="form-control" id="contact_no">
                                                </div>
                                                <div class="form-group">
                                                    <label for="discount">Discount<span class="text-danger">*</span></label>
                                                    <input type="text" name="discount" value="<?php echo $data['discount'];?>" parsley-trigger="change" required  class="form-control" id="discount">
                                                </div>


                                                <div class="form-group text-right m-b-0">
                                                    <button class="btn btn-primary waves-effect waves-light" type="submit">
                                                        Update User
                                                    </button>
                                                    
                                                </div>

                                            </form>
                                <?php

                                        }
                                    }
                                ?>
                            </div>

                        </div>

                
                    </div>
                    <!-- end row -->

                </div> <!-- end ard-box -->
            </div><!-- end col-->

        </div>
        <!-- end row -->


    </div> <!-- container -->

</div> <!-- content -->
