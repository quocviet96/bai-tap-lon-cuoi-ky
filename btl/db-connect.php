<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$db='qlkh';
$link=mysqli_connect($host, $user, $pass,$db);


if(!$link)
{
    echo' Không thể kết nối';
}else{
    mysqli_set_charset($link,'utf8');
}

function Khoahoc(){
    global $link;
    $query= "SELECT * FROM khoahoc ";
    return mysqli_query($link,$query);
}

function Monhoc(){
    global $link;
    $query= "SELECT * FROM monhoc ";
    return mysqli_query($link,$query);
}



function selectTenKH($id){
    global $link;
    
    $query= "SELECT TenKH FROM khoahoc WHERE MaKH=$id LIMIT 1";
    $result= mysqli_query($link,$query);
    
     if(mysqli_num_rows($result)==1)
     {
         $row= mysqli_fetch_assoc($result);
         return $row['TenKH'];
     }

}

function selectTenMH($id){
    global $link;
    
    $query= "SELECT tenMH FROM monhoc WHERE id=$id LIMIT 1";
    $result= mysqli_query($link,$query);
    
     if(mysqli_num_rows($result)==1)
     {
         $row= mysqli_fetch_assoc($result);
         return $row['tenMH'];
     }
}