<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    <style>
        table{
            border-collapse: collapse;
        }
        td,th{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php
    function html($text){
        return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
    }
    function htmlout($text){
        echo html($text);
    }
    ?>
    <p>Ваша корзина содержит<?php
    echo count($_SESSION['cart']); ?> элементов.</p>
    <p><a href="?cart">Просмотреть корзину</a></p>
    <table border="1">
        <thead>
            <tr>
                <th>Описание товара</th>
                <th>Цена</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $item): ?>
                <tr>
                    <td><?php htmlout($item['desc']); ?></td>
                    <td>
                        $<?php echo number_format($item['price'], 2); ?>
                    </td>
                    <td>
                        <form action="" method="post">
                            <div>
                                <input type="hidden" name="id" value="<?php htmlout($item['id']);?>">
                                <input type="submit" name="action" value="Купить">
                            </div>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <p>Все цены указаны в тугриках.</p>
</body>
</html>