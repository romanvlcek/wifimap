ALTER TABLE `wifi`
	ADD COLUMN `calculated` TINYINT(1) UNSIGNED NOT NULL DEFAULT '0' AFTER `accuracy`;
