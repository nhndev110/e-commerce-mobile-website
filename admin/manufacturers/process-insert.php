<?php

require_once "../check-super-admin-login.php";

try {
  if (empty($_POST['name']) || empty($_POST['address']) || empty($_POST['phone']) || empty($_POST['image']))
    throw new Exception("Vui lòng nhập đầy đủ các thông tin", 400);

  $name = $_POST['name'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $image = $_POST['image'];

  require_once '../connect.php';
  $sql = "insert into manufacturers (name, address, phone, image)
    value ('$name', '$address', '$phone', '$image')";
  mysqli_query($connect, $sql);

  $error = mysqli_error($connect);
  if (!empty($error))
    throw new Exception($error, 500);

  echo json_encode([
    "status" => "success",
    "statusCode" => 200,
    "message" => "Bạn đã thêm 1",
    "data" => [
      "id" => mysqli_insert_id($connect),
      "name" => $name,
      "address" => $address,
      "phone" => $phone,
      "image" => $image,
    ],
  ]);
} catch (Exception $e) {
  echo json_encode([
    "status" => "error",
    "statusCode" => $e->getCode(),
    "message" => $e->getMessage(),
    "data" => NULL,
  ]);
}
