<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Alat</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .custom-box {
            width: 460px;
            height: 820px;
            background-color: hsl(0, 0%, 100%);
            position: relative;
            border-radius: 20px;
            padding-top: 50px;
            padding-bottom: 30px; 
        }
        .notification-bar {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            background: hsl(0, 0%, 95%);
            padding: 5px 15px;
            border-bottom: 1px solid hsl(0, 0%, 95%);
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .card {
            border-radius: 10px;
            padding: 15px;
            background-color: hsl(0, 0%, 95%);
        }
        .btn-blue {
            background-color: #007bff;
            color: white;
            border-radius: 5px;
        }
        .header-text {
            font-weight: bold;
        }
        .muted-text {
            color: hsl(0, 0%, 0%);
        }
        .bottom-bar {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: hsl(0, 0%, 95%);
            padding: 10px;
            box-shadow: 0 -2px 5px rgba(0,0,0,0.1);
            border-top: 1px solid #ddd;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="custom-box p-3">
            <div class="notification-bar">
                <span>9:41</span>
                <div>
                    <i class="fas fa-signal"></i>
                    <i class="fas fa-wifi"></i>
                    <i class="fas fa-battery-full"></i>
                </div>
            </div>

            <div class="container mt-3">
                <div class="d-flex align-items-center" style="min-height: 60px; padding-top: 10px;">
                    <button class="btn btn-outline-primary mr-3 px-3 py-2">
                        <i class="fa fa-arrow-left"></i>
                    </button>
            
                    <div class="ml-auto">
                        <span class="muted-text font-weight-bold">CekDong!</span>
                        <span class="header-text font-weight-bold ml-1">Booking Alat</span>
                    </div>
                </div>
            </div>
    
            <div class="card mt-3">
                <div class="d-flex align-items-center">
                    <img src="Frame 2377 (4).png"Camera" width="80" class="mr-3">
                    <div>
                        <h5 class="header-text">CAMERA CANON EOS 4000D</h5>
                        <p class="muted-text mb-1">Disewakan pada tanggal 20/11/24 <i class="fas fa-calendar-alt"></i></p>
                        <p class="muted-text mb-1">E17_YANUAR - CREW ITS TV</p>
                        <p class="muted-text mb-1">07.00 - 19.00</p>
                        <p>Liputan: <strong>Pengukuhan Proffesor</strong></p>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-3">
                    <button class="btn btn-light">-</button>
                    <span class="mx-2">1</span>
                    <button class="btn btn-light">+</button>
                </div>
            </div>

            <div class="bottom-bar d-flex justify-content-between align-items-center">
                <span class="muted-text">Teknisi hari ini<br><strong>E17_AJI - TEKNISI ITS TV</strong></span>
                <button class="btn btn-blue">KONFIRMASI TEKNISI</button>
            </div>
        </div>
    </div>
</body>
</html>