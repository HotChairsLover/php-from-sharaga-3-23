<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arr = ['green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой'];
    foreach ($arr as $key => $elem){
        echo "<p>".$key." - ".$elem."</p>";
    }
    ?>
    <?php
    $arr = ['user1' => 30, 'user2' => 32, 'user3' => 33];
    foreach ($arr as $key => $elem){
        echo "<p>".$key." - возраст ".$elem." лет </p>";
    }
    ?>
    <?php
    $arr = [1, 2, 3, 4, 5];
    foreach($arr as $elem){
        if($elem % 2 !== 0){?>
            <script>
                console.log(<?=$elem?>);
            </script>
        <?php 
        } 
        ?>
    <?php
    }
    ?>
    <?php
    $today = "5";
    $days = [
        "понедельник" => "1",
        "вторник" => "2",
        "среда" => "3",
        "четверг" => "4",
        "пятница" => "5",
        "суббота" => "6",
        "воскресенье" => "7",
    ];
    foreach($days as $key => $day){ 
        if($day == $today){?>
            <p><i><?=$key?></i></p>
        <?php 
        }
        else { ?>
        <p><?=$key?></p>
        <?php 
        } ?>
    <?php
    }
    ?>
    <?php
    $arr = [0,2,3,5,1,2,-5,-2,1,2,3];
    $summ = 0;
    foreach($arr as $elem){
        if($elem < 0){
            break;
        }
        else{
            $summ += $elem;
        }
    }
    echo "Сумма: ".$summ;
    ?>
</body>
</html>