<?php 
$page_title = "Использование средств индивидуальной защиты (СИЗ)";
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
            <h2>Основные виды средств индивидуальной защиты</h2>
            <p>Средства индивидуальной защиты (СИЗ) подразделяются на несколько основных категорий в зависимости от защищаемых органов и видов опасностей. Для защиты органов дыхания применяются респираторы, противогазы и самоспасатели, которые фильтруют или изолируют дыхательные пути от вредных веществ. Защита головы обеспечивается касками и защитными шлемами, предотвращающими травмы от ударов и падающих предметов. Специальные очки и щитки защищают глаза от механических повреждений, химических брызг и интенсивного излучения.</p>
            <p>Средства защиты слуха включают противошумные наушники и беруши, снижающие уровень вредного шума до допустимых значений. Для защиты рук используются перчатки различного типа - от тонких резиновых до усиленных металлическими вставками. Защитная обувь с металлическими подносками и антискользящей подошвой предотвращает травмы стоп. Комплексную защиту тела обеспечивают спецкостюмы, жилеты и комбинезоны из огнестойких, химически стойких или водоотталкивающих материалов.</p>

            <h2>Правила подбора и применения СИЗ</h2>
            <p>Выбор средств индивидуальной защиты должен основываться на результатах оценки профессиональных рисков на конкретном рабочем месте. Все СИЗ должны соответствовать требованиям технических регламентов и иметь сертификаты соответствия. При подборе учитываются антропометрические данные работника, обеспечивающие комфорт и удобство при длительном использовании. Особое внимание уделяется правильному подбору размеров и проверке плотности прилегания защитных элементов.</p>
            <p>Перед каждым использованием СИЗ необходимо проверять их целостность и исправность. Запрещается применять поврежденные или просроченные средства защиты. Работники должны быть обучены правилам надевания, использования и снятия СИЗ. Время непрерывного использования некоторых видов средств (например, респираторов) ограничено и должно строго соблюдаться. После использования многоразовые СИЗ требуют специальной обработки и правильного хранения в соответствии с инструкциями производителя.</p>

            <h2>Обязанности работодателя и работника</h2>
            <p>Работодатель обязан обеспечить всех сотрудников, работающих во вредных и опасных условиях, соответствующими СИЗ в необходимом количестве. Организация должна иметь систему учета, хранения и своевременной замены средств защиты. Обучение правилам применения СИЗ проводится в рамках вводного и периодического инструктажей по охране труда. Контроль за правильностью использования средств защиты возлагается на специалистов по охране труда и непосредственных руководителей работ.</p>
            <p>Работник обязан правильно применять предоставленные СИЗ в течение всего времени работы в опасных условиях. Запрещается выходить на рабочее место без положенных средств защиты или использовать их не по назначению. При обнаружении неисправностей СИЗ работник должен немедленно сообщить об этом руководителю. Сотрудники несут ответственность за сохранность выданных им средств индивидуальной защиты и их своевременное возвращение после использования.</p>

            <h2>Техническое обслуживание и уход за СИЗ</h2>
            <p>Многоразовые средства индивидуальной защиты требуют регулярного технического обслуживания и дезинфекции. Очистка и дезинфекция СИЗ проводятся по утвержденным методикам с использованием специальных средств. Хранение защитных средств организуется в специально отведенных местах с соблюдением условий, указанных производителем. Особое внимание уделяется защите СИЗ от воздействия прямых солнечных лучей, влаги и агрессивных веществ.</p>
            <p>Респираторы и противогазы после каждого использования подлежат дезинфекции и проверке целостности фильтрующих элементов. Защитные очки и щитки очищаются специальными составами, не оставляющими разводов. Спецодежда стирается отдельно от личных вещей с применением соответствующих моющих средств. Обувь регулярно обрабатывается защитными составами для сохранения водоотталкивающих свойств. Все СИЗ имеют ограниченный срок эксплуатации, по истечении которого подлежат обязательной замене независимо от внешнего состояния.</p>

            <div class="test-container">
                <h2>Проверьте свои знания</h2>
                <form id="sizTest">
                    
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Какие СИЗ используются для защиты органов дыхания?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q1" id="q1a" value="a">
                                <label for="q1a">Защитные очки и щитки</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1b" value="b">
                                <label for="q1b">Респираторы и противогазы</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1c" value="c">
                                <label for="q1c">Защитные каски</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="b">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. На чем должен основываться выбор СИЗ?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q2" id="q2a" value="a">
                                <label for="q2a">На личных предпочтениях работника</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2b" value="b">
                                <label for="q2b">На результатах оценки профессиональных рисков</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2c" value="c">
                                <label for="q2c">На стоимости средств защиты</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q2" value="b">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Что обязан сделать работник при обнаружении неисправности СИЗ?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q3" id="q3a" value="a">
                                <label for="q3a">Продолжить работу с осторожностью</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3b" value="b">
                                <label for="q3b">Немедленно сообщить руководителю</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3c" value="c">
                                <label for="q3c">Попытаться самостоятельно починить</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q3" value="b">
                    </div>
                    
                    <!-- Вопрос 4 -->
                    <div class="question">
                        <p><strong>4. Какие СИЗ требуют регулярной дезинфекции?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q4" id="q4a" value="a">
                                <label for="q4a">Только защитные каски</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4b" value="b">
                                <label for="q4b">Многоразовые средства защиты</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4c" value="c">
                                <label for="q4c">Только спецобувь</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q4" value="b">
                    </div>
                    
                    <!-- Вопрос 5 -->
                    <div class="question">
                        <p><strong>5. Какие три фактора учитываются при хранении СИЗ? (перечислите через запятую)</strong></p>
                        <input type="text" id="q5_answer" class="text-answer" placeholder="Введите ответ">
                        <input type="hidden" id="correct_q5" value="защита от солнца, защита от влаги, защита от агрессивных веществ">
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
                a: 'Защитные очки и щитки',
                b: 'Респираторы и противогазы',
                c: 'Защитные каски'
            },
            correctText: 'Респираторы и противогазы'
        },
        {
            id: 2,
            type: 'radio',
            name: 'q2',
            correct: 'b',
            answers: {
                a: 'На личных предпочтениях работника',
                b: 'На результатах оценки профессиональных рисков',
                c: 'На стоимости средств защиты'
            },
            correctText: 'На результатах оценки профессиональных рисков'
        },
        {
            id: 3,
            type: 'radio',
            name: 'q3',
            correct: 'b',
            answers: {
                a: 'Продолжить работу с осторожностью',
                b: 'Немедленно сообщить руководителю',
                c: 'Попытаться самостоятельно починить'
            },
            correctText: 'Немедленно сообщить руководителю'
        },
        {
            id: 4,
            type: 'radio',
            name: 'q4',
            correct: 'b',
            answers: {
                a: 'Только защитные каски',
                b: 'Многоразовые средства защиты',
                c: 'Только спецобувь'
            },
            correctText: 'Многоразовые средства защиты'
        },
        {
            id: 5,
            type: 'text',
            name: 'q5_answer',
            correct: 'защита от солнца, защита от влаги, защита от агрессивных веществ',
            correctText: 'защита от солнца, защита от влаги, защита от агрессивных веществ'
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