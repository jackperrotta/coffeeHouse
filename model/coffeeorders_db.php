<?php

function addCoffeeOrder($firstname,$lastname,$coffee_hot,$coffee_size,$coffee_type,$coffee_soy,$coffee_no_whip,$coffee_cream,$coffee_sugar,$comments)
{
    global $db;
    $result = false; // I will return true if the insert is successful, and false if not.
    $statement = $db->prepare("INSERT INTO `coffeeorders`(`firstname`, `lastname`, `coffee_hot`, "
                . "`coffee_size`, `coffee_type`, `soy`, `no_whip`, `cream`, `sugar`, `comments`) VALUES "
                . "(:firstname,:lastname,:hot,:size,:type,"
                . ":soy,:no_whip,:cream,:sugar,:comments)");
    $statement->bindValue(':firstname',$firstname);
    $statement->bindValue(':lastname',$lastname);
    $statement->bindValue(':hot',$coffee_hot);
    $statement->bindValue(':size',$coffee_size);
    $statement->bindValue(':type',$coffee_type);
    $statement->bindValue(':soy',$coffee_soy);
    $statement->bindValue(':no_whip',$coffee_no_whip);
    $statement->bindValue(':cream',$coffee_cream);
    $statement->bindValue(':sugar',$coffee_sugar);
    $statement->bindValue(':comments',$comments);
    $result = $statement->execute();
    $statement->closeCursor();
    return $result;
}

function getCoffeeOrders(){
    global $db;
    $statement = $db->prepare('select * from coffeeorders order by orderid');
    $statement->execute();
    $result=$statement->fetchAll();
    $statement->closeCursor();
    return $result;
}
?>