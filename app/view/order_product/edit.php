<?php
add_log('view/product/add.php');
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
                                    <h4 class="page-title">Edit Product </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">B2B</a>
                                        </li>
                                        <li>
                                            <a href="#">Product </a>
                                        </li>
                                        <li class="active">
                                            Edit Product
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
                                                    if($getProduct){
                                                        while($data = $getProduct->fetch_assoc()){?>

                                                            <form action="" method="post" data-parsley-validate novalidate>
                                                                <input type="hidden" value="<?php echo $data['id'];?>" name="id">
                                                                <div class="form-group">
                                                                    <label for="pro-title">Product Name<span class="text-danger">*</span></label>
                                                                    <input type="text" name="title" parsley-trigger="change" required value="<?php echo $data['title'];?>" class="form-control" id="pro-title">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="pro-title"> Select Category<span class="text-danger">*</span></label>
                                                                    
                                                                   <select id="select" name="category_id" value="<?php echo $data['category_id'];?>"  class="form-control">
                                                                     <option>Select one</option> 
                                                                    <?php if ($getcat) {
                                                                    while ($result=$getcat->fetch_assoc()){  ?>

                                                                    <option value="<?php echo $result['id'];?>"><?php echo $result['title'];?></option>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                    
                                                                </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="pro-desc">Product Description<span class="text-danger">*</span></label>
                                                                    <textarea name="description" value="" class="form-control"><?php echo $data['description'];?></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="pro-price">Product Price<span class="text-danger">*</span></label>
                                                                    <input type="text" name="price" parsley-trigger="change" required value="<?php echo $data['price'];?>" class="form-control" id="pro-price">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="pro-sku">Product Sku<span class="text-danger">*</span></label>
                                                                    <input type="text" name="sku" parsley-trigger="change" required value="<?php echo $data['sku'];?>" class="form-control" id="pro-sku">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="pro-inventory">Product Inventory<span class="text-danger">*</span></label>
                                                                    <input type="text" name="inventory" parsley-trigger="change" required value="<?php echo $data['inventory'];?>" class="form-control" id="pro-inventory">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="pro-image">Product image</label>
                                                                    <input type="file" name="image"  class="form-control" value="<?php echo $data['image'];?>" id="pro-image">
                                                                </div>
                                                                

                                                                <div class="form-group text-right m-b-0">
                                                                    <button class="btn btn-primary waves-effect waves-light" type="submit">
                                                                        Update Product
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
