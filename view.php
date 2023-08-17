<?php include ('sess.php');?>
<?php include ('head.php');?>

<body>

    <div id="wrapper">

      
              <?php include ('view_banner.php');?>
        <!-- Page Content -->
          <!-- Navigation -->
        <div id="page-wrapper">

    <heading class="menue-select">
            <center>
                <select onchange = "page(this.value)">
                <option disabled selected>Select Candidate Group</option>
                <option value = "candidates/pres.php">President</option>
                <option value = "candidates/vp1.php">Vice President(Internal)</option>
                <option value = "candidates/vp2.php">Vice President(External)</option>
                <option value = "candidates/ss.php">Secretary</option>
                <option value = "candidates/tr.php">Treasurer</option>
                <option value = "candidates/aud.php">Audit</option>
                <option value = "candidates/pro.php">P.R.O.</option>
                <option value = "candidates/itp.php">BSIT Representative</option>
                <option value = "candidates/ledr.php">BTLED Representative</option>
                <option value = "candidates/eng.php">BSE-ENGLISH Representative</option>
                <option value = "candidates/beed.php">BE-ED Representative</option>
                </select>
            </center>

    </heading> 
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php    
        include ('footer.php');
        ?>

    <script>
    function page (src){
        window.location=src;
    }
    </script>

</body>

</html>

