<?php  include 'connection.php' ?>

<?php 
$query="select * from users";
$query_run=mysqli_query($connect,$query);

$number_of_result=mysqli_num_rows($query_run);

if($number_of_result>0){
    while($result=mysqli_fetch_array($query_run)){
        

        $user[]=array(
            'email'=>$result['email'],
        );

    }
}


echo json_encode($user)

?>