<?php
if(isset($_POST['submit'])){
    if(isset($_POST['usr'])){
        include_once('ClassPoo.php');
        $user = $_POST['usr'];
        $pass = $_POST['pss'];
        $loguin = New loguin();
        $loguin->entrarDatos($user,$pass);
        $loguin->loguear();
        $response = $loguin->Loguear();

        if($response ==="true"){
            header("location:../home.php");
        }
        else{
            echo'<script language="javascript">alert("Error en datos");</script>';
        }
    }
}



