<?php 
$page_title = "Безопасные технологии работы с газовым оборудованием";
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
            <span>Категория: <a href="/knowledge-base/industrial-safety/">Промышленная безопасность</a></span>
            <span>Обновлено: <?= date('d.m.Y') ?></span>
        </div>

        <div class="content">
            <h2>Основные принципы безопасной работы с газовым оборудованием</h2>
            <p>Работа с газовым оборудованием требует строгого соблюдения специальных правил безопасности из-за высокой взрыво- и пожароопасности газовых смесей. Все операции должны выполняться только квалифицированным персоналом, прошедшим соответствующее обучение и аттестацию. Перед началом работ необходимо убедиться в исправности оборудования, отсутствии утечек газа и достаточной вентиляции помещения. Использование искрообразующего инструмента в зонах возможного скопления газа категорически запрещено.</p>
            <p>Особое внимание уделяется правилам подключения и отключения газового оборудования. Все соединения должны быть герметичными и проверяться на утечки с помощью мыльной эмульсии или газоанализаторов. Работы под давлением допускаются только в аварийных ситуациях и с применением специальных средств защиты. При обнаружении запаха газа необходимо немедленно прекратить работы, перекрыть подачу газа и проветрить помещение, не включая электроприборы и не создавая искр.</p>

            <h2>Технические требования к газовому оборудованию</h2>
            <p>Все газовое оборудование должно соответствовать техническим регламентам и иметь сертификаты соответствия требованиям промышленной безопасности. Регулярные технические освидетельствования и диагностика газопроводов и оборудования проводятся в установленные сроки. Системы автоматического отключения подачи газа при превышении допустимых параметров или обнаружении утечки обязательны для установки на всех объектах.</p>
            <p>Газовые баллоны должны храниться в специально оборудованных помещениях или на открытых площадках с защитой от солнечных лучей и нагрева. Перевозка баллонов осуществляется только с установленными защитными колпаками и в горизонтальном положении с прокладками между ними. Запрещается использовать баллоны с истекшим сроком освидетельствования или имеющие механические повреждения. Все газовые коммуникации должны быть промаркированы соответствующими предупреждающими знаками.</p>

            <h2>Средства индивидуальной и коллективной защиты</h2>
            <p>Персонал, работающий с газовым оборудованием, должен быть обеспечен средствами индивидуальной защиты, включая огнестойкую спецодежду, противогазы или респираторы для работы в загазованной среде. Обязательно наличие газоанализаторов персонального и стационарного типа для непрерывного контроля концентрации газа в воздухе. Помещения с газовым оборудованием оснащаются приточно-вытяжной вентиляцией с аварийным режимом работы.</p>
            <p>Коллективные средства защиты включают системы автоматического пожаротушения, аварийного освещения и оповещения. На объектах должны быть предусмотрены аварийные души и фонтаны для промывки глаз при контакте со сжиженным газом. Аптечки первой помощи укомплектовываются специальными средствами для оказания помощи при ожогах и отравлениях газом. Все работники должны быть обучены приемам оказания первой помощи при несчастных случаях, связанных с газом.</p>

            <h2>Аварийные ситуации и порядок действий</h2>
            <p>При возникновении аварийной ситуации с газовым оборудованием персонал должен действовать согласно утвержденному плану ликвидации аварий. Первоочередной задачей является прекращение подачи газа на аварийном участке и оповещение ответственных лиц. Эвакуация людей проводится при концентрации газа в воздухе более 20% от нижнего предела взрываемости. Включение/выключение электрооборудования в загазованной зоне запрещено.</p>
            <p>После ликвидации аварии проводится тщательное расследование причин ее возникновения с оформлением акта и разработкой мероприятий по предотвращению подобных ситуаций. До полного устранения причин аварии и проверки оборудования эксплуатация запрещена. Особое внимание уделяется психологической подготовке персонала к действиям в аварийных ситуациях через регулярные тренировки и учения. Все аварийные ситуации подлежат обязательной регистрации и анализу для совершенствования мер безопасности.</p>

            <div class="test-container">
                <h2>Проверьте свои знания</h2>
                <form id="gasEquipmentTest">
                    
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Что необходимо сделать в первую очередь при обнаружении запаха газа?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q1" id="q1a" value="a">
                                <label for="q1a">Проветрить помещение, включив вентилятор</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1b" value="b">
                                <label for="q1b">Немедленно перекрыть подачу газа и проветрить помещение</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1c" value="c">
                                <label for="q1c">Позвонить начальнику и ждать указаний</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="b">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. Как часто должны проводиться технические освидетельствования газового оборудования?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q2" id="q2a" value="a">
                                <label for="q2a">По усмотрению ответственного лица</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2b" value="b">
                                <label for="q2b">В установленные нормативными документами сроки</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2c" value="c">
                                <label for="q2c">Только после возникновения аварийной ситуации</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q2" value="b">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Какие средства защиты обязательны при работе с газовым оборудованием?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q3" id="q3a" value="a">
                                <label for="q3a">Только спецодежда</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3b" value="b">
                                <label for="q3b">Спецодежда, газоанализаторы, средства защиты органов дыхания</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3c" value="c">
                                <label for="q3c">Защитные очки и перчатки</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q3" value="b">
                    </div>
                    
                    <!-- Вопрос 4 -->
                    <div class="question">
                        <p><strong>4. Как должны храниться газовые баллоны?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q4" id="q4a" value="a">
                                <label for="q4a">В любом удобном месте</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4b" value="b">
                                <label for="q4b">В специальных помещениях или на площадках с защитой от солнца</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4c" value="c">
                                <label for="q4c">В подвальных помещениях</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q4" value="b">
                    </div>
                    
                    <!-- Вопрос 5 -->
                    <div class="question">
                        <p><strong>5. Какие три действия запрещены в загазованной зоне? (перечислите через запятую)</strong></p>
                        <input type="text" id="q5_answer" class="text-answer" placeholder="Введите ответ">
                        <input type="hidden" id="correct_q5" value="включение электрооборудования, создание искр, курение">
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
                a: 'Проветрить помещение, включив вентилятор',
                b: 'Немедленно перекрыть подачу газа и проветрить помещение',
                c: 'Позвонить начальнику и ждать указаний'
            },
            correctText: 'Немедленно перекрыть подачу газа и проветрить помещение'
        },
        {
            id: 2,
            type: 'radio',
            name: 'q2',
            correct: 'b',
            answers: {
                a: 'По усмотрению ответственного лица',
                b: 'В установленные нормативными документами сроки',
                c: 'Только после возникновения аварийной ситуации'
            },
            correctText: 'В установленные нормативными документами сроки'
        },
        {
            id: 3,
            type: 'radio',
            name: 'q3',
            correct: 'b',
            answers: {
                a: 'Только спецодежда',
                b: 'Спецодежда, газоанализаторы, средства защиты органов дыхания',
                c: 'Защитные очки и перчатки'
            },
            correctText: 'Спецодежда, газоанализаторы, средства защиты органов дыхания'
        },
        {
            id: 4,
            type: 'radio',
            name: 'q4',
            correct: 'b',
            answers: {
                a: 'В любом удобном месте',
                b: 'В специальных помещениях или на площадках с защитой от солнца',
                c: 'В подвальных помещениях'
            },
            correctText: 'В специальных помещениях или на площадках с защитой от солнца'
        },
        {
            id: 5,
            type: 'text',
            name: 'q5_answer',
            correct: 'включение электрооборудования, создание искр, курение',
            correctText: 'включение электрооборудования, создание искр, курение'
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