
<?php
include 'conndb.php';
?>

    
    <center><input type="text" class="search" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name"><table id='reservation' style='width: 90%' border='2'>
       
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Phone number</th>
            </tr></center>
<?php			
        
    $result = mysqli_query ($conn,$sql="select * from users");
    while ($row = mysqli_fetch_assoc ($result)){ 

        ?>
            <tr>
            <td><?php echo $row ['username'] ?></td>
            <td><?php echo $row ['address']?></td>
            <td><?php echo $row ['email'] ?></td>
            <td><?php echo $row ['telno'] ?></td>
            </tr>

<?php
    }
mysqli_free_result($result);
?>

<a type="button" href="index.html">END</a>

<script>
function myFunction() {
var input, filter, table, tr, td, i, txtValue;
input = document.getElementById("myInput");
filter = input.value.toUpperCase();
table = document.getElementById("reservation");
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
