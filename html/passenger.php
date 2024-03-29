<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passenger Details</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/passenger.css">
    <link rel="stylesheet" href="../css/search.css">

</head>

<body>
    <div class="container">
        <header>
            <nav>
                <div class="logo"><img src="../images/logo2.png" alt=""></div>
            </nav>
            <nav class="search_menu_bar">
                <div class="search-fromTo">
                    Delhi - Mumbai
                </div>
                <div class="search-depDate">
                    <div class="search-lable-depart">
                        Depart
                    </div>
                    <div class="search-lable-date">
                        Wed, 31 May
                    </div>
                </div>
                <div class="search-div-passanger">
                    <div class="search-lable-passanger">
                        Passangers
                    </div>
                    <div class="search-lable-num-pass">
                        2
                    </div>
                </div>
                <div class="search-div-yourbook">
                    <div class="search-icon-yourbook">
                        <i class="fa fa-shopping-cart fa-3x" aria-hidden="true"></i>
                    </div>
                    <p id="yourBooking">Your Booking
                    </p>
                </div>
            </nav>
        </header>


        <div class="bg-container">
            <div class="box-container">
                <div class="otd1">
                    <form action="">
                        <fieldset>
                            <legend>Person Details</legend>
                            <!-- <label for="title">Title:</label> -->
                            <select name="title" id="title">
                                <option value="" disabled selected>Title </option>
                                <!-- <option value="ps">-Please select- </option> -->
                                <option value="Mr">Mr.</option>
                                <option value="Mrs">Mrs.</option>
                                <option value="Ms">Ms</option>
                                <option value="Mstr">Mstr</option>
                                <option value="Doctor">Doctor</option>
                                <option value="Miss">Miss</option>
                            </select>

                            <input type="text" name="fname" id="fname" placeholder="First/Given Name *" required />

                            <input type="text" name="lname" id="lname" placeholder="Surname/Last Name *" required />

                            <input type="date" name="bod" id="bod" placeholder="Date of Birth" />
                        </fieldset>
                    </form>
                </div>

                <div class="otd2">
                    <form action="">
                        <fieldset>
                            <legend>Contact Details</legend>
                            <input type="email" name="email" id="email" placeholder="Email Adrress *">

                            <input type="email" name="cemail" id="cemail" placeholder="Confirm Email Address *">

                            <input type="text" name="countrycode" id="countrycode" value="India (+91)" readonly />

                            <input type="tel" name="number" id="number" placeholder="Mobile Number *" />

                        </fieldset>
                    </form>
                </div>

                <div class="otd3">
                    <input type="checkbox" name="agree" id="agree"> I Agree To Terms and Conditions

                    <br>
                    <button id="confirm" value="Confirm"><a href="thank_you.php"> Confirm </a></button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const checkbox = document.getElementById('agree');
        const button = document.getElementById('confirm');

        checkbox.addEventListener('click', function() {
            if (checkbox.checked) {
                button.style.backgroundColor = '#080133';
                button.style.color = '#fff';
                button.style.transition = '0.7s ease-in-out';
            } else {
                button.style.backgroundColor = 'transparent';
                button.style.color = '#000';
            }
        });
    </script>
</body>

</html>