<?php 

$array = [
    'images' => [
        'https://www.thesprucepets.com/thmb/Jdrrm1Rsbml-vvNiuvG5GaCzCOc=/450x0/filters:no_upscale():max_bytes(150000):strip_icc()/Catlyingonback-38973a890f344d3591a084de0abd40e9.jpg',
        'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4Wr0fPokJxOFMN-tN0mwMD80r9ns-kgSPuA&usqp=CAU',
        'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTDVy0vqREdtGrLR7hg8ivT0iZOcY2r8-zqQ&usqp=CAU',
        'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWw06eW_FXEOoZr6EzpW_-hO5Lm_aAbiAyLQ&usqp=CAU',
    ],
    'backgrounds' => [
        'https://wallpaperaccess.com/full/1076309.jpg',
        'https://img5.goodfon.com/wallpaper/nbig/c/fb/cat-yellow-eyes-paw-funny-cute-simple-background-digital-art.jpg'
    ],
    'navbar' => [
        [
            'name' => 'home',
            'class' => 'btnStyle',
            'uzrasas' => 'HOME',
        ],
        [
            'name' => 'klasesNariai',
            'class' => 'btnStyle',
            'uzrasas' => 'Klases Nariai',
        ],
        [
            'name' => 'kontaktai',
            'class' => 'btnStyle',
            'uzrasas' => 'Kontaktai',
        ],
        [
            'name' => 'fonas',
            'class' => 'btnStyle',
            'uzrasas' => 'Fonas',
        ]
    ]
    ];



    // home.php
    if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['age']) 
    && !empty($_POST['email']) && !empty($_POST['phone'])){
    $content = fopen('C:wamp64/www/project/text.csv', 'a');
    fwrite($content, $_POST['name'] . ', ' . $_POST['surname'] . ', ' . $_POST['age'] . ', ' . $_POST['email'] . ', ' . $_POST['phone'] . "\r\n"); 
    fclose($content);
    }
    
    
    if (isset($_POST["kontaktai"])){
        header("Location: kontaktai.php");
        exit();
    } else if (isset($_POST["fonas"])){
        header("Location: fonas.php");
        exit();
    } else if (isset($_POST["klasesNariai"])){
        header("Location: klasesNariai.php");
        exit();
    }  else if (isset($_POST["home"])){
        header("Location: home.php");
        exit();
    }
    
    
// klasesnariai.php


$tableData = []; 

if (($h = fopen('C:wamp64/www/project/text.csv', "r")) !== FALSE) {  
    // unset($_POST['submit']);
    while (($data = fgetcsv($h, 1000, ",")) !== FALSE) { 
        
        $tableData[] = $data; 
    }
    fclose($h); 
}


// kontaktai.php


// fonas


if(date('s') % 2 == 0) {
    $background = $array['backgrounds'][0];
} else {
    $background = $array['backgrounds'][1];
}


?>