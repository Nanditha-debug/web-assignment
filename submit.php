<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Application Submitted</title>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600;800&display=swap" rel="stylesheet">
<style>
    body {
        background: #e8fff4;
        font-family: 'Montserrat', sans-serif;
        padding: 40px;
    }
    .box {
        width: 60%;
        background: white;
        margin: auto;
        padding: 30px;
        border-radius: 10px;
        border-left: 10px solid #00aa55;
        box-shadow: 0 0 10px rgba(0,0,0,0.2);
    }
    h2 {
        text-align: center;
        color: #00aa55;
        font-weight: 800;
        font-size: 28px;
    }
    .info {
        font-size: 20px;
        margin: 15px 0;
        color: #333;
    }
    span {
        font-weight: 600;
        color: #0066ff;
    }
</style>
</head>
<body>
<div class="box">
    <h2>Application Received Successfully!</h2>
    <p class="info"><span>Name:</span> <?php echo $_POST['name']; ?></p>
    <p class="info"> <span>Email:</span> <?php echo $_POST['email']; ?></p>
    <p class="info"> <span>Phone:</span> <?php echo $_POST['phone']; ?></p>
    <p class="info">📚 <span>Course:</span> <?php echo $_POST['course']; ?></p>
</div>
</body>
</html>
