<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン画面へ</title>
</head>

<body>
    <p>ログイン画面は<?= $this->Html->link(
                    "こちら",
                    [
                        "controller" => "Users",
                        "action" => "login"
                    ]
                ) ?></p>
</body>

</html>
