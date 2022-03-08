<?php

$conn = new mysqli("localhost","root","ragnarok0","estacio");

if($conn->connect_error){
    echo "Erro :" .$conn->connect_error;
}
else{
    echo "Conexão efetuada com sucesso!";
}