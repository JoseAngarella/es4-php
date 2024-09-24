<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $str="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore porro est nihil, placeat accusantium 
            necessitatibus officiis in aut maxime repellat ea sequi saepe inventore ipsa aliquam. Vitae corporis aperiam 
            sapiente.";
        echo "<p style='color:green' >$str </p>";
        echo "<p style='color:blue' > ". strtoupper($str) ."</p>";
        echo "<span style='color:red' > numero di caratteri: ". mb_strlen($str) ."</span>";
        echo "<span style='color:yellow' > numero di parole: ". str_word_count($str) ."</span>";

    ?>
    
</body>
</html>