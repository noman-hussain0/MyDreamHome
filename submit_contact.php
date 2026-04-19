<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

$host   = '127.0.0.1';
$dbname = 'hyderabad_constructions';
$user   = 'root';
$pass   = '';

$data = json_decode(file_get_contents('php://input'), true);

$full_name      = trim($data['full_name']      ?? '');
$email          = trim($data['email']          ?? '');
$mobile         = trim($data['mobile']         ?? '');
$query_type     = trim($data['query_type']     ?? '');
$message        = trim($data['message']        ?? '');
$whatsapp_optin = isset($data['whatsapp_optin']) && $data['whatsapp_optin'] ? 1 : 0;

if (!$full_name || !$email || !$mobile) {
    echo json_encode(['success' => false, 'message' => 'Please fill all required fields.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Invalid email address.']);
    exit;
}

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("
        INSERT INTO contact_queries (full_name, email, mobile, query_type, message, whatsapp_optin)
        VALUES (:full_name, :email, :mobile, :query_type, :message, :whatsapp_optin)
    ");

    $stmt->execute([
        ':full_name'      => $full_name,
        ':email'          => $email,
        ':mobile'         => $mobile,
        ':query_type'     => $query_type,
        ':message'        => $message,
        ':whatsapp_optin' => $whatsapp_optin,
    ]);

    echo json_encode(['success' => true, 'message' => 'Enquiry submitted successfully!']);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}