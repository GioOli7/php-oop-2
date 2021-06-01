<?php 
require_once __DIR__ . '/classes/Customers.php';
require_once __DIR__ . '/classes/Products.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- CUSTOMERS -->
    <section>
        <div>
            <?php //customer 1 standard
            $customer1 = new Customer('Giorgio', 'Rossi', 40, 'giorgio@adsfdf.it');
            try {
                $customer1->setAge(20);
            } catch (Exception $e) {
                echo 'Eccezione: ' . $e->getMessage();                
            }?>
            <h2> <?php echo $customer1->getName(); ?> di anni <?php echo $customer1->getAge(); ?></h2>
            <h3>Email:  <?php echo $customer1->getEmail(); ?></h3>
            <hr>
        </div>
        
        <div>
            <?php //customer2 premium
            $customer2 = new PremiumCustomer('Paolo', 'Duzioni', 30);
            $customer2->setDiscount();?>
            <h2> <?php echo $customer2->getName(); ?> di anni <?php echo $customer2->getAge(); ?></h2>
            <h3>Email:  <?php echo $customer2->getEmail(); ?></h3> </h3>
            <h4> Lo sconto a te riservato è del <?php echo $customer2->getDiscount(); ?> %</h4>
            <hr>
        </div>

        <div>
            <?php //customer3 premium
            $customer3 = new PremiumCustomer('Mario', 'Rossi', 60, 'mario@hgishfgiu.com');
            $customer3->setDiscount();?>
            <h2> <?php echo $customer3->getName(); ?> di anni <?php echo $customer3->getAge(); ?></h2>
            <h3>Email: <?php echo $customer3->getEmail(); ?></h3> </h3>
            <h4> Lo sconto a te riservato è del <?php echo $customer3->getDiscount(); ?> %</h4>
            <hr>
        </div>
    </section>


    <!-- PRODUCTS -->
    <section>
        <div>
            <?php
            $product1 =  new Product('Gillette', 3.29)
            ?>

            <h2><?php echo $product1->getBrand();?></h2>
            <h3>price: <?php echo $product1->getPrice();?>$</h3>
            <hr>
        </div>

        <div>
            <?php 
            $surg = new Surgelato('Findus', 2.69, 22); ?>

            <h2><?php echo $surg->getBrand();?></h2>
            <h3>price: <?php echo $surg->getPrice();?>$</h3>
            <h4>Temperatura di conservazione: -<?php echo $surg->getTemp() ?>°C</h4>
            <hr>
        </div>

        <div>
            <?php
            $fruit = new Fruit('Melinda', 0.90, 10) ?>
            <h2><?php echo $fruit->getBrand();?></h2>
            <h3>price: <?php echo $fruit->getPrice();?>$</h3>
            <h4>Giorni conservazione max: <?php echo $fruit->getStoringDays(); ?></h4>
            <hr>

        </div>

    </section>
</body>
</html>