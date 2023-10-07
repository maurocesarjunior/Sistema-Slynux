<!DOCTYPE html>
<html>

<head>
    <title>Login Slynux</title>
    <style>
        @use postcss-preset-env;
        @import url(https://weloveiconfonts.com/api/?family=fontawesome);


        @import url(https://meyerweb.com/eric/tools/css/reset/reset.css);


        [class*="fontawesome-"]:before {
            font-family: 'FontAwesome', sans-serif;
        }

        /* ---------- GENERAL ---------- */

        body {
            background: #f4f4f4;
            color: #5a5656;
            display: grid;
            font-family: 'Open Sans', sans-serif;
            line-height: 1.5;
            margin: 0;
            min-height: 100vh;
            place-items: center;
        }

        a {
            text-decoration: none;
        }

        h1 {
            font-size: 1em;
        }

        h1,
        p {
            margin-bottom: 10px;
        }

        strong {
            font-weight: bold;
        }

        .uppercase {
            text-transform: uppercase;
        }

        /* ---------- LOGIN ---------- */

        #login {
            margin: 50px auto;
            width: 300px;
        }

        form fieldset input[type="text"],
        input[type="password"] {
            appearance: none;
            background: #e5e5e5;
            border: none;
            border-radius: 3px;
            color: #5a5656;
            font-family: inherit;
            font-size: 14px;
            height: 50px;
            outline: none;
            padding: 0px 10px;
            width: 280px;
        }

        form fieldset input[type="submit"] {
            appearance: none;
            background-color: #04AF5E;
            border: none;
            border-radius: 3px;
            color: #f4f4f4;
            cursor: pointer;
            font-family: inherit;
            height: 50px;
            text-transform: uppercase;
            width: 300px;
        }

        form fieldset a {
            color: #5a5656;
            font-size: 10px;
        }

        form fieldset a:hover {
            text-decoration: underline;
        }

        .btn-round {
            background: #5a5656;
            border-radius: 50%;
            color: #f4f4f4;
            display: block;
            font-size: 12px;
            height: 50px;
            line-height: 50px;
            margin: 30px 125px;
            text-align: center;
            text-transform: uppercase;
            width: 50px;
        }

        footer {

            color: #5a5656;
            text-align: center;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <div id="login">

        <h1><strong>Bem-vindo.</strong> Login.</h1>

        <form action="#" method="post">

            <fieldset>

                <p><input type="text" required placeholder="Username"></p>

                <p><input type="password" required placeholder="Password"></p>

                <p><input type="submit" value="Login"></p>

            </fieldset>

        </form>
        <?php if (isset($error)): ?>
            <p class="error">
                <?= $error ?>
            </p>
        <?php endif; ?>

    </div>

    <footer>
        <p>&copy; 2023 Slynux </p>
    </footer>

</body>

</html>