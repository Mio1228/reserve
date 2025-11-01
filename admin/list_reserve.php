<?php
require_once __DIR__ . '/../db/db_config.php';
require_once __DIR__ . '/admin_auth.php';

// 検索条件を受け取る
$name = $_GET['name'] ?? '';
$staff = $_GET['staff'] ?? '';
$date = $_GET['date'] ?? '';

// SQLベース作成
$sql = "SELECT * FROM reservations WHERE 1=1";
$params = [];

// 条件を追加
if ($name !== '') {
  $sql .= " AND name LIKE :name";
  $params[':name'] = "%$name%";
}
if ($staff !== '') {
  $sql .= " AND staff = :staff";
  $params[':staff'] = $staff;
}
if ($date !== '') {
  $sql .= " AND date = :date";
  $params[':date'] = $date;
}

$sql .= " ORDER BY id DESC";

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$reservations = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>【管理画面】予約一覧</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    .container {
      width: 90%;
      max-width: 1000px;
      margin: 40px auto;
    }
    h1 {
      text-align: center;
      margin-bottom: 20px;
    }
    form.search {
      margin-bottom: 20px;
      background: #f7f7f7;
      padding: 15px;
      border-radius: 8px;
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
      align-items: center;
    }
    form.search label {
      font-weight: bold;
      margin-right: 5px;
    }
    form.search input, form.search select {
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
    }
    th, td {
      border: 1px solid #ccc;
      padding: 8px;
      text-align: left;
    }
    th {
      background: #f0f0f0;
    }
    a {
      color: #0077cc;
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>【管理画面】予約一覧</h1>
    <a href="analysis.php" class="analysis-link">📊 分析ページへ</a>
    <a href="logout.php">🚪ログアウト</a>

    <!-- 🔍 検索フォーム -->
    <form method="get" class="search">
      <div>
        <label>お名前：</label>
        <input type="text" name="name" value="<?= htmlspecialchars($name) ?>">
      </div>
      <div>
        <label>担当者：</label>
        <select name="staff">
          <option value="">すべて</option>
          <option value="山田" <?= $staff==='山田'?'selected':'' ?>>山田</option>
          <option value="佐藤" <?= $staff==='佐藤'?'selected':'' ?>>佐藤</option>
          <option value="高橋" <?= $staff==='高橋'?'selected':'' ?>>高橋</option>
        </select>
      </div>
      <div>
        <label>日付：</label>
        <input type="date" name="date" value="<?= htmlspecialchars($date) ?>">
      </div>
      <button type="submit">検索</button>
      <a href="list_reserve.php">リセット</a>
    </form>

    <table>
      <tr>
        <th>ID</th>
        <th>お名前</th>
        <th>電話番号</th>
        <th>メール</th>
        <th>担当者</th>
        <th>希望日</th>
        <th>希望時間</th>
        <th>メッセージ</th>
      </tr>
      <?php if (count($reservations) > 0): ?>
        <?php foreach ($reservations as $r): ?>
          <tr>
            <td><?= htmlspecialchars($r['id']) ?></td>
            <td><?= htmlspecialchars($r['name']) ?></td>
            <td><?= htmlspecialchars($r['tel']) ?></td>
            <td><?= htmlspecialchars($r['email']) ?></td>
            <td><?= htmlspecialchars($r['staff']) ?></td>
            <td><?= htmlspecialchars($r['date']) ?></td>
            <td><?= htmlspecialchars($r['time']) ?></td>
            <td><?= nl2br(htmlspecialchars($r['message'])) ?></td>
          </tr>
        <?php endforeach; ?>
      <?php else: ?>
        <tr><td colspan="8" style="text-align:center;">該当する予約はありません。</td></tr>
      <?php endif; ?>
    </table>
  </div>
</body>
</html>
