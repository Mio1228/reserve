-- ==========================================
-- 💇‍♀️ 美容室予約アプリ - テーブル作成スクリプト
-- ==========================================
-- 実行方法（MAMPなどのMySQL環境で）:　※reserve_appはDB名。異なる場合は適宜変更。
--   mysql -u root -p reserve_app < db/create_tables.sql
-- ==========================================

-- 既存テーブルがある場合は削除（安全に再作成したい場合用）
DROP TABLE IF EXISTS `reservations`;

-- 予約テーブル
CREATE TABLE `reservations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'お名前',
  `tel` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '電話番号',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'メールアドレス',
  `menu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'メニュー',
  `staff` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '担当者',
  `date` date NOT NULL COMMENT '予約日',
  `time` time NOT NULL COMMENT '予約時間',
  `message` text COLLATE utf8mb4_unicode_ci COMMENT 'ご要望・メッセージ',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '登録日時',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB 
  DEFAULT CHARSET=utf8mb4 
  COLLATE=utf8mb4_unicode_ci
  COMMENT='予約情報';
