
<!DOCTYPE html>
<html>
<head>
    <title>QR Code</title>
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .qrcode {
            background: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="qrcode">
            {!! $qrCode !!}
        </div>
    </div>
</body>
</html>
