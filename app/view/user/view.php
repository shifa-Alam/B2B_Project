<div class="content-page">
<!-- Start content -->
<div class="content">
    <div class="container">


        <div class="row">
			<div class="col-xs-12">
				<div class="page-title-box">
                    <h4 class="page-title">User Table </h4>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                            <a href="#">B2B</a>
                        </li>
                        <li>
                            <a href="#">Tables </a>
                        </li>
                        <li class="active">
                            User Table
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
			</div>
		</div>
        <!-- end row -->


        <div class="row">
			<div class="col-sm-12">
				<div class="card-box">

					<div class="table-rep-plugin">
						<div class="table-responsive" data-pattern="priority-columns">
							<table id="tech-companies-1" class="table  table-striped">
								<thead>
									<tr>
									
										<th data-priority="1">Serial No</th>
										<th data-priority="1">User Id</th>
										<th data-priority="3">User role</th>
										<th data-priority="1">User_name</th>
										<th data-priority="1">Email</th>
										<!-- <th data-priority="1">Full name</th> -->
										<th data-priority="1">Company name</th>
										<th data-priority="1">Address</th>
										<th data-priority="1">Contact no</th>
										<!-- <th data-priority="1">Discount </th> -->

										<th data-priority="3">Action</th>
										
									</tr>
								</thead>
								<tbody>
									<?php
										if($db_return){
											$i=1;
											while($data=$db_return->fetch_assoc()){?>
									<tr>
										<td><?php echo $i++ ; ?></td>
										<td><?php echo $data['id'];?></td>
										<td><?php echo $data['user_role'];?></td>
										<td><?php echo $data['user_name'];?></td>
										<td><?php echo $data['email'];?></td>
										
										<td><?php echo $data['company_name'];?></td>
										<td><?php echo $data['address'];?></td>
										<td><?php echo $data['contact_no'];?></td>
										
										<td>
											<a href="index.php?c=user&a=edit&<?php echo $data['id'];?>"><i class="fa fa-pencil-square-o fa-2x"></i></a>
											 <form class='form-delete' action='' method="post" >
												<input type="hidden" name="id" value='<?php echo $data['id'];?>'>
												<button class='btn-delete' type="submit" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash-o fa-2x"></i></button>
											</form>
										</td>
										
									</tr>
									<?php
								} }
									?>
											
								</tbody>
							</table>
						</div>

					</div>

				</div>
			</div>
		</div>
		<!-- end row -->



    </div> <!-- container -->

</div> <!-- content -->
</div>
