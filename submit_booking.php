<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

include 'includes/connection.php';

$data = json_decode(file_get_contents('php://input'), true);

$full_name    = trim($data['full_name']    ?? '');
$email        = trim($data['email']        ?? '');
$mobile       = trim($data['mobile']       ?? '');
$city         = trim($data['city']         ?? '');
$timeline     = trim($data['timeline']     ?? '');
$owns_plot    = trim($data['owns_plot']    ?? '');
$agreed_terms = isset($data['agreed_terms']) && $data['agreed_terms'] ? 1 : 0;

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
        INSERT INTO bookings (full_name, email, mobile, city, timeline, owns_plot, agreed_terms)
        VALUES (:full_name, :email, :mobile, :city, :timeline, :owns_plot, :agreed_terms)
    ");

    $stmt->execute([
        ':full_name'    => $full_name,
        ':email'        => $email,
        ':mobile'       => $mobile,
        ':city'         => $city,
        ':timeline'     => $timeline,
        ':owns_plot'    => $owns_plot,
        ':agreed_terms' => $agreed_terms,
    ]);

    echo json_encode(['success' => true, 'message' => 'Booking submitted successfully!']);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}