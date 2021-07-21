<?php
include 'connectDB.php';
$itemname = $_GET["itemname"];

if ($itemname!="")
{
$res=mysqli_query($conn,"Select sellingprice from stock where Itemname= $itemname ");
echo "<select>";
while ($row=mysqli_fetch_array($res))
{
     echo "<option>";echo $row["sellingprice"];echo"</option>";
}
echo"</select>";
}
?>