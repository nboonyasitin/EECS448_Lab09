<html>
    <script src="formChecker.js"></script>
<h3>Web Store Reciept</h3>
<?php
    $faceNum = $_GET['facialWashQuantity'];
    $hairNum = $_GET['hairWashQuantity'];
    $bodyNum = $_GET['bodyWashQuantity'];

    $selection = $_GET['ship'];
    $user = $_GET['username'];
    $pass = $_GET['password'];
    $free = $_GET['free'];
    $over = $_GET['overnight'];
    $three = $_GET['threeday'];

    //calculations
    $faceNumTotal = $faceNum * 5.00;
    $hairNumTotal = $hairNum * 8.00;
    $bodyNumTotal = $bodyNum * 6.00;
    $TotalCost = 0;

    if($ship == $free)
    {
        $shippingCost = 0.00;
    }
    else if($ship == $over)
    {
        $shippingCost = 50.00;

    }
    else if($ship == $three)
    {
        $shippingCost = 5.00;
    }

    echo '<p>Welcome ' .$user. '</p>';
    echo '<p>Password:</p>' .$pass;
    echo '<br><table border=\"1\">';
        echo '<tr>';
            echo '<th/></th><th>Quantity</th><th>Cost Per Item</th><th>Subtotal</th>';
        echo '</tr>';
        echo'<tr class="receipt">';
            echo '<td>Face Wash: </td>';
            echo '<td>' .$faceNum. '</td><td>$5.00</td><td>$' .$faceNumTotal. '.00</td>';
        echo '</tr>';
        echo'<tr class="receipt">';
            echo '<td>Hair Wash:</td>';
            echo '<td>' .$hairNum. '</td><td>$8.00</td><td>$' .$hairNumTotal. '.00</td>';
        echo '</tr>';
        echo'<tr class="receipt">';
            echo '<td>Body Wash:</td>';
            echo '<td>' .$bodyNum. '</td><td>$6.00</td><td>$' .$bodyNumTotal. '.00</td>';
        echo '</tr>';
        echo'<tr class="receipt">';
            echo '<td>Shipping</td>';
            echo '<td>' .$shipping. '</td><td>$' .$shippingCost. '.00</td>';
        echo '</tr>';
        echo'<tr class="receipt">';
            echo '<td>Total</td>';
            $TotalCost = $faceNumTotal + $hairNumTotal + $bodyNumTotal + $shippingCost;
            echo '<td>$' .$TotalCost. '.00</td>';
        echo '</tr>';
    echo"</table>";


