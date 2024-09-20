<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>متجر الإلكترونيات</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('https://example.com/electronics-background.jpg') no-repeat center center/cover;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: white;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6); /* شفافية خفيفة لجعل النص أكثر وضوحًا */
        }
        .container {
            position: relative;
            z-index: 1;
            text-align: center;
            backdrop-filter: blur(10px); /* تأثير التمويه خلف العناصر */
            padding: 20px;
            border-radius: 15px;
            background-color: rgba(255, 255, 255, 0.1); /* شفافية خلفية النص */
        }
        .container img {
            max-width: 300px;
            height: auto;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* تأثير الظل للصورة */
            transition: transform 0.3s ease-in-out;
        }
        .container img:hover {
            transform: scale(1.05); /* تأثير تكبير الصورة عند التمرير */
        }
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 15px 30px;
            background-color: #ff5733;
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-size: 18px;
            box-shadow: 0 4px 15px rgba(255, 87, 51, 0.3); /* تأثير الظل للزر */
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        .btn:hover {
            background-color: #e04b28;
            box-shadow: 0 6px 20px rgba(255, 87, 51, 0.5); /* تأثير أكبر عند التمرير */
        }
    </style>
</head>
<body>
    <div class="overlay"></div> <!-- تغطية لتقليل تباين الخلفية -->
    <div class="container">
        <img src="https://example.com/electronics-image.jpg" alt="صورة الإلكترونيات">
        <br>
        <a href="{{ url('/login') }}" class="btn">تسجيل الدخول</a>
    </div>
</body>
</html>
