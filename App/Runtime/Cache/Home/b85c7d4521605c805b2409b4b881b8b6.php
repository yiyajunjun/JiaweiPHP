<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Jiawei PHP Admin Framework</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A PHP Admin Framework">
    <meta name="author" content="Jiawei">
    <link href="/Snow_php_admin_framework/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Snow_php_admin_framework/Public/css/font-awesome.min.css" rel="stylesheet">
    <link href="/Snow_php_admin_framework/Public/css/simplify.min.css" rel="stylesheet">
</head>

<body class="overflow-hidden light-background">
<div class="wrapper no-navigation preload">
    <div class="sign-in-wrapper">
        <div class="sign-in-inner">
            <div class="login-brand text-center">
                <i class="fa fa-database m-right-xs"></i> Jiawei <strong class="text-skin">PAF</strong>
            </div>
            <form action="/Snow_php_admin_framework/index.php/Home/Index/check" method="post">
                <div class="form-group m-bottom-md">
                    <input type="text" name="username" class="form-control" placeholder="账号 / Account" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="密码 / Password" required>
                </div>
                <div class="form-group">
                    <input type="text" name="code" class="form-control" style="width:55%;display:inline-block;vertical-align:top" placeholder="验证码 / Verify Code" required>
                    <div style="width:42%;height:34px;display:inline-block;background-size: cover;background-image:url('/Snow_php_admin_framework/index.php/Home/Index/makeVerify')"></div>
                </div>

                <div class="form-group">
                    <div class="custom-checkbox">
                        <input name="is_remember" type="checkbox" id="chkRemember">
                        <label for="chkRemember"></label>
                    </div>
                    记住三天 / Remember me
                </div>

                <div class="m-top-md p-top-sm">
                    <button class="btn btn-success btn-block">登录 / Sign in</button>
                </div>

                <div class="m-top-md p-top-sm">
                    A PHP Admin Framework By Jiawei 2016.
                </div>

            </form>
        </div><!-- ./sign-in-inner -->
    </div><!-- ./sign-in-wrapper -->
</div><!-- /wrapper -->

<script src="/Snow_php_admin_framework/Public/js/jquery-1.11.1.min.js"></script>
<script src="/Snow_php_admin_framework/Public/js/bootstrap.min.js"></script>
<script src="/Snow_php_admin_framework/Public/js/simplify.js"></script>
</body>
</html>