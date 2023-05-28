<?php 
session_start();
include 'connect.php';
$userID = $_SESSION['user_id'];
 
if (isset($_POST['cashin'])) {
	$load = $_POST['load'];
    $amount = $_POST['amount'];
    $num = $_POST['num'];
    $confee = 0;
    $ticket = 0;
 
if ($amount == 50){
    $confee = 10;
    $ticket = 40;
    $total = $amount - $confee;
} else if ($amount == 100){
    $confee = 20;
    $ticket = 80;
    $total = $amount - $confee;
}else if ($amount == 250){
    $confee = 50;
    $ticket = 200;
    $total = $amount - $confee;
}else if($amount == 500){
    $confee = 50;
    $ticket = 450;
    $total = $amount - $confee;
}
function generateReferenceNumber() {
    $referenceNumber = "";
 
    for ($i = 0; $i < 8; $i++) {
        $referenceNumber .= mt_rand(0, 9);
    }
 
    return $referenceNumber;
}
 
$randomReference = generateReferenceNumber();
$query = "INSERT INTO `transactiontbl`(`user_id`, `transaction_type`, `gcash_no`, `cico_amount`, `ref_no`, `process_fee`, `convert_fee`, `ticket`,`admin_confirmation`, `transaction_status`) VALUES 
                                      ('$userID','$load ','$num', '$amount','$randomReference','0','$confee','$ticket','Pending','Pending')";
$result = mysqli_query($conn, $query);
 
// $query2 = "UPDATE `userstbl` SET `user_balance`= (SELECT user_balance FROM userstbl WHERE user_id = '$userID') + '$total' WHERE user_id = '$userID'";
// $result2 = mysqli_query($conn, $query2);
 
if($result && $result2) {
    echo "Load Converting.";
} else {
    echo "Error Loading Your Wallet.";
}
 
}header('Location: cashin.php');
?>