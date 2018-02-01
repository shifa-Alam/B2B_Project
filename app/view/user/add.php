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
                                                <form action="" method="post" data-parsley-validate novalidate>
                                                    <div class="form-group">
                                                        <label for="user-title">User Name<span class="text-danger">*</span></label>
                                                        <input type="text" name="user_name" required parsley-trigger="change"  placeholder="Enter user name" class="form-control" id="user-title" autofocus>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="user-title">User Role<span class="text-danger">*</span></label>
                                                        <select class="form-control" name="user_role"  onchange ="showDiv(this)" required >
                                                        	<option value="-1">select one</option>
                                                        	<option value="1">Admin</option>
                                                        	<option value="2">User</option>
                                                        </select>
                                                    </div>

                                                   
                                                        <div class="form-group">
                                                            <label for="pro-price">Email <span class="text-danger">*</span></label>
                                                            <input type="text" name="email" required parsley-trigger="change"  placeholder="Enter email" class="form-control" id="pro-price" autofocus>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="password">Password <span class="text-danger">*</span></label>
                                                            <input type="password" name="password" required parsley-trigger="change"  class="form-control" id="password" autofocus>
                                                        </div>
                                                     <div id="hidden_div" style="display:none">
                                                    
                                                        <div class="form-group">
                                                            <label for="full_name">Full name<span class="text-danger">*</span></label>
                                                            <input type="text" name="full_name" required parsley-trigger="change"  placeholder="Enter the Full name " class="form-control" id="full_name" autofocus>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="company_name">Company  name<span class="text-danger">*</span></label>
                                                            <input type="text" name="company_name" required parsley-trigger="change"  placeholder="Company name" class="form-control" id="company_name" autofocus>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="address">Address<span class="text-danger">*</span></label>
                                                            <input type="text" name="address" required parsley-trigger="change"  placeholder="Company name" class="form-control" id="address" autofocus>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label for="contact_no">Contact_no<span class="text-danger">*</span></label>
                                                            <input type="text" name="contact_no" required parsley-trigger="change"  placeholder="Enter the Contact no" class="form-control" id="contact_no" autofocus>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="discount">Discount<span  class="text-danger">*</span></label>
                                                            <input type="text" name="discount" required parsley-trigger="change"  placeholder="" class="form-control" id="discount" autofocus>
                                                        </div>
                                                    </div>


                                                        <div class="form-group text-right m-b-0">
                                                            <button class="btn btn-primary waves-effect waves-light" type="submit">
                                                                Add User
                                                            </button>
                                                            <button type="reset" class="btn btn-default waves-effect m-l-5">
                                                                Cancel
                                                            </button>
                                                        </div>
                                                    
                                                    <script>
                                                        function showDiv(elem){
                                                           if(elem.value == 2)
                                                              document.getElementById('hidden_div').style.display = "block";
                                                          else{
                                                            document.getElementById('hidden_div').style.display="none";
                                                          }
                                                        }
                                                    </script>

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
