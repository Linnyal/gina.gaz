<?php
$page_title = "Защита данных в корпоративной среде";
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?></title>
    <link rel="stylesheet" href="/css/style.css">
    <style>
    /* Основные стили */
    body {
        background-color: #ffffff !important;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        line-height: 1.6;
        color: #333;
    }
    
    .centered-content {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        text-align: left;
        background-color: #ffffff;
    }
    
    .kb-article h1 {
        color: #000000;
        border-bottom: 2px solid #3498db;
        padding-bottom: 10px;
        margin-top: 0;
    }
    
    h2 {
        color: #3498db;
        margin-top: 30px;
    }
    
    h3 {
        color: #000000;
        margin-top: 25px;
    }
    
    .meta {
        color: #666;
        font-size: 0.9rem;
        margin-bottom: 20px;
        display: flex;
        gap: 15px;
    }
    
    /* Стили для блоков */
    .protection-methods {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        margin: 20px 0;
    }
    
    .method-card {
        flex: 1 1 300px;
        background-color: #f8f9fa;
        padding: 15px;
        border-radius: 8px;
        border-left: 4px solid #3182ce;
    }
    
    /* Стили для таблиц */
    .encryption-comparison {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }
    
    .encryption-comparison th, 
    .encryption-comparison td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
    }
    
    .encryption-comparison th {
        background-color: #f2f2f2;
    }
    
    /* Стили для важных заметок */
    .security-alert {
        padding: 15px;
        margin: 20px 0;
        border-left: 4px solid #e53e3e;
        background-color: #fff5f5;
        border-radius: 4px;
    }
    
    /* Стили для теста */
    .test-container {
        margin: 40px 0;
        padding: 25px;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        background-color: #f8fafc;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }
    
    .question {
        margin-bottom: 25px;
        padding-bottom: 20px;
        border-bottom: 1px dashed #e2e8f0;
    }
    
    .options {
        margin-left: 5px;
    }
    
    .option {
        margin: 12px 0;
        position: relative;
        display: flex;
        align-items: center;
    }
    
    .option input[type="radio"],
    .option input[type="checkbox"] {
        appearance: none;
        width: 18px;
        height: 18px;
        border: 2px solid #a0aec0;
        border-radius: 50%;
        margin-right: 12px;
        cursor: pointer;
        transition: all 0.2s ease;
    }
    
    .option input[type="checkbox"] {
        border-radius: 4px;
    }
    
    .option input[type="radio"]:checked,
    .option input[type="checkbox"]:checked {
        border-color: #3182ce;
        background-color: #3182ce;
    }
    
    .option input[type="radio"]:checked::after,
    .option input[type="checkbox"]:checked::after {
        content: '';
        position: absolute;
        width: 8px;
        height: 8px;
        background: white;
        border-radius: 50%;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    
    .option label {
        cursor: pointer;
        color: #000000;
    }
    
    .text-answer {
        width: 100%;
        padding: 12px 15px;
        margin-top: 8px;
        border: 1px solid #cbd5e0;
        border-radius: 6px;
    }
    
    button[type="button"] {
        padding: 12px 24px;
        background-color: #3182ce;
        color: white;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        margin: 25px auto 0;
        display: block;
    }
    
    .results {
        margin-top: 30px;
        padding: 20px;
        border-radius: 8px;
        background-color: #ffffff;
        border: 1px solid #e2e8f0;
        display: none;
    }
    
    .correct {
        color: #38a169;
    }
    
    .incorrect {
        color: #e53e3e;
    }
    
    @media (max-width: 768px) {
        .protection-methods {
            flex-direction: column;
        }
        
        .encryption-comparison {
            font-size: 0.85rem;
        }
    }
</style>
</head>
<body>
<article class="kb-article">
    <div class="centered-content">
        <h1><?= $page_title ?></h1>
        <div class="meta">
            <span>Категория: <a href="/knowledge-base/sysadmin/">Системное администрирование</a></span>
            <span>Обновлено: <?= date('d.m.Y') ?></span>
        </div>

        <div class="content">
            <h2>Введение в защиту данных</h2>
            <p>Защита корпоративных данных — критически важная задача для системного администратора. Потеря или утечка данных может привести к финансовым потерям и репутационному ущербу компании.</p>
            
            <div class="security-alert">
                <h3>Важно!</h3>
                <p>Согласно GDPR и 152-ФЗ, компании обязаны защищать персональные данные. Штрафы за нарушения могут достигать 4% от годового оборота компании.</p>
            </div>

            <h2>Основные методы защиты данных</h2>
            
            <div class="protection-methods">
                <div class="method-card">
                    <h3>1. Шифрование данных</h3>
                    <ul>
                        <li>Дисковое шифрование (BitLocker, VeraCrypt)</li>
                        <li>Шифрование передаваемых данных (SSL/TLS, VPN)</li>
                        <li>Шифрование баз данных (TDE)</li>
                    </ul>
                </div>
                
                <div class="method-card">
                    <h3>2. Контроль доступа</h3>
                    <ul>
                        <li>Принцип минимальных привилегий</li>
                        <li>Двухфакторная аутентификация</li>
                        <li>RBAC (Role-Based Access Control)</li>
                    </ul>
                </div>
                
                <div class="method-card">
                    <h3>3. Резервное копирование</h3>
                    <ul>
                        <li>Правило 3-2-1 (3 копии, 2 носителя, 1 вне офиса)</li>
                        <li>Периодическое тестирование восстановления</li>
                        <li>Шифрование резервных копий</li>
                    </ul>
                </div>
            </div>

            <h2>Сравнение методов шифрования</h2>
            
            <table class="encryption-comparison">
                <tr>
                    <th>Метод</th>
                    <th>Уровень</th>
                    <th>Использование</th>
                    <th>Производительность</th>
                </tr>
                <tr>
                    <td>AES-256</td>
                    <td>Симметричное</td>
                    <td>Дисковое шифрование, SSL/TLS</td>
                    <td>Высокая</td>
                </tr>
                <tr>
                    <td>RSA-4096</td>
                    <td>Асимметричное</td>
                    <td>Цифровые подписи, ключи шифрования</td>
                    <td>Низкая</td>
                </tr>
                <tr>
                    <td>ECC-384</td>
                    <td>Асимметричное</td>
                    <td>Мобильные устройства, IoT</td>
                    <td>Средняя</td>
                </tr>
            </table>

            <h2>Политики защиты данных</h2>
            
            <h3>1. Классификация данных</h3>
            <ul>
                <li>Публичные</li>
                <li>Для внутреннего использования</li>
                <li>Конфиденциальные</li>
                <li>Строго конфиденциальные</li>
            </ul>
            
            <h3>2. Управление правами доступа</h3>
            <ul>
                <li>Регулярный аудит прав</li>
                <li>Автоматическая отмена прав при увольнении</li>
                <li>Журналирование доступа к критичным данным</li>
            </ul>
            
            <h3>3. Защита от внутренних угроз</h3>
            <ul>
                <li>DLP-системы (Data Loss Prevention)</li>
                <li>Мониторинг необычной активности</li>
                <li>Ограничение использования внешних носителей</li>
            </ul>

            <h2>Практическая реализация</h2>
            
            <h3>1. Настройка BitLocker</h3>
            <ol>
                <li>Активация через групповые политики</li>
                <li>Настройка TPM + PIN</li>
                <li>Хранение ключей восстановления</li>
                <li>Мониторинг состояния шифрования</li>
            </ol>
            
            <h3>2. Развертывание DLP-системы</h3>
            <ul>
                <li>Определение критичных данных</li>
                <li>Настройка политик мониторинга</li>
                <li>Интеграция с почтой и мессенджерами</li>
                <li>Настройка оповещений</li>
            </ul>
            
            <h3>3. Организация резервного копирования</h3>
            <ul>
                <li>Выбор решения (Veeam, Acronis, Bacula)</li>
                <li>Настройка расписания копирования</li>
                <li>Проверка целостности резервных копий</li>
                <li>Организация оффлайн-хранилища</li>
            </ul>

            <div class="test-container">
                <h2>Проверьте свои знания</h2>
                <form id="dataProtectionTest">
                    
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Какое шифрование используется для дисков?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q1" id="q1a" value="a">
                                <label for="q1a">AES-256</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1b" value="b">
                                <label for="q1b">RSA-4096</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1c" value="c">
                                <label for="q1c">SHA-256</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="a">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. Какие элементы включает правило 3-2-1? (Выберите все верные варианты)</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2a" value="a">
                                <label for="q2a">3 копии данных</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2b" value="b">
                                <label for="q2b">2 разных типа носителей</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2c" value="c">
                                <label for="q2c">1 копия в облаке</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2d" value="d">
                                <label for="q2d">1 копия вне офиса</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q2" value="a,b,d">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Какие системы относятся к DLP?</strong></p>
                        <input type="text" id="q3_answer" class="text-answer" placeholder="Введите названия систем">
                        <input type="hidden" id="correct_q3_keywords" value="symantec,forcepoint,digital guardian,searchinform">
                    </div>
                    
                    <!-- Вопрос 4 -->
                    <div class="question">
                        <p><strong>4. Какие основные принципы контроля доступа?</strong></p>
                        <textarea id="q4_answer" class="text-answer" rows="4" placeholder="Опишите принципы"></textarea>
                        <input type="hidden" id="correct_q4_keywords" value="минимальные привилегии,разделение обязанностей,аудит,2фа">
                    </div>
                    
                    <!-- Вопрос 5 -->
                    <div class="question">
                        <p><strong>5. Какой стандарт регулирует защиту персональных данных в РФ?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q5" id="q5a" value="a">
                                <label for="q5a">152-ФЗ</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5b" value="b">
                                <label for="q5b">149-ФЗ</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5c" value="c">
                                <label for="q5c">GDPR</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5d" value="d">
                                <label for="q5d">PCI DSS</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q5" value="a">
                    </div>
                    
                    <button type="button" onclick="checkDataProtectionTest()">Проверить ответы</button>
                </form>
                
                <div id="testResults" class="results"></div>
            </div>
        </div>
    </div>
</article>

<script>
function checkDataProtectionTest() {
    let score = 0;
    let resultsHTML = "<h3>Результаты теста:</h3><ol>";
    const keywordThreshold = 2;
    
    // Вопрос 1
    const q1Selected = document.querySelector('input[name="q1"]:checked');
    if (q1Selected && q1Selected.value === document.getElementById('correct_q1').value) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 1: Верно! AES-256 используется для дискового шифрования.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 1: Неверно. AES-256 используется для дискового шифрования.</li>`;
    }
    
    // Вопрос 2
    const q2Selected = Array.from(document.querySelectorAll('input[name="q2"]:checked')).map(el => el.value).sort().join(',');
    const q2Correct = document.getElementById('correct_q2').value.split(',').sort().join(',');
    if (q2Selected === q2Correct) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 2: Правильно! Правило 3-2-1: 3 копии, 2 носителя, 1 вне офиса.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 2: Неполный ответ. Правило 3-2-1: 3 копии, 2 носителя, 1 вне офиса.</li>`;
    }
    
    // Вопрос 3
    const q3Answer = document.getElementById('q3_answer').value.toLowerCase();
    const q3Keywords = document.getElementById('correct_q3_keywords').value.split(',');
    let foundKeywords = q3Keywords.filter(word => q3Answer.includes(word));
    
    if (foundKeywords.length >= 1) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 3: Принято! Примеры DLP: Symantec, Forcepoint, Digital Guardian.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 3: Неверно. Примеры DLP: Symantec, Forcepoint, Digital Guardian.</li>`;
    }
    
    // Вопрос 4
    const q4Answer = document.getElementById('q4_answer').value.toLowerCase();
    const q4Keywords = document.getElementById('correct_q4_keywords').value.split(',');
    foundKeywords = q4Keywords.filter(word => q4Answer.includes(word));
    
    if (foundKeywords.length >= keywordThreshold) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 4: Принято! Основные принципы: минимальные привилегии, 2FA.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 4: Ответ недостаточно полный. Основные принципы: минимальные привилегии, 2FA.</li>`;
    }
    
    // Вопрос 5
    const q5Selected = document.querySelector('input[name="q5"]:checked');
    if (q5Selected && q5Selected.value === document.getElementById('correct_q5').value) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 5: Абсолютно верно! 152-ФЗ регулирует защиту персональных данных в РФ.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 5: Неверно. 152-ФЗ регулирует защиту персональных данных в РФ.</li>`;
    }
    
    resultsHTML += `</ol><p><strong>Итоговый результат: ${score} из 5 (${Math.round(score/5*100)}%)</strong></p>`;
    document.getElementById('testResults').innerHTML = resultsHTML;
    document.getElementById('testResults').style.display = 'block';
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>