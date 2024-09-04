<?php
//Declaring variable
$page_title = "Admin list";

//Call protect admin page
include_once 'includes/protect_admin_pages.php';

//<!-- Calling header page -->


include 'includes/header.php';
include 'includes/admin_nav.php';
include_once('includes/connection.php');

//Create query
$query = "SELECT * FROM admin_tbl";

//run query in the database using built-in php function 
//Pass 2 parameters
$result = mysqli_query($conn, $query);

//Fetch data from database
$admins = mysqli_fetch_all($result, MYSQLI_ASSOC);


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
            <h2 class="pt-5 text-colour">Admin List</h2>
            <input type="text" class="text-center" id="myInput" onkeyup="myFunction()" placeholder="Search for names...">
            <table class="table" id="myTable">
                <thead>
                    <th class="text-colour">User Number</th>
                    <th class="text-colour">Fullname</th>
                    <th class="text-colour">Email</th>
                    <th class="text-colour">Password</th>
                    <th class="text-colour">Date Registered</th>
                </thead>
                <tbody>
                    <?php
                    foreach ($admins as $admin) : ?>
                        <tr>
                            <td class="text-colour"><?php echo $admin['AdminID']; ?></td>
                            <td class="text-colour"><?php echo $admin['Fullname']; ?></td>
                            <td class="text-colour"><?php echo $admin['Email']; ?></td>
                            <td class="text-colour"><?php echo $admin['Password']; ?></td>
                            <td class="text-colour"><?php echo $admin['Datereg']; ?></td>
                            <td><a class=" pt-1 button" href="admin_update.php?AdminID=<?php echo $admin['AdminID']; ?>">Modify</a></td>
                            <td><a class="pt-1 button" href="admin_delete.php?AdminID=<?php echo $admin['AdminID']; ?>">Delete</a></td>
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
                        td = tr[i].getElementsByTagName("td")[1];
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