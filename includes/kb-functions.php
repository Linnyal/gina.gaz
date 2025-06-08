<?php
// Получаем материалы из JSON
function getKnowledgeMaterials() {
    $json = file_get_contents('../data/knowledge.json');
    return json_decode($json, true)['materials'];
}

// Добавление нового документа (если нужно)
function addDocument($title, $category, $filePath, $tags = []) {
    $data = json_decode(file_get_contents('../data/knowledge.json'), true);
    $newId = count($data['materials']) + 1;
    
    $data['materials'][] = [
        'id' => $newId,
        'title' => $title,
        'category' => $category,
        'file' => $filePath,
        'tags' => $tags
    ];

    file_put_contents('../data/knowledge.json', json_encode($data, JSON_PRETTY_PRINT));
}
?>