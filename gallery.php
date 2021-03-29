<?php include 'includes/fp-header.php' ?>
<!--start slideshow-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="js/jquery.blueberry.js"></script>

<script>
    $(window).load(function() {
        $('.blueberry').blueberry();
    });
</script>

<body>
    <div id="wrapper">

        <main>

            <div class="blueberry">
                <ul class="slides">
                    <li><figure>
                        <img src="images/enerel-hall.jpeg" alt="group" height="400">
                        <figcaption><i>"Enerel Dent" Dental Clinic Hall during COVID 19</i></figcaption>
                    </figure></li>
                    <li><figure>
                        <img src="images/adult1.jpeg" alt="group" height="400">
                        <figcaption><i>Adult Room</i></figcaption>
                    </figure></li>
                    <li><figure>
                        <img src="images/enerel-ped1.jpeg" alt="group" height="400">
                        <figcaption><i>Pediatric Room</i></figcaption>
                    </figure></li>
                    <li><figure>
                        <img src="images/enerel-ped2.jpeg" alt="group" height="400">
                        <figcaption><i>Pediatric Room</i></figcaption>
                    </figure></li>
                    <li><figure>
                        <img src="images/enerel-recep.jpeg" alt="group" height="400">
                        <figcaption><i>"Enerel Dent" Dental Clinic Reception during COVID 19</i></figcaption>
                    </figure></li>
                </ul>
            </div>
            <!-- end slideshow -->
        </main>

        <?php include 'includes/fp-footer.php' ?>
    </div> <!-- end wrapper -->
</body>

</html>