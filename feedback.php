<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Feedback</title>
    <style>
        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
        }
        
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        form {
            background-color: #fff;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            width: 500px;
        }
        
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        
        label {
            display: block;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #555;
        }
        
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }
        
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        
        button[type="submit"]:hover {
            background-color: #0069d9;
        }
        
        .back-button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 10px; 
            width: 45px;
            height:20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.2s;
            margin-top: 20px;
        }
        
        .back-button:hover {
            background-color: #0069d9;
        }
        
        .back-button a {
            color: #fff;
            text-decoration: none;
        }
        
        .back-button a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <form class="" action="mailer.php" method="post">
            <h1>Contact Us</h1>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
            
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            
            <label for="subject">Subject:</label>
            <input type="text" name="subject" id="subject">
            
            <label for="message">Message:</label>
            <textarea name="message" id="message"></textarea>
            
            <button type="submit" name="send">Send</button>
            
            <div class="back-button">
                <a href="index.php" onclick="history.back()">Back</a>
            </div>
        </form>
    </div>
</body>
</html>
