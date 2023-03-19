<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница</title>
</head>
<body>
    <?php
    $items = array(
        array('id' => '1', 'desc' => "Описание1", 'price' => 24.95),
        array('id' => '2', 'desc' => "Описание2", 'price' => 44.95),
        array('id' => '3', 'desc' => "Описание3", 'price' => 64.95),
        array('id' => '4', 'desc' => "Описание4", 'price' => 84.95)
    );
    ?>
    <?php
    session_start();
    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = array();
    }
    include 'catalog.html.php';
    if(isset($_POST['action']) and $_POST['action'] == 'Купить'){
        $_SESSION['cart'][] = $_POST['id'];
        header('Location: .');
        exit();
    }
    if(isset($_GET['cart'])){
        $cart = array();
        $total = 0;
        foreach($_SESSION['cart'] as $id){
            foreach($items as $product){
                if($product['id'] == $id){
                    $cart[] = $product;
                    $total += $product['price'];
                    break;
                }
            }
        }
        include 'cart.html.php';
        exit();
    }
    if(isset($_POST['action']) and $_POST['action'] == 'Очистить корзину'){
        unset($_SESSION['cart']);
        header('Location: ?cart');
        exit();
    }
    ?>
</body>
</html>