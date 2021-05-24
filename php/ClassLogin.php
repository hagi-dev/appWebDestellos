<?php


            
    class ClassLogin{

        function __construct(){
            
        }
        
        function login($password,$usuario){
            if( $usuario==="admin" and $password ==="123"){
                return 1;
            }else{
                return 0;
            }
            
        }    
    }