<?php
include "config.php";
?>

<form action="doctorsDelete.php", method="GET">
<select name="ids">
<?php
$sql_command = "SELECT DRid, DRname, DRage, Expertise FROM doctors";
$myresult = mysqli_query($db, $sql_command);
while($id_rows = mysqli_fetch_assoc($myresult))
{
    $DRid = $id_rows['DRid'];
    $DRname = $id_rows['DRname'];
    $Expertise = $id_rows['Expertise'];
    $DRage = $id_rows['DRage'];
    echo "<option value=$DRid>" . $DRname . " - "  . $Expertise . "</option>";
}
?>
</select>
<button>DELETE</button>
</form>

<form action="doctor_insertion.html", method="GET">
<button>ADD</button>
</form>


<form action="doctorsSelect.php", method="GET">
<select name="ids">
    <option value="WHERE DRage > 40;">doctors are greater than 40 years old</option>
    <option value="WHERE Expertise = 'Cardiology';">doctors have experitse of cardiology</option>
    <option value="WHERE Expertise = 'Dermatology' AND DRage < 40;">doctors have expertise of Dermatology and age is less than 40</option>
    <option value="WHERE DRname = 'John';">doctors have name of John</option>
</select>
<button>SEARCH</button>
</form>

