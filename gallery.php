<?php include 'includes/fp-header.php' ?>
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }
</script>
<main>

    <h1> Dental Care Seattle Office </h1>
    <div class="container">
        <div class="mySlides">
            <div class="numbertext">1 / 6</div>
            <img src="images/office1.png" style="width:100%" alt="Office 1">
        </div>

        <div class="mySlides">
            <div class="numbertext">2 / 6</div>
            <img src="images/office2.png" style="width:100%" alt="Office 2">
        </div>

        <div class="mySlides">
            <div class="numbertext">3 / 6</div>
            <img src="images/office3.png" style="width:100%" alt="Office 3">
        </div>

        <div class="mySlides">
            <div class="numbertext">4 / 6</div>
            <img src="images/office4.png" style="width:100%" alt="Office 4">
        </div>

        <div class="mySlides">
            <div class="numbertext">5 / 6</div>
            <img src="images/office5.png" style="width:100%" alt="Office 5">
        </div>

        <div class="mySlides">
            <div class="numbertext">6 / 6</div>
            <img src="images/office6.png" style="width:100%" alt="Office 6">
        </div>
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

        <div class="caption-container">
            <p id="caption"></p>
        </div>

        <div class="row">
            <div class="column">
                <img class="demo cursor" src="images/office1.png" style="width:100%" onclick="currentSlide(1)" alt="Office 1">
            </div>
            <div class="column">
                <img class="demo cursor" src="images/office2.png" style="width:100%" onclick="currentSlide(2)" alt="Office 2">
            </div>
            <div class="column">
                <img class="demo cursor" src="images/office3.png" style="width:100%" onclick="currentSlide(3)" alt="Office 3">
            </div>
            <div class="column">
                <img class="demo cursor" src="images/office4.png" style="width:100%" onclick="currentSlide(4)" alt="Office 4">
            </div>
            <div class="column">
                <img class="demo cursor" src="images/office5.png" style="width:100%" onclick="currentSlide(5)" alt="Office 5">
            </div>
            <div class="column">
                <img class="demo cursor" src="images/office6.png" style="width:100%" onclick="currentSlide(6)" alt="Office 6">
            </div>
        </div>

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