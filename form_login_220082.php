<!DOCTYPE html>
<html lang="en">
<head>
    <title>PetLuy || Website</title>
        <?php
        include"utility/main.php";
        ?>
    <style>
                :root {
            --a: black;
        }
       
        body {
            margin: 0;
            width: 100vw;
            height: 100vh;
            background: #ecf0f3;
            display: flex;
            align-items: center;
            text-align: center;
            justify-content: center;
            place-items: center;
            overflow: hidden;
            font-family: 'Poppins', sans-serif;
        }

        .main {
            position: relative;
            width: 350px;
            height: 500px;
            border-radius: 20px;
            padding: 40px;
            box-sizing: border-box;
            background: #ecf0f3;
            box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
        }
        form{
            display: grid;
            gap:19px;
        }

        .pet-logo {
            height: 100px;
            width: 100px;
            background: url("img/paws.png ");
            margin: auto;
            border-radius: 50%;
            box-sizing: border-box;
            box-shadow: 7px 7px 10px #cbced1, -7px -7px 10px white;
            background-size: cover; 
            background-position: center; 
             background-repeat: no-repeat; 
    
        }

        .login-title {
            margin-top: 10px;
            font-weight: 900;
            font-size: 1.8rem;
            color: #1DA1F2;
            letter-spacing: 1px;
        }

        .label,
        .input {
            display: block;
            width: 100%;
            padding: 0;
            border: none;
            outline: none;
            box-sizing: border-box;
        }

        .label {
            margin-bottom: 4px;
        }

        .label:nth-of-type(2) {
            margin-top: 12px;
        }

        .input::placeholder {
            color: gray;
        }

        .input {
            background: var(--abu-muda);
            padding: 10px;
            padding-left: 20px;
            height: 50px;
            font-size: 14px;
            border-radius: 50px;
            box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
        }
        .btn {
            color: white;
            margin-top: 20px;
            background: #1DA1F2;
            height: 40px;
            border-radius: 20px;
            cursor: pointer;
            font-weight: 900;
            box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px white;
            transition: 0.5s;
        }

        .btn:hover {
            box-shadow: none;
        }
    </style>
</head>
<body>
        
    <div class="main">
        <div class="pet-logo"></div>
        <div class="login-title">Login</div>
        <form method="post" action="login_220082.php">
            <table >
                <tr>
                    <td class="label">Username</td>
                </tr>
                <tr>
                    <td colspan="6"><input type="text" name="username_220082" class="input"placeholder="Your Username" required></td>
                </tr>
                <tr>
                    <td class="label">Password</td>
                </tr>
                <tr>
                    <td colspan="6"><input type="password" name="password_220082" class="input"id="pass" placeholder="Your Password" required></td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp; 
                        <input type="checkbox" class="pw" onclick="show()">Show Password</td>
                    <td>&nbsp;</td>
                    
                </tr>
                <tr>
                    <td >&nbsp;
                        <input type="submit" name="login" class="btn input" value="LOGIN">
                    </td>
                    
                    <td >&nbsp;
                        <input type="reset" name="reset" class="btn input" value="RESET">
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <script>
        function show() {
            var x = document.getElementById("pass");
            if (x.type === "password") {
                x.type = 'text'
            } else {
                x.type = 'password'
            }
        }
    </script>
</body>
</html>
