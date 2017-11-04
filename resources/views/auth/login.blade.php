<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>SEA Administrator - Login</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald|Open+Sans|Open+Sans+Condensed:300" rel="stylesheet"
          type="text/css"/>
    <link href="build/css/sea.css" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="https://warosu.org/data/biz/img/0001/64/1393754609775.png"
          type="image/vnd.microsoft.icon">
    <script type="text/javascript" src="build/js/sea.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#form_login #user').watermark('Digite seu usuário/login');
            $('#form_login #password').watermark('Digite sua senha');

            $(document).bind("contextmenu", function (e) {
                return false;
            });
        });
    </script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrap">
    <section>
        <div id="box-logo">
            <img src="build/assets/brtalk_login.png" alt="SEA"/>
            <span>Sistema de RH</span>
        </div>
        <div id="box-form">
            <div id="box-erro"></div>
            <form name="form_login" id="form_login" method="post" action="" accept-charset="utf-8">
                <input type="text" name="matricula" id="user" maxlength="30" autocomplete="off"/>
                <input type="password" name="senha" id="password" maxlength="12" autocomplete="off"/>
                <button type="submit" name="login" value="Entrar">Entrar</button>
            </form>
        </div>
    </section>
    <footer>
        <span id="sys_info">
                    © 2014-2016 <b>SEA RH - Sistema de RH</b> | versão 2.0
        </span>
        <span id="sys_dev">
            Desenvolvido por<a href="https://msanthiago.com.br"><b>PRO INPUT SISTEMAS.</b></a>
        </span>
    </footer>
</div>
</body>
</html>