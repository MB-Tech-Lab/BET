<?php

function parse_html($html, $url) {
    if (empty($html)) {
        return null;
    }

    libxml_use_internal_errors(true);
    $dom = new DOMDocument();
    $options = 0;
    if (defined('LIBXML_NOAUTODTD')) $options |= LIBXML_NOAUTODTD;
    if (defined('LIBXML_NOXMLDECL')) $options |= LIBXML_NOXMLDECL;
    @$dom->loadHTML($html, $options);
    libxml_clear_errors();

    $xpath = new DOMXPath($dom);

    $parsed = [
        'title' => '',
        'meta_description' => '',
        'meta_robots' => '',
        'canonical' => '',
        'h1' => [],
        'h2' => [],
        'links' => [],
        'images' => []
    ];

    // Title
    $title_nodes = $dom->getElementsByTagName('title');
    if ($title_nodes->length > 0) {
        $parsed['title'] = trim($title_nodes->item(0)->textContent);
    }

    // Meta tags
    $meta_nodes = $dom->getElementsByTagName('meta');
    foreach ($meta_nodes as $meta) {
        $name = strtolower($meta->getAttribute('name'));
        if ($name === 'description') {
            $parsed['meta_description'] = trim($meta->getAttribute('content'));
        } elseif ($name === 'robots') {
            $parsed['meta_robots'] = trim(strtolower($meta->getAttribute('content')));
        }
    }

    // Canonical
    $link_nodes = $dom->getElementsByTagName('link');
    foreach ($link_nodes as $link) {
        if (strtolower($link->getAttribute('rel')) === 'canonical') {
            $parsed['canonical'] = trim($link->getAttribute('href'));
            break;
        }
    }

    // H1
    $h1_nodes = $dom->getElementsByTagName('h1');
    foreach ($h1_nodes as $h1) {
        $parsed['h1'][] = trim($h1->textContent);
    }

    // H2
    $h2_nodes = $dom->getElementsByTagName('h2');
    foreach ($h2_nodes as $h2) {
        $parsed['h2'][] = trim($h2->textContent);
    }

    // Links
    $a_nodes = $dom->getElementsByTagName('a');
    foreach ($a_nodes as $a) {
        $href = $a->getAttribute('href');
        if (!empty($href) && strpos($href, 'javascript:') !== 0 && strpos($href, 'mailto:') !== 0 && strpos($href, 'tel:') !== 0) {
            $parsed['links'][] = trim($href);
        }
    }

    // Images
    $img_nodes = $dom->getElementsByTagName('img');
    foreach ($img_nodes as $img) {
        $src = $img->getAttribute('src');
        if (!empty($src)) {
            $parsed['images'][] = [
                'src' => trim($src),
                'alt' => $img->hasAttribute('alt') ? trim($img->getAttribute('alt')) : null
            ];
        }
    }

    return $parsed;
}
