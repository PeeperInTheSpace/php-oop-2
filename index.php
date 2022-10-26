<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP OOP 2</title>
</head>

    <body>
    
        <?php

            require_once __DIR__ . "/Food.php";
            require_once __DIR__ . "/Toys.php";
            require_once __DIR__ . "/Accessories.php";
            require_once __DIR__ . "/User.php";

            // PRODOTTI
            // Cibo
            $crocchette = new Food("Cibo", "F001", "gatto", "20/12/2022", "5.90");
            $scatoletta_carne = new Food("Cibo", "F002", "cane", "14/07/2022", "3.90");
            // Giocattoli
            $palla = new Toy("Giocattolo", "G001", "Piccola", "Gomma", "13.50");
            $pollo = new Toy("Giocattolo", "G002", "Media", "Gomma", "8.50");
            // Accessori
            $collare = new Accessory("Accessorio", "A001", "Cane", "Pelle", "14.30");
            $guinzaglio = new Accessory("Accessorio", "A002", "Cane", "Cuoio", "21.90");

            // ACQUISTI UTENTI 
            $Luca = new User("Luca", "luca@gmail.com", "false", "false");
            $Luca ->addProductToCart($scatoletta_carne);
            $Luca ->addProductToCart($collare);
            $Luca ->addProductToCart($pollo);

            $Giada = new User("Giada", "giada@gmail.com", "true", "true");
            $Giada ->addProductToCart($crocchette);
            $Giada ->addProductToCart($palla);
            $Giada ->addProductToCart($palla);
            
        ?>

        <h2>PRODOTTI</h2>
            <ul class="products">
                <li> <?php echo $crocchette->printInfo(); ?> </li>
                <li> <?php echo $scatoletta_carne->printInfo(); ?> </li>
                <li> <?php echo $palla->printInfo(); ?> </li>
                <li> <?php echo $pollo->printInfo(); ?> </li>
                <li> <?php echo $collare->printInfo(); ?> </li>
                <li> <?php echo $guinzaglio->printInfo(); ?> </li>
            </ul>

            <!-- Carrello Luca -->
            <h2>Ciao <?php echo $Luca->name; ?>. Ecco il tuo carrello:</h2>
            <ul class="cart">
                <?php foreach($Luca->cart as $cartItem) { ?>
                <li><?php echo $cartItem->printInfo(); ?></li>
                <?php } ?>
            </ul>
            <h4>Carta di credito: <?php echo $Luca->checkCreditCard($Luca->credit_card)?></h4>
            <h3>Totale: € <?php echo $Luca->getTotalPrice($Luca->registered); ?></h3>

            <!-- Carrello Giada -->
            <h2>Ciao <?php echo $Giada->name; ?>. Ecco il tuo carrello:</h2>
            <ul class="cart">
                <?php foreach($Giada->cart as $cartItem) { ?>
                <li><?php echo $cartItem->printInfo(); ?></li>
                <?php } ?>
            </ul>
            <h4>Carta di credito: <?php echo $Giada->checkCreditCard($Giada->credit_card)?></h4>
            <h3>Totale: € <?php echo $Giada->getTotalPrice($Giada->registered); ?></h3>

    </body>

</html>