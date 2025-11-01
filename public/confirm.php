<?php
session_start();

// ✅ 1. POSTで来ているか確認
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
  header("Location: index.php");
  exit;
}

// ✅ 2. XSS対策（全項目に htmlspecialchars）
$data = array_map(function($v){
  return htmlspecialchars($v ?? '', ENT_QUOTES, 'UTF-8');
}, $_POST);

// ✅ 3. CSRFトークン生成
$csrf = bin2hex(random_bytes(16));
$_SESSION['csrf_token'] = $csrf;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>確認画面</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <div class="container">
    <h1>予約内容の確認</h1>

    <table>
      <tr><th>お名前</th><td><?= $data["name"] ?></td></tr>
      <tr><th>メール</th><td><?= $data["email"] ?></td></tr>
      <tr><th>電話番号</th><td><?= $data["tel"] ?></td></tr>
      <tr><th>担当者</th><td><?= $data["staff"] ?></td></tr>
      <tr><th>メニュー</th><td><?= $data["menu"] ?></td></tr>
      <tr><th>希望日</th><td><?= $data["date"] ?></td></tr>
      <tr><th>希望時間</th><td><?= $data["time"] ?></td></tr>
      <tr><th>メッセージ</th><td><?= nl2br($data["message"]) ?></td></tr>
    </table>

    <!-- ✅ 戻るボタン（入力内容保持） -->
    <form action="index.php" method="post" style="display:inline;">
      <?php foreach ($data as $key => $value): ?>
        <input type="hidden" name="<?= $key ?>" value="<?= $value ?>">
      <?php endforeach; ?>
      <button type="submit">戻って修正</button>
    </form>

    <!-- ✅ 完了ボタン（CSRFトークン付き） -->
    <form action="complete.php" method="post" style="display:inline;">
      <?php foreach ($data as $key => $value): ?>
        <input type="hidden" name="<?= $key ?>" value="<?= $value ?>">
      <?php endforeach; ?>
      <input type="hidden" name="csrf_token" value="<?= $csrf ?>">
      <button type="submit">この内容で予約する</button>
    </form>
  </div>
</body>
</html>
