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
                                    <h4 class="page-title">ADD Inventory </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">B2B</a>
                                        </li>
                                        <li>
                                            <a href="#"> Inventory </a>
                                        </li>
                                        <li class="active">
                                            Add  Inventory
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
                                                        <label for="Inventory-title">Select product<span class="text-danger">*</span></label>
                                                         <select name="product_id" class="form-control">
                                                            <option>Select one</option>
                                                            <?php
                                                            if($get_product) {
                                                                while ($Product_data = $get_product->fetch_assoc()) {?>
                                                              
                                                            <option value="<?php echo $Product_data['id'];?>"><?php echo $Product_data['title'];?></option>
                                                            <?php

                                                                    }
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="order-title">Select user<span class="text-danger">*</span></label>
                                                        <select name="user_id" class="form-control">
                                                            <option>Select one</option>
                                                            <?php
                                                            if($get_user){
                                                                while ($data = $get_user->fetch_assoc()) {?>
                                                              
                                                            <option value="<?php echo $data['id'];?>"><?php echo $data['user_name'];?></option>
                                                            <?php

                                                                    }
                                                                }
                                                            ?>
                                                        </select>
                                                            
                                                    </div>
                                                     <div class="form-group">
                                                        <label for="inventory-title"> Inventory Title<span class="text-danger">*</span></label>
                                                        <input type="text" name="title" parsley-trigger="change" required  class="form-control" id="inventory-title">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inventory-title">Date<span class="text-danger">*</span></label>
                                                        <input type="text" name="date" parsley-trigger="change" required class="form-control" id="date-title">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="order-title"> Amount<span class="text-danger">*</span></label>
                                                        <input type="text" name="amount" parsley-trigger="change" required class="form-control" id="inventory-title">
                                                    </div>
                                                       
                                                    <div class="form-group">
                                                        <label for="inventory-title"> Description <span class="text-danger">*</span></label>
                                                        <textarea name="description" class="form-control" ></textarea>
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
