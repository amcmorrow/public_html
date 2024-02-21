<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
  $file = $_FILES['file'];
  if ($file['type'] === 'text/plain' && $file['error'] === UPLOAD_ERR_OK) {
    $uploadDir = 'uploads/';
    if (!file_exists($uploadDir)) {
      mkdir($uploadDir, 0777, true);
    }
    $fileName = uniqid() . '.txt';
    $filePath = $uploadDir . $fileName;
    move_uploaded_file($file['tmp_name'], $filePath);
    echo json_encode(array('success' => true, 'fileUrl' => $filePath));
  } else {
    echo json_encode(array('success' => false));
  }
} else {
  echo json_encode(array('success' => false));
}
