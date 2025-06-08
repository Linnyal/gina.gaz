<?php 
$page_title = "Основы администрирования: Роли и обязанности системного администратора";
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
        background-color: #ffffff !important; /* Белый фон на всей странице */
    }
    
    .centered-content {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        text-align: left;
        background-color: #ffffff; /* Белый фон контентной области */
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
        border-color: #3182ce;
        background-color: #3182ce;
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
        border-color: #3182ce;
        box-shadow: 0 0 0 3px rgba(49, 130, 206, 0.2);
    }
    
    button[type="button"] {
        padding: 12px 24px;
        background-color: #3182ce;
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
        background-color: #2b6cb0;
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
        color: #3182ce;
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
            <span>Категория: <a href="/knowledge-base/it-admin/">IT-администрирование</a></span>
            <span>Обновлено: <?= date('d.m.Y') ?></span>
        </div>

        <div class="content">
            <h2>Введение в профессию системного администратора</h2>
            <p>Системный администратор является ключевой фигурой в обеспечении бесперебойной работы корпоративной IT-инфраструктуры. В современных условиях, когда цифровые технологии проникли во все бизнес-процессы, роль сисадмина вышла за рамки простого технического специалиста, превратившись в стратегически важную позицию. Особенно это актуально для крупных корпораций, таких как Газпром, где от стабильности IT-систем зависит работа критически важных объектов нефтегазовой отрасли.</p>
            <p>Профессия системного администратора требует не только глубоких технических знаний, но и понимания бизнес-процессов компании, умения работать с людьми и находить баланс между безопасностью и удобством использования систем. Современный сисадмин - это универсальный специалист, сочетающий в себе навыки программиста, инженера, психолога и менеджера.</p>

            <h2>Основные роли системного администратора</h2>
            
            <h3>Администратор серверов и сетей</h3>
            <p>Эта роль предполагает настройку, поддержку и мониторинг серверного оборудования и сетевой инфраструктуры. В обязанности входит установка и настройка операционных систем (Windows Server, Linux), управление виртуальными средами (VMware, Hyper-V), настройка сетевого оборудования (Cisco, MikroTik), обеспечение отказоустойчивости и производительности систем. В крупных организациях часто выделяют отдельных специалистов по Linux- и Windows-серверам, сетевых инженеров и виртуализации.</p>
            
            <h3>Администратор службы каталогов</h3>
            <p>Работа с Active Directory или другими службами каталогов - критически важная функция в корпоративной среде. Специалист в этой области отвечает за управление пользователями и группами, настройку групповых политик (GPO), распределение прав доступа, организацию единого входа (SSO) и интеграцию с другими системами. В нефтегазовых компаниях особое внимание уделяется разграничению доступа к критически важным системам управления технологическими процессами.</p>
            
            <h3>Администратор безопасности</h3>
            <p>В условиях растущих киберугроз эта роль становится все более значимой. Специалист по безопасности настраивает и поддерживает межсетевые экраны, системы обнаружения и предотвращения вторжений, антивирусную защиту, средства криптографии и двухфакторной аутентификации. В нефтегазовой отрасли, где многие объекты относятся к критической информационной инфраструктуре, соблюдение требований ФСТЭК и ФСБ является обязательным.</p>

            <h2>Обязанности системного администратора</h2>
            
            <h3>Ежедневные операционные задачи</h3>
            <p>Каждый день сисадмин решает широкий круг задач: от создания учетных записей новых сотрудников и сброса паролей до устранения неполадок в работе сетевых сервисов. Важной частью работы является мониторинг состояния систем с помощью специализированного ПО (Zabbix, PRTG, Nagios), анализ логов, планирование и выполнение обновлений программного обеспечения. В корпоративной среде особое значение имеет документирование всех изменений и инцидентов.</p>
            
            <h3>Планирование и развитие инфраструктуры</h3>
            <p>Помимо операционной работы, системный администратор участвует в планировании развития IT-инфраструктуры: подборе нового оборудования, проектировании сетевой архитектуры, внедрении новых технологий. В нефтегазовых компаниях это может включать организацию IT-инфраструктуры на новых месторождениях, интеграцию систем мониторинга трубопроводов, внедрение промышленного IoT.</p>
            
            <h3>Обеспечение непрерывности бизнеса</h3>
            <p>Разработка и поддержка стратегий резервного копирования, создание планов аварийного восстановления (Disaster Recovery), организация отказоустойчивых решений - все это входит в зону ответственности системного администратора. В условиях нефтегазовой отрасли, где простой систем может привести к многомиллионным убыткам, эти аспекты имеют особое значение.</p>

            <h2>Особенности работы в нефтегазовой отрасли</h2>
            
            <h3>Работа с промышленными системами</h3>
            <p>Системные администраторы в Газпроме и подобных компаниях часто сталкиваются с необходимостью администрирования промышленных систем управления (АСУ ТП, SCADA). Эти системы требуют особого подхода, так как работают в реальном времени и управляют физическими процессами. Важно понимать принципы работы операционных технологий (OT) и уметь настраивать безопасное взаимодействие между IT- и OT-сетями.</p>
            
            <h3>Поддержка удаленных объектов</h3>
            <p>Нефтегазовые компании имеют множество удаленных объектов - буровые установки, компрессорные станции, трубопроводы, расположенные в труднодоступных районах. Обеспечение их IT-инфраструктурой требует использования спутниковой связи, автономных источников питания, специализированного оборудования, устойчивого к экстремальным условиям.</p>
            
            <h3>Соблюдение отраслевых стандартов</h3>
            <p>Работа в нефтегазовой отрасли предполагает соблюдение множества отраслевых стандартов и нормативов: от требований к взрывозащищенному оборудованию до специальных регламентов по защите информации. Системный администратор должен хорошо ориентироваться в этих требованиях и уметь их реализовывать на практике.</p>

            <h2>Необходимые навыки и компетенции</h2>
            <p>Современный системный администратор должен обладать широким спектром технических навыков: от настройки сетевого оборудования до основ программирования для автоматизации рутинных задач. Не менее важны "мягкие" навыки: умение объяснять сложные технические вопросы простым языком, работать в команде, управлять приоритетами и стрессоустойчивость. В нефтегазовой отрасли дополнительно требуются знания отраслевых стандартов и специфического ПО.</p>

            <h2>Заключение</h2>
            <p>Профессия системного администратора в корпоративной среде, особенно в такой сложной и ответственной отрасли как нефтегазовая, представляет собой интересный вызов для IT-специалистов. Она требует постоянного обучения и адаптации к новым технологиям, но предлагает уникальные возможности для профессионального роста и участия в крупных инфраструктурных проектах. Грамотный системный администратор - это не просто технический специалист, а стратегически важный сотрудник, вносящий существенный вклад в успех всей компании.</p>

            <div class="test-container">
                <h2>Проверьте свои знания</h2>
                <form id="sysAdminTest">
                    
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Какая из перечисленных систем чаще всего используется для управления пользователями в корпоративной среде?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q1" id="q1a" value="a">
                                <label for="q1a">Microsoft Exchange</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1b" value="b">
                                <label for="q1b">Active Directory</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1c" value="c">
                                <label for="q1c">Oracle Database</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="b">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. Какие из перечисленных задач относятся к ежедневным обязанностям сисадмина? (Выберите все верные варианты)</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2a" value="a">
                                <label for="q2a">Создание учетных записей новых сотрудников</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2b" value="b">
                                <label for="q2b">Настройка групповых политик</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2c" value="c">
                                <label for="q2c">Разработка мобильных приложений</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2d" value="d">
                                <label for="q2d">Мониторинг состояния серверов</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q2" value="a,b,d">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Как называется зона, используемая для безопасного обмена данными между корпоративной сетью и промышленными системами?</strong></p>
                        <input type="text" id="q3_answer" class="text-answer" placeholder="Введите ответ">
                        <input type="hidden" id="correct_q3" value="DMZ">
                    </div>
                    
                    <!-- Вопрос 4 -->
                    <div class="question">
                        <p><strong>4. Почему работа системного администратора в нефтегазовой отрасли имеет особую специфику?</strong></p>
                        <textarea id="q4_answer" class="text-answer" rows="4" placeholder="Опишите основные причины"></textarea>
                        <input type="hidden" id="correct_q4_keywords" value="промышленные,удаленные,безопасность,стандарты,надежность">
                    </div>
                    
                    <!-- Вопрос 5 -->
                    <div class="question">
                        <p><strong>5. Какое из перечисленных качеств наиболее важно для системного администратора?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q5" id="q5a" value="a">
                                <label for="q5a">Стрессоустойчивость</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5b" value="b">
                                <label for="q5b">Умение работать в команде</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5c" value="c">
                                <label for="q5c">Технические знания</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5d" value="d">
                                <label for="q5d">Все перечисленные</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q5" value="d">
                    </div>
                    
                    <button type="button" onclick="checkSysAdminTest()">Проверить ответы</button>
                </form>
                
                <div id="testResults" class="results"></div>
            </div>
        </div>
    </div>
</article>

<script>
function checkSysAdminTest() {
    let score = 0;
    let resultsHTML = "<h3>Результаты теста:</h3><ol>";
    const keywordThreshold = 3; // Минимальное количество ключевых слов для зачета вопроса 4
    
    // Вопрос 1
    const q1Selected = document.querySelector('input[name="q1"]:checked');
    if (q1Selected && q1Selected.value === document.getElementById('correct_q1').value) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 1: Правильно! Active Directory - стандарт для управления пользователями в корпоративной среде.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 1: Неверно. Правильный ответ: Active Directory.</li>`;
    }
    
    // Вопрос 2 (множественный выбор)
    const q2Selected = Array.from(document.querySelectorAll('input[name="q2"]:checked')).map(el => el.value).sort().join(',');
    const q2Correct = document.getElementById('correct_q2').value.split(',').sort().join(',');
    if (q2Selected === q2Correct) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 2: Верно! Все выбранные варианты являются типичными задачами сисадмина.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 2: Неполный ответ. Создание учетных записей, настройка политик и мониторинг серверов - это ежедневные задачи.</li>`;
    }
    
    // Вопрос 3
    const q3Answer = document.getElementById('q3_answer').value.trim().toUpperCase();
    if (q3Answer === 'DMZ' || q3Answer === 'ДМЗ') {
        score++;
        resultsHTML += `<li class="correct">Вопрос 3: Правильно! DMZ (демилитаризованная зона) обеспечивает безопасный обмен данными.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 3: Неверно. Правильный ответ: DMZ.</li>`;
    }
    
    // Вопрос 4 (анализ ключевых слов)
    const q4Answer = document.getElementById('q4_answer').value.toLowerCase();
    const keywords = document.getElementById('correct_q4_keywords').value.split(',');
    let foundKeywords = keywords.filter(word => q4Answer.includes(word));
    
    if (foundKeywords.length >= keywordThreshold) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 4: Принято! Вы указали ключевые аспекты: ${foundKeywords.join(', ')}.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 4: Ответ недостаточно полный. Ожидались упоминания: промышленные системы, удаленные объекты, требования безопасности, отраслевые стандарты, надежность.</li>`;
    }
    
    // Вопрос 5
    const q5Selected = document.querySelector('input[name="q5"]:checked');
    if (q5Selected && q5Selected.value === document.getElementById('correct_q5').value) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 5: Абсолютно верно! Все перечисленные качества важны для системного администратора.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 5: Не совсем так. Все варианты верны - хороший сисадмин должен сочетать технические знания с личными качествами.</li>`;
    }
    
    resultsHTML += `</ol><p><strong>Итоговый результат: ${score} из 5 (${Math.round(score/5*100)}%)</strong></p>`;
    document.getElementById('testResults').innerHTML = resultsHTML;
    document.getElementById('testResults').style.display = 'block';
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>