<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sign up for our next inclusive event on March 23-24, 2019.
    Run, swim, and bike in our 10k, half marathon and triathlons.">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale-1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="../css/reset.css" type="text/css">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/styles.css" type="text/css">
    <link rel="stylesheet/less"  href="../css/styles.less" type="text/css" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
    <title>Registration-Ace in the Hole Multisport Events</title>
</head>
<header>
    <?php include '../includes/header.php'; ?>
    <?php include '../includes/navigation.php'; ?>
</header>
<body>
    <div id="container">

        <main>
            <section>
                <div class="section group">
                    <div class="col span_1_of_2">
                        <img src="../images/triathlon-4.jpg" alt="Participants starting the Sprint Course Swim.">
                        <section>
                        <h2>Registration Information</h2>
                            <table>
                                <tr>
                                    <th>Event</th>
                                    <th>Cost ($)</th>
                                </tr>
                                <tr>
                                    <td>Long Course</td>
                                    <td>240</td>
                                </tr>
                                <tr>
                                    <td>Olympic</td>
                                    <td>110</td>
                                </tr>
                                <tr>
                                    <td>10K</td>
                                    <td>50</td>
                                </tr>
                                <tr>
                                    <td>Half Marathon</td>
                                    <td>75</td>
                                </tr>
                                <tr>
                                    <td>Sprint</td>
                                    <td>90</td>
                                </tr>
                                <tr>
                                    <td>Try-a-Tri</td>
                                    <td>65</td>
                                </tr>
                            </table>
                        </section>
                        <section>
                            <h2>Cost Includes</h2>
                            <ul id="cost">
                                <li>Food & Beer</li>
                                <li>Access to the weekends live entertainment & Fitness Expo</li>
                                <li>Commemorative Finisher medal</li>
                                <li>Accurate Chip Timing for competitive races</li>
                                <li>Ace in the Hole MultiSport Weekend Tech Shirt</li>
                                <li>Post-event party & entertainment</li>
                            </ul>

                            <p> NOTE: Tech shirts guaranteed to pre-registered participants only.</p>
                        </section>
                    </div>
                    <div class="col span_1_of_2">
                        <aside>
                            <h3>Register</h3>
                            <form action="registration-results.php" method="post" class="wrapper" id="registrationForm">
                                <p>Sign Up for Our Events</p>
                                <div class="row">
                                    <label for="rName" class="col-25">Name:</label>
                                    <input type="text" name="rName" id="rName" class="col-75" required>
                                </div>
                                <div class="row">
                                    <label for="rAddress" class="col-25">Street Address:</label>
                                    <input type="text" name="rAddress" id="rAddress" class="col-75" required>
                                </div>
                                <div class="row">
                                    <label for="rCity" class="col-25">City:</label>
                                    <input type="text" name="rCity" id="rCity" class="col-75" required>
                                </div>
                                <div class="row">
                                    <label for="rZip" class="col-25">Zip Code:</label>
                                    <input type="text" name="rZip" id="rZip" class="col-75" required>
                                </div>
                                <div class="row">
                                    <label for="rState" class="col-25">State:</label>
                                    <select name="rState" id="rState" class="col-75" required>

                                        <option value="AL">Alabama</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="CA">California</option>
                                        <option value="CO">Colorado</option>
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="DC">District Of Columbia</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="ID">Idaho</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IN">Indiana</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NV">Nevada</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="OH">Ohio</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="OR">Oregon</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="TX">Texas</option>
                                        <option value="UT">Utah</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WA">Washington</option>
                                        <option value="WV">West Virginia</option>
                                        <option value="WI">Wisconsin</option>
                                        <option value="WY">Wyoming</option>
                                
                                    </select>
                                </div>
                                <div class="row">
                                    <label for="rAge" class="col-25">Age:</label><span>Must Be 16 years old</span>
                                    <input type="text" name="rAge" id="rAge" class="col-75" required>
                                </div>
                                <div class="row">
                                    <label for="eContactName" class="col-25">Emergency Contact Name:</label>
                                    <input type="text" name="eContactName" id="eContactName" class="col-75" required>
                                </div>
                                <div>
                                    <label for="eContactNum" class="col-25">Emergency Contact Phone Number:</label>
                                    <input type="text" name="eContactNum" id="eContactNum" class="col-75" required>
                                </div>
                                <div>
                                    <label for="rGender" class="col-25">Gender Identification:</label>
                                    <input type="radio" name="rGender" value="non-binary" id="rGender" class="col-75" required>Non-binary
                                    <input type="radio" name="rGender" value="male" id="rGender" class="col-75">Male
                                    <input type="radio" name="rGender" value="female" id="rGender" class="col-75">Female

                                </div>
                                <p>Events</p>
                                <div>
                                    <label for="rEvent1" class="col-25">March 23:</label>
                                    <select name="rEvent1" id="rEvent1" class="col-75">
                                        <option value="">------</option>
                                        <option value="long course" >Long Course</option>
                                        <option value="olympic">Olympic</option>
                                        <option value="10k">10K</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="rEvent2" class="col-25">March 24:</label>
                                    <select name="rEvent2" id="rEvent2" class="col-75">
                                        <option value="">------</option>
                                        <option value="half marathon">Half Marathon</option>
                                        <option value="Sprint">Sprint</option>
                                        <option value="Try-a-Tri">Try-a-Tri</option>
                                        <option value="Splash-N-Dash">Splash-N-Dash</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <label for="rParticipant" class="col-25">Athlete or Volunteer:</label>
                                        <input type="radio" name="rParticipant" value="athlete" id="rParticipant" class="col-75" required>Athlete
                                        <input type="radio" name="rParticipant" value="volunteer" id="rParticipant" class="col-75">Volunteer
                                </div>
                                <div class="row">
                                    <label for="rShirt" class="col-25">T-shirt Size:</label>
                                    <select name="rShirt" id="rShirt" class="col-75" required>
                                        <option value="xs" name="rShirt">XS</option>
                                        <option value="s" name="rShirt">S</option>
                                        <option value="m" name="rShirt">M</option>
                                        <option value="l" name="rShirt">L</option>
                                        <option value="xl" name="rShirt">XL</option>
                                        <option value="2xl" name="rShirt">2XL</option>
                                        <option value="3xl" name="rShirt">3XL</option>
                                        <option value="4xl" name="rShirt">4XL</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <label for="rSpecial" class="col-25">Special Accommodations:</label>
                                    <textarea rows="4" cols="20" name="rSpecial" id="rSpecial" class="col-75"></textarea>
                                </div>
                                <div class="row">
                                    <input type="submit" value="Register">
                                </div>
                                <p>* Pay at Packet Pickup</p>
                            </form>
                        </aside>
                    </div>
                </div>
            </section>
        </main>
        <script src="../js/jquery-3.3.1.min.js"></script>
        <script src="../js/scripts.js"></script>
        <footer>
            <?php include '../includes/footer.php'; ?>
        </footer>
    </div>

</body>
</html>