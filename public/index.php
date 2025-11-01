<?php
// 前回入力した値が戻ってきた場合に取得
$data = $_POST ?? [];
function h($str) {
  return htmlspecialchars($str ?? '', ENT_QUOTES, 'UTF-8');
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>美容室予約フォーム</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <div class="container">
    <h1>美容室予約フォーム</h1>
    <p style="text-align:center; margin-top:30px;">
      <a href="../admin/login.php">🔐 管理者ログインはこちら</a>
    </p>
    <form action="confirm.php" method="post">
      <label>お名前：</label>
      <input type="text" name="name" value="<?= h($data['name'] ?? '') ?>" required><br>

      <label>メールアドレス：</label>
      <input type="email" name="email" value="<?= h($data['email'] ?? '') ?>" required><br>

      <label>電話番号：</label>
      <input type="tel" name="tel" value="<?= h($data['tel'] ?? '') ?>" required><br>

      <label>担当者：</label>
      <select name="staff" required>
        <option value="">選択してください</option>
        <option value="佐藤" <?= (isset($data['staff']) && $data['staff'] === '佐藤') ? 'selected' : '' ?>>佐藤</option>
        <option value="鈴木" <?= (isset($data['staff']) && $data['staff'] === '鈴木') ? 'selected' : '' ?>>鈴木</option>
        <option value="高橋" <?= (isset($data['staff']) && $data['staff'] === '高橋') ? 'selected' : '' ?>>高橋</option>
      </select><br>

      <label>メニュー：</label>
      <select name="menu" required>
        <option value="">選択してください</option>
        <option value="カット">カット</option>
        <option value="カラー">カラー</option>
        <option value="パーマ">パーマ</option>
      </select><br>

      <label>希望日：</label>
      <input type="date" name="date" value="<?= h($data['date'] ?? '') ?>" required><br>

      <label>希望時間：</label>
      <input type="time" name="time" value="<?= h($data['time'] ?? '') ?>" required><br>

      <label>メッセージ：</label>
      <textarea name="message" rows="4"><?= h($data['message'] ?? '') ?></textarea><br>

      <button type="submit">確認画面へ進む</button>
    </form>
  </div>
</body>
</html>
