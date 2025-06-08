<?php 
$page_title = "Пожарная безопасность в офисе: рекомендации для сотрудников";
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
            <span>Категория: <a href="/knowledge-base/office-safety/">Офисная безопасность</a></span>
            <span>Обновлено: <?= date('d.m.Y') ?></span>
        </div>

        <div class="content">
            <h2>Основные риски в офисе</h2>
            <p>Офисные помещения, несмотря на кажущуюся безопасность, содержат множество потенциальных источников пожара. Перегруженные электросети из-за большого количества оргтехники, неисправные электроприборы, неправильное хранение бумажных документов - все это создает угрозу возгорания. Особую опасность представляют курительные комнаты, кухонные зоны и серверные помещения, где сосредоточены наиболее пожароопасные элементы офисной инфраструктуры.</p>
            <p>Современные офисы с открытыми пространствами и легковоспламеняющимися отделочными материалами могут способствовать быстрому распространению огня. Добавляет рисков и привычка сотрудников заряжать гаджеты на рабочих местах, оставлять включенными обогреватели и нарушать другие элементарные правила безопасности. Осознание этих рисков - первый шаг к созданию действительно безопасной рабочей среды.</p>

            <h2>Организация безопасного рабочего места</h2>
            <p>Каждый сотрудник должен содержать свое рабочее место в порядке, не загромождая проходы и эвакуационные пути. Бумаги и другие горючие материалы следует хранить в специальных шкафах, а не на открытых стеллажах или подоконниках. Электропроводка должна быть аккуратно разложена и защищена от повреждений, а розетки не перегружены тройниками и удлинителями.</p>
            <p>Персональные электроприборы (чайники, обогреватели, вентиляторы) необходимо использовать только в специально отведенных местах и отключать после работы. Курительные комнаты должны быть оборудованы пепельницами с гидрозатвором, а кухни - исправными микроволновыми печами и электрическими чайниками с автоматическим отключением. Серверные и архивы требуют особого внимания - в них обязательно наличие автономных средств пожаротушения.</p>

            <h2>Действия при пожаре</h2>
            <p>При обнаружении возгорания немедленно сообщите в пожарную охрану по телефону 101 и включите ручную пожарную сигнализацию. Оцените обстановку - если очаг небольшой, попробуйте потушить его с помощью огнетушителя, не подвергая себя опасности. При сильном задымлении пригнитесь к полу, накройтесь влажной тканью и двигайтесь к выходу, не пользуясь лифтами.</p>
            <p>Руководители и ответственные за пожарную безопасность сотрудники должны организовать эвакуацию согласно плану, размещенному на каждом этаже. После выхода из здания необходимо собраться в заранее определенном месте для проверки по спискам. Никогда не возвращайтесь в горящее здание без разрешения пожарных, даже для спасения документов или личных вещей.</p>

            <h2>Профилактические мероприятия</h2>
            <p>Регулярные тренировки по эвакуации - обязательный элемент офисной безопасности. Все сотрудники должны знать расположение огнетушителей, пожарных кранов и эвакуационных выходов. Ответственные лица обязаны ежемесячно проверять состояние средств пожаротушения и путей эвакуации.</p>
            <p>Техническое обслуживание электропроводки и оргтехники должно проводиться квалифицированными специалистами. Внедрение системы контроля доступа в нерабочее время и установка современных систем пожарной сигнализации значительно повышают уровень безопасности. Культура бережного отношения к правилам пожарной безопасности, формируемая руководством, становится лучшей гарантией предотвращения чрезвычайных ситуаций.</p>

            <div class="test-container">
                <h2>Проверьте свои знания</h2>
                <form id="officeSafetyTest">
                    
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Что является основной причиной пожаров в офисах?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q1" id="q1a" value="a">
                                <label for="q1a">Слишком яркое освещение</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1b" value="b">
                                <label for="q1b">Неисправности электропроводки и оборудования</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1c" value="c">
                                <label for="q1c">Холодная погода</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="b">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. Как следует хранить бумажные документы в офисе?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q2" id="q2a" value="a">
                                <label for="q2a">На подоконниках для естественной вентиляции</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2b" value="b">
                                <label for="q2b">В специальных шкафах</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2c" value="c">
                                <label for="q2c">На полу для удобства доступа</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q2" value="b">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Что делать при обнаружении возгорания в офисе?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q3" id="q3a" value="a">
                                <label for="q3a">Продолжить работу, если огонь небольшой</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3b" value="b">
                                <label for="q3b">Сообщить в пожарную охрану и начать эвакуацию</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3c" value="c">
                                <label for="q3c">Собрать вещи и покинуть офис</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q3" value="b">
                    </div>
                    
                    <!-- Вопрос 4 -->
                    <div class="question">
                        <p><strong>4. Как часто нужно проводить тренировки по эвакуации в офисе?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q4" id="q4a" value="a">
                                <label for="q4a">Раз в 5 лет</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4b" value="b">
                                <label for="q4b">Ежегодно</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4c" value="c">
                                <label for="q4c">Только при приеме на работу</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q4" value="b">
                    </div>
                    
                    <!-- Вопрос 5 -->
                    <div class="question">
                        <p><strong>5. Какие помещения в офисе представляют наибольшую пожарную опасность?</strong></p>
                        <input type="text" id="q5_answer" class="text-answer" placeholder="Введите ответ (перечислите через запятую)">
                        <input type="hidden" id="correct_q5" value="кухни, серверные, курительные комнаты">
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
                a: 'Слишком яркое освещение',
                b: 'Неисправности электропроводки и оборудования',
                c: 'Холодная погода'
            },
            correctText: 'Неисправности электропроводки и оборудования'
        },
        {
            id: 2,
            type: 'radio',
            name: 'q2',
            correct: 'b',
            answers: {
                a: 'На подоконниках для естественной вентиляции',
                b: 'В специальных шкафах',
                c: 'На полу для удобства доступа'
            },
            correctText: 'В специальных шкафах'
        },
        {
            id: 3,
            type: 'radio',
            name: 'q3',
            correct: 'b',
            answers: {
                a: 'Продолжить работу, если огонь небольшой',
                b: 'Сообщить в пожарную охрану и начать эвакуацию',
                c: 'Собрать вещи и покинуть офис'
            },
            correctText: 'Сообщить в пожарную охрану и начать эвакуацию'
        },
        {
            id: 4,
            type: 'radio',
            name: 'q4',
            correct: 'b',
            answers: {
                a: 'Раз в 5 лет',
                b: 'Ежегодно',
                c: 'Только при приеме на работу'
            },
            correctText: 'Ежегодно'
        },
        {
            id: 5,
            type: 'text',
            name: 'q5_answer',
            correct: 'кухни, серверные, курительные комнаты',
            correctText: 'кухни, серверные, курительные комнаты'
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
                userAnswers.some(userAns => userAns.includes(correctAns))
            ) && userAnswers.every(userAns => 
                correctAnswers.some(correctAns => userAns.includes(correctAns))
            );
            
            if (isCorrect) {
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