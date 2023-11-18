<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Box</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway:400,700');

        *,
        *:before,
        *:after {
            box-sizing: border-box;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }

        body {
            max-height: 100vh;
            margin: 0;
            font-family: 'Raleway', sans-serif;
        }

        .container {
            position: absolute;
            width: 100%;
            height: 100%;
            margin: 0;

            &:hover,
            &:active {
                .top,
                .bottom {
                    &:before,
                    &:after {
                        margin-left: 200px;
                        transform-origin: -200px 50%;
                        transition-delay: 0.5s;
                    }
                }

                .center {
                    opacity: 1;
                    transition-delay: 0.6s;
                }
            }
        }

        .top,
        .bottom {
            &:before,
            &:after {
                content: '';
                display: block;
                position: absolute;
                width: 200vmax;
                height: 200vmax;
                top: 50%;
                left: 50%;
                margin-top: -100vmax;
                transform-origin: 0 50%;
                transition: all 0.5s cubic-bezier(0.445, 0.05, 0, 1);
                z-index: 10;
                opacity: 0.65;
                transition-delay: 0.2s;
            }
        }

        .top {
            &:before {
                transform: rotate(45deg);
                background: #FAF096;
            }

            &:after {
                transform: rotate(135deg);
                background: #FFEF64;
            }
        }

        .bottom {
            &:before {
                transform: rotate(-45deg);
                background: #FFCB7C;
            }

            &:after {
                transform: rotate(-135deg);
                background: #FFB18F;
            }
        }

        .center {
            position: absolute;
            width: 400px;
            height: 400px;
            top: 50%;
            left: 50%;
            margin-left: -200px;
            margin-top: -200px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 30px;
            opacity: 0;
            transition: all 0.5s cubic-bezier(0.445, 0.05, 0, 1);
            transition-delay: 0s;
            color: #333;

            input {
                width: 100%;
                padding: 15px;
                margin: 5px;
                border-radius: 1px;
                border: 1px solid #ccc;
                font-family: inherit;
            }

            button {
                width: 100%;
                padding: 15px;
                margin: 10px 0;
                border: none;
                border-radius: 3px;
                background-color: #4CAF50;
                color: white;
                cursor: pointer;
            }
        }

        form {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
<div class="container">
        <div class="top"></div>
        <div class="bottom"></div>
        <div class="center">
            <!-- Tambahkan form dengan metode POST -->
            <form action="{{ route('admin.login') }}" method="post">
                <!-- csrf token untuk perlindungan form Laravel -->
                @csrf
                <h2>Please Sign In</h2>
                <input type="email" name="email" placeholder="Email" />
                <input type="password" name="password" placeholder="Password" />
                <button type="submit">Login</button>
            </form>
        </div>
    </div>

    <script>
        function login() {
            // Tambahkan logika login sesuai kebutuhan Anda
            alert('Login button clicked!');
        }
    </script>
</body>

</html>
