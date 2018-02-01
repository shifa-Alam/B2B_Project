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
                    <h4 class="page-title">Edit Order </h4>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                            <a href="#">B2B</a>
                        </li>
                        <li>
                            <a href="#"> Order </a>
                        </li>
                        <li class="active">
                            Edit  Order
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
                                    if($get_order){
                                        while($order=$get_order->fetch_assoc()){?>

                                       
                                <form action="" method="post" data-parsley-validate novalidate>
                                    <input type="hidden" value="<?php echo $order['id'];?>" name="id">
                                    <div class="form-group">
                                        <label for="order-title">Select User<span class="text-danger">*</span></label>
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
                                        <label for="order-title"> Shipping Method<span class="text-danger">*</span></label>
                                        <select name="shipping_method_id" class="form-control">
                                            <option>Select one</option>
                                            <?php
                                            if($get_shipment){
                                                while ($data = $get_shipment->fetch_assoc()) {?>
                                              
                                            <option value="<?php echo $data['id'];?>"><?php echo $data['name'];?></option>
                                            <?php

                                                    }
                                                }
                                            ?>
                                        </select>
                                            
                                    </div>
                                    <div class="form-group">
                                        <label for="order-title"> Total price<span class="text-danger">*</span></label>
                                        <input type="text" name="total_price" value="<?php echo $order['total_price'];?>" parsley-trigger="change" required class="form-control" id="order-title">
                                    </div>
                                    <div class="form-group">
                                        <label for="order-title"> Discount<span class="text-danger">*</span></label>
                                        <input type="text" name="discount" value="<?php echo $order['discount'];?>" parsley-trigger="change" required class="form-control" id="order-title">
                                    </div>
                                    <div class="form-group">
                                        <label for="order-title"> Product cart<span class="text-danger">*</span></label>
                                        <input type="text" name="product_cart" value="<?php echo $order['product_cart'];?>" parsley-trigger="change" required  class="form-control" id="order-title">
                                    </div>
                                    <div class="form-group">
                                        <label for="order-title"> Date<span class="text-danger">*</span></label>
                                        <input type="text" name="date" value="<?php echo $order['date'];?>" parsley-trigger="change" required  class="form-control" id="order-title">
                                    </div>
                            
                                          
                                    <div class="form-group">
                                        <label for="order-title"> comments <span class="text-danger">*</span></label>
                                        <textarea name="comments" class="form-control" ><?php echo $order['comments'];?></textarea>
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
