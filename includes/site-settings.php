<?php

if (!function_exists('site_settings_defaults')) {
    function site_settings_defaults(): array
    {
        return [
            'address' => 'KĐT Meyhomes Capital Phú Quốc - P. An Thới - TP. Phú Quốc',
            'hotline' => '0846.179.888',
            'email' => 'meyschool@dtd.edu.vn',
            'website' => 'meyschooldtd.edu.vn',
            'tiktok' => 'https://bit.ly/4sWLsmk',
            'fanpage' => 'https://www.facebook.com/meyschooldtd.phuquoc',
            'work_time_weekdays' => '7:30 - 17:00 (Thứ 2 - Thứ 6)',
            'work_time_saturday' => '7:30 - 11:30 (Thứ 7)',
        ];
    }
}

if (!function_exists('load_site_settings')) {
    function load_site_settings(): array
    {
        static $cache = null;
        if ($cache !== null) {
            return $cache;
        }

        $settings = site_settings_defaults();

        try {
            require __DIR__ . '/../config/db.php';

            $stmt = $pdo->query('SELECT * FROM site_settings ORDER BY id ASC LIMIT 1');
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row) {
                foreach ($settings as $key => $defaultValue) {
                    if (isset($row[$key]) && $row[$key] !== null && $row[$key] !== '') {
                        $settings[$key] = $row[$key];
                    }
                }
            }
        } catch (Throwable $e) {
            // Keep defaults if DB/table is unavailable.
        }

        $cache = $settings;
        return $settings;
    }
}

if (!function_exists('site_setting')) {
    function site_setting(string $key): string
    {
        $settings = load_site_settings();
        return isset($settings[$key]) ? (string) $settings[$key] : '';
    }
}

if (!function_exists('site_phone_to_tel')) {
    function site_phone_to_tel(string $phone): string
    {
        return preg_replace('/[^0-9+]/', '', $phone);
    }
}
