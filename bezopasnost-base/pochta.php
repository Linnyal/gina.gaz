<?php 
$page_title = "Правила работы с корпоративной электронной почтой";
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
            <h2>Основные правила использования корпоративной почты</h2>
            <p>Корпоративная электронная почта является важным инструментом деловой коммуникации и требует особого внимания к вопросам безопасности. Все сообщения, отправляемые с рабочего адреса, должны соответствовать профессиональным стандартам и политике компании. Важно помнить, что корпоративная почта - это собственность организации, и все переписки могут быть проверены в рамках внутренних расследований или аудитов. Сотрудникам запрещается использовать рабочий email для личной переписки, регистрации на сторонних сервисах или рассылки непрофессионального контента.</p>
            <p>При работе с вложениями необходимо проявлять особую осторожность. Никогда не открывайте файлы из писем от неизвестных отправителей, даже если тема выглядит правдоподобно. Перед отправкой конфиденциальных данных убедитесь, что получатель действительно должен иметь к ним доступ, а сама информация защищена паролем или шифрованием. Особое внимание следует уделять письмам с просьбой предоставить учетные данные или другую чувствительную информацию - такие запросы часто являются фишинговыми атаками.</p>

            <h2>Защита от фишинга и вредоносных программ</h2>
            <p>Фишинговые письма становятся все более изощренными и могут имитировать сообщения от коллег или партнеров компании. Всегда проверяйте адрес отправителя, обращая внимание на малозаметные различия в доменном имени. Подозрительные ссылки следует проверять, наведя курсор (не кликая) чтобы увидеть реальный URL. Если письмо вызывает сомнения, даже минимальные, лучше уточнить у отправителя по другому каналу связи или сообщить в ИТ-отдел.</p>
            <p>Включите двухфакторную аутентификацию для доступа к почтовому аккаунту и никогда не вводите учетные данные на подозрительных страницах. Регулярно обновляйте пароль, используя сложные комбинации символов, и не применяйте один и тот же пароль для разных сервисов. Установите антивирусное ПО с функцией проверки вложений и отключите автоматическую загрузку изображений в письмах от неизвестных отправителей.</p>

            <h2>Организация переписки и хранение писем</h2>
            <p>Соблюдайте профессиональный тон в деловой переписке, четко формулируя тему и содержание письма. Для длинных обсуждений используйте единую цепочку писем, а не создавайте новые темы. Важные сообщения помечайте соответствующими метками и сохраняйте в специальных папках согласно политике хранения документов компании. Помните, что удаленные письма могут сохраняться в резервных копиях и подлежат восстановлению в течение установленного срока.</p>
            <p>Не злоупотребляйте функциями "Ответить всем" и массовыми рассылками - убедитесь, что каждый получатель действительно нуждается в этой информации. Конфиденциальные данные следует отправлять через защищенные каналы или с использованием специализированных сервисов для безопасной передачи файлов. Регулярно очищайте почту от ненужных сообщений, но соблюдайте установленные сроки хранения для различных категорий переписки.</p>

            <h2>Ответственность и контроль</h2>
            <p>Каждый сотрудник несет персональную ответственность за безопасность своего почтового аккаунта. Не оставляйте открытый доступ к почте на незаблокированных устройствах и всегда выходите из системы при завершении работы. В случае утери устройства или компрометации учетных данных немедленно сообщите в ИТ-отдел для блокировки аккаунта и принятия дополнительных мер защиты.</p>
            <p>Руководство компании вправе осуществлять мониторинг корпоративной почты в целях обеспечения безопасности и проверки соблюдения трудовой дисциплины. Нарушение правил работы с электронной почтой, включая разглашение конфиденциальной информации или использование в противоправных целях, может повлечь дисциплинарную ответственность вплоть до увольнения. Регулярное обучение сотрудников и имитационные фишинговые тесты помогают поддерживать высокий уровень осведомленности о современных угрозах.</p>

            <div class="test-container">
                <h2>Проверьте свои знания</h2>
                <form id="emailSecurityTest">
                    
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Можно ли использовать корпоративную почту для личной переписки?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q1" id="q1a" value="a">
                                <label for="q1a">Да, если переписка не занимает много времени</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1b" value="b">
                                <label for="q1b">Нет, это запрещено правилами компании</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1c" value="c">
                                <label for="q1c">Только в нерабочее время</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="b">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. Как следует поступить с письмом, содержащим вложение от неизвестного отправителя?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q2" id="q2a" value="a">
                                <label for="q2a">Открыть для проверки содержания</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2b" value="b">
                                <label for="q2b">Удалить, не открывая</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2c" value="c">
                                <label for="q2c">Переслать в ИТ-отдел для анализа</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q2" value="c">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Что является лучшей защитой от фишинговых атак?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q3" id="q3a" value="a">
                                <label for="q3a">Игнорирование всех писем с вложениями</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3b" value="b">
                                <label for="q3b">Внимательная проверка отправителя и содержания</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3c" value="c">
                                <label for="q3c">Использование только мобильной версии почты</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q3" value="b">
                    </div>
                    
                    <!-- Вопрос 4 -->
                    <div class="question">
                        <p><strong>4. Как правильно отправить конфиденциальные данные по email?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q4" id="q4a" value="a">
                                <label for="q4a">В виде обычного вложения</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4b" value="b">
                                <label for="q4b">Зашифровав файл или используя защищенный сервис</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4c" value="c">
                                <label for="q4c">Разделив на несколько писем</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q4" value="b">
                    </div>
                    
                    <!-- Вопрос 5 -->
                    <div class="question">
                        <p><strong>5. Что делать при получении письма с просьбой предоставить пароль от учетной записи?</strong></p>
                        <input type="text" id="q5_answer" class="text-answer" placeholder="Введите ваш ответ">
                        <input type="hidden" id="correct_q5" value="сообщить в ит отдел">
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
                a: 'Да, если переписка не занимает много времени',
                b: 'Нет, это запрещено правилами компании',
                c: 'Только в нерабочее время'
            },
            correctText: 'Нет, это запрещено правилами компании'
        },
        {
            id: 2,
            type: 'radio',
            name: 'q2',
            correct: 'c',
            answers: {
                a: 'Открыть для проверки содержания',
                b: 'Удалить, не открывая',
                c: 'Переслать в ИТ-отдел для анализа'
            },
            correctText: 'Переслать в ИТ-отдел для анализа'
        },
        {
            id: 3,
            type: 'radio',
            name: 'q3',
            correct: 'b',
            answers: {
                a: 'Игнорирование всех писем с вложениями',
                b: 'Внимательная проверка отправителя и содержания',
                c: 'Использование только мобильной версии почты'
            },
            correctText: 'Внимательная проверка отправителя и содержания'
        },
        {
            id: 4,
            type: 'radio',
            name: 'q4',
            correct: 'b',
            answers: {
                a: 'В виде обычного вложения',
                b: 'Зашифровав файл или используя защищенный сервис',
                c: 'Разделив на несколько писем'
            },
            correctText: 'Зашифровав файл или используя защищенный сервис'
        },
        {
            id: 5,
            type: 'text',
            name: 'q5_answer',
            correct: 'сообщить в ит отдел',
            correctText: 'сообщить в ИТ-отдел'
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
            if (answer.includes(question.correct)) {
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