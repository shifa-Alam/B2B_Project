<?php
add_log('view/order/add.php');
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
                                    <h4 class="page-title">ADD Order </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">B2B</a>
                                        </li>
                                        <li>
                                            <a href="#"> Order </a>
                                        </li>
                                        <li class="active">
                                            Add  Order
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
                                                <form action="" method="post" data-parsley-validate novalidate>
                                                    <div class="form-group">
                                                        <label for="order-title">Select Order Id<span class="text-danger">*</span></label>
                                                         <select name="user_id" class="form-control">
                                                            <option>Select one</option>
                                                            <?php
                                                            if($get_cat){
                                                                while ($data = $get_cat->fetch_assoc()) {?>
                                                              
                                                            <option value="<?php echo $data['id'];?>"></option>
                                                            <?php

                                                                    }
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="product-title">Select Product Id<span class="text-danger">*</span></label>
                                                        <select name="shipping_method_id" class="form-control">
                                                            <option>Select one</option>
                                                            <?php
                                                            if($get_pet){
                                                                while ($data = $get_pet->fetch_assoc()) {?>
                                                              
                                                            <option value="<?php echo $data['id'];?>"><?php echo $data['name'];?></option>
                                                            <?php

                                                                    }
                                                                }
                                                            ?>
                                                        </select>
                                                            
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="product_amount-title">Product amount<span class="text-danger">*</span></label>
                                                        <input type="text" name="product_amount" parsley-trigger="change" required class="form-control" id="product_amount-title">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="total_price-title">Total price<span class="text-danger">*</span></label>
                                                        <input type="text" name="total_price" parsley-trigger="change" required class="form-control" id="total_price-title">
                                                    </div>
                                         
                                                    <div class="form-group text-right m-b-0">
                                                        <button class="btn btn-primary waves-effect waves-light" type="submit">
                                                            Add
                                                        </button>
                                                        <button type="reset" class="btn btn-default waves-effect m-l-5">
                                                            Cancel
                                                        </button>
                                                    </div>

                                                </form>
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
