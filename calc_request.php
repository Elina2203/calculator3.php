<?php
$output="default text message";
if (
    array_key_exists('number-1', $_POST) &&
    array_key_exists('number-2', $_POST) &&
    array_key_exists('operator', $_POST)
) {
    $n1 = $_POST['number-1'];
    $n2 = $_POST['number-2'];
    $operator = $_POST['operator'];
    $operator_list = ['+' => null, '-' =>  null, '*'=> null, '/'=>null,"**"=>null ];

    if (is_numeric($n1) && is_numeric($n2) && array_key_exists($operator, $operator_list)
    ) {
        switch ($operator) {
            case "+":
                echo $n1+$n2;
                break;
            case "-":
                echo $n1-$n2;
                 break;
            case "*":   
                 echo $n1*$n2;
                break;
            case "/":
               $mod= $n1%$n2;
             
               echo ($n1-$mod)/$n2 ."+". $mod ."/" .$n2;
                break;
            case "**":
                    echo $n1**$n2;
                   break;

             default: 
              
           echo "unsuported operation";
        }
    }
    else {
        echo "values are invalid";
    }

}



    