<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GROUP 4</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .section {
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 5px;
        }
        .create-file { background-color: #e6f3ff; }
        .check-file { background-color: #fff0e6; }
        .read-file { background-color: #e6ffe6; }
        .read-lines { background-color: #ffe6e6; }
        pre {
            background-color: #f8f8f8;
            border: 1px solid #ddd;
            border-radius: 3px;
            padding: 10px;
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>GROUP 4 Exercise 3</h1>
        
        <?php
        require_once 'file_operations_function.php';

        $filename = 'example.txt';
        $content = "MAAYONG GABI.\nUnsa mani dong .\nALICE GOU NAHULI NA!!.";

        echo performFileOperations($filename, $content);
        ?>
    </div>
</body>
</html>