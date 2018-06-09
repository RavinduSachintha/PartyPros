<!DOCTYPE html>
<html>

<head>
    <title>Venue Selection</title>
    <link rel="stylesheet" type="text/css" href="./css/styles.css ">
    <link rel="stylesheet" type="text/css" href="./css/venueSelection.css ">      
</head>

<body>
<div class="page">

    <!-- Title bar -->
    <div class="header">
        <div class="left">
            <div class="dropdown">
              <button class="dropbtn">Menu</button>
              <div class="dropdown-content">
                <a href="./index.php">Home</a>
                <a href="./aboutus.php">About us</a>
                <a href="./contactus.php">Contact us</a>
                </div>
            </div>
        </div>
        <div class="siteTitle">
            EXTRAVAGANCE
            <div class="siteTitle" style="font-size:30px;margin-top:20px ">
                VENUE SELECTION
            </div>
        </div>
        <div class="right">
            <div class="loginSignUp">
              <a href="./mycart.php"><button class="loginSignUpbtn"> My Cart</button></a>
            </div>
        </div>
    </div>

    <div class="venue-select">
        <form action="#" autocomplete="on"><!--autocomplete completes the input values based on values that the user has entered before -->
            <lable>Select Date</lable>
            <input type="date" name="event-date" placeholder="Date of the event" required><br>
            <lable>Select Time</lable>
            <input type="time" name="event-time" placeholder="Time of the event" required><br>
            <lable>Area Desired</lable>
            <input type="text" name="event-area" placeholder="Area desired" required><br>
            <lable>Event Duration</lable>
            <input type="text" name="event-duration" placeholder="Duration" required><br>
            <input type="submit" name="submit" value="Submit"><br>
        </form>
    </div>
            
    <div class="frame">
        <div class="frame-header">Suggestions</div>
        <div class="frame-content">
            <div class="block">Shop 1</div>
            <div class="block">Shop 2</div>
            <div class="block">Shop 3</div>
        </div>
    </div>    
            
    <div class=footer>
        <footer class="venue-footer">Copyright &copy; SKY</footer>
    </div>
</div> 

</body>
</html>