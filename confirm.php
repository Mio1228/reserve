<?php
// POSTデータを受け取る
$name  = $_POST['name'] ?? '';
$phone = $_POST['phone'] ?? '';
$menu  = $_POST['menu'] ?? '';
$staff = $_POST['staff'] ?? '';
$date  = $_POST['date'] ?? '';
$time  = $_POST['time'] ?? '';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>予約確認画面</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>予約内容確認</h1>
    <div class="confirm-box">
      <p><strong>お名前:</strong> <?php echo htmlspecialchars($_POST['name']); ?></p>
      <p><strong>電話番号:</strong> <?php echo htmlspecialchars($_POST['tel']); ?></p>
      <p><strong>メニュー:</strong> <?php echo htmlspecialchars($_POST['menu']); ?></p>
      <p><strong>担当者:</strong> <?php echo htmlspecialchars($_POST['staff']); ?></p>
      <p><strong>日付:</strong> <?php echo htmlspecialchars($_POST['date']); ?></p>
      <p><strong>時間:</strong> <?php echo htmlspecialchars($_POST['time']); ?></p>
    </div>

    <!-- 予約確定ボタン -->
    <form action="reserve.php" method="post" style="margin-bottom:10px;">
      <?php foreach($_POST as $key => $value): ?>
        <input type="hidden" name="<?php echo $key; ?>" value="<?php echo htmlspecialchars($value); ?>">
      <?php endforeach; ?>
      <button type="submit">予約確定</button>
    </form>

    <!-- 戻って修正ボタン -->
    <form action="index.html" method="get">
      <button type="submit" style="background-color:#ccc;color:#333;">戻って修正</button>
    </form>
  </div>
</body>
</html>
