<?php
// Simulate successful payment condition (replace with your actual logic)
$payment_verified = true;

if ($payment_verified) {
    // Provide download link to the PDF file
    $file = 'C:/Users/DJ/Downloads/New folder/html5up-minimaxing/ANGER RESOLUTION PROGRAM.pdf'; // Replace with the actual path to your PDF file
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="ANGER_RESOLUTION_PROGRAM.pdf"');
    readfile($file);
    exit;
} else {
    // Handle error or redirect to payment page
    echo 'Payment verification failed. Please purchase the product.';
}
?>
