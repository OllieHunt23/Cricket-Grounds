<?php
//Declaring variable
$page_title = "Booking list";

//Call protect admin page
include_once 'includes/protect_admin_pages.php';

//<!-- Calling header page -->

$page_title = "Booking_list";
include 'includes/header.php';
include 'includes/admin_nav.php';
include_once('includes/connection.php');

//Create query
$query = "SELECT * FROM booking_tbl";

//run query in the database using built-in php function 
//Pass 2 parameters
$result = mysqli_query($conn, $query);

//Fetch data from database
$bookings = mysqli_fetch_all($result, MYSQLI_ASSOC);


//Fress result from database
mysqli_free_result($result);

//Close connection. Pass in $conn variable
mysqli_close($conn)

?>


<!-- Start of content 1 -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <h2 class="pt-5 text-colour">Booking list</h2>
            <input type="text" class="text-center" id="myInput" onkeyup="myFunction()" placeholder="Search for names...">
            <table class="table" id="myTable">
                <thead>
                    <th class="text-colour">Name</th>
                    <th class="text-colour">Surname</th>
                    <th class="text-colour">E-mail</th>
                    <th class="text-colour">Phone Number</th>
                    <th class="text-colour">Date</th>
                    <th class="text-colour">Time</th>
                    <th class="text-colour">People</th>
                    <th class="text-colour">Occasion</th>

                </thead>
                <tbody>
                    <?php
                    foreach ($bookings as $booking) : ?>
                        <tr>
                            <td class="text-colour"><?php echo $booking['Firstname']; ?></td>
                            <td class="text-colour"><?php echo $booking['Lastname']; ?></td>
                            <td class="text-colour"><?php echo $booking['Email']; ?></td>
                            <td class="text-colour"><?php echo $booking['MobileNo']; ?></td>
                            <td class="text-colour"><?php echo $booking['Bookingdate']; ?></td>
                            <td class="text-colour"><?php echo $booking['Bookingtime']; ?></td>
                            <td class="text-colour"><?php echo $booking['nopeople']; ?></td>
                            <td class="text-colour"><?php echo $booking['occasion']; ?></td>
                            <td class="text-colour"><a class="pt-1 button" href="booking_update.php?Custid=<?php echo $booking['Custid']; ?>">Modify</a></td>
                            <td class="text-colour"><a class="pt-1 button" href="booking_delete.php?Custid=<?php echo $booking['Custid']; ?>">Delete</a></td>
                        </tr>
                </tbody>
                <!-- close foreach loop -->
            <?php endforeach; ?>
            </table>
            <!-- Search record Javascript -->
            <script>
                function myFunction() {
                    var input, filter, table, tr, td, i, txtValue;
                    input = document.getElementById("myInput");
                    filter = input.value.toUpperCase();
                    table = document.getElementById("myTable");
                    tr = table.getElementsByTagName("tr");
                    for (i = 0; i < tr.length; i++) {
                        td = tr[i].getElementsByTagName("td")[0];
                        if (td) {
                            txtValue = td.textContent || td.innerText;
                            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                            } else {
                                tr[i].style.display = "none";
                            }
                        }
                    }
                }
            </script>
        </div>
        <div class="col-sm-1">

        </div>
    </div>
</div>
</div>

<!-- Calling footer page -->
<?php
include 'includes/footer.php';
?>