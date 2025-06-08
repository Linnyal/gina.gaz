<?php 
$page_title = "Основы информационной безопасности на предприятиях";
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
            <h2>Ключевые принципы информационной безопасности</h2>
            <p>Современная информационная безопасность предприятия строится на трех фундаментальных принципах: конфиденциальности, целостности и доступности данных. Конфиденциальность означает защиту информации от несанкционированного доступа, целостность - обеспечение точности и полноты данных, а доступность - гарантию того, что авторизованные пользователи могут получить доступ к информации, когда это необходимо. Эти принципы реализуются через комплекс технических и организационных мер, адаптированных под специфику конкретного бизнеса.</p>
            <p>Эффективная система информационной безопасности требует баланса между защитой данных и удобством работы сотрудников. Чрезмерные ограничения могут снизить производительность труда, тогда как недостаточная защита делает предприятие уязвимым для кибератак. Важно понимать, что безопасность - это процесс, а не разовое мероприятие, требующий постоянного мониторинга и адаптации к новым угрозам.</p>

            <h2>Основные угрозы и уязвимости</h2>
            <p>Предприятия сталкиваются с разнообразными угрозами информационной безопасности, начиная от внешних кибератак до внутренних нарушений. Фишинг, вредоносное ПО, атаки на уязвимости программного обеспечения представляют серьезную опасность. Однако не менее рискованными являются действия сотрудников: использование слабых паролей, подключение неавторизованных устройств, передача конфиденциальной информации через незащищенные каналы.</p>
            <p>Уязвимости в корпоративных системах часто возникают из-за несвоевременного обновления программного обеспечения, неправильной настройки прав доступа или отсутствия шифрования данных. Социальная инженерия остается одним из наиболее эффективных методов атак, так как эксплуатирует человеческий фактор, а не технические уязвимости. Осознание этих рисков - первый шаг к построению эффективной системы защиты.</p>

            <h2>Организационные меры защиты</h2>
            <p>Разработка и внедрение политик информационной безопасности - основа защиты корпоративных данных. Эти документы регламентируют правила работы с информацией, определяют уровни доступа и ответственности сотрудников. Обязательным элементом является обучение персонала, которое должно проводиться регулярно и охватывать как технические аспекты, так и вопросы осознания важности информационной безопасности.</p>
            <p>Управление доступом на основе принципа минимальных привилегий, контроль за перемещением данных, регламентирование использования личных устройств для работы - все эти меры снижают риски утечки информации. Особое внимание уделяется инцидент-менеджменту: четкие инструкции по действиям при обнаружении нарушений помогают минимизировать последствия инцидентов.</p>

            <h2>Технические средства защиты</h2>
            <p>Современные технические средства защиты информации включают многоуровневые системы аутентификации, межсетевые экраны, системы обнаружения и предотвращения вторжений. Шифрование данных как при хранении, так и при передаче стало обязательным стандартом для защиты конфиденциальной информации. Регулярное резервное копирование критически важных данных обеспечивает их сохранность в случае атак или технических сбоев.</p>
            <p>Системы мониторинга и анализа безопасности позволяют выявлять подозрительную активность в режиме реального времени. Виртуальные частные сети (VPN) защищают данные при удаленной работе, а системы защиты конечных точек (Endpoint Protection) предотвращают заражение устройств вредоносным ПО. Важно подчеркнуть, что технические средства эффективны только в сочетании с грамотными организационными мерами и обученным персоналом.</p>

            <div class="test-container">
                <h2>Проверьте свои знания</h2>
                <form id="infosecTest">
                    
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Какие три принципа составляют основу информационной безопасности?</strong></p>
                        <input type="text" id="q1_answer" class="text-answer" placeholder="Введите ответ (перечислите через запятую)">
                        <input type="hidden" id="correct_q1" value="конфиденциальность, целостность, доступность">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. Что из перечисленного является наиболее распространенным методом кибератак?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q2" id="q2a" value="a">
                                <label for="q2a">Фишинг</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2b" value="b">
                                <label for="q2b">Квантовые вычисления</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2c" value="c">
                                <label for="q2c">Радиоэлектронная разведка</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q2" value="a">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Какой принцип управления доступом считается наиболее безопасным?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q3" id="q3a" value="a">
                                <label for="q3a">Предоставление максимальных прав</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3b" value="b">
                                <label for="q3b">Принцип минимальных привилегий</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3c" value="c">
                                <label for="q3c">Свободный доступ для всех сотрудников</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q3" value="b">
                    </div>
                    
                    <!-- Вопрос 4 -->
                    <div class="question">
                        <p><strong>4. Для чего используется VPN в корпоративной среде?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q4" id="q4a" value="a">
                                <label for="q4a">Для ускорения интернет-соединения</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4b" value="b">
                                <label for="q4b">Для защиты данных при удаленной работе</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4c" value="c">
                                <label for="q4c">Для обхода корпоративных ограничений</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q4" value="b">
                    </div>
                    
                    <!-- Вопрос 5 -->
                    <div class="question">
                        <p><strong>5. Почему социальная инженерия остается эффективным методом атак?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q5" id="q5a" value="a">
                                <label for="q5a">Потому что эксплуатирует человеческий фактор</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5b" value="b">
                                <label for="q5b">Потому что требует сложного технического оборудования</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5c" value="c">
                                <label for="q5c">Потому что защитные системы не могут ее обнаружить</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q5" value="a">
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
            type: 'text',
            name: 'q1_answer',
            correct: 'конфиденциальность, целостность, доступность',
            correctText: 'конфиденциальность, целостность, доступность'
        },
        {
            id: 2,
            type: 'radio',
            name: 'q2',
            correct: 'a',
            answers: {
                a: 'Фишинг',
                b: 'Квантовые вычисления',
                c: 'Радиоэлектронная разведка'
            },
            correctText: 'Фишинг'
        },
        {
            id: 3,
            type: 'radio',
            name: 'q3',
            correct: 'b',
            answers: {
                a: 'Предоставление максимальных прав',
                b: 'Принцип минимальных привилегий',
                c: 'Свободный доступ для всех сотрудников'
            },
            correctText: 'Принцип минимальных привилегий'
        },
        {
            id: 4,
            type: 'radio',
            name: 'q4',
            correct: 'b',
            answers: {
                a: 'Для ускорения интернет-соединения',
                b: 'Для защиты данных при удаленной работе',
                c: 'Для обхода корпоративных ограничений'
            },
            correctText: 'Для защиты данных при удаленной работе'
        },
        {
            id: 5,
            type: 'radio',
            name: 'q5',
            correct: 'a',
            answers: {
                a: 'Потому что эксплуатирует человеческий фактор',
                b: 'Потому что требует сложного технического оборудования',
                c: 'Потому что защитные системы не могут ее обнаружить'
            },
            correctText: 'Потому что эксплуатирует человеческий фактор'
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