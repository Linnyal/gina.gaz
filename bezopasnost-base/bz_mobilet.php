<?php 
$page_title = "Безопасность мобильных устройств в корпоративной среде";
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
            <h2>Риски мобильных устройств в корпоративной среде</h2>
            <p>Использование мобильных устройств в корпоративной среде создает уникальные вызовы для информационной безопасности. В отличие от традиционных рабочих станций, мобильные устройства часто перемещаются между различными сетями, включая публичные Wi-Fi, что значительно увеличивает поверхность атаки. Утеря или кража устройства с корпоративными данками может привести к серьезным инцидентам безопасности. Кроме того, сотрудники часто устанавливают неофициальные приложения, которые могут содержать вредоносный код или иметь уязвимости.</p>
            <p>Другая важная проблема - смешение личного и рабочего использования на одном устройстве (BYOD). Это создает сложности при обеспечении безопасности без чрезмерного вмешательства в личное пространство сотрудника. Мобильные операционные системы регулярно обновляются, но не все устройства получают своевременные обновления безопасности, оставляя их уязвимыми для известных эксплойтов. Фишинг и социальная инженерия особенно эффективны на мобильных платформах из-за особенностей интерфейса и поведения пользователей.</p>

            <h2>Стратегии защиты корпоративных мобильных устройств</h2>
            <p>Эффективная стратегия защиты начинается с внедрения Mobile Device Management (MDM) решения, которое позволяет централизованно управлять политиками безопасности на всех корпоративных устройствах. Обязательное использование сильной аутентификации, включая биометрию и двухфакторную аутентификацию, значительно снижает риск несанкционированного доступа. Шифрование данных как в хранилище, так и при передаче должно быть обязательным требованием для всех устройств, имеющих доступ к корпоративным ресурсам.</p>
            <p>Сегментация данных и приложений через контейнеризацию или решения типа "рабочий профиль" позволяет изолировать корпоративную информацию от личных данных. Регулярное обучение сотрудников правилам мобильной безопасности не менее важно, чем технические меры защиты. Политики должны четко определять, какие типы данных можно обрабатывать на мобильных устройствах, а какие требуют более защищенных рабочих станций. Мониторинг и анализ событий безопасности помогают выявлять подозрительную активность на ранних стадиях.</p>

            <h2>Технические меры защиты</h2>
            <p>Современные решения для мобильной безопасности включают множество технологических мер. Принудительное применение VPN при подключении к публичным сетям защищает передаваемые данные от перехвата. Системы предотвращения потери данных (DLP) контролируют перемещение корпоративной информации между приложениями и ее сохранение в облачных хранилищах. Антивирусные решения для мобильных платформ помогают обнаруживать вредоносное ПО, хотя их эффективность несколько ограничена особенностями мобильных ОС.</p>
            <p>Автоматическая блокировка устройств после периода бездействия и возможность удаленной очистки данных в случае утери являются обязательными функциями. Сканирование приложений на наличие уязвимостей и подозрительного поведения должно проводиться регулярно. Интеграция мобильных устройств в общую систему мониторинга безопасности предприятия позволяет оперативно реагировать на угрозы. Особое внимание следует уделять защите корпоративной почты и мессенджеров, которые часто становятся векторами атак.</p>

            <h2>Политики и соблюдение требований</h2>
            <p>Разработка четких политик использования мобильных устройств - фундамент корпоративной безопасности. Эти политики должны охватывать все аспекты: от требований к паролям до процедур отчетности об утере устройства. Особое внимание следует уделить соответствию отраслевым стандартам и регуляторным требованиям, таким как GDPR для персональных данных или PCI DSS для платежной информации. Регулярные аудиты помогают оценить эффективность мер безопасности и выявить области для улучшения.</p>
            <p>Баланс между безопасностью и удобством использования критически важен для успешного внедрения политик. Чрезмерно строгие ограничения могут привести к тому, что сотрудники будут искать обходные пути, что в конечном итоге снизит общий уровень безопасности. Гибкие политики, учитывающие различные роли и уровни доступа внутри организации, часто оказываются более эффективными. Документирование всех инцидентов и извлеченных уроков позволяет непрерывно совершенствовать подход к мобильной безопасности.</p>

            <div class="test-container">
                <h2>Проверьте свои знания</h2>
                <form id="mobileSecurityTest">
                    
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Что из перечисленного является наибольшим риском при использовании мобильных устройств в корпоративной среде?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q1" id="q1a" value="a">
                                <label for="q1a">Использование публичных Wi-Fi сетей</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1b" value="b">
                                <label for="q1b">Утеря или кража устройства</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1c" value="c">
                                <label for="q1c">Установка неофициальных приложений</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="b">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. Какое решение позволяет централизованно управлять политиками безопасности на корпоративных мобильных устройствах?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q2" id="q2a" value="a">
                                <label for="q2a">Mobile Device Management (MDM)</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2b" value="b">
                                <label for="q2b">Антивирусное ПО</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2c" value="c">
                                <label for="q2c">Межсетевой экран</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q2" value="a">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Какой метод аутентификации наиболее эффективен для мобильных устройств?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q3" id="q3a" value="a">
                                <label for="q3a">Простые PIN-коды</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3b" value="b">
                                <label for="q3b">Биометрия и двухфакторная аутентификация</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3c" value="c">
                                <label for="q3c">Графические ключи</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q3" value="b">
                    </div>
                    
                    <!-- Вопрос 4 -->
                    <div class="question">
                        <p><strong>4. Что означает аббревиатура BYOD в контексте мобильной безопасности?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q4" id="q4a" value="a">
                                <label for="q4a">Bring Your Own Device (Использование личных устройств для работы)</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4b" value="b">
                                <label for="q4b">Backup Your Office Data (Резервное копирование офисных данных)</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4c" value="c">
                                <label for="q4c">Block Your Old Devices (Блокировка устаревших устройств)</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q4" value="a">
                    </div>
                    
                    <!-- Вопрос 5 -->
                    <div class="question">
                        <p><strong>5. Какие три технические меры защиты наиболее важны для мобильных устройств? (перечислите через запятую)</strong></p>
                        <input type="text" id="q5_answer" class="text-answer" placeholder="Введите ответ">
                        <input type="hidden" id="correct_q5" value="шифрование, mdm, vpn">
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
                a: 'Использование публичных Wi-Fi сетей',
                b: 'Утеря или кража устройства',
                c: 'Установка неофициальных приложений'
            },
            correctText: 'Утеря или кража устройства'
        },
        {
            id: 2,
            type: 'radio',
            name: 'q2',
            correct: 'a',
            answers: {
                a: 'Mobile Device Management (MDM)',
                b: 'Антивирусное ПО',
                c: 'Межсетевой экран'
            },
            correctText: 'Mobile Device Management (MDM)'
        },
        {
            id: 3,
            type: 'radio',
            name: 'q3',
            correct: 'b',
            answers: {
                a: 'Простые PIN-коды',
                b: 'Биометрия и двухфакторная аутентификация',
                c: 'Графические ключи'
            },
            correctText: 'Биометрия и двухфакторная аутентификация'
        },
        {
            id: 4,
            type: 'radio',
            name: 'q4',
            correct: 'a',
            answers: {
                a: 'Bring Your Own Device (Использование личных устройств для работы)',
                b: 'Backup Your Office Data (Резервное копирование офисных данных)',
                c: 'Block Your Old Devices (Блокировка устаревших устройств)'
            },
            correctText: 'Bring Your Own Device (Использование личных устройств для работы)'
        },
        {
            id: 5,
            type: 'text',
            name: 'q5_answer',
            correct: 'шифрование, mdm, vpn',
            correctText: 'шифрование, MDM, VPN'
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