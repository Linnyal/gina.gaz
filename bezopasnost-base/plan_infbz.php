<?php 
$page_title = "План реагирования на инциденты информационной безопасности";
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
            <h2>Основные этапы реагирования на инциденты</h2>
            <p>Эффективный план реагирования на инциденты информационной безопасности состоит из нескольких ключевых этапов. Подготовка включает создание команды реагирования, разработку политик и процедур, а также регулярное обучение сотрудников. На этапе обнаружения и анализа важно быстро идентифицировать инцидент, оценить его масштаб и потенциальный ущерб. Содержательный анализ позволяет определить источник проблемы и пути проникновения злоумышленников.</p>
            <p>Этап сдерживания направлен на ограничение распространения инцидента и минимизацию ущерба. Это может включать изоляцию зараженных систем, блокировку компрометированных учетных записей или временное отключение сервисов. Ликвидация предполагает полное устранение угрозы - удаление вредоносного ПО, закрытие уязвимостей, сброс паролей. Восстановление систем должно проводиться осторожно, с проверкой их чистоты и безопасности перед возвращением в эксплуатацию.</p>

            <h2>Организация команды реагирования</h2>
            <p>Команда реагирования на инциденты (CIRT) должна включать специалистов различных профилей: экспертов по безопасности, системных администраторов, юристов и представителей руководства. Каждый член команды имеет четко определенные роли и зоны ответственности. Важно предусмотреть дублирование ключевых функций на случай отсутствия основных специалистов. Команда должна иметь доступ ко всем необходимым ресурсам и полномочия для принятия оперативных решений в кризисных ситуациях.</p>
            <p>Регулярные тренировки и учения помогают команде поддерживать высокий уровень готовности. Сценарии учений должны отражать различные типы инцидентов - от утечек данных до масштабных кибератак. После каждого реального инцидента или учения проводится разбор, выявляются слабые места и совершенствуются процессы. Документирование всех действий позволяет накапливать опыт и создавать базу знаний для более эффективного реагирования в будущем.</p>

            <h2>Документирование и отчетность</h2>
            <p>Каждый инцидент должен быть тщательно задокументирован с указанием временных меток, предпринятых действий и их результатов. Эта информация важна для последующего анализа, судебных разбирательств и отчетности перед регулирующими органами. В случае утечки персональных данных может потребоваться уведомление затронутых лиц и соответствующих контролирующих органов в установленные сроки.</p>
            <p>Отчет об инциденте должен содержать описание события, анализ причин, оценку ущерба и перечень мер по предотвращению подобных ситуаций в будущем. Статистика инцидентов помогает выявлять тенденции и слабые места в защите. На основе этих данных совершенствуются политики безопасности, обновляются системы защиты и корректируются планы реагирования. Прозрачная отчетность перед руководством обеспечивает поддержку и необходимое финансирование мер безопасности.</p>

            <h2>Профилактика и улучшение</h2>
            <p>Анализ каждого инцидента должен приводить к конкретным улучшениям в системе защиты. Это может включать обновление правил межсетевых экранов, установку патчей, изменение настроек контроля доступа или дополнительное обучение сотрудников. Регулярные аудиты безопасности помогают выявлять уязвимости до того, как они будут использованы злоумышленниками.</p>
            <p>Совершенствование плана реагирования - непрерывный процесс. Современные угрозы быстро эволюционируют, и методы защиты должны соответствовать этим изменениям. Интеграция с отраслевыми сообществами и обмен информацией об угрозах позволяют быть в курсе новых методов атак и эффективных способов противодействия. Тестирование плана реагирования на практике - единственный способ убедиться в его работоспособности в реальных условиях.</p>

            <div class="test-container">
                <h2>Проверьте свои знания</h2>
                <form id="incidentResponseTest">
                    
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Какой этап плана реагирования предполагает ограничение распространения инцидента?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q1" id="q1a" value="a">
                                <label for="q1a">Подготовка</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1b" value="b">
                                <label for="q1b">Сдерживание</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1c" value="c">
                                <label for="q1c">Восстановление</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="b">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. Кто должен входить в команду реагирования на инциденты?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q2" id="q2a" value="a">
                                <label for="q2a">Только ИТ-специалисты</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2b" value="b">
                                <label for="q2b">Разно профильные специалисты</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2c" value="c">
                                <label for="q2c">Только руководство компании</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q2" value="b">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Что необходимо сделать после ликвидации инцидента?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q3" id="q3a" value="a">
                                <label for="q3a">Забыть о случившемся</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3b" value="b">
                                <label for="q3b">Провести анализ и внести улучшения</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3c" value="c">
                                <label for="q3c">Уволить ответственных</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q3" value="b">
                    </div>
                    
                    <!-- Вопрос 4 -->
                    <div class="question">
                        <p><strong>4. Для чего нужно документировать инциденты?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q4" id="q4a" value="a">
                                <label for="q4a">Для отчетности и улучшения процессов</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4b" value="b">
                                <label for="q4b">Чтобы наказать виновных</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4c" value="c">
                                <label for="q4c">Документирование не требуется</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q4" value="a">
                    </div>
                    
                    <!-- Вопрос 5 -->
                    <div class="question">
                        <p><strong>5. Какие три элемента должны быть в плане реагирования на инциденты?</strong></p>
                        <input type="text" id="q5_answer" class="text-answer" placeholder="Введите ответ (перечислите через запятую)">
                        <input type="hidden" id="correct_q5" value="подготовка, реагирование, улучшение">
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
                a: 'Подготовка',
                b: 'Сдерживание',
                c: 'Восстановление'
            },
            correctText: 'Сдерживание'
        },
        {
            id: 2,
            type: 'radio',
            name: 'q2',
            correct: 'b',
            answers: {
                a: 'Только ИТ-специалисты',
                b: 'Разно профильные специалисты',
                c: 'Только руководство компании'
            },
            correctText: 'Разно профильные специалисты'
        },
        {
            id: 3,
            type: 'radio',
            name: 'q3',
            correct: 'b',
            answers: {
                a: 'Забыть о случившемся',
                b: 'Провести анализ и внести улучшения',
                c: 'Уволить ответственных'
            },
            correctText: 'Провести анализ и внести улучшения'
        },
        {
            id: 4,
            type: 'radio',
            name: 'q4',
            correct: 'a',
            answers: {
                a: 'Для отчетности и улучшения процессов',
                b: 'Чтобы наказать виновных',
                c: 'Документирование не требуется'
            },
            correctText: 'Для отчетности и улучшения процессов'
        },
        {
            id: 5,
            type: 'text',
            name: 'q5_answer',
            correct: 'подготовка, реагирование, улучшение',
            correctText: 'подготовка, реагирование, улучшение'
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