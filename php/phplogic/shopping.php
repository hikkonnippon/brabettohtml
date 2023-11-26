<?php
    session_start();

    $mensaje="";

    if(isset($_POST['btnAccion'])){
        
        switch($_POST['btnAccion']){

            case 'Agregar':

                if(is_numeric( openssl_decrypt($_POST['id'],COD,KEY))){
                    $ID=openssl_decrypt($_POST['id'],COD,KEY);
                    $mensaje.="Ok ID correcto".$ID."<br/>";
                }else{
                    $mensaje.=" X ID Incorrecto".$ID."<br/>";
                    break;}

                if(is_string( openssl_decrypt($_POST['nombre'],COD,KEY))){
                    $Nombre=openssl_decrypt($_POST['nombre'],COD,KEY);
                    $mensaje.="Ok nombre correcto".$Nombre."<br/>";
                }else{
                    $mensaje.=" X nombre Incorrecto".$Nombre."<br/>";
                    break;}

                if(is_numeric( openssl_decrypt($_POST['cantidad'],COD,KEY))){
                    $Cantidad=openssl_decrypt($_POST['cantidad'],COD,KEY);
                    $mensaje.="Ok cantidad correcto".$Cantidad."<br/>";
                }else{
                    $mensaje.=" X cantidad Incorrecto".$Cantidad."<br/>";
                    break;}

                if(is_numeric( openssl_decrypt($_POST['precio'],COD,KEY))){
                    $Precio=openssl_decrypt($_POST['precio'],COD,KEY);
                    $mensaje.="Ok precio correcto".$Precio."<br/>";
                }else{
                    $mensaje.=" X precio Incorrecto".$Precio."<br/>";
                    break;}

            if(!isset($_SESSION['SHOPPING'])){
                $producto=array(
                    'ID'=>$ID,
                    'NOMBRE'=>$Nombre,
                    'CANTIDAD'=>$Cantidad,
                    'PRECIO'=>$Precio,
                );
                $_SESSION['SHOPPING'][0]=$producto;
            }else{
                $numeroProductos=count($_SESSION['SHOPPING']);
                $producto=array(
                    'ID'=>$ID,
                    'NOMBRE'=>$Nombre,
                    'CANTIDAD'=>$Cantidad,
                    'PRECIO'=>$Precio,
                );

                $_SESSION['SHOPPING'][$numeroProductos]=$producto;
            }
            $mensaje= print_r($_SESSION,true);

            break; 
            
            case "Eliminar":
                if(is_numeric( openssl_decrypt($_POST['id'],COD,KEY))){
                    $ID=openssl_decrypt($_POST['id'],COD,KEY);
                    foreach ($_SESSION['SHOPPING'] as $index=>$producto){
                        if($producto['ID']==$ID){
                            unset($_SESSION['SHOPPING']['$index']);
                        }
                    }
                }
                else{
                $mensaje.=" X ID Incorrecto".$ID."<br/>";
                break;}
            break;    
        }
    }
?>