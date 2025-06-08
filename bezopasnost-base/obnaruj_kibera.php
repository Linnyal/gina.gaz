<?php 
$page_title = "Обнаружение и предотвращение кибератак";
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
        background-color: #ffffff !important;
    }
    
    .centered-content {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        text-align: left;
        background-color: #ffffff;
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
        border-color: #3498db;
        background-color: #3498db;
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
        border-color: #3498db;
        box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
    }
    
    button[type="button"] {
        padding: 12px 24px;
        background-color: #3498db;
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
        background-color: #2980b9;
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
        color: #3498db;
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
            <span>Категория: <a href="/knowledge-base/infosec/">Информационная безопасность</a></span>
            <span>Обновлено: <?= date('d.m.Y') ?></span>
        </div>

        <div class="content">
            <h2>Основные типы кибератак</h2>
            <p>Современные киберугрозы становятся все более изощренными и многообразными. Наиболее распространенными атаками остаются фишинг, при котором злоумышленники пытаются получить конфиденциальные данные через поддельные письма и сайты, и вредоносное ПО, включая вирусы, трояны и программы-шифровальщики. Атаки типа "отказ в обслуживании" (DDoS) направлены на перегрузку систем и делают ресурсы недоступными для пользователей. Целевые атаки (APT) представляют особую опасность, так как разрабатываются специально для конкретной организации и могут оставаться незамеченными длительное время.</p>
            <p>Социальная инженерия остается эффективным инструментом злоумышленников, эксплуатируя человеческий фактор. Атаки на цепочки поставок через уязвимости в стороннем ПО и атаки на IoT-устройства расширяют поверхность атаки. Современные киберпреступники используют искусственный интеллект для автоматизации атак и анализа защитных систем, что требует от организаций постоянного совершенствования методов обнаружения и предотвращения угроз.</p>

            <h2>Методы обнаружения кибератак</h2>
            <p>Системы обнаружения вторжений (IDS) анализируют сетевой трафик и активность на конечных точках, выявляя подозрительные шаблоны поведения. Современные решения используют технологии машинного обучения для идентификации новых, ранее неизвестных угроз. Мониторинг журналов событий и анализ аномалий помогают выявить несанкционированные действия в корпоративной сети. Особое внимание уделяется поведенческому анализу, который позволяет обнаруживать атаки на ранних стадиях по отклонениям от нормальной активности пользователей и систем.</p>
            <p>Угрозы можно обнаружить по косвенным признакам: необычно высокая сетевая активность, подозрительные процессы в системе, неожиданные изменения в конфигурационных файлах. Интеграция различных источников данных и корреляция событий значительно повышают эффективность обнаружения. Важно не только выявлять атаки, но и определять их масштаб, чтобы правильно оценить потенциальный ущерб и принять адекватные меры реагирования.</p>

            <h2>Профилактические меры защиты</h2>
            <p>Многоуровневая защита начинается с базовых мер: регулярного обновления ПО, использования сложных паролей и двухфакторной аутентификации. Межсетевые экраны и системы предотвращения вторжений (IPS) фильтруют входящий и исходящий трафик, блокируя известные угрозы. Сегментация сети ограничивает распространение атак в случае проникновения злоумышленников. Регулярное обучение сотрудников повышает осведомленность о современных угрозах и методах социальной инженерии.</p>
            <p>Шифрование данных как при хранении, так и при передаче защищает конфиденциальную информацию даже в случае утечки. Внедрение принципа минимальных привилегий ограничивает потенциальный ущерб от компрометации учетных записей. Периодические аудиты безопасности и тестирование на проникновение помогают выявить уязвимости до того, как ими воспользуются злоумышленники. Резервное копирование критически важных данных должно быть обязательным элементом стратегии защиты.</p>

            <h2>Действия при обнаружении атаки</h2>
            <p>При обнаружении кибератаки важно действовать быстро и методично. Первым шагом является изоляция зараженных систем от сети для предотвращения распространения угрозы. Необходимо сохранить все доказательства для последующего анализа: логи, дампы памяти, образцы вредоносного кода. Уведомление руководства и ответственных за информационную безопасность должно происходить без задержек. В случае утечки персональных данных может потребоваться уведомление регулирующих органов и затронутых лиц в соответствии с законодательством.</p>
            <p>После нейтрализации угрозы проводится тщательный анализ инцидента для выявления уязвимостей и путей проникновения. На основе полученных данных обновляются правила фильтрации, патчится ПО, усиливаются меры мониторинга. Разработка плана восстановления и проведение учений помогают минимизировать downtime в случае реальных атак. Каждый инцидент должен стать уроком, приводящим к укреплению защитных механизмов организации.</p>

            <div class="test-container">
                <h2>Проверьте свои знания</h2>
                <form id="cyberSecurityTest">
                    
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Какая атака направлена на перегрузку систем и делает ресурсы недоступными?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q1" id="q1a" value="a">
                                <label for="q1a">Фишинг</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1b" value="b">
                                <label for="q1b">DDoS</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1c" value="c">
                                <label for="q1c">SQL-инъекция</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="b">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. Что помогает выявлять новые, ранее неизвестные угрозы?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q2" id="q2a" value="a">
                                <label for="q2a">Сигнатурный анализ</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2b" value="b">
                                <label for="q2b">Машинное обучение</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2c" value="c">
                                <label for="q2c">Ручная проверка логов</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q2" value="b">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Какая мера защиты ограничивает распространение атаки в сети?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q3" id="q3a" value="a">
                                <label for="q3a">Использование простых паролей</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3b" value="b">
                                <label for="q3b">Сегментация сети</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3c" value="c">
                                <label for="q3c">Отключение брандмауэра</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q3" value="b">
                    </div>
                    
                    <!-- Вопрос 4 -->
                    <div class="question">
                        <p><strong>4. Что следует сделать в первую очередь при обнаружении кибератаки?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q4" id="q4a" value="a">
                                <label for="q4a">Продолжить работу как обычно</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4b" value="b">
                                <label for="q4b">Изолировать зараженные системы</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4c" value="c">
                                <label for="q4c">Удалить все логи</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q4" value="b">
                    </div>
                    
                    <!-- Вопрос 5 -->
                    <div class="question">
                        <p><strong>5. Какие три элемента должны быть в стратегии защиты от кибератак?</strong></p>
                        <input type="text" id="q5_answer" class="text-answer" placeholder="Введите ответ (перечислите через запятую)">
                        <input type="hidden" id="correct_q5" value="предотвращение, обнаружение, реагирование">
                    </div>
                    
                    <button type="button" id="checkTestBtn">Проверить ответы</button>
                </form>
                
                <div id="testResults" class="results"></div>
            </div>
        </div>
    </div>
</article>

<script>
document.getElementById('checkTestBtn').addEventListener('click', function() {
    let score = 0;
    let resultsHTML = "<h3>Результаты теста:</h3><ol>";
    const questions = [
        {
            id: 1,
            type: 'radio',
            name: 'q1',
            correct: 'b',
            answers: {
                a: 'Фишинг',
                b: 'DDoS',
                c: 'SQL-инъекция'
            },
            correctText: 'DDoS'
        },
        {
            id: 2,
            type: 'radio',
            name: 'q2',
            correct: 'b',
            answers: {
                a: 'Сигнатурный анализ',
                b: 'Машинное обучение',
                c: 'Ручная проверка логов'
            },
            correctText: 'Машинное обучение'
        },
        {
            id: 3,
            type: 'radio',
            name: 'q3',
            correct: 'b',
            answers: {
                a: 'Использование простых паролей',
                b: 'Сегментация сети',
                c: 'Отключение брандмауэра'
            },
            correctText: 'Сегментация сети'
        },
        {
            id: 4,
            type: 'radio',
            name: 'q4',
            correct: 'b',
            answers: {
                a: 'Продолжить работу как обычно',
                b: 'Изолировать зараженные системы',
                c: 'Удалить все логи'
            },
            correctText: 'Изолировать зараженные системы'
        },
        {
            id: 5,
            type: 'text',
            name: 'q5_answer',
            correct: 'предотвращение, обнаружение, реагирование',
            correctText: 'предотвращение, обнаружение, реагирование'
        }
    ];

    questions.forEach(question => {
        if (question.type === 'radio') {
            const selected = document.querySelector(`input[name="${question.name}"]:checked`);
            
            if (selected && selected.value === question.correct) {
                score++;
                resultsHTML += `<li class="correct">Вопрос ${question.id}: Правильно! Ваш ответ: ${question.answers[selected.value]}</li>`;
            } else {
                const userAnswer = selected ? question.answers[selected.value] : "Нет ответа";
                resultsHTML += `<li class="incorrect">Вопрос ${question.id}: Неправильно. Ваш ответ: ${userAnswer}. Правильный ответ: ${question.correctText}</li>`;
            }
        } else if (question.type === 'text') {
            const answer = document.getElementById(question.name).value.trim().toLowerCase();
            const correctAnswers = question.correct.split(', ');
            const userAnswers = answer.split(/,\s*/);
            
            let isCorrect = correctAnswers.every(correctAns => 
                userAnswers.some(userAns => userAns.includes(correctAns)))
                && correctAnswers.length === userAnswers.length;
            
            if (isCorrect) {
                score++;
                resultsHTML += `<li class="correct">Вопрос ${question.id}: Правильно! Ваш ответ: ${answer}</li>`;
            } else {
                resultsHTML += `<li class="incorrect">Вопрос ${question.id}: Неверно. Ваш ответ: ${answer || "Нет ответа"}. Правильный ответ: ${question.correctText}</li>`;
            }
        }
    });
    
    resultsHTML += `</ol><p><strong>Итоговый результат: ${score} из ${questions.length} (${Math.round(score/questions.length*100)}%)</strong></p>`;
    const resultsDiv = document.getElementById('testResults');
    resultsDiv.innerHTML = resultsHTML;
    resultsDiv.style.display = 'block';
});
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>