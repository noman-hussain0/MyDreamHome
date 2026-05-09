<?php
function sendBookingEmail($data) {
    $to = $data['email'];                    // Customer email
    $adminEmail = "team@hyderabadconstructions.in";        // ← Change this to your email

    $subject = "Booking Confirmation - " . htmlspecialchars($data['full_name']);

    // HTML Email Template
    $message = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Booking Confirmation</title>
        <style>
            body { font-family: Arial, sans-serif; background: #f4f4f4; margin: 0; padding: 20px; }
            .container { max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
            .header { background: linear-gradient(135deg, #4f46e5, #7c3aed); color: white; padding: 30px; text-align: center; }
            .content { padding: 30px; }
            .detail-row { display: flex; margin-bottom: 15px; border-bottom: 1px solid #eee; padding-bottom: 10px; }
            .label { width: 40%; font-weight: bold; color: #444; }
            .value { width: 60%; color: #333; }
            .footer { background: #f8f9fa; padding: 20px; text-align: center; font-size: 14px; color: #666; }
            .btn { display: inline-block; padding: 12px 25px; background: #4f46e5; color: white; text-decoration: none; border-radius: 5px; margin-top: 20px; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1>Booking Confirmed</h1>
                <p>Thank you for your interest!</p>
            </div>
            
            <div class="content">
                <h2>Hello ' . htmlspecialchars($data['full_name']) . ',</h2>
                <p>Your booking request has been received successfully. Here are the details:</p>
                
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
                    <div class="label">City</div>
                    <div class="value">' . htmlspecialchars($data['city']) . '</div>
                </div>
                <div class="detail-row">
                    <div class="label">Timeline</div>
                    <div class="value">' . htmlspecialchars($data['timeline'] ?: 'Not specified') . '</div>
                </div>
                <div class="detail-row">
                    <div class="label">Owns Plot</div>
                    <div class="value">' . htmlspecialchars($data['owns_plot'] ?: 'Not specified') . '</div>
                </div>

                <p style="margin-top: 30px;">Our team will contact you shortly.</p>
            </div>
            
            <div class="footer">
                <p>© ' . date("Y") . ' Hyderabad Constructions. All rights reserved.</p>
            </div>
        </div>
    </body>
    </html>';

    // Headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: no-reply@hyderabadconstructions.in" . "\r\n";
    $headers .= "Reply-To: $adminEmail" . "\r\n";
    $headers .= "Cc: $adminEmail" . "\r\n";

    // Send to customer and admin
    $customerSent = mail($to, $subject, $message, $headers);

    // Send copy to admin (optional)
    // $adminSubject = "New Booking Received - " . htmlspecialchars($data['full_name']);
    // $adminMessage = "New booking from " . $data['full_name'] . " (" . $data['email'] . ")";
    // mail($adminEmail, $adminSubject, $adminMessage, "From: no-reply@hyderabadconstructions.in");

    return $customerSent;
}
?>