<?php include '../view/header.php'?>
    <form action="index.php" method="post">
    <fieldset>
    <legend>Your Name</legend>
    <label>* First name</label>
    <input type="text" name="first_name" value="<?php echo $firstname; ?>">
        <br>
    <label>* Last name</label>
        <input type="text" name="last_name" value="<?php echo $lastname; ?>">       
    </fieldset>
        
    <fieldset>
    <legend>Your order</legend>

        <p>* Hot or cold?</p>
        <input type="radio" name="coffee_hot" value="Hot" <?php echo checkme($coffee_hot,"Hot"); ?>>
        Hot<br>
        <input type="radio" name="coffee_hot" value="Iced" <?php echo checkme($coffee_hot,"Iced"); ?>>
        Iced<br>
        
        <p>* Size?</p>
        <input type="radio" name="coffee_size" value="Poco" <?php echo checkme($coffee_size,"Poco"); ?>>
        Poco<br>
        <input type="radio" name="coffee_size" value="Mediano" <?php echo checkme($coffee_size,"Mediano"); ?>>
        Mediano<br>
        <input type="radio" name="coffee_size" value="Enorme" <?php echo checkme($coffee_size,"Enorme"); ?>>
        Enorme<br>

        <p>* Type?</p>
        <input type="radio" name="coffee_type" value="Espresso" <?php echo checkme($coffee_type,"Espresso"); ?>>
        Espresso<br>
        <input type="radio" name="coffee_type" value="Macchiato" <?php echo checkme($coffee_type,"Macchiato"); ?>>
        Macchiato<br>
        <input type="radio" name="coffee_type" value="Latte" <?php echo checkme($coffee_type,"Latte"); ?>>
        Latte<br>
        <input type="radio" name="coffee_type" value="Regular" <?php echo checkme($coffee_type,"Regular"); ?>>
        Regular<br>
        
        <p>Options?</p>
        <input type="checkbox" name="coffee_soy" <?php echo checkme($coffee_soy,"Y"); ?>>Soy<br>
        <input type="checkbox" name="coffee_no_whip" <?php echo checkme($coffee_no_whip,"Y"); ?>>No Whipped Cream        <br>
        <input type="checkbox" name="coffee_cream" <?php echo checkme($coffee_cream,"Y"); ?>>Cream<br>
        <input type="checkbox" name="coffee_sugar" <?php echo checkme($coffee_sugar,"Y"); ?>>Sugar<br>


        <p>Special requests?</p>
        <textarea name="comments" rows="4" cols="50"><?php echo htmlspecialchars($comments);?></textarea>
    </fieldset>
        
    <div id="buttons">
    <input type="submit" value="Submit" name="GOBUTTON">
    <br>
    </div>
        
    <p class="error"><?php echo $message;?></p>
    </form>
<?php include '../view/footer.php'?>