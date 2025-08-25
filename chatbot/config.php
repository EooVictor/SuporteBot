<?php
// ⚠️ Mantenha este arquivo fora de versionamento público

define('OPENAI_API_KEY', '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');
define('OPENAI_ASSISTANT_ID', 'g-689662c3b5148191ba1ecaa0f73efa4f');

/**
 * CORS básico (ajuste se necessário)
 */
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}
