<?php 
$page_title = "Введение в пожарную безопасность: основные понятия и значение на рабочих местах";
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
            <h2>Основы пожарной безопасности</h2>
            <p>Пожарная безопасность представляет собой комплекс мер и требований, направленных на предотвращение возникновения пожаров и минимизацию их последствий. На любом рабочем месте, независимо от его специфики, соблюдение правил пожарной безопасности является обязательным условием для обеспечения защиты жизни и здоровья сотрудников, а также сохранности материальных ценностей.</p>
            <p>Основная цель пожарной безопасности - создание таких условий, при которых вероятность возникновения пожара сводится к минимуму, а в случае его возникновения имеются все необходимые средства и пути для быстрой эвакуации людей и эффективного тушения.</p>

            <h2>Ключевые понятия пожарной безопасности</h2>
            
            <h3>Пожар и его стадии</h3>
            <p>Пожар - это неконтролируемое горение, причиняющее материальный ущерб, вред жизни и здоровью людей. Развитие пожара проходит несколько стадий: начальную (возгорание), стадию объемного развития, стадию максимального развития и стадию затухания. Понимание этих стадий помогает правильно организовать противопожарную защиту.</p>
            
            <h3>Классы пожаров</h3>
            <p>Пожары классифицируются по типу горящих материалов: класс A - горение твердых веществ, B - горение жидкостей, C - горение газов, D - горение металлов, E - горение электроустановок под напряжением. Для каждого класса требуются свои методы тушения и соответствующие огнетушащие вещества.</p>
            
            <h3>Огнестойкость конструкций</h3>
            <p>Важное понятие в пожарной безопасности - предел огнестойкости строительных конструкций, который показывает, как долго конструкция сохраняет несущую способность при пожаре. Этот показатель измеряется в минутах и учитывается при проектировании зданий.</p>

            <h2>Организация пожарной безопасности на рабочих местах</h2>
            
            <h3>Ответственность работодателя</h3>
            <p>Работодатель обязан обеспечить соблюдение всех норм пожарной безопасности на предприятии. Это включает проведение инструктажей, оснащение средствами пожаротушения, разработку планов эвакуации и организацию систем пожарной сигнализации. Ответственность за пожарную безопасность возлагается на специально назначенных лиц.</p>
            
            <h3>Обучение персонала</h3>
            <p>Все сотрудники должны проходить регулярное обучение мерам пожарной безопасности. Вводный инструктаж проводится при приеме на работу, а повторный - не реже одного раза в год. Особое внимание уделяется практическим тренировкам по эвакуации и использованию первичных средств пожаротушения.</p>

            <h2>Предупредительные меры</h2>
            
            <h3>Огнезащитная обработка</h3>
            <p>Современные технологии предлагают различные методы огнезащитной обработки материалов и конструкций. Специальные пропитки, краски и покрытия значительно повышают сопротивляемость материалов огню, замедляя распространение пламени и увеличивая время для эвакуации.</p>
            
            <h3>Планировка помещений</h3>
            <p>Правильная планировка рабочих помещений с учетом требований пожарной безопасности включает обеспечение достаточной ширины эвакуационных путей, наличие аварийных выходов и их соответствующее обозначение. Все двери на путях эвакуации должны открываться наружу.</p>

            <h2>Заключение</h2>
            <p>Пожарная безопасность на рабочих местах - это не просто соблюдение формальных требований, а комплексная система мер, направленных на сохранение жизни и здоровья людей. Регулярное обучение персонала, техническое оснащение и ответственное отношение каждого сотрудника к правилам пожарной безопасности создают надежную защиту от пожаров и их последствий.</p>

            <div class="test-container">
                <h2>Проверьте свои знания</h2>
                <form id="fireSafetyTest">
                    
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Что является основной целью пожарной безопасности?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q1" id="q1a" value="a">
                                <label for="q1a">Снижение страховых выплат</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1b" value="b">
                                <label for="q1b">Предотвращение пожаров и минимизация их последствий</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1c" value="c">
                                <label for="q1c">Увеличение производительности труда</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="b">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. Какой класс пожара соответствует горению электроустановок под напряжением?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q2" id="q2a" value="a">
                                <label for="q2a">Класс A</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2b" value="b">
                                <label for="q2b">Класс C</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2c" value="c">
                                <label for="q2c">Класс E</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q2" value="c">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Как называется показатель, определяющий время сохранения несущей способности конструкции при пожаре?</strong></p>
                        <input type="text" id="q3_answer" class="text-answer" placeholder="Введите ответ">
                        <input type="hidden" id="correct_q3" value="предел огнестойкости">
                    </div>
                    
                    <!-- Вопрос 4 -->
                    <div class="question">
                        <p><strong>4. Кто несет ответственность за пожарную безопасность на предприятии?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q4" id="q4a" value="a">
                                <label for="q4a">Только специально назначенные лица</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4b" value="b">
                                <label for="q4b">Работодатель и назначенные им ответственные лица</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4c" value="c">
                                <label for="q4c">Все сотрудники предприятия</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q4" value="b">
                    </div>
                    
                    <!-- Вопрос 5 -->
                    <div class="question">
                        <p><strong>5. Как часто должен проводиться повторный инструктаж по пожарной безопасности?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q5" id="q5a" value="a">
                                <label for="q5a">Не реже одного раза в 3 года</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5b" value="b">
                                <label for="q5b">Не реже одного раза в год</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5c" value="c">
                                <label for="q5c">Только при изменении условий труда</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q5" value="b">
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
        {id: 1, type: 'radio', name: 'q1', correct: 'b', answers: {
            a: 'Снижение страховых выплат',
            b: 'Предотвращение пожаров и минимизация их последствий',
            c: 'Увеличение производительности труда'
        }},
        {id: 2, type: 'radio', name: 'q2', correct: 'c', answers: {
            a: 'Класс A',
            b: 'Класс C',
            c: 'Класс E'
        }},
        {id: 3, type: 'text', name: 'q3_answer', correct: 'предел огнестойкости'},
        {id: 4, type: 'radio', name: 'q4', correct: 'b', answers: {
            a: 'Только специально назначенные лица',
            b: 'Работодатель и назначенные им ответственные лица',
            c: 'Все сотрудники предприятия'
        }},
        {id: 5, type: 'radio', name: 'q5', correct: 'b', answers: {
            a: 'Не реже одного раза в 3 года',
            b: 'Не реже одного раза в год',
            c: 'Только при изменении условий труда'
        }}
    ];

    questions.forEach(question => {
        if (question.type === 'radio') {
            const selected = document.querySelector(`input[name="${question.name}"]:checked`);
            
            if (selected && selected.value === question.correct) {
                score++;
                resultsHTML += `<li class="correct">Вопрос ${question.id}: Правильно! Ваш ответ: ${question.answers[selected.value]}</li>`;
            } else {
                const userAnswer = selected ? question.answers[selected.value] : "Нет ответа";
                resultsHTML += `<li class="incorrect">Вопрос ${question.id}: Неправильно. Ваш ответ: ${userAnswer}. Правильный ответ: ${question.answers[question.correct]}</li>`;
            }
        } else if (question.type === 'text') {
            const answer = document.getElementById(question.name).value.trim().toLowerCase();
            if (answer.includes(question.correct.toLowerCase())) {
                score++;
                resultsHTML += `<li class="correct">Вопрос ${question.id}: Правильно! Ваш ответ: ${answer}</li>`;
            } else {
                resultsHTML += `<li class="incorrect">Вопрос ${question.id}: Неверно. Ваш ответ: ${answer || "Нет ответа"}. Правильный ответ: ${question.correct}</li>`;
            }
        }
    });
    
    resultsHTML += `</ol><p><strong>Итоговый результат: ${score} из ${questions.length} (${Math.round(score/questions.length*100)}%)</strong></p>`;
    document.getElementById('testResults').innerHTML = resultsHTML;
    document.getElementById('testResults').style.display = 'block';
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>