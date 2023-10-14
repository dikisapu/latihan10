<?php 
$conn=mysqli_connect("localhost","root","","mahasiswa");

function query($query){
    global $conn;
    $result=mysqli_query($conn,$query);
    $rows=[];
    while( $row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
    };
    return $rows;
}
function tambah($data){
    global $conn;
    mysqli_query($conn,$data);
    mysqli_fetch_assoc("SELECT * FROM mhs where id=$id");
}
?>