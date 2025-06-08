<?php 
$page_title = "Резервное копирование данных: важность и методы";
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
            <h2>Критическая важность резервного копирования</h2>
            <p>Резервное копирование данных является фундаментальным элементом стратегии информационной безопасности любой организации. Потеря критически важных данных может привести к остановке бизнес-процессов, финансовым потерям и репутационному ущербу. Современные угрозы, такие как ransomware-атаки, делают резервные копии не просто рекомендацией, а обязательным требованием. Статистика показывает, что более 60% компаний, потерявших свои данные, прекращают существование в течение полугода после инцидента.</p>
            <p>Природные катастрофы, человеческий фактор и технические сбои - все это может привести к необратимой потере информации. Особую важность резервные копии приобретают в условиях цифровой трансформации, когда данные становятся основным активом компании. Регулярное тестирование процедур восстановления не менее важно, чем само создание копий, так как отсутствие проверки может создать ложное чувство безопасности. Политика резервного копирования должна быть интегрирована в общую стратегию управления непрерывностью бизнеса.</p>

            <h2>Основные методы резервного копирования</h2>
            <p>Полное резервное копирование создает точную копию всех выбранных данных и является наиболее надежным, но требует значительных ресурсов хранения. Инкрементное копирование сохраняет только изменения, сделанные после последней резервной операции любого типа, что экономит место, но усложняет процесс восстановления. Дифференциальное копирование записывает все изменения, произошедшие после последнего полного бэкапа, предлагая баланс между объемом хранилища и скоростью восстановления.</p>
            <p>Современные технологии позволяют реализовывать непрерывное резервное копирование, когда изменения записываются практически в реальном времени. Облачные решения обеспечивают географическое распределение копий, защищая от локальных катастроф. Гибридные подходы, сочетающие локальное и облачное хранение, становятся отраслевым стандартом для организаций любого размера. Выбор метода зависит от критичности данных, допустимого времени простоя и бюджета на ИТ-инфраструктуру.</p>

            <h2>Принципы эффективного резервного копирования</h2>
            <p>Правило 3-2-1 является золотым стандартом резервного копирования: три копии данных на двух разных типах носителей, одна из которых хранится вне площадки. Шифрование резервных копий обязательно для защиты конфиденциальной информации как при хранении, так и при передаче. Регулярность создания копий должна соответствовать динамике изменения данных - чем чаще они обновляются, тем чаще должны создаваться резервные копии.</p>
            <p>Автоматизация процессов резервного копирования минимизирует человеческий фактор и обеспечивает соблюдение графика. Мониторинг успешности операций копирования позволяет оперативно выявлять и устранять проблемы. Ведение подробного журнала всех операций с резервными копиями необходимо для аудита и расследования инцидентов. Отдельное внимание следует уделять защите самих резервных копий от несанкционированного доступа и повреждения.</p>

            <h2>Стратегии хранения и восстановления</h2>
            <p>Определение приоритетов восстановления позволяет минимизировать время простоя критически важных систем. Многоуровневая стратегия хранения, сочетающая быстрые SSD для недавних копий и более дешевые HDD или ленточные носители для архивов, оптимизирует затраты. Периодическая ротация носителей и проверка их исправности предотвращает ситуации, когда резервная копия оказывается нечитаемой в момент необходимости.</p>
            <p>Тестирование процедур восстановления должно проводиться не реже чем раз в квартал с фиксацией времени, необходимого для полного восстановления работоспособности. Разработка пошаговых инструкций по восстановлению для различных сценариев (от единичного файла до полного дата-центра) ускоряет реагирование в кризисной ситуации. Интеграция системы резервного копирования с системами мониторинга позволяет оперативно запускать процессы восстановления при обнаружении проблем. Особое внимание следует уделять совместимости резервных копий с новыми версиями программного обеспечения при долгосрочном хранении.</p>

            <div class="test-container">
                <h2>Проверьте свои знания</h2>
                <form id="backupTest">
                    
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Какое правило считается золотым стандартом резервного копирования?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q1" id="q1a" value="a">
                                <label for="q1a">Правило 1-1-1 (одна копия на одном носителе в одном месте)</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1b" value="b">
                                <label for="q1b">Правило 3-2-1 (три копии на двух носителях, одна вне площадки)</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1c" value="c">
                                <label for="q1c">Правило 2-2-2 (две копии на двух носителях в двух местах)</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="b">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. Какой тип резервного копирования сохраняет только изменения после последней операции?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q2" id="q2a" value="a">
                                <label for="q2a">Полное копирование</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2b" value="b">
                                <label for="q2b">Инкрементное копирование</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2c" value="c">
                                <label for="q2c">Дифференциальное копирование</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q2" value="b">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Почему важно тестировать восстановление из резервных копий?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q3" id="q3a" value="a">
                                <label for="q3a">Чтобы убедиться, что копии действительно работают</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3b" value="b">
                                <label for="q3b">Для тренировки ИТ-персонала</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3c" value="c">
                                <label for="q3c">Оба варианта верны</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q3" value="c">
                    </div>
                    
                    <!-- Вопрос 4 -->
                    <div class="question">
                        <p><strong>4. Какая из перечисленных угроз делает резервные копии особенно важными?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q4" id="q4a" value="a">
                                <label for="q4a">Ransomware-атаки</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4b" value="b">
                                <label for="q4b">Фишинг</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4c" value="c">
                                <label for="q4c">DDoS-атаки</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q4" value="a">
                    </div>
                    
                    <!-- Вопрос 5 -->
                    <div class="question">
                        <p><strong>5. Какие три характеристики должны учитываться при выборе метода резервного копирования? (перечислите через запятую)</strong></p>
                        <input type="text" id="q5_answer" class="text-answer" placeholder="Введите ответ">
                        <input type="hidden" id="correct_q5" value="критичность данных, время простоя, бюджет">
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
                a: 'Правило 1-1-1 (одна копия на одном носителе в одном месте)',
                b: 'Правило 3-2-1 (три копии на двух носителях, одна вне площадки)',
                c: 'Правило 2-2-2 (две копии на двух носителях в двух местах)'
            },
            correctText: 'Правило 3-2-1 (три копии на двух носителях, одна вне площадки)'
        },
        {
            id: 2,
            type: 'radio',
            name: 'q2',
            correct: 'b',
            answers: {
                a: 'Полное копирование',
                b: 'Инкрементное копирование',
                c: 'Дифференциальное копирование'
            },
            correctText: 'Инкрементное копирование'
        },
        {
            id: 3,
            type: 'radio',
            name: 'q3',
            correct: 'c',
            answers: {
                a: 'Чтобы убедиться, что копии действительно работают',
                b: 'Для тренировки ИТ-персонала',
                c: 'Оба варианта верны'
            },
            correctText: 'Оба варианта верны'
        },
        {
            id: 4,
            type: 'radio',
            name: 'q4',
            correct: 'a',
            answers: {
                a: 'Ransomware-атаки',
                b: 'Фишинг',
                c: 'DDoS-атаки'
            },
            correctText: 'Ransomware-атаки'
        },
        {
            id: 5,
            type: 'text',
            name: 'q5_answer',
            correct: 'критичность данных, время простоя, бюджет',
            correctText: 'критичность данных, допустимое время простоя, бюджет'
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