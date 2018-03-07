<html>
  <head>
    <title>BookingRoom</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
    <script>
        function validateForm() {
          var x = document.forms["myform"]["Name"].value;
          var y = document.forms["myform"]["Email"].value;
          var z = document.forms["myform"]["Phone"].value;
          var a = document.forms["myform"]["LengthOfStay"].value;
          if (x == "") {
              alert("Name must be filled out");
              return false;
          }
          if (y == "") {
              alert("Email must be filled out");
              return false;
          }
          if (z == "") {
              alert("Phone Number must be filled out");
              return false;
          }
          if(z.length < 7 || z.length >11){
              alert("Invalid Phone Number");
              return false;
          }
          if(a == "" || a == 0){
            if(a == ""){
              alert("Please input the length of day you are going to stay")
              return false;
            }
            if(a == 0){
              alert("The number of days cannot be 0")
              return false;
            }
          }
        }
    </script>
  </head>
  <body>
    <div class="header">
        <img src="logo2.png">
    </div>
    <br>
    <br>
    <div>
      <p class="menu"><a href="Home.php">HOME</a></p>
      <p class="menu"><a href="Facility.php">FACILITY</a></p>
      <p class="menu"><a href="Booking.php">BOOK ROOM</a></p>
    </div>
    <hr>
    <br>
    <br>
    <table align="center">
      <form name="myform" action="Booked.php" onsubmit="return validateForm()" method="post">
      <tr>
        <th COLSPAN="2">BOOK ROOM</th>
      </tr>
      <tr>
        <td>Name</td>
        <td><input type="text" name="Name">
      </td>
      <tr>
        <td>Email</td>
        <td><input type="email" name="Email"></input>
      </tr>
      <tr>
        <td>Phone</td>
        <td><input type="number" name="Phone"></input>
      </tr>
      <tr>
        <td>Stay in Date</td>
        <?php include 'date.php';?>
        <td><input type="date" value="<?php echo date("Y-m-d");?>" min=<?=$min->format("Y-m-d")?> name="date"</input>
      </tr>
      <tr>
        <td>Length of Stay (days)</td>
        <td><input type="number" name="LengthOfStay"></input>
      </tr>
      <tr>
        <td>Room Type</td>
        <td>
          <select>
            <option>Deluxe Room           - $274</option>
            <option>Deluxe Pool Villa     - $438</option>
            <option>1 Bedroom Pool Villa  - $525</option>
            <option>2 Bedroom Pool Villa  - $635</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Additional Charge</td>
        <td>
          <input type="checkbox" name="Charge">Extra bed        - $80</input><br>
          <input type="checkbox" name="Charge">Airport Shuttle  - $40</input><br>
          <input type="checkbox" name="Charge">Ubud Tour 1D     - $100</input><br>
        </td>
      </tr>
      <tr>
        <th COLSPAN="2"><input type="submit" value="submit"> </input><br></th>
      </tr>
      </form>
    </table>
    <br>
    <div class="header">
      <?php include 'footer.php';?>
    </div>
  </body>
</html>
