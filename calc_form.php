<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>計算アプリ</h1>
    <h2>計算式を入力してください</h2>
    <form action="answer.php" method="POST">
        <input type="number" name="num1" required>
            <select name="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="×">×</option>
                <option value="÷">÷</option>
            </select>
        <input type="number" name="num2" required>
        <input type="submit" value="計算">
    </form>
</body>
</html>