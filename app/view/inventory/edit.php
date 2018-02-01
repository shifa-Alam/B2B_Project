<?php
add_log('view/order/edit.php');
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
                    <h4 class="page-title">Edit Inventory </h4>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                            <a href="#">B2B</a>
                        </li>
                        <li>
                            <a href="#"> Order </a>
                        </li>
                        <li class="active">
                            Edit  Inventory
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
                                    if($get_inventory){
                                        while($inventory=$get_inventory->fetch_assoc()){?>

                                       
                                <form action="" method="post" data-parsley-validate novalidate>
                                    <input type="hidden" value="<?php echo $inventory['id'];?>" name="id">
                                    <div class="form-group">
                                        <label for="pro-title">Select Product<span class="text-danger">*</span></label>
                                            <select name="product_id" class="form-control">
                                                <option>Select one</option>
                                                <?php
                                                if($get_product){
                                                    while ($data = $get_product->fetch_assoc()) {?>
                                                  
                                                <option value="<?php echo $data['id'];?>"><?php echo $data['title'];?></option>
                                                <?php

                                                        }
                                                    }
                                                ?>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="order-title"> Select User<span class="text-danger">*</span></label>
                                     
                                        <select name="user_id" class="form-control">
                                            <option>Select one</option>
                                            <?php
                                            if($get_user){
                                                while ($User_data = $get_user->fetch_assoc()) {?>
                                              
                                            <option value="<?php echo $User_data['id'];?>"><?php echo $User_data['user_name'];?></option>
                                            <?php

                                                    }
                                                }
                                            ?>
                                        </select>
                                            
                                    </div>
                                    <div class="form-group">
                                        <label for="otitle"> Title<span class="text-danger">*</span></label>
                                        <input type="text" name="title" value="<?php echo $inventory['title'];?>" parsley-trigger="change" required class="form-control" id="title">
                                    </div>
                                    <div class="form-group">
                                        <label for="date"> Date<span class="text-danger">*</span></label>
                                        <input type="text" name="date" value="<?php echo $inventory['date'];?>" parsley-trigger="change" required class="form-control" id="date">
                                    </div>
                                    <div class="form-group">
                                        <label for="amount"> Amount<span class="text-danger">*</span></label>
                                        <input type="text" name="amount" value="<?php echo $inventory['amount'];?>" parsley-trigger="change" required  class="form-control" id="amount">
                                    </div>
                                    
                            
                                          
                                    <div class="form-group">
                                        <label for="description"> Description <span class="text-danger">*</span></label>
                                        <textarea name="description" class="form-control" ><?php echo $inventory['description'];?></textarea>
                                    </div>

                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">
                                            Update
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
