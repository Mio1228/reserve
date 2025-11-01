<?php
require_once __DIR__ . '/../db/db_config.php';
require_once __DIR__ . '/admin_auth.php';

// --- 集計データ取得（担当・月別） ---
$sql = "
  SELECT 
    DATE_FORMAT(date, '%Y-%m') AS month,
    staff,
    COUNT(*) AS count
  FROM reservations
  GROUP BY month, staff
  ORDER BY month DESC, staff ASC
";
$stmt = $pdo->query($sql);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// --- 担当者別の合計件数 ---
$sql_staff = "
  SELECT 
    staff,
    COUNT(*) AS total
  FROM reservations
  GROUP BY staff
  ORDER BY total DESC
";
$stmt2 = $pdo->query($sql_staff);
$staff_results = $stmt2->fetchAll(PDO::FETCH_ASSOC);

// グラフ用データ整形
$staff_names = [];
$staff_counts = [];
foreach ($staff_results as $row) {
  $staff_names[] = $row['staff'];
  $staff_counts[] = $row['total'];
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>📊 月別・担当別集計</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <style>
    body { font-family: "Hiragino Sans", sans-serif; background: #f9f9f9; }
    .container { width: 90%; max-width: 1000px; margin: 40px auto; background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);}
    h1 { text-align: center; margin-bottom: 30px; }
    table { width: 100%; border-collapse: collapse; margin-bottom: 40px; }
    th, td { border: 1px solid #ddd; padding: 10px; text-align: center; }
    th { background-color: #f0f0f0; }
    canvas { max-width: 100%; }
    a { text-decoration: none; color: #007bff; }
  </style>
</head>
<body>
  <div class="container">
    <h1>📊 月別・担当別 予約集計</h1>

    <h2>🗓 月別 × 担当別 一覧</h2>
    <table>
      <tr>
        <th>月</th>
        <th>担当スタッフ</th>
        <th>予約件数</th>
      </tr>
      <?php foreach ($results as $row): ?>
      <tr>
        <td><?= htmlspecialchars($row['month']) ?></td>
        <td><?= htmlspecialchars($row['staff']) ?></td>
        <td><?= htmlspecialchars($row['count']) ?></td>
      </tr>
      <?php endforeach; ?>
    </table>

    <h2>👩‍💼 担当者別 総予約数グラフ</h2>
    <canvas id="staffChart"></canvas>

    <script>
      const ctx = document.getElementById('staffChart');
      new Chart(ctx, {
        type: 'bar',
        data: {
          labels: <?= json_encode($staff_names) ?>,
          datasets: [{
            label: '予約件数',
            data: <?= json_encode($staff_counts) ?>,
            borderWidth: 1,
            backgroundColor: 'rgba(54, 162, 235, 0.6)',
            borderColor: 'rgba(54, 162, 235, 1)',
          }]
        },
        options: {
          scales: {
            y: { beginAtZero: true, title: { display: true, text: '件数' } },
            x: { title: { display: true, text: '担当スタッフ' } }
          }
        }
      });
    </script>

    <p style="text-align:center; margin-top:40px;">
      <a href="list_reserve.php">⬅️ 予約一覧に戻る</a>
    </p>
  </div>
</body>
</html>
