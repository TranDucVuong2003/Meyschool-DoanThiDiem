<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>Đăng nhập | Meyschool Đoàn Thị Điểm</title>
    <link rel="shortcut icon" href="storage/favicon.png">
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #1f3f5d 0%, #2d6a9f 50%, #439bd4 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Arial, sans-serif;
            padding: 20px;
        }

        .login-card {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.25);
            padding: 48px 44px 40px;
            width: 100%;
            max-width: 420px;
        }

        .login-logo {
            text-align: center;
            margin-bottom: 28px;
        }

        .login-logo img {
            height: 54px;
            object-fit: contain;
        }

        .login-logo h1 {
            font-size: 18px;
            font-weight: 700;
            color: #1f3f5d;
            margin-top: 12px;
            line-height: 1.3;
        }

        .login-logo p {
            font-size: 13px;
            color: #7a8fa6;
            margin-top: 4px;
        }

        .divider {
            border: none;
            border-top: 1px solid #e8ecf0;
            margin: 0 0 28px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #3a4a5c;
            margin-bottom: 7px;
        }

        .form-group input {
            width: 100%;
            padding: 11px 14px;
            border: 1.5px solid #d0d8e4;
            border-radius: 8px;
            font-size: 15px;
            color: #1f3f5d;
            outline: none;
            transition: border-color 0.2s, box-shadow 0.2s;
            background: #f8fafc;
        }

        .form-group input:focus {
            border-color: #439bd4;
            box-shadow: 0 0 0 3px rgba(67, 155, 212, 0.15);
            background: #fff;
        }

        .form-group .password-wrap {
            position: relative;
        }

        .form-group .toggle-pw {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            color: #7a8fa6;
            font-size: 14px;
            padding: 4px;
            line-height: 1;
        }

        .form-group .toggle-pw:hover {
            color: #439bd4;
        }

        #login-alert {
            display: none;
            padding: 11px 14px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 18px;
        }

        .alert-error {
            background: #fff0f0;
            color: #c0392b;
            border: 1px solid #f5c0bb;
        }

        .btn-login {
            width: 100%;
            padding: 13px;
            background: linear-gradient(135deg, #1f3f5d, #2d6a9f);
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            transition: opacity 0.2s, transform 0.1s;
            letter-spacing: 0.3px;
            margin-top: 6px;
        }

        .btn-login:hover {
            opacity: 0.9;
        }

        .btn-login:active {
            transform: scale(0.99);
        }

        .btn-login:disabled {
            opacity: 0.65;
            cursor: not-allowed;
        }

        .login-footer {
            text-align: center;
            margin-top: 24px;
            font-size: 12px;
            color: #aab4be;
        }

        .login-footer a {
            color: #439bd4;
            text-decoration: none;
        }

        @media (max-width: 480px) {
            .login-card {
                padding: 36px 24px 30px;
            }
        }
    </style>
</head>

<body>

    <div class="login-card">
        <div class="login-logo">
            <img src="storage/favicon.png" alt="Logo Meyschool Đoàn Thị Điểm">
            <h1>Meyschool Đoàn Thị Điểm</h1>
            <p>Trang quản trị nội bộ</p>
        </div>

        <hr class="divider">

        <div id="login-alert"></div>

        <form id="login-form" action="api/login.php" method="post" autocomplete="off">
            <div class="form-group">
                <label for="username">Tên đăng nhập</label>
                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Nhập tên đăng nhập"
                    autocomplete="username"
                    required>
            </div>

            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <div class="password-wrap">
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Nhập mật khẩu"
                        autocomplete="current-password"
                        required>
                    <button type="button" class="toggle-pw" id="toggle-pw" title="Hiện/ẩn mật khẩu">&#128065;</button>
                </div>
            </div>

            <button type="submit" class="btn-login" id="btn-login">Đăng nhập</button>
        </form>

        <div class="login-footer">
            <a href="index.php">&#8592; Quay về trang chủ</a>
        </div>
    </div>

    <script>
        (function() {
            var form = document.getElementById('login-form');
            var alertBox = document.getElementById('login-alert');
            var btn = document.getElementById('btn-login');
            var togglePw = document.getElementById('toggle-pw');
            var pwInput = document.getElementById('password');

            // Hiện / ẩn mật khẩu
            togglePw.addEventListener('click', function() {
                if (pwInput.type === 'password') {
                    pwInput.type = 'text';
                    togglePw.innerHTML = '&#128065;&#65039;';
                } else {
                    pwInput.type = 'password';
                    togglePw.innerHTML = '&#128065;';
                }
                pwInput.focus();
            });

            // Submit AJAX
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                hideAlert();

                btn.disabled = true;
                btn.textContent = 'Đang xử lý...';

                fetch('api/login.php', {
                        method: 'POST',
                        body: new FormData(form)
                    })
                    .then(function(res) {
                        return res.json();
                    })
                    .then(function(data) {
                        if (data.success) {
                            btn.textContent = 'Thành công! Đang chuyển hướng...';
                            window.location.href = data.redirect || 'admin/index.php';
                        } else {
                            showAlert(data.message);
                            btn.disabled = false;
                            btn.textContent = 'Đăng nhập';
                        }
                    })
                    .catch(function() {
                        showAlert('Có lỗi xảy ra. Vui lòng thử lại.');
                        btn.disabled = false;
                        btn.textContent = 'Đăng nhập';
                    });
            });

            function showAlert(msg) {
                alertBox.textContent = msg;
                alertBox.className = 'alert-error';
                alertBox.style.display = 'block';
            }

            function hideAlert() {
                alertBox.style.display = 'none';
            }
        })();
    </script>

</body>

</html>