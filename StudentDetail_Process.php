<?php
echo '<table style="width:500px; border:2px solid blue; margin-left:auto; margin-right:auto; border-spacing:5px; border-collapse:separate;"> <tr> <td> Student Name: </td> <td>';

//Print Name
echo $_POST['name'] . '</td></tr>';

//Print Address
echo "<tr> <td> Address : </td> <td> " . $_POST['address'] . "</td></tr>";

//Print sex
echo "<tr> <td> Gender : </td> <td> " . $_POST['rbtSex'] . "</td></tr>";

//Print Favourite subject
if (isset($_POST['subject']))
{
    $subject = $_POST['subject'];
    $n = count($subject);
    $i = 0;
    echo "<tr> <td> Favourite Subjects : </td> <td>";
    while ($i < $n)
    {
        echo "$subject[$i] \n";
        $i++;
    }
    echo "</td></tr>";
}
else
{
    echo "The subjects you selected are : No  selection";
}

//Print Qualification
echo "<tr> <td> Qualification : </td> <td> " . $_POST['qualification'] . "</td></tr>";

//Print Comments
echo "<tr> <td> Comments : </td> <td> " . $_POST['comments'] . "</td></tr>";

//Print age
echo "<tr> <td> Age: </td> <td> " . $_POST['age'] . "</td></tr>";

//Upload a image
if (isset($_POST['Submit']))
{
    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $file_size = $_FILES['file']['size'];
    $file_tem_loc = $_FILES['file']['tmp_name'];
    $filepath = "upload/" . $_FILES["file"]["name"];
    $file_store = "upload/" . $file_name;

    if (move_uploaded_file($file_tem_loc, $file_store))
    {
        echo "<tr> <td> Image :</td> <td>" . '<img src = "'.$file_store.'" height=100 width=100 />'. "</td></tr></table>";
    }
}
?>
