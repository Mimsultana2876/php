<!Docutype html>
<head>
    <title>
        calulator1
</title>
</head>
<?php
$array_a =array(
    array(1),
    array(2),
    array(3),
    array(4),
);
$array_b = array(
    array(1),
    array(2),
    array(3),
    array(4),
);

for ($i=0;$i<2;$i++){
    for($j=0;$j<2;$j++){
        $result=  $array_a[$i][$j]."";
        echo $result;
       
    }
}
for ($i=0;$i<2;$i++){
    for($j=0;$j<2;$j++){
        $result=  $array_b[$i][$j]."";
       echo $result;
    }
}
if (isset($_post['operator'])){

    
    $array_a_1= $_POST['arra_1' ];
    $array_a_2 = $_POST['arra_2'];
    $array_a_3 = $_POST['arra_3'];
    $array_a_4 = $_POST['arra_4'];
    $array_b_1 = $_POST['arrb_1']; 
    $array_b_2 = $_POST['arrb_2']; 
    $array_b_3 = $_POST['arrb_3']; 
    $array_b_4 = $_POST['arrb_4']; 
    $operator = $_POST['operator'];
    echo $array_a;
    if ($operator == "A+B"){
        $result = $array_a +  $array_b;
    }
    else if ($operator == "A-B"){
        $result = $array_a - $array_b;
    }
    else{
        $result = $array_a * $array_b;
    }
      
}




?>
<body>
    <h1> first calculator</h1>
    <form method = "post">
        <p> input A </p>
        <lable>
            arra_1
</lable>
        <input type = "number"; name="arra_1";>
        <lable>
            arra_2
</lable>
        <input type = "number";name="arra_2";>
        <br>
        <lable>
            arra_3
</lable>
        <input type = "number";name="arra_3";>
        <lable>
            arra_4
</lable>
        <input type = "number";name="arra_4";>
i        <br>
        <p> input B </p>
        <lable>
            arrb_1
</lable>
        <input type = "number"; name="arrb_1";>
        <lable>
            arrb_2
</lable>
        <input type = "number"; name="arrb_2";>
        <br>
        <lable>
            arrb_3
</lable>
        <input type = "number"; name="arrb_3";>
        <lable>
            arrb_4
</lable>
        <input type = "number"; name="arrb_4";>
        <br>
        <br>
        <input type = "submit"; value = "A+B"; name = "operator";>
        <input type = "submit"; value  = "A-B"; name = "operator";>
        <input type = "submit"; value  = "A*B"; name = "operator";>
        <lable>
            result
</lable>
        <input  value="<?php echo $result; ?>">

        
</form>
</body>