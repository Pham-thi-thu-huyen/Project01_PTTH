<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <style>
        html {
            font-family:'Segoe UI', Tahoma, Verdana, sans-serif
        }
        body {
            background-color: #ccc;
        }

        form {
            background-color: #fff;
            margin: 1rem 3rem;
            padding: 1rem;
        }

        .if-group {
            margin: 1rem 0;
        }

        label {
            display: inline-block;
            width: 200px;
            font-weight: bold;
        }

        .ipt_control {
            width: calc(100% - 200px - 2rem);
            padding: .5rem;
            border: #000 1px solid;
            border-radius: 0.2em;
        }
        .submit_btn {
            background-color: green;
            color: yellow;
            opacity: .75;
            padding: 0.75em;
            min-width: 9em;
            cursor: pointer;
        }
        .reset_btn {
            background-color: red;
            color: yellow;
            opacity: .75;
            padding: 0.75em;
            min-width: 9em;
            cursor: pointer;
        }

        .submit_btn:hover {
            opacity: 1;
        }
    </style>
</head>
<body>
    <h1 align=center>Đăng kí thông tin</h1>
    <form action="" method="post">
        <div class="if-group">
            <label for="user_name">Nhập tên người dùng:</label>
            <input type="text" name="user_name" id="user_name" class="ipt_control"/>
        </div>
        <div class="if-group">
            <label for="login_name">Nhập tài khoản:</label>
            <input type="text" name="login_name" id="login_name" class="ipt_control"/>
        </div>
        <div class="if-group">
            <label for="login_password">Nhập mật khẩu:</label>
            <input type="password" name="login_password" id="login_password" class="ipt_control"/>
        </div>
        <div class="if-group">
            <label for="check_login_password">Xác nhận mật khẩu:</label>
            <input type="password" name="check_login_password" id="check_login_password" class="ipt_control"/>
        </div>
        <div class="if-group">
            <label for=""></label>
            <input type="submit" name="submit_btn" value="Xác nhận" class="submit_btn">
        </div>
        <input type="reset" name="reset_btn" value="Xóa" class="reset_btn">
    </form>

    <?php
    if(isset($_POST["submit_btn"])){
        $user_name =$_POST["user_name"];
        $lgin_name =$_POST["login_name"];
        $lgin_pw =$_POST["login_password"];
        $chk_pw =$_POST["check_login_password"];
        if (!empty($user_name) && !empty($lgin_name) && !empty($lgin_pw) && !empty($chk_pw)) {
            if ($lgin_pw == $chk_pw) {
                $_SESSION["user name"] = $user_name;
                $_SESSION["login name"] = $lgin_name;
                $_SESSION["login password"] = $lgin_pw;
                echo "<h3>Đăng kí thành công</h3>";
                echo "<p>Tên người dùng: ".$_SESSION["user name"] ."<p>";
                echo "<p>Tên đăng nhập: ".$_SESSION["login name"] ."<p>";
                echo "<p>Mật khẩu: ".$_SESSION["login password"] ."<p>";
                echo "<p>Tới trang <a href='Dangnhap.php'>Đăng nhập</a></p>";
            }else {
                echo "<h2>Mật khẩu không khớp</h2>";
            }
        }else {
            echo "<h2>Vui lòng nhập đủ thông tin</h2>";
        }
    }
    ?>
</body>
</html>