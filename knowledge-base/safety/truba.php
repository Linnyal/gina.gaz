<?php 
$page_title = "Трубопроводный транспорт газа: принципы работы и основные компоненты";
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
    .centered-content {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        text-align: left;
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
        color: #3498db; /* Голубой цвет только для h2 */
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
        color: #000000; /* Черный цвет для текста вопросов */
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
        color: #000000; /* Черный цвет для вариантов ответов */
        transition: color 0.2s ease;
    }
    .text-answer {
        width: 100%;
        padding: 12px 15px;
        margin-top: 8px;
        border: 1px solid #cbd5e0;
        border-radius: 6px;
        transition: all 0.3s ease;
        color: #000000; /* Черный цвет для текста ввода */
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
        color: #000000; /* Черный цвет для результатов */
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
    body {
        background-color: white; /* Белый фон страницы */
        color: #000000; /* Черный цвет основного текста */
    }
    h1 {
        color: #000000; /* Черный цвет для h1 */
        border-bottom: 2px solid #3498db;
        padding-bottom: 10px;
    }
    h3 {
        color: #000000; /* Черный цвет для h3 */
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
            <p>Трубопроводный транспорт — наиболее эффективный способ доставки природного газа на большие расстояния. В России протяженность магистральных газопроводов превышает 170 тысяч километров, что делает газотранспортную систему страны одной из самых развитых в мире. В статье рассмотрены ключевые элементы этой системы, принципы ее работы и технические особенности.</p>

            <h2>1. Основные компоненты газотранспортной системы</h2>
            
            <h3>1.1. Магистральные газопроводы</h3>
            <p>Сердце газотранспортной системы - это сеть магистральных трубопроводов:</p>
            
            <div class="notice info">
                <p><strong>Технические характеристики:</strong></p>
                <ul>
                    <li><strong>Диаметр труб:</strong> 700–1420 мм</li>
                    <li><strong>Рабочее давление:</strong> 5,5–11,8 МПа</li>
                    <li><strong>Материал:</strong> Сталь марки X70–X80 с антикоррозийным покрытием</li>
                    <li><strong>Глубина залегания:</strong> 0,8–1,5 метра</li>
                </ul>
            </div>

            <h3>1.2. Компрессорные станции</h3>
            <p>Обеспечивают поддержание давления в трубопроводе на необходимом уровне:</p>
            <ul>
                <li><strong>Интервалы размещения:</strong> 100–150 км</li>
                <li><strong>Типы компрессоров:</strong>
                    <ul>
                        <li>Центробежные (ГПА) - наиболее распространены</li>
                        <li>Поршневые - для специальных задач</li>
                    </ul>
                </li>
                <li><strong>Мощность:</strong> От 10 до 25 МВт</li>
            </ul>

            <h3>1.3. Запорная арматура</h3>
            <p>Обеспечивает управление потоками газа и безопасность системы:</p>
            <ul>
                <li>Шаровые краны - основные запорные устройства</li>
                <li>Задвижки - для магистральных линий</li>
                <li>Предохранительные клапаны - защита от превышения давления</li>
                <li>Обратные клапаны - предотвращение обратного потока</li>
            </ul>

            <h2>2. Принцип работы газотранспортной системы</h2>
            <ol>
                <li><strong>Закачка газа</strong> в магистраль с промыслов или хранилищ</li>
                <li><strong>Транспортировка</strong> с поддержанием давления компрессорными станциями</li>
                <li><strong>Распределение</strong> через газораспределительные станции (ГРС)</li>
                <li><strong>Учет расхода</strong> на узлах коммерческого учета</li>
                <li><strong>Подача</strong> конечным потребителям</li>
            </ol>

            <h2>3. Технические особенности</h2>
            <ul>
                <li><strong>Скорость потока газа:</strong> 10–25 м/с</li>
                <li><strong>Производительность:</strong> до 300 млн м³/сутки</li>
                <li><strong>Система контроля:</strong> SCADA (диспетчеризация в реальном времени)</li>
                <li><strong>Автоматизация:</strong> Современные системы автоматического регулирования</li>
                <li><strong>Телеметрия:</strong> Дистанционный мониторинг параметров</li>
            </ul>

            <h2>4. Безопасность и экология</h2>
            <div class="notice info">
                <p><strong>Меры безопасности:</strong></p>
                <ul>
                    <li>Многоуровневая система аварийного отключения</li>
                    <li>Катодная защита от коррозии</li>
                    <li>Регулярный диагностический контроль</li>
                    <li>Системы обнаружения утечек</li>
                </ul>
            </div>

            <div class="notice info">
                <p><strong>Экологические аспекты:</strong></p>
                <ul>
                    <li>Экологический мониторинг вдоль трасс</li>
                    <li>Минимизация выбросов при эксплуатации</li>
                    <li>Восстановление земель после строительства</li>
                    <li>Использование экологичных материалов</li>
                </ul>
            </div>

            <h2>5. Перспективные технологии</h2>
            <ul>
                <li><strong>Умные трубопроводы</strong> с интегрированными датчиками</li>
                <li><strong>Цифровые двойники</strong> для моделирования работы системы</li>
                <li><strong>Беспилотный мониторинг</strong> с использованием дронов</li>
                <li><strong>Новые материалы</strong> для труб с улучшенными характеристиками</li>
                <li><strong>Гибридные системы</strong> транспорта газа и передачи данных</li>
            </ul>

            <h2>Заключение</h2>
            <p>Трубопроводный транспорт газа остается наиболее надежным и экономически эффективным способом доставки природного газа на большие расстояния. Современные технологии позволяют постоянно повышать безопасность, надежность и экологичность газотранспортных систем. Дальнейшее развитие цифровых технологий открывает новые перспективы для оптимизации работы газопроводов и снижения эксплуатационных затрат.</p>

            <!-- Тест для самопроверки -->
            <div class="test-container">
                <h2>Проверьте свои знания</h2>
                <form id="pipelineTest">
                    
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Какое рабочее давление поддерживается в магистральных газопроводах?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q1" id="q1a" value="a">
                                <label for="q1a">1-3 МПа</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1b" value="b">
                                <label for="q1b">5,5-11,8 МПа</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1c" value="c">
                                <label for="q1c">15-20 МПа</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="b">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. Как называется система диспетчерского управления газопроводами?</strong></p>
                        <input type="text" id="q2_answer" class="text-answer" placeholder="Введите ответ">
                        <input type="hidden" id="correct_q2" value="SCADA">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Какое расстояние между компрессорными станциями на магистральных газопроводах?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q3" id="q3a" value="a">
                                <label for="q3a">50-70 км</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3b" value="b">
                                <label for="q3b">100-150 км</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3c" value="c">
                                <label for="q3c">200-250 км</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q3" value="b">
                    </div>
                    
                    <!-- Вопрос 4 -->
                    <div class="question">
                        <p><strong>4. Какой тип стали преимущественно используется для магистральных газопроводов?</strong></p>
                        <input type="text" id="q4_answer" class="text-answer" placeholder="Введите марку стали">
                        <input type="hidden" id="correct_q4" value="X70-X80">
                    </div>
                    
                    <!-- Вопрос 5 -->
                    <div class="question">
                        <p><strong>5. Как называется метод защиты труб от коррозии с помощью электрического тока?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q5" id="q5a" value="a">
                                <label for="q5a">Катодная защита</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5b" value="b">
                                <label for="q5b">Анодная защита</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5c" value="c">
                                <label for="q5c">Гальваническая защита</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q5" value="a">
                    </div>
                    
                    <!-- Вопрос 6 -->
                    <div class="question">
                        <p><strong>6. Какова средняя скорость потока газа в магистральном трубопроводе?</strong></p>
                        <input type="text" id="q6_answer" class="text-answer" placeholder="Введите диапазон скоростей">
                        <input type="hidden" id="correct_q6" value="10-25 м/с">
                    </div>
                    
                    <button type="button" onclick="checkPipelineTest()">Проверить ответы</button>
                </form>
                
                <div id="testResults" class="results"></div>
            </div>

            <!-- Связанные статьи -->
            <div class="related">
                <h3>Смотрите также:</h3>
                <ul>
                    <li><a href="/knowledge-base/gas-industry-basics/gas-storage.php">Хранение природного газа</a></li>
                    <li><a href="/knowledge-base/gas-industry-basics/gas-processing.php">Подготовка газа к транспортировке</a></li>
                    <li><a href="/knowledge-base/safety/pipeline-safety.php">Безопасность газопроводов</a></li>
                </ul>
            </div>
        </div>
    </div>
</article>

<script>
function checkPipelineTest() {
    let score = 0;
    let resultsHTML = "<h3>Результаты теста:</h3><ol>";
    
    // Проверка вопросов 1, 3, 5 (радио кнопки)
    for (let i = 1; i <= 5; i += 2) {
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
    
    // Проверка вопросов 2, 4, 6 (текстовые ответы)
    for (let i = 2; i <= 6; i += 2) {
        const answer = document.getElementById(`q${i}_answer`).value.trim();
        const correct = document.getElementById(`correct_q${i}`).value;
        
        if (answer.toLowerCase() === correct.toLowerCase()) {
            score++;
            resultsHTML += `<li class="correct">Вопрос ${i}: Правильно! Ваш ответ: ${answer}</li>`;
        } else {
            resultsHTML += `<li class="incorrect">Вопрос ${i}: Неправильно. Ваш ответ: ${answer || "Нет ответа"}. Правильный ответ: ${correct}</li>`;
        }
    }
    
    resultsHTML += `</ol><p><strong>Итоговый результат: ${score} из 6 (${Math.round(score/6*100)}%)</strong></p>`;
    
    document.getElementById('testResults').innerHTML = resultsHTML;
    document.getElementById('testResults').style.display = 'block';
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>