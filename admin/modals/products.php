  <!-- ================================================ mdl_addProduct =======================================================  -->
<div v-if="mdl_addProduct"> 
	<div class="modal-mask">
		<div class="modal-wrapper">	
			<div class="modal-dialog"> 
				<div class="modal-content">

					<div class="modal-header">
						<button type="button" class="close" @click="mdl_addProduct=false"> &times;</button>
						<h3 class="modal-title primary"><i class="fas fa-plus-circle"></i> Add New Product</h3>
					</div>
					<!-- /.modal-header  -->
					<div class="modal-body">

						<div class="row">
							<div class="col-sm-6 mt-10">
								<label>Barcode: </label>
								<input type="text" class="form-control">						 								 
							</div>	
												
						</div>					
						<!-- /.row   -->

						<div class="row">
							<div class="col-sm-6 mt-10">
								<label for="">Supplier Name: </label>
								<div class="form-group input-group">								 
									<select class="form-control">								 
										<option value="">fsdfsdfs</option>
									</select>														
									<span class="input-group-btn">
										<button class="btn btn-default" type="button"><i class="fa fa-plus"></i>
										</button>
									</span>	
								</div>
							</div>	
							<div class="col-sm-6 mt-10">
  								<label for="">Category: </label>
  								<div class="form-group input-group">								 
									<select class="form-control">								 
  										<option :value="row.id" v-for="row in categoryList">{{ row.product_category }}</option>
									</select>														
									<span class="input-group-btn">
										<button class="btn btn-default" type="button" @click="open_mdl_category"><i class="fa fa-plus"></i>
										</button>
									</span>	
								</div>						 			
							</div>
						</div>
						<!-- /.row  -->

						<div class="row">
  							<div class="col-sm-12 mt-10">
  								<label for="">Product Name: </label>
								<input type="text" class="form-control">
							</div>
							<div class="col-sm-12 mt-10">
								<label>Description: </label>
								<textarea class="form-control" name="" id="" ></textarea>						 
							</div>
						</div>
						<!-- /.row  -->

						<div class="row">
							<div class="col-sm-4 mt-10">
								<label>Original Price: </label>
									<div class="form-group input-group">
										<span class="input-group-addon">₱</span>
										<input type="text" class="form-control">
										<span class="input-group-addon">.00</span>
									</div>						 
							</div>
							<div class="col-sm-4 mt-10">
								<label>Selling Price: </label>
									<div class="form-group input-group">
										<span class="input-group-addon">₱</span>
										<input type="text" class="form-control">
										<span class="input-group-addon">.00</span>
									</div>						 
							</div>
							<div class="col-sm-4 mt-10">
								<label>Quantity: </label>
									<input type="text" class="form-control">						 
								</div>
						</div>
						<!-- /.row -->

					</div>
					<!-- /.modal-body  -->
					<div class="modal-footer">
						<button type="button" class="btn btn-primary">Add Product</button>
					</div>
					<!-- /.modal-footer  -->
				</div>
				<!-- /.modal-content  -->
			</div>
			<!-- /.modal-dialog  -->
		</div>
		<!-- /.modal-wrapper  -->
	</div>
	<!-- /.modal-mask  -->
</div>

<!-- ================================================ mdl_category =======================================================  -->
<div v-if="mdl_category"> 
	<div class="modal-mask">
		<div class="modal-wrapper">	
			<div class="modal-dialog"> 
				<div class="modal-content">

					<div class="modal-header">
						<button type="button" class="close" @click="close_mdl_category"> &times;</button>
						<h3 class="modal-title primary"><i class="fas fa-layer-group"></i> Product Category</h3>
					</div>
					<!-- /.modal-header  -->
					<div class="modal-body">

						<div class="row">
							<div class="col-sm-12">
								<div class="alert alert-success alert-dismissible pt-5 pb-5" role="alert" v-if="cat_successAlert">
									<button type="button" class="close" @click="cat_successAlert=false"><span aria-hidden="true">&times;</span></button>
								{{ cat_message }}
								</div>
								<div class="alert alert-danger alert-dismissible pt-5 pb-5" role="alert" v-if="cat_dangerAlert">
									<button type="button" class="close" @click="close_cat_dangerAlert"><span aria-hidden="true">&times;</span></button>
								{{ cat_message }}
								</div>								
							</div>

							<div class="col-sm-12">
								<label>Add New Category: </label>
								<div class="form-group input-group">
									<input type="text" class="form-control" v-model="txtbx_addCategory" v-on:keyup.enter="add_category">
									<span class="input-group-btn">
										<button class="btn btn-primary" @click="add_category"><i class="fa fa-plus"></i> Add </button>
									</span>
                            	</div>	
							</div>
						</div>
						<!-- /.row   -->
  						<hr class="mt-10">
						<div class="row"> 	
							<div class="col-lg-6">
								<div class="input-group custom-search-form">
									<input type="text" class="form-control" placeholder="Search...">
										<span class="input-group-btn">
											<button class="btn btn-primary" type="button">
												<i class="fa fa-search"></i>
											</button>
										</span>
								</div>
							</div>					
							<div class="col-sm-12 mt-10">						
								<div class="table-responsive table-bordered height-200">
									<table class="table">
										<thead>
											<tr>                                                    
												<th>Product Category Name</th> 
												<th>Action</th>                                                    
											</tr>
										</thead>
										<tbody>  
											<tr v-for="row in categoryList">                                                    
												<td>{{ row.product_category }}</td> 
												<th><button type="button" class="btn btn-danger btn-xs" @click="del_category(row.id)">DELETE</button></th>                                                    
											</tr>                                      
										</tbody>
									</table>
								</div>										
							</div>	
						</div>
					<!-- /.row -->

					</div>
					<!-- /.modal-body  -->
				</div>
				<!-- /.modal-content  -->
			</div>
			<!-- /.modal-dialog  -->
		</div>
		<!-- /.modal-wrapper  -->
	</div>
	<!-- /.modal-mask  -->
