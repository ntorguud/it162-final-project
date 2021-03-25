<?php include 'includes/fp-header.php' ?>

<main>
    <div class="row">

        <div class="text">
            <h1> Contact Us</h1>
            <p>Please contact our Dental Care Seattle if you have any questions or would like to schedule an appointment. We look forward to meeting you!

                We have a dentist available 24 hours a day, every day of the year for emergency situations. We feel it is important to contact a doctor when you have an emergency. When you call the office after hours, you will be instructed on what to do.</p>

        </div>
        <!--end text-->


    </div>
    <!--end row-->
    <form action="formhandler.php" method="post">
        <h2>REQUEST DENTAL APPOINTMENT</h2>
        <fieldset>
            <legend>INFORMATION</legend>
            <label>Name</label>
            <input type="text" placeholder="First & Last Name" name="Name">
            <label>Birthday</label>
            <input type="text" placeholder="mm/dd/yyyy" name="Birthday">
            <label>Email</label>
            <input type="email" placeholder="Email" name="Email">
            <label>Phone Number</label>
            <input type="number" placeholder="000-000-0000" name="Phone">
            <label>Address</label>
            <input type="text" placeholder="Street, Apt" name="Address">
            <label>City</label>
            <input type="text" placeholder="City" name="City">
            <label>State</label>
            <input type="text" placeholder="State" name="State">
            <label>Zip Code</label>
            <input type="number" placeholder="00000" name="ZipCode">
            <label>Gender</label>
            <ul>
                <li><input type="radio" name="gender" value="male">Male</li>
                <li><input type="radio" name="gender" value="female">Female</li>
                <li><input type="radio" name="gender" value="other">Other</li>
            </ul>

        </fieldset>

        <fieldset>
            <legend>Best Time To Call You:</legend>
            <ul>
                <li><input type="checkbox" name="time[]" value="morning">Morning</li>
                <li><input type="checkbox" name="time[]" value="afternoon">Afternoon</li>
                <li><input type="checkbox" name="time[]" value="evening">Evening</li>
            </ul>
        </fieldset>
        <fieldset>
            <legend>I Would Like To (Check One):</legend>
            <ul>
                <li><input type="radio" name="patient" value="new">A New Patient Appointment</li>
                <li><input type="radio" name="patient" value="checkup">A Routine Checkup</li>
                <li><input type="radio" name="patient" value="compre">A Comprehensive Dental Exam</li>
            </ul>

        </fieldset>
        <label>Comments</label>
        <textarea name="comments"></textarea>

        <input type="submit" value="Send Request!">

    </form>


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