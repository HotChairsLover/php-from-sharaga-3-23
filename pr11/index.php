<form action="" method="post">
    <input name="one" value="Один" type="submit">
    <input name="two" value="Два" type="submit">
</form>
<?php
if(isset($_POST["one"]))
{
    $file = fopen("martch.txt", "w");
    fwrite($file, "Весна пришла!");
    fclose($file);
    rename("martch.txt", "8.txt");
    if(!is_dir("old")){
        mkdir("old");
    }
    copy("8.txt", "old/double.txt");
    $size = filesize("old/double.txt");
    echo ($size." bytes <br>");
    echo (($size/1024/1024)." megabytes <br>");
    echo (($size/1024/1024/1024)." gigabytes <br>");
    unlink("old/double.txt");
    if(file_exists("8.txt")){
        echo ("существует <br>");
    }
    else{
        echo ("не существует <br>");
    }
    if(file_exists("old/double.txt")){
        echo ("существует <br>");
    }
    else{
        echo ("не существует <br>");
    }
}
echo("<hr>");
if(isset($_REQUEST["two"])){
    if(!is_dir("IS_20")){
        mkdir("IS_20");
    }
    rename("IS_20", "PI_20");
    rmdir("PI_20");
    $students = [
        "Oleg", "Vasya", "Maksim"
    ];
    if(!is_dir("IS_23")){
        mkdir("IS_23");
    }
    foreach($students as $student){
        if(!is_dir("IS_23/".$student)){
            mkdir("IS_23/".$student);
        }
    }
}
?>