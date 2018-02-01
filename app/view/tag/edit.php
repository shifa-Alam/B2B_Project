<?php
add_log('view/category/edit.php');
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
                    <h4 class="page-title">Edit Tag </h4>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                            <a href="#">B2B</a>
                        </li>
                        <li>
                            <a href="#">Tag </a>
                        </li>
                        <li class="active">
                            Edit Tag
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
                                     if($getcat){
                                        while($result = $getcat->fetch_assoc()){ ?>
                                       
                                <form action="" method="post" data-parsley-validate novalidate>
                                    <input type='hidden' value='<?php echo $result['id'];?>' name='id'>
                                    <div class="form-group">
                                        <label for="Tag-title">Tag Name<span class="text-danger">*</span></label>
                                        <input type="text" name="title" parsley-trigger="change" required value="<?php echo $result['title'] ;?>" class="form-control" id="Tag-title">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="Tag-desc">Tag Description<span class="text-danger">*</span></label>
                                        <textarea name="description" class="form-control" required  id="Tag-desc"><?php echo $result['description'] ;?></textarea>
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
