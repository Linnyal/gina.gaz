<?php 
$page_title = "Хранение природного газа: технологии и инфраструктура";
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
    body {
        background-color: #ffffff !important; /* Белый фон на всей странице */
    }
    
    .centered-content {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        text-align: left;
        background-color: #ffffff; /* Белый фон контентной области */
    }
    
    .test-container {
        margin: 40px 0;
        padding: 25px;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        background-color: #f8fafc;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }
    
    h2 {
        color: #3498db;
        margin-top: 30px;
    }
    
    .question {
        margin-bottom: 25px;
        padding-bottom: 20px;
        border-bottom: 1px dashed #e2e8f0;
    }
    
    .question:last-child {
        border-bottom: none;
    }
    
    .question p {
        font-weight: 600;
        color: #000000;
        margin-bottom: 15px;
        font-size: 1.1rem;
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
    
    .option input[type="radio"] {
        appearance: none;
        width: 18px;
        height: 18px;
        border: 2px solid #a0aec0;
        border-radius: 50%;
        margin-right: 12px;
        cursor: pointer;
        transition: all 0.2s ease;
    }
    
    .option input[type="radio"]:checked {
        border-color: #3182ce;
        background-color: #3182ce;
    }
    
    .option input[type="radio"]:checked::after {
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
        transition: color 0.2s ease;
    }
    
    .text-answer {
        width: 100%;
        padding: 12px 15px;
        margin-top: 8px;
        border: 1px solid #cbd5e0;
        border-radius: 6px;
        transition: all 0.3s ease;
        color: #000000;
    }
    
    .text-answer:focus {
        border-color: #3182ce;
        box-shadow: 0 0 0 3px rgba(49, 130, 206, 0.2);
    }
    
    button[type="button"] {
        padding: 12px 24px;
        background-color: #3182ce;
        color: white;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-weight: 500;
        transition: all 0.3s ease;
        display: block;
        margin: 25px auto 0;
    }
    
    button[type="button"]:hover {
        background-color: #2b6cb0;
        transform: translateY(-1px);
    }
    
    .results {
        margin-top: 30px;
        padding: 20px;
        border-radius: 8px;
        background-color: #ffffff;
        border: 1px solid #e2e8f0;
        display: none;
        color: #000000;
    }
    
    .correct {
        color: #38a169;
    }
    
    .incorrect {
        color: #e53e3e;
    }
    
    .notice {
        padding: 15px;
        margin: 20px 0;
        border-left: 4px solid;
        border-radius: 4px;
    }
    
    .notice.info {
        background-color: #ebf8ff;
        border-color: #3182ce;
    }
    
    .notice.warning {
        background-color: #fff5f5;
        border-color: #e53e3e;
    }
    
    @media (max-width: 768px) {
        .test-container {
            padding: 15px;
        }
    }
    
    .kb-article h1 {
        color: #000000;
        border-bottom: 2px solid #3498db;
        padding-bottom: 10px;
    }
    
    .kb-article h3 {
        color: #000000;
    }
    
    .meta {
        color: #666;
        font-size: 0.9rem;
        margin-bottom: 20px;
        display: flex;
        gap: 15px;
    }
    
    .meta a {
        color: #3182ce;
        text-decoration: none;
    }
    
    .meta a:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>
<article class="kb-article">
    <div class="centered-content">
        <h1><?= $page_title ?></h1>
        <div class="meta">
            <span>Категория: <a href="/knowledge-base/gas-industry-basics/">Основы газовой отрасли</a></span>
            <span>Обновлено: <?= date('d.m.Y') ?></span>
        </div>

        <div class="content">
            <h2>Введение</h2>
            <p>Природный газ — стратегически важный ресурс, требующий надежных методов хранения для обеспечения бесперебойных поставок потребителям. В данной статье рассмотрены основные технологии хранения газа, типы хранилищ и их значение для энергосистемы.</p>

            <h2>1. Зачем нужно хранить природный газ?</h2>
            <p>Хранение газа решает несколько ключевых задач:</p>
            <ul>
                <li>Балансировка спроса и предложения (сезонные колебания потребления)</li>
                <li>Резервирование на случай аварий или перебоев</li>
                <li>Поддержка стабильности газотранспортной системы</li>
                <li>Финансовая оптимизация (закупка газа по низким ценам в несезон)</li>
            </ul>

            <h2>2. Основные виды хранилищ газа</h2>
            <h3>2.1. Подземные хранилища газа (ПХГ)</h3>
            <p>Наиболее распространенный и экономичный способ.</p>
            
            <div class="notice info">
                <p><strong>Типы ПХГ:</strong></p>
                <ul>
                    <li>Отработанные месторождения (бывшие газовые или нефтегазовые залежи)</li>
                    <li>Водоносные пласты (природные резервуары в пористых породах)</li>
                    <li>Соляные каверны (искусственные полости в соляных куполах)</li>
                </ul>
            </div>

            <p><strong>Преимущества:</strong></p>
            <ul>
                <li>✔ Большие объемы хранения</li>
                <li>✔ Высокая безопасность</li>
                <li>✔ Долговременная эксплуатация</li>
            </ul>

            <p><strong>Примеры крупных ПХГ в России:</strong></p>
            <ul>
                <li>Касимовское (крупнейшее в Европе)</li>
                <li>Краснодарское</li>
                <li>Украинские хранилища (используются для транзита)</li>
            </ul>

            <h3>2.2. Наземные резервуары (для СПГ и сжатого газа)</h3>
            <p>Используются для:</p>
            <ul>
                <li>Сжиженного природного газа (СПГ) – криогенные цистерны (-162°C)</li>
                <li>Сжатого природного газа (КПГ) – баллоны высокого давления (200–250 атм)</li>
            </ul>

            <p><strong>Применение:</strong></p>
            <ul>
                <li>Локальное хранение у потребителей</li>
                <li>Автономные газоснабжающие системы</li>
                <li>Заправка газомоторного транспорта</li>
            </ul>

            <h2>3. Технологии закачки и отбора газа</h2>
            <h3>3.1. Принцип работы ПХГ</h3>
            <p><strong>Закачка (летний период):</strong></p>
            <ol>
                <li>Газ компримируется (сжимается) до 15–20 МПа</li>
                <li>Закачивается в пласт через скважины</li>
            </ol>

            <p><strong>Отбор (зимний период):</strong></p>
            <ol>
                <li>Газ выходит под давлением</li>
                <li>Дополнительно может использоваться газокомпрессорное оборудование</li>
            </ol>

            <h3>3.2. Особенности хранения СПГ</h3>
            <ul>
                <li>Требует криогенных резервуаров с вакуумной изоляцией</li>
                <li>Регазификация перед подачей в сеть</li>
                <li>Используется в местах, удаленных от магистральных газопроводов</li>
            </ul>

            <h2>4. Безопасность и экология</h2>
            <ul>
                <li>Контроль герметичности (предотвращение утечек)</li>
                <li>Мониторинг давления в пластах</li>
                <li>Защита от коррозии труб и оборудования</li>
                <li>Минимизация выбросов при эксплуатации</li>
            </ul>

            <h2>5. Перспективные технологии</h2>
            <ul>
                <li>Аккумулирование в гидратной форме (газогидраты)</li>
                <li>Использование выработанных шахт</li>
                <li>Комбинированные системы хранения (водород + природный газ)</li>
            </ul>

            <h2>Заключение</h2>
            <p>Хранение газа — критически важное звено газовой инфраструктуры, обеспечивающее надежность поставок. Развитие технологий хранения (особенно СПГ и соляных каверн) расширяет возможности газовой отрасли и способствует энергетической стабильности.</p>

            <!-- Тест для самопроверки -->
            <div class="test-container">
                <h2>Проверьте свои знания</h2>
                <form id="gasStorageTest">
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Какой тип хранилищ является наиболее экономичным для больших объемов газа?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q1" id="q1a" value="a">
                                <label for="q1a">Наземные резервуары СПГ</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1b" value="b">
                                <label for="q1b">Подземные хранилища газа (ПХГ)</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1c" value="c">
                                <label for="q1c">Баллоны высокого давления</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="b">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. Какое давление используется при закачке газа в ПХГ?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q2" id="q2a" value="a">
                                <label for="q2a">5-10 МПа</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2b" value="b">
                                <label for="q2b">15-20 МПа</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2c" value="c">
                                <label for="q2c">25-30 МПа</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q2" value="b">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Какая температура требуется для хранения СПГ?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q3" id="q3a" value="a">
                                <label for="q3a">-50°C</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3b" value="b">
                                <label for="q3b">-100°C</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3c" value="c">
                                <label for="q3c">-162°C</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q3" value="c">
                    </div>
                    
                    <!-- Вопрос 4 -->
                    <div class="question">
                        <p><strong>4. Назовите крупнейшее подземное хранилище газа в Европе:</strong></p>
                        <input type="text" id="q4_answer" class="text-answer" placeholder="Введите название">
                        <input type="hidden" id="correct_q4" value="Касимовское">
                    </div>
                    
                    <!-- Вопрос 5 -->
                    <div class="question">
                        <p><strong>5. Как называется процесс преобразования СПГ обратно в газообразное состояние?</strong></p>
                        <input type="text" id="q5_answer" class="text-answer" placeholder="Введите термин">
                        <input type="hidden" id="correct_q5" value="Регазификация">
                    </div>
                    
                    <button type="button" onclick="checkStorageTest()">Проверить ответы</button>
                </form>
                
                <div id="testResults" class="results"></div>
            </div>

            <!-- Связанные статьи -->
            <div class="related">
                <h3>Смотрите также:</h3>
                <ul>
                    <li><a href="/knowledge-base/gas-industry-basics/natural-gas-basics.php">Основы природного газа</a></li>
                    <li><a href="/knowledge-base/gas-industry-basics/transportation.php">Транспортировка газа</a></li>
                </ul>
            </div>
        </div>
    </div>
</article>

<script>
function checkStorageTest() {
    let score = 0;
    let resultsHTML = "<h3>Результаты теста:</h3><ol>";
    
    // Проверка вопросов 1-3 (радио кнопки)
    for (let i = 1; i <= 3; i++) {
        const selected = document.querySelector(`input[name="q${i}"]:checked`);
        const correct = document.getElementById(`correct_q${i}`).value;
        
        if (selected && selected.value === correct) {
            score++;
            resultsHTML += `<li class="correct">Вопрос ${i}: Правильно! Ваш ответ: ${selected.nextElementSibling.textContent}</li>`;
        } else {
            const correctLabel = document.querySelector(`label[for="q${i}${correct}"]`).textContent;
            const userAnswer = selected ? selected.nextElementSibling.textContent : "Нет ответа";
            resultsHTML += `<li class="incorrect">Вопрос ${i}: Неправильно. Ваш ответ: ${userAnswer}. Правильный ответ: ${correctLabel}</li>`;
        }
    }
    
    // Проверка вопросов 4-5 (текстовые ответы)
    for (let i = 4; i <= 5; i++) {
        const answer = document.getElementById(`q${i}_answer`).value.trim();
        const correct = document.getElementById(`correct_q${i}`).value;
        
        if (answer.toLowerCase() === correct.toLowerCase()) {
            score++;
            resultsHTML += `<li class="correct">Вопрос ${i}: Правильно! Ваш ответ: ${answer}</li>`;
        } else {
            resultsHTML += `<li class="incorrect">Вопрос ${i}: Неправильно. Ваш ответ: ${answer || "Нет ответа"}. Правильный ответ: ${correct}</li>`;
        }
    }
    
    resultsHTML += `</ol><p><strong>Итоговый результат: ${score} из 5 (${Math.round(score/5*100)}%)</strong></p>`;
    
    document.getElementById('testResults').innerHTML = resultsHTML;
    document.getElementById('testResults').style.display = 'block';
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>