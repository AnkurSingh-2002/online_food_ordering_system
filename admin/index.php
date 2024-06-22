
<?php include('partials/menu.php'); ?> 
        <div class="main-content">
            <div class="wrapper">
                <h1>Administrator Dashboard</h1>
                <br><br>
                <?php 
                    if(isset($_SESSION['login']))
                    {
                        echo $_SESSION['login'];
                        unset($_SESSION['login']);
                    }
                ?>
                <br><br>

                <div class="col-4 text-center">

                    <?php  
                        $sql = "SELECT * FROM tbl_category"; 
                        $res = mysqli_query($conn, $sql); 
                        $count = mysqli_num_rows($res);
                    ?>

                    <h1><?php echo $count; ?></h1>
                    <br />
                    Food Categories
                </div>

                <div class="col-4 text-center">

                    <?php  
                        $sql2 = "SELECT * FROM tbl_food"; 
                        $res2 = mysqli_query($conn, $sql2); 
                        $count2 = mysqli_num_rows($res2);
                    ?>

                    <h1><?php echo $count2; ?></h1>
                    <br />
                    Foods
                </div>

                <div class="col-4 text-center">
                    
                    <?php  
                        $sql3 = "SELECT * FROM tbl_order"; 
                        $res3 = mysqli_query($conn, $sql3); 
                        $count3 = mysqli_num_rows($res3);
                    ?>

                    <h1><?php echo $count3; ?></h1>
                    <br />
                    Total Orders
                </div>

                <div class="col-4 text-center">
                    
                    <?php  
                        $sql4 = "SELECT SUM(total) AS Total FROM tbl_order WHERE status='Delivered'"; 
                        $res4 = mysqli_query($conn, $sql4); 
                        $row4 = mysqli_fetch_assoc($res4); 
                        $total_revenue = $row4['Total'];

                    ?>

                    <h1>₹<?php echo $total_revenue; ?></h1>
                    <br />
                    Revenue Generated
                </div>

                <div class="col-4 text-center">
                    
                    <?php  
                        $sql6 = "SELECT * FROM tbl_order WHERE status = 'Ordered'"; 
                        $res6 = mysqli_query($conn, $sql6); 
                        $count6 = mysqli_num_rows($res6);
                    ?>

                    <h1><?php echo $count6; ?></h1>
                    <br />
                    Pending Orders
                </div>

                <div class="col-4 text-center">
                    
                    <?php  
                        $sql7 = "SELECT * FROM tbl_order WHERE status = 'On Delivery'"; 
                        $res7 = mysqli_query($conn, $sql7); 
                        $count7 = mysqli_num_rows($res7);
                    ?>

                    <h1><?php echo $count7; ?></h1>
                    <br />
                    On Delivery Orders
                </div>


                <div class="col-4 text-center">
                    
                    <?php  
                        $sql7 = "SELECT * FROM tbl_order WHERE status = 'Cancelled'"; 
                        $res7 = mysqli_query($conn, $sql7); 
                        $count7 = mysqli_num_rows($res7);
                    ?>

                    <h1><?php echo $count7; ?></h1>
                    <br />
                    Cancelled Orders
                </div>


                <div class="col-4 text-center">
                    
                    <?php  
                        $sql8 = "SELECT * FROM tbl_admin"; 
                        $res8 = mysqli_query($conn, $sql8); 
                        $count8 = mysqli_num_rows($res8);
                    ?>

                    <h1><?php echo $count8; ?></h1>
                    <br />
                    System Administrator
                </div>

                <div class="clearfix"></div>

            </div>
        </div> 

<?php include('partials/footer.php') ?>