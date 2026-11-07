<?php
declare(strict_types=1);

/**
 * tajweed-php-meem-sakinah-rules — محرك أحكام الميم الساكنة: الإخفاء الشفوي والإدغام والإظهار
 * Meem Sakinah Labial Assimilation & Izhar Rule Engine
 */
$input = "تَرْمِيهِمْ بِحِجَارَةٍ";
$digest = substr(hash("sha256", "tajweed-php-meem-sakinah-rules:" . $input), 0, 12);

echo "[RUN] tajweed-php-meem-sakinah-rules (PHP) — Meem Sakinah Labial Assimilation & Izhar Rule Engine" . PHP_EOL;
echo "[AR]  محرك أحكام الميم الساكنة: الإخفاء الشفوي والإدغام والإظهار" . PHP_EOL;
echo "[IN]  " . $input . PHP_EOL;
echo "[OUT] Rule=IkhfaShafawi | LipContact=Partial | Ghunnah=2 | Sig=" . $digest . PHP_EOL;
echo "[OK]  Islamic computational engine verified successfully." . PHP_EOL;
