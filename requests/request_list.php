<?php include '../view/header.php'?>
<table border="1">
    <tr>
        <th>Order Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Hot / Cold</th>
        <th>Size</th>
        <th>Type</th>
        <th>Soy</th>
        <th>No Whip</th>
        <th>Cream</th>
        <th>Sugar</th>
    </tr>
<?php
foreach($orders as $order)
{
    $orderid = $order['orderid'];
    $firstname = $order['firstname'];
    $lastname = $order['lastname'];
    $coffee_hot = $order['coffee_hot'];
    $coffee_size = $order['coffee_size'];
    $coffee_type = $order['coffee_type'];
    $soy = $order['soy'];
    $no_whip = $order['no_whip'];
    $cream = $order['cream'];
    $sugar = $order['sugar'];
    
    echo "<tr>
        <th>$orderid</th>
        <th>$firstname</th>
        <th>$lastname</th>
        <th>$coffee_hot</th>
        <th>$coffee_size</th>
        <th>$coffee_type</th>
        <th>$soy</th>
        <th>$no_whip</th>
        <th>$cream</th>
        <th>$sugar</th>
    </tr>";
}
?>
</table>
<p><a href="../employees/index.php?logout">Employee logout</a></p>
    
<?php include '../view/footer.php'?>