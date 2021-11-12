<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 2 | Muhamad Ahmadin</title>

    <style>
        body {
            padding: 30px;
        }

        .form-control {
            margin: 20px 10px;
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <h1>Assignment 2 CAP214 | Muhamad Ahmadin</h1>
    <div class="form-control">
        <label for="username">Username:</label>
        <input type="text" id="username" size="50" maxlength="40" name="username" placeholder="Enter username"
            value="this is the default value when page rendered">
    </div>

    <div class="form-control">
        <label for="email">Email:</label>
        <input type="email" id="email" size="50" maxlength="40" name="email" placeholder="Enter email">
    </div>

    
    <div class="form-control">
        <label>Scrolling List</label>
        <select name="scrollingList" size=4>
            <option>Motorola 68000</option>
            <option>Intel 8088</option>
            <option>Intel Pentium MMX</option>
            <option>Intel Pentium II</option>
            <option>Intel Pentium III</option>
        </select>
    </div>

    <div class="form-control">
        <label>Menu Buttons</label>
        <select name="menuButtons">
            <option>Motorola 68000</option>
            <option>Intel 8088</option>
            <option>Intel Pentium MMX</option>
            <option>Intel Pentium II</option>
            <option>Intel Pentium III</option>
        </select>
    </div>
</body>

</html>