
<div class="container-fluid">
        <!-- PAGE HEADER -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header primary"><i class="fas fa-scroll"></i> {{ pageHeader }} </h1>
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

