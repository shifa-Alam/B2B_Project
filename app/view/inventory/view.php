<div class="content-page">
<!-- Start content -->
<div class="content">
    <div class="container">


        <div class="row">
			<div class="col-xs-12">
				<div class="page-title-box">
                    <h4 class="page-title">Inventory Table </h4>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                            <a href="#">B2B</a>
                        </li>
                        <li>
                            <a href="#">Tables </a>
                        </li>
                        <li class="active">
                            Inventory Table
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
										<th data-priority="3">Product id</th>
										<th data-priority="1">User id</th>
										<th data-priority="1">Title</th>
										<th data-priority="1">Date</th>
										<th data-priority="1">Amount</th>
										<th data-priority="1">Description</th>
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
										<td><?php echo $data['product_id'];?></td>
										<td><?php echo $data['user_id'];?></td>
										<td><?php echo $data['title'];?></td>
										<td><?php echo $data['date'];?></td>
										<td><?php echo $data['amount'];?></td>
										<td><?php echo $data['description'];?></td>
										
										<td>
											<a href="index.php?c=inventory&a=edit&<?php echo $data['id'];?>"><i class="fa fa-pencil-square-o fa-2x"></i></a>
											<!-- <a onclick="return confirm('Are you sure you want to delete this item?');" href="index.php?c=inventory&a=view&<?php echo $data['id'];?>"> <i class="fa fa-trash-o fa-2x"></i></a> -->
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
