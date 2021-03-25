<?php include 'includes/fp-header.php' ?>

<!--start slideshow-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="js/jquery.blueberry.js"></script>

<script>
    $(window).load(function() {
        $('.blueberry').blueberry();
    });
</script>

<div id="wrapper">
    <div class="blueberry">
        <ul class="slides">
            <li><img src="images/naran.png" alt="image"></li>
            <li><img src="images/naran1.png" alt="images"></li>
            <li><img src="images/naran2.png" alt="images"></li>
        </ul>
    </div>
    <!-- end slideshow -->
    <br>
    <main>
        <h1>Smile With Confidence</h1>
        <div class="row">

            <div class="text">
                <h2> Welcome </h2>
                <img class="left" src="images/adult1.jpg" alt="adult">
                <p>Welcome to "Buren Dent" Dental Clinic in Ulaanbaatar!
                    Our team strives to provide the best service to each and every client.<br>
                    We always make sure that our clients are satisfied and happy every time they walk through our doors. Whether it’s a checkup or in need of corrective care, you can trust in us.<br>
                    Our goal is to make you shine your biggest and brightest smile!</p>

            </div>
            <!--end text-->


        </div>
        <!--end row-->


        <div class="row">

            <div class="text">
                <h2> Pediatric Dental At "Buren Dent" Dental Clinic</h2>
                <img class="left" src="images/kid1.jpg" alt="kid">
                <p>There’s nothing more important than your child’s health and wellbeing. At "Buren Dent" Dental Clinic, we care for your kids as if they were our own in our dedicated and separate kid-friendly zone. Our team always goes above and beyond to make sure every young patient’s visit is a positive experience that will set them up for a lifetime of optimal dental health.</p>

            </div>
            <!--end text-->
        </div>
        <!--end row-->

        <div class="text-2">
            <h2>Learn more about "Buren Dent"</h2>
            <p>No matter where you are in your dental health journey, "Buren Dent" wants to help with guidance and support. By offering an affordable new patient appointment, we hope you'll call us today and become a patient for life!</p>
        </div>

    </main>

    <aside>
        <img src="images/teeth.png" alt="teeth">
        <form action="formhandler1.php" method="post">
            <div class="signup">
                <h3>E-NEWSLETTER SIGNUP</h3>
                <p>SUBSCRIBE</p>
                <p>Subscribe to our newsletter for the latest news and services updates straight to your inbox.</p>
            </div>
            <div class="signup">
                <input type="text" placeholder="Email" name="mail">
                <input type="submit" value="Subscribe">

            </div>
        </form>
    </aside>

    <?php include 'includes/fp-footer.php' ?>

</div> <!-- end wrapper -->
</body>

</html>