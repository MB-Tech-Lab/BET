<?php
require_once __DIR__ . '/../storage/history.php';

header('Content-Type: application/json');

$history = get_all_history_snapshots();

echo json_encode([
    'success' => true,
    'history' => $history
]);
