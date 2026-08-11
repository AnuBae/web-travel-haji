<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    <!-- HALAMAN UTAMA / STATIS -->
    <url>
        <loc><?= base_url() ?></loc>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc><?= base_url('journey') ?></loc>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc><?= base_url('about') ?></loc>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= base_url('journal') ?></loc>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc><?= base_url('fashion') ?></loc>
        <changefreq>weekly</changefreq>
        <priority>0.7</priority>
    </url>
    <url>
        <loc><?= base_url('gallery') ?></loc>
        <changefreq>weekly</changefreq>
        <priority>0.7</priority>
    </url>
    <url>
        <loc><?= base_url('contact') ?></loc>
        <changefreq>monthly</changefreq>
        <priority>0.6</priority>
    </url>

    <!-- HALAMAN DINAMIS: JOURNEYS -->
    <?php if (!empty($journeys)): foreach ($journeys as $item): ?>
            <url>
                <loc><?= base_url('journey/' . $item->slug) ?></loc>
                <lastmod><?= date('Y-m-d\TH:i:sP', strtotime($item->updated_at ?? $item->created_at)) ?></lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.8</priority>
            </url>
    <?php endforeach;
    endif; ?>

    <!-- HALAMAN DINAMIS: JOURNALS -->
    <?php if (!empty($journals)): foreach ($journals as $item): ?>
            <url>
                <loc><?= base_url('journal/' . $item->slug) ?></loc>
                <lastmod><?= date('Y-m-d\TH:i:sP', strtotime($item->updated_at ?? $item->created_at)) ?></lastmod>
                <changefreq>monthly</changefreq>
                <priority>0.7</priority>
            </url>
    <?php endforeach;
    endif; ?>

    <!-- HALAMAN DINAMIS: FASHIONS -->
    <?php if (!empty($fashions)): foreach ($fashions as $item): ?>
            <url>
                <loc><?= base_url('fashion/' . $item->slug) ?></loc>
                <!-- Asumsi tabel fashion punya created_at. Hapus baris lastmod ini jika di DB tidak ada kolom tanggal -->
                <lastmod><?= date('Y-m-d\TH:i:sP', strtotime($item->created_at)) ?></lastmod>
                <changefreq>monthly</changefreq>
                <priority>0.6</priority>
            </url>
    <?php endforeach;
    endif; ?>

</urlset>