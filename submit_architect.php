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
$city           = trim($data['city']           ?? '');
$experience     = trim($data['experience']     ?? '');
$coa_registered = trim($data['coa_registered'] ?? '');
$agreed_terms   = isset($data['agreed_terms']) && $data['agreed_terms'] ? 1 : 0;

if (!$full_name || !$email || !$mobile || !$city || $city === 'Choose City') {
    echo json_encode(['success' => false, 'message' => 'Please fill all required fields.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Invalid email address.']);
    exit;
}

if (!$agreed_terms) {
    echo json_encode(['success' => false, 'message' => 'Please agree to the terms.']);
    exit;
}

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("
        INSERT INTO architect_applications (full_name, email, mobile, city, experience, coa_registered, agreed_terms)
        VALUES (:full_name, :email, :mobile, :city, :experience, :coa_registered, :agreed_terms)
    ");

    $stmt->execute([
        ':full_name'      => $full_name,
        ':email'          => $email,
        ':mobile'         => $mobile,
        ':city'           => $city,
        ':experience'     => $experience,
        ':coa_registered' => $coa_registered,
        ':agreed_terms'   => $agreed_terms,
    ]);

    echo json_encode(['success' => true, 'message' => 'Application submitted successfully!']);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}