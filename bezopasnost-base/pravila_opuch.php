<?php 
$page_title = "Правила работы на опасных производственных участках";
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
            <h2>Классификация опасных производственных участков</h2>
            <p>Опасные производственные участки классифицируются по видам потенциальных угроз: химически опасные, взрывоопасные, пожароопасные, с повышенным уровнем шума или вибрации, с работающим оборудованием под высоким давлением. Каждый участок должен быть четко обозначен предупреждающими знаками и иметь ограждение опасной зоны. Допуск персонала на такие участки разрешается только после прохождения специального инструктажа и проверки знаний требований безопасности. Особый режим работы устанавливается для зон с возможным выделением вредных веществ или недостатком кислорода.</p>
            <p>Работы на высоте более 1,8 метра, в замкнутых пространствах, вблизи движущихся механизмов или под напряжением относятся к особо опасным и требуют оформления наряда-допуска. Перед началом работ на опасных участках обязательно проводится анализ рисков и разрабатываются меры защиты. Контроль состояния окружающей среды с помощью газоанализаторов и других измерительных приборов обязателен перед началом и в процессе выполнения работ. Все опасные зоны должны быть внесены в специальный реестр предприятия с указанием специфических требований безопасности.</p>

            <h2>Организационные меры безопасности</h2>
            <p>Каждый опасный производственный участок должен иметь утвержденный регламент работы с указанием последовательности операций и мер безопасности. Назначение ответственных лиц за проведение работ и контроль соблюдения требований обязательно для всех видов опасных работ. Допуск к работе осуществляется только после проверки наличия и исправности средств индивидуальной защиты. Работники должны быть проинформированы о специфических рисках участка и обучены правилам поведения в аварийных ситуациях.</p>
            <p>Система планово-предупредительных ремонтов оборудования на опасных участках должна строго соблюдаться с ведением журналов технического состояния. Запрещается выполнение работ при неисправности защитных устройств или систем аварийной сигнализации. Все операции с повышенной опасностью проводятся под наблюдением ответственного специалиста с непрерывным контролем параметров среды. Регулярные внеплановые инструктажи проводятся при изменении условий работы или после происшествий на аналогичных производствах.</p>

            <h2>Технические средства защиты</h2>
            <p>Все оборудование на опасных участках должно быть оснащено системами аварийного отключения и блокировки. Обязательна установка датчиков контроля опасных факторов: загазованности, температуры, давления, уровня радиации. Системы вентиляции на химически опасных участках должны обеспечивать кратность воздухообмена согласно нормативным требованиям. Противопожарная защита включает автоматические системы пожаротушения, дымоудаления и оповещения.</p>
            <p>Средства коллективной защиты (ограждения, защитные экраны, блокировочные устройства) должны находиться в исправном состоянии и регулярно проверяться. Эвакуационные пути и выходы обязаны соответствовать нормам по ширине, количеству и маркировке. Аварийное освещение и автономные источники питания обеспечивают безопасность при отключении основной электросети. Все технические средства защиты проходят периодические испытания с оформлением соответствующих актов.</p>

            <h2>Действия в аварийных ситуациях</h2>
            <p>При возникновении аварийной ситуации персонал должен немедленно прекратить работу и действовать согласно инструкции по локализации и ликвидации аварий. Эвакуация проводится по заранее определенным маршрутам с использованием средств индивидуальной защиты. Первоочередной задачей является изоляция источника опасности и предотвращение развития аварии. О каждом происшествии незамедлительно сообщается ответственному лицу и в соответствующие надзорные органы.</p>
            <p>После ликвидации аварии проводится расследование причин с оформлением акта и разработкой профилактических мероприятий. До завершения расследования и устранения причин аварии работа на участке приостанавливается. Особое внимание уделяется психологической поддержке пострадавших и свидетелей происшествия. Регулярные тренировки по действиям в аварийных ситуациях позволяют отработать навыки безопасного поведения и сократить время реагирования.</p>

            <div class="test-container">
                <h2>Проверьте свои знания</h2>
                <form id="safetyTest">
                    
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Какие работы относятся к особо опасным и требуют наряда-допуска?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q1" id="q1a" value="a">
                                <label for="q1a">Любые работы на производстве</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1b" value="b">
                                <label for="q1b">Работы на высоте, в замкнутых пространствах, под напряжением</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1c" value="c">
                                <label for="q1c">Только работы с химическими веществами</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="b">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. Что обязательно перед началом работ на опасном участке?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q2" id="q2a" value="a">
                                <label for="q2a">Получение разрешения от начальника цеха</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2b" value="b">
                                <label for="q2b">Анализ рисков и инструктаж по мерам безопасности</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2c" value="c">
                                <label for="q2c">Ознакомление с графиком работы</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q2" value="b">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Какие технические средства обязательны на опасных участках?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q3" id="q3a" value="a">
                                <label for="q3a">Только средства индивидуальной защиты</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3b" value="b">
                                <label for="q3b">Системы аварийного отключения, датчики контроля, вентиляция</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3c" value="c">
                                <label for="q3c">Компьютеры для учета рабочего времени</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q3" value="b">
                    </div>
                    
                    <!-- Вопрос 4 -->
                    <div class="question">
                        <p><strong>4. Что делать при возникновении аварийной ситуации?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q4" id="q4a" value="a">
                                <label for="q4a">Продолжить работу с повышенной осторожностью</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4b" value="b">
                                <label for="q4b">Немедленно прекратить работу и следовать инструкции</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4c" value="c">
                                <label for="q4c">Сообщить коллегам и ждать указаний</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q4" value="b">
                    </div>
                    
                    <!-- Вопрос 5 -->
                    <div class="question">
                        <p><strong>5. Какие три элемента обязательны для эвакуационных путей? (перечислите через запятую)</strong></p>
                        <input type="text" id="q5_answer" class="text-answer" placeholder="Введите ответ">
                        <input type="hidden" id="correct_q5" value="соответствие нормам ширины, достаточное количество, правильная маркировка">
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
                a: 'Любые работы на производстве',
                b: 'Работы на высоте, в замкнутых пространствах, под напряжением',
                c: 'Только работы с химическими веществами'
            },
            correctText: 'Работы на высоте, в замкнутых пространствах, под напряжением'
        },
        {
            id: 2,
            type: 'radio',
            name: 'q2',
            correct: 'b',
            answers: {
                a: 'Получение разрешения от начальника цеха',
                b: 'Анализ рисков и инструктаж по мерам безопасности',
                c: 'Ознакомление с графиком работы'
            },
            correctText: 'Анализ рисков и инструктаж по мерам безопасности'
        },
        {
            id: 3,
            type: 'radio',
            name: 'q3',
            correct: 'b',
            answers: {
                a: 'Только средства индивидуальной защиты',
                b: 'Системы аварийного отключения, датчики контроля, вентиляция',
                c: 'Компьютеры для учета рабочего времени'
            },
            correctText: 'Системы аварийного отключения, датчики контроля, вентиляция'
        },
        {
            id: 4,
            type: 'radio',
            name: 'q4',
            correct: 'b',
            answers: {
                a: 'Продолжить работу с повышенной осторожностью',
                b: 'Немедленно прекратить работу и следовать инструкции',
                c: 'Сообщить коллегам и ждать указаний'
            },
            correctText: 'Немедленно прекратить работу и следовать инструкции'
        },
        {
            id: 5,
            type: 'text',
            name: 'q5_answer',
            correct: 'соответствие нормам ширины, достаточное количество, правильная маркировка',
            correctText: 'соответствие нормам ширины, достаточное количество, правильная маркировка'
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