<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project 01</title>
</head>
<body>
    <form action="function.php" method="get">
        <input type="text" name="num01" placeholder="Number 1">
        <select name="operation" id="">
            <label for="">Choose Operation</label>
            <option value="add">Add</option>
            <option value="sub">Sub</option>
            <option value="mul">Mul</option>
            <option value="div">Div</option>
        </select>
        <input type="text" name="num02" placeholder="Number 2">
        <br>
        <button type="submit">Calculate</button>
    </form>
</body>
</html>