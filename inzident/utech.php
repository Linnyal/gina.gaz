<?php 
$page_title = "Утечка газа или опасных веществ: признаки и действия";
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
    
    .emergency-box {
        background-color: #fff5f5;
        border-left: 4px solid #e53e3e;
        padding: 15px;
        margin: 20px 0;
        border-radius: 0 4px 4px 0;
    }
    
    .procedure-steps {
        counter-reset: step-counter;
        margin-left: 20px;
    }
    
    .procedure-steps li {
        position: relative;
        margin-bottom: 15px;
        list-style-type: none;
    }
    
    .procedure-steps li:before {
        counter-increment: step-counter;
        content: counter(step-counter);
        position: absolute;
        left: -35px;
        top: 0;
        background-color: #e53e3e;
        color: white;
        width: 25px;
        height: 25px;
        border-radius: 50%;
        text-align: center;
        line-height: 25px;
        font-weight: bold;
    }
    
    .gas-signs {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        margin: 20px 0;
    }
    
    .gas-sign {
        flex: 1 1 200px;
        padding: 15px;
        background-color: #fefce8;
        border: 1px solid #facc15;
        border-radius: 8px;
    }
    
    .gas-sign h4 {
        margin-top: 0;
        color: #b45309;
    }
    
    .contact-card {
        background-color: #f0fdf4;
        border: 1px solid #4ade80;
        border-radius: 8px;
        padding: 15px;
        margin: 20px 0;
    }
    
    @media (max-width: 768px) {
        .gas-sign {
            flex: 1 1 100%;
        }
    }
</style>
</head>
<body>
<article class="kb-article">
    <div class="centered-content">
        <h1><?= $page_title ?></h1>
        <div class="meta">
            <span>Категория: <a href="/knowledge-base/emergency/">Чрезвычайные ситуации</a></span>
            <span>Обновлено: <?= date('d.m.Y') ?></span>
        </div>

        <div class="content">
            <div class="emergency-box">
                <h3>Внимание! Данная инструкция критически важна для безопасности!</h3>
                <p>При обнаружении утечки опасных веществ немедленно следуйте указанным процедурам. От ваших действий может зависеть жизнь людей.</p>
            </div>

            <h2>1. Признаки утечки опасных веществ</h2>
            
            <div class="gas-signs">
                <div class="gas-sign">
                    <h4>Характерный запах</h4>
                    <p>Большинство горючих газов одорируются для обнаружения. Характерный запах "тухлых яиц" (этилмеркаптан) - основной признак утечки природного газа.</p>
                </div>
                
                <div class="gas-sign">
                    <h4>Шипящий звук</h4>
                    <p>Слышимое шипение в районе газопроводов, оборудования или соединений может указывать на место утечки.</p>
                </div>
                
                <div class="gas-sign">
                    <h4>Визуальные признаки</h4>
                    <p>Пыль или мусор, поднимающиеся с земли без ветра, пузырение в лужах, пожелтение растительности.</p>
                </div>
                
                <div class="gas-sign">
                    <h4>Физические симптомы</h4>
                    <p>Головная боль, тошнота, головокружение, раздражение глаз или дыхательных путей могут указывать на присутствие опасных веществ в воздухе.</p>
                </div>
            </div>

            <h2>2. Немедленные действия при обнаружении</h2>
            
            <ol class="procedure-steps">
                <li><strong>Немедленно прекратите все работы</strong> в зоне возможной утечки. Запрещается пользоваться электрооборудованием, включая телефоны и выключатели.</li>
                
                <li><strong>Предупредите окружающих</strong> без использования электронных средств (голосом, жестами). Эвакуируйтесь на безопасное расстояние (не менее 100 метров).</li>
                
                <li><strong>Не создавайте искр</strong> - запрещено курить, использовать зажигалки, инструменты, которые могут вызвать искрообразование.</li>
                
                <li><strong>Сообщите об инциденте</strong> с безопасного расстояния по телефонам экстренных служб:</li>
            </ol>
            
            <div class="contact-card">
                <h3>Контакты для экстренного реагирования</h3>
                <ul>
                    <li><strong>Аварийная газовая служба:</strong> 04 или 104 (с мобильного)</li>
                    <li><strong>Единая служба спасения:</strong> 112</li>
                    <li><strong>Диспетчерская Газпрома:</strong> +7 (XXX) XXX-XX-XX (круглосуточно)</li>
                    <li><strong>Внутренний номер безопасности:</strong> 333 (с корпоративных телефонов)</li>
                </ul>
                <p>При звонке сообщите: точное место, характер утечки, количество пострадавших, свои контакты.</p>
            </div>
            
            <ol class="procedure-steps" start="5">
                <li><strong>Обеспечьте встречу аварийных бригад</strong> на подъезде к объекту. Укажите кратчайший путь и место утечки.</li>
                
                <li><strong>Не возвращайтесь в опасную зону</strong> до официального разрешения служб. Даже если признаки утечки исчезли, опасность может сохраняться.</li>
                
                <li><strong>Пройдите медицинский осмотр</strong> при наличии симптомов отравления, даже слабовыраженных.</li>
            </ol>

            <h2>3. Особенности для объектов Газпрома</h2>
            
            <h3>3.1. Дополнительные меры на производственных объектах</h3>
            <ul>
                <li>Активируйте систему оповещения объекта согласно регламенту</li>
                <li>Инициируйте остановку технологического процесса по утвержденной схеме</li>
                <li>Подготовьте техническую документацию для аварийных бригад</li>
                <li>Обеспечьте доступ к запорной арматуре и вентилям</li>
            </ul>
            
            <h3>3.2. Действия после ликвидации утечки</h3>
            <ol>
                <li>Проведите полный осмотр оборудования</li>
                <li>Зафиксируйте все данные в журнале учета инцидентов</li>
                <li>Составьте акт о происшествии по форме ПГ-12</li>
                <li>Проведите внеочередной инструктаж персонала</li>
            </ol>
            
            <div class="emergency-box">
                <h3>Важно помнить!</h3>
                <p>Природный газ и другие углеводороды при определенной концентрации в воздухе образуют взрывоопасную смесь. Критический диапазон для метана - от 4,4% до 17% объема воздуха. Не пытайтесь самостоятельно локализовать утечку - это работа специалистов с оборудованием.</p>
            </div>

            <h2>4. Профилактические меры</h2>
            
            <table>
                <tr>
                    <th>Мера</th>
                    <th>Периодичность</th>
                </tr>
                <tr>
                    <td>Проверка газового оборудования</td>
                    <td>Ежеквартально</td>
                </tr>
                <tr>
                    <td>Обучение персонала</td>
                    <td>Ежегодно + внеочередное при изменениях</td>
                </tr>
                <tr>
                    <td>Контроль состояния газопроводов</td>
                    <td>По графику диагностики</td>
                </tr>
                <tr>
                    <td>Проверка систем вентиляции</td>
                    <td>Ежемесячно</td>
                </tr>
            </table>
            
            
        </div>
    </div>
</article>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>