<?php include "includes/db.php"; ?>
<?php
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
	$product = $_POST['client_product'];
	$price = $_POST['client_price'];




	$query = $conn->query("INSERT INTO `clients`(`client_name`, `client_phone`,`client_product`,`client_price`) VALUES('$name','$phone','$product','$price')");
	
    if ($query) {
        echo '<script>document.location="spasibo.html"</script>';
    } else {
        echo 'Не добавлен';
    }
}else{
	echo 'Нет Пост';
}
?>