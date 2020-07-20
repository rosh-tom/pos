 <div id="dashboard">

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ pageHeader }}</h1>
            </div>
        </div>
        <!-- /.row  -->

    </div>
    <!-- /.container-fluid  -->

</div>
<!-- /.dashboard  -->

<?php include 'links/footer.php'; ?>

<script>
    var products = new Vue({
        el: "#dashboard",
        data: {
            pageHeader: "Dashboard"
        },
        methods:{

        },
        created: function(){

        }
    })
</script>