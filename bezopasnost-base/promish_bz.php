<?php 
$page_title = "Основные требования к промышленной безопасности на производстве";
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
            <h2>Нормативно-правовая база промышленной безопасности</h2>
            <p>Промышленная безопасность на производстве регулируется комплексом законодательных актов и нормативных документов, среди которых Федеральный закон "О промышленной безопасности опасных производственных объектов" занимает центральное место. Требования промышленной безопасности распространяются на все этапы жизненного цикла производства - от проектирования до вывода из эксплуатации. Особое внимание уделяется объектам, работающим с опасными веществами, подъемными сооружениями и оборудованием, работающим под высоким давлением.</p>
            <p>Лицензирование деятельности в области промышленной безопасности является обязательным для предприятий, эксплуатирующих опасные производственные объекты. Разработка декларации промышленной безопасности требуется для объектов I и II классов опасности. Регулярные проверки со стороны Ростехнадзора обеспечивают контроль за соблюдением нормативных требований. Ответственность за нарушение требований промышленной безопасности может быть административной, уголовной и материальной в зависимости от тяжести последствий.</p>

            <h2>Организационные требования безопасности</h2>
            <p>Каждое предприятие обязано разработать и внедрить систему управления промышленной безопасностью, соответствующую специфике производства. Назначение ответственных лиц за осуществление производственного контроля является обязательным требованием для всех опасных производственных объектов. Разработка и регулярное обновление инструкций по охране труда для каждой профессии и вида работ обеспечивает четкое понимание требований безопасности персоналом.</p>
            <p>Обучение и аттестация работников в области промышленной безопасности проводятся с установленной периодичностью и включают как вводный инструктаж, так и регулярные повторные обучения. Допуск к работе с опасным оборудованием возможен только после прохождения специального обучения и проверки знаний. Ведение журналов учета инструктажей, несчастных случаев и опасных ситуаций позволяет анализировать риски и принимать превентивные меры. Организация медицинских осмотров работников опасных производств является важной составляющей системы безопасности.</p>

            <h2>Технические требования к оборудованию и помещениям</h2>
            <p>Все технологическое оборудование должно соответствовать техническим регламентам и иметь сертификаты соответствия требованиям промышленной безопасности. Регулярные технические освидетельствования и диагностика оборудования выявляют скрытые дефекты и износ. Системы аварийной защиты и блокировки обязательны для оборудования, работающего в опасных режимах. Датчики контроля параметров технологических процессов должны быть исправны и проходить регулярную поверку.</p>
            <p>Производственные помещения должны соответствовать санитарным нормам по освещенности, вентиляции, температурному режиму и уровню шума. Эвакуационные пути и выходы должны быть свободны и обозначены соответствующими знаками. Противопожарная защита включает систему оповещения, первичные средства пожаротушения и автоматические системы подавления огня. Зоны с повышенной опасностью должны быть четко обозначены и оборудованы дополнительными средствами защиты.</p>

            <h2>Требования к эксплуатации и аварийной готовности</h2>
            <p>Эксплуатация оборудования должна осуществляться строго в соответствии с технической документацией и регламентами. Превышение допустимых параметров работы технологических систем категорически запрещено. Техническое обслуживание и ремонт проводятся по утвержденным графикам с обязательным оформлением нарядов-допусков для опасных работ. Контроль за состоянием оборудования включает ежесменный осмотр, плановые проверки и диагностику.</p>
            <p>Каждое предприятие обязано иметь план локализации и ликвидации аварийных ситуаций, согласованный с надзорными органами. Регулярные тренировки по действиям в аварийных ситуациях проводятся для всего персонала. Аварийные запасы средств защиты и нейтрализации опасных веществ должны поддерживаться в готовности. Система оповещения об авариях должна обеспечивать своевременное информирование персонала и служб реагирования. После каждой аварии или инцидента проводится тщательный анализ причин и разрабатываются меры по предотвращению повторения.</p>

            <div class="test-container">
                <h2>Проверьте свои знания</h2>
                <form id="industrialSafetyTest">
                    
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Какой закон является основным в области регулирования промышленной безопасности?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q1" id="q1a" value="a">
                                <label for="q1a">ФЗ "О техническом регулировании"</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1b" value="b">
                                <label for="q1b">ФЗ "О промышленной безопасности опасных производственных объектов"</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1c" value="c">
                                <label for="q1c">ФЗ "О защите прав потребителей"</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="b">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. Какие объекты обязаны разрабатывать декларацию промышленной безопасности?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q2" id="q2a" value="a">
                                <label for="q2a">Все промышленные предприятия</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2b" value="b">
                                <label for="q2b">Объекты I и II классов опасности</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2c" value="c">
                                <label for="q2c">Только объекты с численностью более 100 человек</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q2" value="b">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Что включает система управления промышленной безопасностью?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q3" id="q3a" value="a">
                                <label for="q3a">Только технические средства защиты</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3b" value="b">
                                <label for="q3b">Организационные и технические меры, обучение, контроль</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3c" value="c">
                                <label for="q3c">Только противопожарную защиту</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q3" value="b">
                    </div>
                    
                    <!-- Вопрос 4 -->
                    <div class="question">
                        <p><strong>4. Как часто должны проводиться тренировки по действиям в аварийных ситуациях?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q4" id="q4a" value="a">
                                <label for="q4a">Раз в год</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4b" value="b">
                                <label for="q4b">Регулярно, с установленной периодичностью</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4c" value="c">
                                <label for="q4c">Только при вводе объекта в эксплуатацию</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q4" value="b">
                    </div>
                    
                    <!-- Вопрос 5 -->
                    <div class="question">
                        <p><strong>5. Какие три основных вида ответственности предусмотрены за нарушение требований промышленной безопасности? (перечислите через запятую)</strong></p>
                        <input type="text" id="q5_answer" class="text-answer" placeholder="Введите ответ">
                        <input type="hidden" id="correct_q5" value="административная, уголовная, материальная">
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
                a: 'ФЗ "О техническом регулировании"',
                b: 'ФЗ "О промышленной безопасности опасных производственных объектов"',
                c: 'ФЗ "О защите прав потребителей"'
            },
            correctText: 'ФЗ "О промышленной безопасности опасных производственных объектов"'
        },
        {
            id: 2,
            type: 'radio',
            name: 'q2',
            correct: 'b',
            answers: {
                a: 'Все промышленные предприятия',
                b: 'Объекты I и II классов опасности',
                c: 'Только объекты с численностью более 100 человек'
            },
            correctText: 'Объекты I и II классов опасности'
        },
        {
            id: 3,
            type: 'radio',
            name: 'q3',
            correct: 'b',
            answers: {
                a: 'Только технические средства защиты',
                b: 'Организационные и технические меры, обучение, контроль',
                c: 'Только противопожарную защиту'
            },
            correctText: 'Организационные и технические меры, обучение, контроль'
        },
        {
            id: 4,
            type: 'radio',
            name: 'q4',
            correct: 'b',
            answers: {
                a: 'Раз в год',
                b: 'Регулярно, с установленной периодичностью',
                c: 'Только при вводе объекта в эксплуатацию'
            },
            correctText: 'Регулярно, с установленной периодичностью'
        },
        {
            id: 5,
            type: 'text',
            name: 'q5_answer',
            correct: 'административная, уголовная, материальная',
            correctText: 'административная, уголовная, материальная'
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