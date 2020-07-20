<!DOCTYPE html>
<html lang="en">
<head> 
    <?php include 'links/head.php'; ?> 
    <link rel="stylesheet" href="../assets/css/classic-style.css">         
    <title>Tomas - Products</title> 
</head>
<body> 
    <div id="wrapper">   
        <div id="page-wrapper">
            <div id="products">
                <?php 
                    include 'layouts/navigation.php';               
                    include 'modals/products.php';  
                    include 'content/products.php'; 
                 ?>
            </div>
            <!-- /#products  -->
        </div>
        <!-- /#page-wrapper -->
    </div>
</body>
</html>

<?php include 'links/footer.php'; ?>
<?php include 'scripts/products.php'; ?>



    


 

  