<?php
    function foo(){
        $numargs = func_num_args();
        echo "numbers of args :$numargs \n";
        if($numargs > 2){
            echo "second arg is:".func_get_arg(1)."\n";
        }else{
            echo "there is less than three! \n";
        }
        $arg_list = func_get_args();
        for($i=0;$i<$numargs;$i++){
            echo "argument $i is:".$arg_list[$i]."\n";
        }
    }
    foo(1,2);
    