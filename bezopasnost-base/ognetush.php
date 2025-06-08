<?php 
$page_title = "Огнетушители и их использование: виды и правила применения";
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
            <h2>Основные виды огнетушителей</h2>
            <p>Современные огнетушители классифицируются по типу огнетушащего вещества и предназначены для разных классов пожаров. Пенные огнетушители эффективны против возгораний твердых материалов и горючих жидкостей, но совершенно не подходят для электроустановок под напряжением. Порошковые огнетушители универсальны - они справляются с большинством типов возгораний, включая электрооборудование, однако оставляют трудноудаляемые следы. Углекислотные огнетушители идеальны для тушения электроустановок и ценного оборудования, так как не повреждают объекты и не оставляют следов.</p>
            <p>Водные огнетушители нового поколения с добавками применяются для тушения твердых материалов, а специальные хладоновые огнетушители используются в серверных и архивах. Каждый тип имеет свои особенности применения, которые необходимо учитывать при выборе огнетушителя для конкретного помещения. Маркировка на корпусе четко указывает, для каких классов пожаров предназначено устройство.</p>

            <h2>Правила использования огнетушителей</h2>
            <p>При возникновении пожара важно правильно применять огнетушитель. Сначала необходимо сорвать пломбу и выдернуть чеку, затем направить раструб или шланг на очаг возгорания. Нажимайте на рычаг или кнопку пуска и тушите пожар, двигаясь от краев к центру. При тушении электроустановок соблюдайте безопасное расстояние - не менее 1 метра для углекислотных огнетушителей.</p>
            <p>При работе с порошковым огнетушителем учитывайте ограниченную видимость из-за облака порошка. Пенные огнетушители требуют предварительного переворачивания для активации химической реакции. Помните, что время действия большинства огнетушителей ограничено 10-20 секундами, поэтому действуйте быстро и целенаправленно. Если огонь не удалось потушить в первые секунды, немедленно покиньте опасную зону.</p>

            <h2>Техника безопасности при тушении</h2>
            <p>Используя огнетушитель, всегда стойте с наветренной стороны, чтобы пламя и дым не шли на вас. При тушении электрооборудования убедитесь, что напряжение снято, либо используйте только разрешенные для этого типы огнетушителей. Не прикасайтесь голыми руками к металлическим частям углекислотного огнетушителя во время работы - температура может достигать -70°C.</p>
            <p>При тушении жидкостей не направляйте струю прямо в центр пламени - это может вызвать разбрызгивание горящей жидкости. В закрытых помещениях учитывайте возможное снижение видимости и содержания кислорода. После использования огнетушителя в помещении обязательно проветрите его, особенно после применения порошковых и углекислотных моделей.</p>

            <h2>Обслуживание и проверка огнетушителей</h2>
            <p>Огнетушители требуют регулярного технического обслуживания. Ежемесячно проверяйте целостность пломбы и состояние манометра (для закачных моделей). Раз в год необходимо проводить полную проверку с взвешиванием и осмотром специалистом. Перезарядка огнетушителей осуществляется согласно сроку, указанному в паспорте изделия, но не реже чем раз в 5 лет.</p>
            <p>Огнетушители должны располагаться на видных местах вблизи от возможных очагов возгорания, но не ближе 1 метра от отопительных приборов. Высота размещения - не более 1,5 метров до верха огнетушителя. Каждый работник должен знать, где находятся огнетушители и как ими пользоваться. Регулярные тренировки по использованию огнетушителей значительно повышают шансы на успешное тушение возгорания на ранней стадии.</p>

            <div class="test-container">
                <h2>Проверьте свои знания</h2>
                <form id="fireExtinguisherTest">
                    
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Какой огнетушитель наиболее подходит для тушения электроустановок под напряжением?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q1" id="q1a" value="a">
                                <label for="q1a">Пенный</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1b" value="b">
                                <label for="q1b">Углекислотный</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1c" value="c">
                                <label for="q1c">Водный</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="b">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. Какое минимальное безопасное расстояние при тушении электроустановок углекислотным огнетушителем?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q2" id="q2a" value="a">
                                <label for="q2a">0,5 метра</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2b" value="b">
                                <label for="q2b">1 метр</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2c" value="c">
                                <label for="q2c">3 метра</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q2" value="b">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Как часто нужно перезаряжать огнетушители?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q3" id="q3a" value="a">
                                <label for="q3a">Ежемесячно</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3b" value="b">
                                <label for="q3b">Раз в 5 лет</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3c" value="c">
                                <label for="q3c">Только после использования</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q3" value="b">
                    </div>
                    
                    <!-- Вопрос 4 -->
                    <div class="question">
                        <p><strong>4. Как правильно тушить горящую жидкость?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q4" id="q4a" value="a">
                                <label for="q4a">Направить струю в центр пламени</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4b" value="b">
                                <label for="q4b">Тушить от краев к центру</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4c" value="c">
                                <label for="q4c">Залить водой</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q4" value="b">
                    </div>
                    
                    <!-- Вопрос 5 -->
                    <div class="question">
                        <p><strong>5. Какой тип огнетушителя оставляет наименьшие следы после тушения?</strong></p>
                        <input type="text" id="q5_answer" class="text-answer" placeholder="Введите ответ">
                        <input type="hidden" id="correct_q5" value="углекислотный">
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
                a: 'Пенный',
                b: 'Углекислотный',
                c: 'Водный'
            },
            correctText: 'Углекислотный'
        },
        {
            id: 2,
            type: 'radio',
            name: 'q2',
            correct: 'b',
            answers: {
                a: '0,5 метра',
                b: '1 метр',
                c: '3 метра'
            },
            correctText: '1 метр'
        },
        {
            id: 3,
            type: 'radio',
            name: 'q3',
            correct: 'b',
            answers: {
                a: 'Ежемесячно',
                b: 'Раз в 5 лет',
                c: 'Только после использования'
            },
            correctText: 'Раз в 5 лет'
        },
        {
            id: 4,
            type: 'radio',
            name: 'q4',
            correct: 'b',
            answers: {
                a: 'Направить струю в центр пламени',
                b: 'Тушить от краев к центру',
                c: 'Залить водой'
            },
            correctText: 'Тушить от краев к центру'
        },
        {
            id: 5,
            type: 'text',
            name: 'q5_answer',
            correct: 'углекислотный',
            correctText: 'углекислотный'
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