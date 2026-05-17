<?php
// PHPMailer Loading
require_once __DIR__ . '/../libs/PHPMailer/Exception.php';
require_once __DIR__ . '/../libs/PHPMailer/PHPMailer.php';
require_once __DIR__ . '/../libs/PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendContactEmail($data) {
    
    $fromEmail   = 'bookings@hyderabadconstructions.in';
    $fromName    = 'Hyderabad Constructions';
    $adminEmail  = 'team@hyderabadconstructions.in';
    
    $to = $data['email'];
    $subject = "Enquiry - " . htmlspecialchars($data['full_name']);

    // HTML Email Template
    $message = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Enquiry</title>
        <style>
            body { font-family: Arial, sans-serif; background: #f4f4f4; margin: 0; padding: 20px; }
            .container { max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
            .header { background: linear-gradient(135deg, #e07b39, #e07b39); color: white; padding: 30px; text-align: center; }
            .content { padding: 30px; }
            .detail-row { display: flex; margin-bottom: 15px; border-bottom: 1px solid #eee; padding-bottom: 10px; }
            .label { width: 40%; font-weight: bold; color: #444; }
            .value { width: 60%; color: #333; }
            .footer { background: #f8f9fa; padding: 20px; text-align: center; font-size: 14px; color: #666; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1>Enquiry Received</h1>
                <p>Thank you for your interest!</p>
            </div>
            
            <div class="content">
                <h2>Hello ' . htmlspecialchars($data['full_name']) . ',</h2>
                <p>Your enquiry has been received successfully. Here are the details:</p>
                
                <div class="detail-row">
                    <div class="label">Full Name</div>
                    <div class="value">' . htmlspecialchars($data['full_name']) . '</div>
                </div>
                <div class="detail-row">
                    <div class="label">Email</div>
                    <div class="value">' . htmlspecialchars($data['email']) . '</div>
                </div>
                <div class="detail-row">
                    <div class="label">Mobile</div>
                    <div class="value">' . htmlspecialchars($data['mobile']) . '</div>
                </div>
                <div class="detail-row">
                    <div class="label">Query Type</div>
                    <div class="value">' . htmlspecialchars($data['query_type']) . '</div>
                </div>
                <div class="detail-row">
                    <div class="label">Message</div>
                    <div class="value">' . htmlspecialchars($data['message'] ?: 'Not specified') . '</div>
                </div>

                <p style="margin-top: 30px;">Our team will contact you shortly.</p>
            </div>
            
            <div class="footer">
                <p>© ' . date("Y") . ' Hyderabad Constructions. All rights reserved.</p>
            </div>
        </div>
    </body>
    </html>';

    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = 3;
        $mail->Debugoutput = 'error_log';
        $mail->Timeout = 20;

        $mail->isSMTP();
        
        // === GoDaddy Recommended Settings ===
        $mail->Host       = 'localhost';
        $mail->SMTPAuth   = false; // Important: No authentication
        $mail->SMTPSecure = false; // No SSL/TLS
        $mail->SMTPAutoTLS = false;
        $mail->Port       = 25;

        $mail->setFrom($fromEmail, $fromName);
        $mail->addAddress($to, $data['full_name']);
        $mail->addReplyTo($adminEmail);
        $mail->addCC($adminEmail);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $message;
        $mail->AltBody = "Thank you for your enquiry.";

        if ($mail->send()) {
            // error_log("✅ Email sent successfully to " . $to);
            return true;
        } else {
            // error_log("❌ Send failed: " . $mail->ErrorInfo);
            return false;
        }

    } catch (Exception $e) {
        // error_log("❌ PHPMailer Exception: " . $e->getMessage());
        return false;
    }
}
?>