<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Product Table </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">B2B</a>
                                        </li>
                                        <li>
                                            <a href="#">Tables </a>
                                        </li>
                                        <li class="active">
                                            Product Table
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
														<th data-priority="3">Product Id</th>
														<th data-priority="1">Product Name</th>
														<th data-priority="1">Category id</th>
														<th data-priority="1">description</th>
														<th data-priority="1">price</th>
														<th data-priority="1">Sku</th>
														<th data-priority="1">Inventory</th>
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
																	<td><?php echo $data['title'];?></td>
																	<td><?php echo $data['category_id'];?></td>
																	<td><?php echo $data['description'];?></td>
																	<td><?php echo $data['price'];?></td>
																	<td><?php echo $data['sku'];?></td>
																	<td><?php echo $data['inventory'];?></td>
																	<td><a href="index.php?c=product&a=edit&<?php echo $data['id'];?>"><i class="fa fa-pencil-square-o fa-2x"></i></a> <a onclick="return confirm('Are you sure you want to delete this item?');" href="index.php?c=product&a=view&<?php echo $data['id'];?>"> <i class="fa fa-trash-o fa-2x"></i></a></td>
																	
																</tr>
													<?php
															}
														}
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
