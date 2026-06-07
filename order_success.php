<?php
session_start();
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Order Success</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #FFA726, #FFB74D);
            font-family: Arial;
        }

        .card {
            background: #FF9800;
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            color: white;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            animation: fadeIn 0.8s ease-in-out;
        }

        .icon {
            font-size: 60px;
            animation: bounce 1.2s infinite;
        }

        h1 {
            margin: 15px 0;
        }

        .btn {
            margin-top: 20px;
            padding: 10px 20px;
            border: none;
            background: white;
            color: #FF9800;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
        }

        .btn:hover {
            background: #ffe0b2;
        }

        @keyframes fadeIn {
            from {opacity:0; transform:scale(0.9);}
            to {opacity:1; transform:scale(1);}
        }

        @keyframes bounce {
            0%,100%{transform:translateY(0);}
            50%{transform:translateY(-10px);}
        }
    </style>
</head>

<body>

<div class="card">
    <div class="icon">🍔</div>
    <h1>Order Placed ✅</h1>
    <p>Thank you, <b><?php echo $username; ?></b></p>

    <button class="btn" onclick="goHome()">Continue Shopping</button>
</div>
<script>
    function goHome() {
        window.location.href = "index.php";
    }

    setTimeout(() => {
        window.location.href = "index.php";
    }, 4000);
</script>
</body>
</html>