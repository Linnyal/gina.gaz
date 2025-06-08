<?php 
$page_title = "Правила хранения и использования легковоспламеняющихся веществ";
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
        color: #e74c3c;
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
        border-color: #e74c3c;
        background-color: #e74c3c;
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
        border-color: #e74c3c;
        box-shadow: 0 0 0 3px rgba(231, 76, 60, 0.2);
    }
    
    button[type="button"] {
        padding: 12px 24px;
        background-color: #e74c3c;
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
        background-color: #c0392b;
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
        border-bottom: 2px solid #e74c3c;
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
        color: #e74c3c;
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
            <span>Категория: <a href="/knowledge-base/fire-safety/">Пожарная безопасность</a></span>
            <span>Обновлено: <?= date('d.m.Y') ?></span>
        </div>

        <div class="content">
            <h2>Классификация легковоспламеняющихся веществ</h2>
            <p>Легковоспламеняющиеся вещества представляют особую опасность на всех этапах работы с ними - от хранения сырья до утилизации готовой продукции. К этой категории относятся жидкости с температурой вспышки ниже 61°C, газы, способные гореть в смеси с воздухом, а также твердые материалы, легко загорающиеся от кратковременного воздействия пламени. Особое внимание следует уделять растворителям, топливам, лакам и краскам, которые широко используются в промышленности и быту.</p>
            <p>Каждое вещество имеет свои характеристики пожароопасности, которые обязательно должны учитываться при организации рабочих процессов. Температура вспышки, пределы воспламеняемости и группа горючести - ключевые параметры, определяющие условия безопасного хранения и применения. Неправильное обращение с такими материалами может привести к мгновенному возгоранию с тяжелыми последствиями.</p>

            <h2>Требования к помещениям для хранения</h2>
            <p>Специально оборудованные склады для легковоспламеняющихся веществ должны соответствовать строгим нормам пожарной безопасности. Обязательна принудительная вентиляция, обеспечивающая постоянный воздухообмен и предотвращающая скопление паров. Электрооборудование в таких помещениях выполняется во взрывозащищенном исполнении, а все металлические конструкции заземляются для исключения искрообразования.</p>
            <p>Хранилища оборудуются автоматическими системами пожаротушения, предпочтительно газовыми или порошковыми. Стены и перекрытия должны иметь соответствующий предел огнестойкости - не менее 2 часов. Запрещается совместное хранение веществ, которые при взаимодействии могут вызвать пожар или взрыв. Особые требования предъявляются к емкостям для хранения - они должны быть герметичными, коррозионностойкими и иметь аварийные клапаны.</p>

            <h2>Безопасная работа с горючими материалами</h2>
            <p>При работе с легковоспламеняющимися веществами необходимо строго соблюдать технологические регламенты. Все операции должны проводиться в вытяжных шкафах или под местной вентиляцией. Запрещается использовать открытый огонь в радиусе 50 метров от места работ. Перенос веществ между емкостями осуществляется с применением искробезопасного оборудования, а розлив - через заземленные воронки.</p>
            <p>Особую осторожность следует проявлять при нагреве горючих жидкостей - температура не должна приближаться к точке вспышки. Остатки пролитых веществ немедленно убираются с помощью негорючих сорбентов. После завершения работ все оборудование тщательно очищается, а использованные материалы помещаются в специальные контейнеры для последующей утилизации.</p>

            <h2>Транспортировка и утилизация</h2>
            <p>Перевозка легковоспламеняющихся веществ осуществляется специальным транспортом, оборудованным средствами пожаротушения и сигнализацией. Тара должна быть прочной, герметичной и маркированной согласно международным стандартам. При погрузочно-разгрузочных работах исключаются удары и падения емкостей, а также их перегрев на солнце.</p>
            <p>Утилизация остатков и отходов проводится на специализированных предприятиях с применением безопасных методов нейтрализации. Категорически запрещается слив горючих жидкостей в канализацию или на почву. Отработанные материалы собираются в отдельные герметичные контейнеры и передаются лицензированным организациям. Персонал, занятый на таких работах, проходит специальное обучение и обеспечивается средствами индивидуальной защиты.</p>

            <div class="test-container">
                <h2>Проверьте свои знания</h2>
                <form id="flammableTest">
                    
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Какая температура вспышки характерна для легковоспламеняющихся жидкостей?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q1" id="q1a" value="a">
                                <label for="q1a">Выше 100°C</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1b" value="b">
                                <label for="q1b">Ниже 61°C</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1c" value="c">
                                <label for="q1c">Ровно 0°C</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="b">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. Какое электрооборудование разрешено в помещениях для хранения легковоспламеняющихся веществ?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q2" id="q2a" value="a">
                                <label for="q2a">Обычное бытовое</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2b" value="b">
                                <label for="q2b">Взрывозащищенное</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2c" value="c">
                                <label for="q2c">Любое промышленное</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q2" value="b">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Какое минимальное расстояние от открытого огня должно соблюдаться при работе с горючими материалами?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q3" id="q3a" value="a">
                                <label for="q3a">5 метров</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3b" value="b">
                                <label for="q3b">20 метров</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3c" value="c">
                                <label for="q3c">50 метров</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q3" value="c">
                    </div>
                    
                    <!-- Вопрос 4 -->
                    <div class="question">
                        <p><strong>4. Как следует утилизировать легковоспламеняющиеся отходы?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q4" id="q4a" value="a">
                                <label for="q4a">Выливать в канализацию</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4b" value="b">
                                <label for="q4b">Передавать специализированным организациям</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4c" value="c">
                                <label for="q4c">Закапывать в землю</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q4" value="b">
                    </div>
                    
                    <!-- Вопрос 5 -->
                    <div class="question">
                        <p><strong>5. Какие системы пожаротушения наиболее эффективны для легковоспламеняющихся веществ?</strong></p>
                        <input type="text" id="q5_answer" class="text-answer" placeholder="Введите ответ">
                        <input type="hidden" id="correct_q5" value="газовые или порошковые">
                    </div>
                    
                    <button type="button" onclick="checkTest()">Проверить ответы</button>
                </form>
                
                <div id="testResults" class="results"></div>
            </div>
        </div>
    </div>
</article>

<script>
function checkTest() {
    let score = 0;
    let resultsHTML = "<h3>Результаты теста:</h3><ol>";
    const questions = [
        {
            id: 1,
            type: 'radio',
            name: 'q1',
            correct: 'b',
            answers: {
                a: 'Выше 100°C',
                b: 'Ниже 61°C',
                c: 'Ровно 0°C'
            },
            correctText: 'Ниже 61°C'
        },
        {
            id: 2,
            type: 'radio',
            name: 'q2',
            correct: 'b',
            answers: {
                a: 'Обычное бытовое',
                b: 'Взрывозащищенное',
                c: 'Любое промышленное'
            },
            correctText: 'Взрывозащищенное'
        },
        {
            id: 3,
            type: 'radio',
            name: 'q3',
            correct: 'c',
            answers: {
                a: '5 метров',
                b: '20 метров',
                c: '50 метров'
            },
            correctText: '50 метров'
        },
        {
            id: 4,
            type: 'radio',
            name: 'q4',
            correct: 'b',
            answers: {
                a: 'Выливать в канализацию',
                b: 'Передавать специализированным организациям',
                c: 'Закапывать в землю'
            },
            correctText: 'Передавать специализированным организациям'
        },
        {
            id: 5,
            type: 'text',
            name: 'q5_answer',
            correct: 'газовые или порошковые',
            correctText: 'газовые или порошковые'
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
            if (answer.includes(question.correct.toLowerCase())) {
                score++;
                resultsHTML += `<li class="correct">Вопрос ${question.id}: Правильно! Ваш ответ: ${answer}</li>`;
            } else {
                resultsHTML += `<li class="incorrect">Вопрос ${question.id}: Неверно. Ваш ответ: ${answer || "Нет ответа"}. Правильный ответ: ${question.correctText}</li>`;
            }
        }
    });
    
    resultsHTML += `</ol><p><strong>Итоговый результат: ${score} из ${questions.length} (${Math.round(score/questions.length*100)}%)</strong></p>`;
    document.getElementById('testResults').innerHTML = resultsHTML;
    document.getElementById('testResults').style.display = 'block';
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>