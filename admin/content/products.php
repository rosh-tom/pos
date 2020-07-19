 <div id="products">
<?php include 'modals/products.php'; ?> 

    <div class="container-fluid">
        <!-- PAGE HEADER -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ pageHeader }}</h1>
            </div>                     
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-6 mt-10">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                </div>
            </div>
            <div class="col-lg-6 mt-10">
                <button type="button" class="btn btn-primary" @click="open_mdl_addProduct"> Add Product </button>
                <button type="button" class="btn btn-primary ml-10" @click="open_mdl_category"> Category </button>
                <button type="button" class="btn btn-primary ml-10" @click="open_mdl_supplier"> Supplier </button>
            </div>
        </div>
        <!-- /.row -->
        <br>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>                                                   
                        </tbody>
                    </table>
                </div>
            </div> 
        </div>  
        <!-- /.row       -->
    </div> 
    <!-- /.container-fluid --> 
</div>
<!-- /#products  -->

<?php include 'links/footer.php'; ?>
<script src="../node_modules/axios/dist/axios.min.js"></script>

<script>
    var products = new Vue({
        el: "#products",
        data: {
            pageHeader: "Products",
            categoryList: '',
            mdl_category: false,
            mdl_addProduct: false,
            mdl_supplier: false
        },
        methods:{
            fetchAllCategory: function(){
                axios.post('actions/products.php', {
                    action: 'fetchAllCategory'
                }).then(function(response){
                    products.categoryList = response.data;
                });
            },
            open_mdl_category: function(){
                products.mdl_category = true;
            },
            open_mdl_addProduct: function(){
                products.mdl_addProduct = true;
            },
            open_mdl_supplier: function(){
                products.mdl_supplier = true;
            }

        },
        created: function(){
            this.fetchAllCategory();
        }
    })
</script>