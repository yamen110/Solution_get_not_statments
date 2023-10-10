<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST["friendname"];
    $desc = $_POST["desc"];
    $query = "INSERT INTO Friends (Name, Description) VALUES ('$name', '$desc')";
    mysqli_query($sql, $query);
    echo "<br />You've added " . $name . "<br /><br />";
    header('Location: index.php');
    // ? if You Want To Send An Variable You Can Use This Code Below 
    // ! header('Location: index.php?id=yourid);
}
$result = mysqli_query($sql, "SELECT * FROM Friends");
while ($row = mysqli_fetch_array($result)) {
    echo "<strong>" . $row['Name'] . "</strong> - " . $row['Description'];
    echo "<br>";
}
?>

<p><strong>Add a new person to the database</strong></p>
<!-- FORM -->
<form name="addform"  method="post">
    Name: <input type="text" name="friendname" /><br />
    Description: <input type="text" name="desc" /><br />
    <input type="submit" name="submit" label="submit" />
</form>