<?php
session_start();

// 環境変数を読み込む
$env_path = __DIR__ . '/.env';
if (file_exists($env_path)) {
  $lines = file($env_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
  foreach ($lines as $line) {
    if (strpos($line, '=') !== false) {
      [$name, $value] = explode('=', $line, 2);
      $_ENV[trim($name)] = trim($value);
    }
  }
}

$admin_user = $_ENV['ADMIN_USER'] ?? '';
$admin_pass = $_ENV['ADMIN_PASS'] ?? '';

$error = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $user = $_POST["user"] ?? '';
  $pass = $_POST["pass"] ?? '';

  if ($user === $admin_user && $pass === $admin_pass) {
    $_SESSION["admin_logged_in"] = true;
    header("Location: list_reserve.php");
    exit;
  } else {
    $error = "ユーザー名またはパスワードが違います。";
  }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>管理ログイン</title>
  <style>
    body { font-family: sans-serif; background: #f4f4f4; }
    .login-box {
      width: 350px; margin: 120px auto; padding: 30px;
      background: white; border-radius: 8px; box-shadow: 0 0 8px rgba(0,0,0,0.1);
    }
    h1 { text-align: center; }
    input { width: 100%; padding: 10px; margin: 10px 0; }
    button { width: 100%; padding: 10px; background: #007bff; color: #fff; border: none; border-radius: 4px; }
    .error { color: red; text-align: center; }
  </style>
</head>
<body>
  <div class="login-box">
    <h1>管理ログイン</h1>
    <?php if ($error): ?>
      <p class="error"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>
    <form method="POST">
      <input type="text" name="user" placeholder="ユーザー名" required>
      <input type="password" name="pass" placeholder="パスワード" required>
      <button type="submit">ログイン</button>
    </form>
  </div>
</body>
</html>
