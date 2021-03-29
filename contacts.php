<?php include 'includes/fp-header.php' ?>

<body>
    <div id="wrapper">

        <!-- END HTML FORM -->

        <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here

        $toAddress = "jenny.oyuka@gmail.com";  //place your/your client's email address here
        $toName = "Enkhzul Jargalsaikhan"; //place your client's name here
        $website = "enereldent.live";  //place NAME of your client's website

        echo loadContact('fp-multiple.php');

        include 'includes/fp-footer.php' ?>

    </div> <!-- end wrapper -->
</body>

</html>