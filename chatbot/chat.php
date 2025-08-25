<?php
require __DIR__ . '/config.php';

header('Content-Type: application/json; charset=utf-8');

try {
    $raw = file_get_contents('php://input');
    $data = json_decode($raw, true);

    if (!isset($data['message']) || trim($data['message']) === '') {
        http_response_code(400);
        echo json_encode(['error' => 'Mensagem não enviada.']);
        exit;
    }

    $payload = [
        'assistant_id' => OPENAI_ASSISTANT_ID,
        'input' => [
            [
                'role' => 'user',
                'content' => $data['message']
            ]
        ]
    ];

    $ch = curl_init('https://api.openai.com/v1/responses');
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => [
            'Authorization: Bearer ' . OPENAI_API_KEY,
            'Content-Type: application/json'
        ],
        CURLOPT_POSTFIELDS => json_encode($payload, JSON_UNESCAPED_UNICODE),
        CURLOPT_TIMEOUT => 60
    ]);

    $resp = curl_exec($ch);
    $err  = curl_error($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($err) {
        http_response_code(500);
        echo json_encode(['error' => 'Erro de rede: ' . $err], JSON_UNESCAPED_UNICODE);
        exit;
    }

    $json = json_decode($resp, true);

    if ($code >= 400) {
        $detail = $json['error']['message'] ?? 'Erro ao chamar a OpenAI.';
        http_response_code($code);
        echo json_encode(['error' => $detail], JSON_UNESCAPED_UNICODE);
        exit;
    }

    $reply = $json['output_text'] ?? null;

    if (!$reply && isset($json['output']) && is_array($json['output'])) {
        $parts = [];
        foreach ($json['output'] as $item) {
            if (!isset($item['content']) || !is_array($item['content'])) continue;
            foreach ($item['content'] as $c) {
                if (isset($c['type']) && ($c['type'] === 'output_text' || $c['type'] === 'text')) {
                    if (isset($c['text']) && is_string($c['text'])) {
                        $parts[] = $c['text'];
                    }
                } elseif (isset($c['text']) && is_string($c['text'])) {
                    $parts[] = $c['text'];
                }
            }
        }
        $reply = implode("\n", $parts);
    }

    if (!$reply) {
        $reply = 'Sem resposta textual recebida do Assistente.';
    }

    echo json_encode(['reply' => $reply], JSON_UNESCAPED_UNICODE);
} catch (Throwable $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Erro interno no servidor.'], JSON_UNESCAPED_UNICODE);
}

#comentario
