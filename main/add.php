<?php  session_start();
include "db.php"; ?>
<?php
if(isset($_POST['name'])){
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['phone'] = $_POST['phone'];
	$product = $_POST['client_product'];
	$price = $_POST['client_price'];



	$query = $conn->query("INSERT INTO `clients`(`client_name`, `client_phone`,`client_product`,`client_price`) VALUES('$_SESSION[name]','$_SESSION[phone]','$product','$price')");
	
    if ($query) {
        echo '<script>document.location="spasibo/spasibo.php"</script>';
    } else {
        echo 'Не добавлен';
    }
}else{
	echo 'Нет Пост';
}
?>