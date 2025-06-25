<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password - Personal Finance</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #4f46e5;
            margin-bottom: 10px;
        }
        .content {
            background-color: #f9fafb;
            padding: 30px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .button {
            display: inline-block;
            padding: 12px 24px;
            background-color: #4f46e5;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 500;
            margin: 20px 0;
            text-align: center;
        }
        .button:hover {
            background-color: #4338ca;
        }
        .footer {
            text-align: center;
            font-size: 14px;
            color: #6b7280;
            margin-top: 30px;
        }
        .divider {
            border-top: 1px solid #e5e7eb;
            margin: 25px 0;
        }
        .text-muted {
            color: #6b7280;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">Personal Finance</div>
        <h2 style="margin: 0; color: #111827;">Reset Password Anda</h2>
    </div>

    <div class="content">
        <p>Halo <strong>{{ $user->name ?? 'Pengguna' }}</strong>,</p>
        <p>Kami menerima permintaan untuk mereset password akun Personal Finance Anda. Klik tombol di bawah ini untuk melanjutkan:</p>
        
        <div style="text-align: center; margin: 25px 0;">
            <a href="{{ $url }}" class="button">
                Reset Password
            </a>
        </div>

        <p>Atau salin dan tempel link berikut di browser Anda:</p>
        <p style="word-break: break-all;"><a href="{{ $url }}" style="color: #4f46e5;">{{ $url }}</a></p>

        <div class="divider"></div>

        <p class="text-muted">Link ini akan kedaluwarsa dalam 60 menit. Jika Anda tidak meminta reset password, abaikan email ini atau hubungi tim dukungan kami jika Anda memiliki pertanyaan.</p>
    </div>

    <div class="footer">
        <p>© {{ date('Y') }} Personal Finance. All rights reserved.</p>
        <p>R. Jardim Botânico, 414 - Jardim Botânico, Rio de Janeiro - RJ, 22461-000, Brazil</p>
    </div>
</body>
</html>