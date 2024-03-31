<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniMaxSum</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 20px;
        }

        .result p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>MiniMaxSum</h1>
        <form method="post" action="">
            <label for="numbers">Nhập 5 số nguyên, cách nhau bởi dấu cách:</label>
            <input type="text" id="numbers" name="numbers" required>
            <button type="submit">Tính toán</button>
        </form>

        <?php
        function miniMaxSum($arr) {
            // Sắp xếp mảng theo thứ tự tăng dần
            sort($arr);

            // Tính tổng của tất cả các phần tử trong mảng
            $totalSum = array_sum($arr);

            // Tính tổng nhỏ nhất bằng cách loại bỏ phần tử đầu tiên
            $minSum = $totalSum - $arr[4];

            // Tính tổng lớn nhất bằng cách loại bỏ phần tử cuối cùng
            $maxSum = $totalSum - $arr[0];

            // In ra kết quả
            echo "<div class='result'>";
            echo "<p>Minimum Sum: $minSum</p>";
            echo "<p>Maximum Sum: $maxSum</p>";
            echo "</div>";
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Nhận dữ liệu từ form
            $input = $_POST["numbers"];

            // Chuyển dữ liệu đầu vào thành mảng các số nguyên
            $arr = array_map('intval', explode(' ', $input));

            // Gọi hàm miniMaxSum với mảng đầu vào
            miniMaxSum($arr);
        }
        ?>
    </div>
</body>
</html>
