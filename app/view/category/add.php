<?php
add_log('view/category/add.php');
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
                    <h4 class="page-title">ADD Category </h4>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                            <a href="#">B2B</a>
                        </li>
                        <li>
                            <a href="#">category </a>
                        </li>
                        <li class="active">
                            Add category
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
                                        <label for="cat-title">Category Name<span class="text-danger">*</span></label>
                                        <input type="text" name="title" parsley-trigger="change" required placeholder="Enter Category name" class="form-control" id="cat-title">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="pro-desc">Category Description<span class="text-danger">*</span></label>
                                        <textarea name="description" class="form-control"></textarea>
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
