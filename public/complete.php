<?php
session_start();
require_once '../db/db_config.php';

// ✅ 1. POST以外アクセス禁止
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
  header("Location: index.php");
  exit;
}

// ✅ 2. CSRFトークン検証
if (!isset($_POST['csrf_token']) || !hash_equals($_SESSION['csrf_token'] ?? '', $_POST['csrf_token'])) {
  exit('不正なリクエストです');
}
unset($_SESSION['csrf_token']); // 使い捨て

// ✅ 3. 入力値取得 & 簡易バリデーション
$fields = ['name', 'email', 'tel', 'staff', 'date', 'time', 'menu', 'message'];
$data = [];
foreach ($fields as $f) {
  $data[$f] = trim($_POST[$f] ?? '');
}

// 例: 必須チェック
if ($data['name'] === '' || $data['email'] === '') {
  exit('必須項目が入力されていません。');
}

// ✅ 4. DB登録処理
try {
  $stmt = $pdo->prepare("
    INSERT INTO reservations (name, email, tel, staff, date, time, menu, message)
    VALUES (:name, :email, :tel, :staff, :date, :time, :menu, :message)
  ");
  $stmt->execute($data);

  // ✅ 5. PRG対応：登録後はthanksページへリダイレクト
  header("Location: thanks.php");
  exit;

} catch (PDOException $e) {
  echo "エラー: " . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8');
  exit;
}
?>
