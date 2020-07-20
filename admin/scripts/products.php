<script>
    var products = new Vue({
        el: "#products",
        data: {
            pageHeader: "Products",
            categoryList: '',
            txtbx_addCategory: '',
            mdl_category: false,
            mdl_addProduct: false,
            mdl_supplier: false, 
            cat_successAlert: false,
            cat_dangerAlert: false        
        },
        methods:{
            // FETCH 
            fetchAllCategory: function(){
                axios.post('actions/products.php', {
                    action: 'fetchAllCategory'
                }).then(function(response){
                    products.categoryList = response.data;
                });
            },
            // ADD 
            add_category: function(){
                if(products.txtbx_addCategory == ''){
                    products.cat_successAlert = false;
                    products.cat_message = "Empty Fields!";
                    products.cat_dangerAlert = true;                  
                    
                }else{
                    axios.post('actions/products.php', {
                        action: 'addCategory',
                        txtbx_addCategory: products.txtbx_addCategory
                    }).then(function(response){
                        if(response.data.alert == 'success'){
                            products.cat_successAlert = true;                    
                            products.cat_dangerAlert = false;  
                            products.txtbx_addCategory = ''; 
                            products.cat_message = response.data.message
                            products.fetchAllCategory();                            
                        }else{
                            products.cat_successAlert = false;                    
                            products.cat_dangerAlert = true;  
                            products.txtbx_addCategory = ''; 
                            products.cat_message = response.data.message
                        }
                    });
                    
                }
            },            
            // DELETE 
            del_category: function(id){
                if(confirm('Are you sure you want to delete this category?')){
                    axios.post('actions/products.php', {
                        action: 'del_category',
                        id: id
                    }).then(function(response){
                        if(response.data.alert == 'success'){
                            products.cat_successAlert = true;                    
                            products.cat_dangerAlert = false;  
                            products.txtbx_addCategory = ''; 
                            products.cat_message = response.data.message
                            products.fetchAllCategory();
                        }else{
                            products.cat_successAlert = false;                    
                            products.cat_dangerAlert = true;  
                            products.txtbx_addCategory = ''; 
                            products.cat_message = response.data.message
                        }
                    });
                }
            },
            // OPEN 
            open_mdl_category: function(){
                products.mdl_category = true;                 
            },
            open_mdl_addProduct: function(){
                products.mdl_addProduct = true;
            },
            open_mdl_supplier: function(){
                products.mdl_supplier = true;
            }, 
            // CLOSE            
            close_mdl_category: function(){
                products.mdl_category = false;  
                products.cat_dangerAlert = false;
                products.cat_successAlert = false;
                products.cat_message = ''; 
                products.txtbx_addCategory = '';                
            },
            close_cat_dangerAlert: function(){
                products.cat_dangerAlert = false;
                products.cat_successAlert = false;
                products.cat_message = '';

            }

        },
        created: function(){
            this.fetchAllCategory();
        }
    })
</script>