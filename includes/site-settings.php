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
            'contact_hotlines' => "Văn phòng THCS cơ sở 1: 0246.2872.448 - 0246.6744.699\nVăn phòng THCS cơ sở 2: 0246.265.2709\nVăn phòng THPT: 0246.675.2216",
            'contact_emails' => "Góp ý phụ huynh: ykphdoanthidiem@gmail.com\nBan giám hiệu: bghdoanthidiem@gmail.com\nBan biên tập website: bbtdoanthidiem@gmail.com",
            'contact_addresses' => "Cơ sở 1: Số 64 Lưu Hữu Phước, phường Từ Liêm, TP Hà Nội\nCơ sở 2: Phố Nguyễn Đình Tứ, KĐT Bắc Cổ Nhuế, phường Đông Ngạc, TP Hà Nội",
            'map_iframe' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.438051721944!2d105.7992801759767!3d21.01515158824447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab001745cb03%3A0x5512842ae90b2dd7!2zVHLGsOG7nW5nIFRow6BuaCBXZWI!5e0!3m2!1svi!2s!4v1768911025495!5m2!1svi!2s" width="100%" height="520" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'map_link' => 'https://maps.app.goo.gl/ABC123',
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
