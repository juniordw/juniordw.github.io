<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $website = isset($_POST['website']) ? $_POST['website'] : '';
    $branding = isset($_POST['branding']) ? $_POST['branding'] : '';
    $ecommerce = isset($_POST['ecommerce']) ? $_POST['ecommerce'] : '';
    $seo = isset($_POST['seo']) ? $_POST['seo'] : '';
    $message = $_POST['message'];

    // Konfigurasi email
    $to = 'juniordany09@gmail.com'; // Ganti dengan alamat email tujuan
    $subject = 'Pesan dari formulir kontak';
    $headers = "From: $email\r\n" .
        "Reply-To: $email\r\n" .
        "Content-Type: text/plain; charset=utf-8\r\n";

    // Membangun isi email
    $email_content = "Nama: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Website: $website\n";
    $email_content .= "Branding: $branding\n";
    $email_content .= "Ecommerce: $ecommerce\n";
    $email_content .= "SEO: $seo\n";
    $email_content .= "Pesan:\n$message\n";

    // Mengirim email
    if (mail($to, $subject, $email_content, $headers)) {
        // Email berhasil dikirim
        echo 'Message sent successfully.';
    } else {
        // Gagal mengirim email
        echo 'An error occurred while sending the message.';
    }
}
?>