</div>

 <!-- ================================================ mdl_supplier =======================================================  -->
 <div v-if="mdl_supplier">
 	<div class="modal-mask">
		<div class="modal-wrapper">	
			<div class="modal-dialog"> 
				<div class="modal-content">

					<div class="modal-header">
						<button type="button" class="close" @click="mdl_supplier=false"> &times;</button>
						<h3 class="modal-title primary">Supplier</h3>
					</div>
					<!-- /.modal-header  -->
					<div class="modal-body">

						<div class="row">
							<div class="col-sm-12">
								<label>Add New Supplier: </label>
								<div class="form-group input-group">
									<input type="text" class="form-control">
									<span class="input-group-btn">
										<button class="btn btn-primary"><i class="fa fa-plus"></i> Add </button>
									</span>
                            	</div>	
							</div>
						</div>
						<!-- /.row   -->
						<hr class="mt-10">				
  						 					 
						<div class="row"> 	
							<div class="col-lg-6">
								<div class="input-group custom-search-form">
									<input type="text" class="form-control" placeholder="Search...">
										<span class="input-group-btn">
											<button class="btn btn-primary" type="button">
												<i class="fa fa-search"></i>
											</button>
										</span>
								</div>
							</div>					
							<div class="col-sm-12 mt-10">						
								<div class="table-responsive table-bordered height-200">
									<table class="table">
										<thead>
											<tr>                                                    
												<th>Supplier Name</th> 
												<th>Action</th>                                                    
											</tr>
										</thead>
										<tbody>                                                
											<tr>                                                    
												<td>fdsfsd</td> 
												<th><button type="button" class="btn btn-danger btn-xs">DELETE</button></th>                                                    
											</tr>  
											<tr>                                                    
												<td>fdsfsd</td> 
												<th><button type="button" class="btn btn-danger btn-xs">DELETE</button></th>                                                    
											</tr>      
											<tr>                                                    
												<td>fdsfsd</td> 
												<th><button type="button" class="btn btn-danger btn-xs">DELETE</button></th>                                                    
											</tr>  
											<tr>                                                    
												<td>fdsfsd</td> 
												<th><button type="button" class="btn btn-danger btn-xs">DELETE</button></th>                                                    
											</tr>       
											<tr>                                                    
												<td>fdsfsd</td> 
												<th><button type="button" class="btn btn-danger btn-xs">DELETE</button></th>                                                    
											</tr>  
											<tr>                                                    
												<td>fdsfsd</td> 
												<th><button type="button" class="btn btn-danger btn-xs">DELETE</button></th>                                                    
											</tr>      
											<tr>                                                    
												<td>fdsfsd</td> 
												<th><button type="button" class="btn btn-danger btn-xs">DELETE</button></th>                                                    
											</tr>  
											<tr>                                                    
												<td>fdsfsd</td> 
												<th><button type="button" class="btn btn-danger btn-xs">DELETE</button></th>                                                    
											</tr>                                      
										</tbody>
									</table>
								</div>										
							</div>	
						</div>
						<!-- /.row -->
						

					</div>
					<!-- /.modal-body  -->
				</div>
				<!-- /.modal-content  -->
			</div>
			<!-- /.modal-dialog  -->
		</div>
		<!-- /.modal-wrapper  -->
	</div>
	<!-- /.modal-mask  -->
 </div>