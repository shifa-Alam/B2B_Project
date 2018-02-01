
<!-- Site Content  -->
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<!-- Category Title -->
			<div class="productr-page-title">
				<h5>ALL PRODUCTS</h5>
				<span class="et-border"></span>
				<div class="col-md-12 col-sm-4" style="margin-top: -35px;">
					<!-- SECRCH FORM -->
				    <div class="header-search-form text-right">
				        <form>
				            <input type="text" placeholder="Search Product...">
				            <button type="submit" ><i class="fa fa-search"></i></button>
				        </form>
				    </div>
					<!-- SECRCH FORM -->
				</div>

			</div>
			<!-- Category Title -->

			
			
			
			<!-- FILTERS -->
			<div class="product-filter">
			
				<div class="grid-filter col-md-4 col-sm-4 col-xs-6">
					<a href="gird.html"><i class="fa fa-th-large"></i></a>
					<a class="active" href="#"><i class="fa fa-list"></i></a>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 byview">
					<em>View:</em>
					<div class="c-selectParent2">
						<select>
							<option>05</option>
							<option>09</option>
							<option>10</option>
							<option>15</option>
							<option>20</option>
							<option>50</option>
							<option>100</option>
						</select>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 sortby">
					<em>Sort by:</em> 
					<div class="c-selectParent1">
						<select>
							<option>Default</option>
							<option>Newest</option>
							<option>Price Low</option>
							<option>Price High</option>
						</select>
					</div>
				</div>
			</div>
			<!-- FILTERS -->
		
		
			<!-- Product List  -->
			<div class="product-list">
				<div class="row">
					<?php
						if($db_return){
							$i=1;
							foreach($db_return as $data){?>
							<div class="row">
								<div class="product-singleArea">
						
									<div class="col-md-8 col-sm-8">
										<div class="product-details-list">
											<h5 class="product-title"><a href="#"><?php echo $data['title'];?></a></h5>
											
											<div class="product-pd-list">
												<div class="product-price"><?php echo $data['price'];?></div>
												
											</div>
											<p><?php echo $data['description'];?></p>
											<div class="product-cart-area-list">
												<div class="btn-add-to-cart cart-btn"><a href="" onClick="B2B.add_to_cart(<?php echo $data['id']; ?>); return false;">ADD TO CART</a></div>
												
											</div>
											
										</div>
									</div>
								</div>				
							</div>
					<?php
							}
						}
					?>				
				</div>

				<!-- PRODUCT List -->
				<div class="row">
					<div class="col-md-12">
					<div class="product-page-nav">
						<div class="col-md-6 itemshow"><p>Showing 1 - 9 of 20 items</p></div>
						<div class="col-md-6 compare-btn">
							<a href="#">Compare (0)</a>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>