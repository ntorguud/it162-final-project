<?php

/**
 * multiple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * multiple.php provides a larger form with more elements to provide 
 * a richer example form.
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>

<!-- START HTML FORM -->

    <main>
        <form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">

            <fieldset>
                <legend>Join "Enerel Dent" Dental Clinic</legend>
                <label>First Name</label>
                <input type="text" name="name">

                <label>Last Name</label>
                <input type="text" name="name">

                <label>Enter your birthday:
                    <input type="date" name="bday"></label>

                <label>Gender /optional/</label>
                <select name="gender">
                    <option value="gender">Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>

                <label>Age</label>
                <input type="number" name="age">

                <label>Email</label>
                <input type="email" name="email">

                <label>Phone Number</label>
                <input type="number" name="number">

                <label>Home Address/optional/</label>
                <input type="text" name="text">

                <label>District</label>
                <select name="district">
                    <option value="district">Choose your district</option>
                    <option value="baganuur">Baganuur</option>
                    <option value="bagakhangai">Bagakhangai</option>
                    <option value="bayangol">Bayangol</option>
                    <option value="bayanzurkh">Bayanzurkh</option>
                    <option value="chingeltei">Chingeltei</option>
                    <option value="khanuul">Khan-Uul</option>
                    <option value="nalaikh">Nalaikh</option>
                    <option value="songinokhairkhan">Songinokhairkhan</option>
                    <option value="sukhbaatar">Sukhbaatar</option>
                    <option value="none">None of above</option>
                </select>

                <label>City</label>
                <input type="text" name="text">

                <label>Where did you hear about us?</label>
                <ul>
                    <li><input type="checkbox" name="where[]" value="friend">A friend or colleague</li>
                    <li><input type="checkbox" name="where[]" value="google">A Recommendation of Family Doctor</li>
                    <li><input type="checkbox" name="where[]" value="blogspot">An Advertisement</li>
                    <li><input type="checkbox" name="where[]" value="article">Internet or Medical Journals</li>
                </ul> [] is for checking several things

                <input type="submit" value="Join now !">
            </fieldset>
            <br>

            <fieldset>
                <legend>Make an Appointment</legend>
                <label>What service are you looking for?</label>
                <ul>
                    <li><input type="checkbox" name="what[]" value="exams">Complete Exams</li>
                    <li><input type="checkbox" name="what[]" value="xray">X-Ray</li>
                    <li><input type="checkbox" name="what[]" value="cleanings">Dental Cleanings</li>
                    <li><input type="checkbox" name="what[]" value="fillings">Fillings</li>
                    <li><input type="checkbox" name="what[]" value="rootcanals">Root Canals</li>
                    <li><input type="checkbox" name="what[]" value="extractions">Extractions</li>
                    <li><input type="checkbox" name="what[]" value="implants">Implants</li>
                    <li><input type="checkbox" name="what[]" value="crowns">Crowns</li>
                    <li><input type="checkbox" name="what[]" value="bridge">Bridge</li>
                    <li><input type="checkbox" name="what[]" value="dentures">Full/Partial Dentures</li>
                    <li><input type="checkbox" name="what[]" value="orthodontics">Orthodontics</li>
                    <li><input type="checkbox" name="what[]" value="oralappliances">Oral Appliances for control of sleep apnea</li>
                    <li><input type="checkbox" name="what[]" value="whitening">Whitening</li>
                    <li><input type="checkbox" name="what[]" value="porcelain">Porcelain</li>
                    <li><input type="checkbox" name="what[]" value="compositeveneers">Composite Veneers</li>
                    <li><input type="checkbox" name="what[]" value="advice">Preventive Advice</li>
                </ul>
                <br>

                <label>What are your Dental Issues?</label>
                <textarea name="comments"></textarea>
                <br>

                <label>Do you have a Health Insurance?</label>
                <select name="insurance">
                    <option value="insurance"></option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>

                <label>Doctor's Name</label>
                <input type="text" name="drname">

                <label>Date:
                    <input type="date" name="appday"></label>

                <label>Time:
                    <input type="time" name="apptime"></label>

                <label>How would you like to receive an important information and notifications?</label>
                <ul>
                    <li><input type="radio" name="info" value="email">Email</li>
                    <li><input type="radio" name="info" value="text">Text Message</li>
                    <li><input type="radio" name="info" value="mailbox">Mailbox</li>
                    <li><input type="radio" name="info" value="no info">No Notification</li>
                </ul>
                <br>

                <p>* Please have your valid Passport or photo ID, and Medical Story.</p>
                <p>* Be prepared to fill out your health related information thoroughly.</p>
                <p>* Be ready 15 minutes before your appointment time.</p>
                <br>
            </fieldset>
        </form>

        <div class="g-recaptcha" data-sitekey="<?= $siteKey; ?>"></div>
        <div>
            <input type="submit" value=" SUBMIT " />
        </div>
    </main>