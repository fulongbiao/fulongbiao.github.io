<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登录注册</title>
    <link rel="stylesheet" href="./css/font.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/input.css">
</head>

<body>

    <div class="shell">
        <div class="container a-container" id="a-container">
            <form action="./register.php" method="post" class="form" id="a-form">
                <h2 class="form_title title">创建账号</h2>
                <div class="form_icons">
                    <i class="iconfont icon-QQ"></i>
                    <i class="iconfont icon-weixin"></i>
                    <i class="iconfont icon-duanxin"></i>
                </div>
                <span class="form_span">请选择注册方式</span>
                <input type="text" id="Username" name="Username" placeholder="Username">
                <input type="password" id="Password" name="Password" placeholder="Password">
                <input type="password" id="ConfirmPassword" name="ConfirmPassword" placeholder="Confirm Password">
                <input type="submit" value="注册"></input>
            </form>
        </div>

        <div class="container b-container" id="b-container">
            <form action="login.php" method="post" class="form" id="b-form">
                <h2 class="form_title title">登入账号</h2>
                <div class="form_icons">
                    <i class="iconfont icon-QQ"></i>
                    <i class="iconfont icon-weixin"></i>
                    <i class="iconfont icon-duanxin"></i>
                </div>
                <span class="form_span">选择登录方式</span>
                <input type="text" name="Username" placeholder="Username">
                <input type="text" name="Password" placeholder="Password">
                <a class="form_link">忘记密码？</a>
                <input type="submit" value="登录"></input>
            </form>
        </div>

        <div class="switch" id="switch-cnt">
            <div class="switch_circle"></div>
            <div class="switch_circle switch_circle-t"></div>
            <div class="switch_container" id="switch-c1">
                <h2 class="switch_title title" style="letter-spacing: 0;">欢迎回来!</h2>
                <p class="switch_description description">已经有账号了嘛，一起进入奇妙世界吧!</p>
                <button class="switch_button button switch-btn" id="register">登录</button>
            </div>

            <div class="switch_container is-hidden" id="switch-c2">
                <h2 class="switch_title title" style="letter-spacing: 0;">你好朋友!</h2>
                <p class="switch_description description">去注册一个账号，让我们踏入奇妙的旅途!</p>
                <button class="switch_button button switch-btn">注册</button>
            </div>
        </div>
    </div>
</body>

</html>
<script type="text/javascript" src="./js/index.js"></script>
</body>

</html>