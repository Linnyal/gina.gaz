<?php 
$page_title = "Пожары и эвакуация: руководство для сотрудников Газпрома";
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
    
    .evacuation-map {
        max-width: 100%;
        height: auto;
        border: 1px solid #e2e8f0;
        margin: 20px 0;
    }
    
    .contact-card {
        background-color: #f0fdf4;
        border: 1px solid #4ade80;
        border-radius: 8px;
        padding: 15px;
        margin: 20px 0;
    }
    
    .fire-type {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        margin: 20px 0;
    }
    
    .fire-card {
        flex: 1 1 200px;
        padding: 15px;
        background-color: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
    }
    
    .fire-card h4 {
        margin-top: 0;
        color: #b45309;
    }
    
    @media (max-width: 768px) {
        .fire-card {
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
                <h3>Внимание! Данная инструкция обязательна к изучению всеми сотрудниками!</h3>
                <p>На объектах Газпрома пожарная безопасность имеет особое значение из-за повышенной опасности работы с горючими веществами.</p>
            </div>

            <h2>1. Классификация пожаров на объектах Газпрома</h2>
            
            <div class="fire-type">
                <div class="fire-card">
                    <h4>Класс A</h4>
                    <p>Горение твердых веществ (дерево, бумага, текстиль)</p>
                    <p><strong>Огнетушитель:</strong> Водный, порошковый</p>
                </div>
                
                <div class="fire-card">
                    <h4>Класс B</h4>
                    <p>Горение жидких веществ (нефтепродукты, масла)</p>
                    <p><strong>Огнетушитель:</strong> Пенный, порошковый</p>
                </div>
                
                <div class="fire-card">
                    <h4>Класс C</h4>
                    <p>Горение газов (метан, пропан)</p>
                    <p><strong>Огнетушитель:</strong> Порошковый, углекислотный</p>
                </div>
                
                <div class="fire-card">
                    <h4>Класс E</h4>
                    <p>Горение электроустановок</p>
                    <p><strong>Огнетушитель:</strong> Углекислотный</p>
                </div>
            </div>

            <h2>2. Алгоритм действий при обнаружении пожара</h2>
            
            <ol class="procedure-steps">
                <li><strong>Немедленно активируйте ручной пожарный извещатель</strong> (нажмите ближайшую кнопку пожарной сигнализации)</li>
                
                <li><strong>Сообщите о пожаре</strong> по телефону 01 (101 с мобильного) и внутренним номерам экстренной связи:
                    <div class="contact-card">
                        <ul>
                            <li><strong>Диспетчерская служба:</strong> 111 (внутренний)</li>
                            <li><strong>Дежурный по объекту:</strong> +7 (XXX) XXX-XX-XX</li>
                            <li><strong>Служба безопасности:</strong> 222 (внутренний)</li>
                        </ul>
                    </div>
                </li>
                
                <li><strong>Приступите к тушению</strong> только если это не угрожает вашей жизни и соответствует вашей квалификации</li>
                
                <li><strong>Отключите электроэнергию</strong> в зоне пожара (если это безопасно)</li>
                
                <li><strong>Начните эвакуацию</strong> согласно плану эвакуации для данного помещения</li>
            </ol>

            <h2>3. Организация эвакуации</h2>
            
            <h3>3.1. Основные правила эвакуации</h3>
            <ul>
                <li>Двигайтесь к ближайшему эвакуационному выходу, обозначенному зелеными табличками</li>
                <li>Не пользуйтесь лифтами - только лестницами</li>
                <li>При задымлении двигайтесь пригнувшись, дышите через влажную ткань</li>
                <li>Закрывайте за собой двери, но не запирайте их на ключ</li>
                <li>Оказывайте помощь коллегам с ограниченными возможностями</li>
            </ul>
            
            <h3>3.2. Сборные пункты</h3>
            <p>После эвакуации все сотрудники должны собраться в специально отведенных местах:</p>
            <ul>
                <li><strong>Офисные здания:</strong> Парковка западного входа</li>
                <li><strong>Производственные объекты:</strong> Площадка у КПП №3</li>
                <li><strong>Складские помещения:</strong> Стадион на территории</li>
            </ul>
            
            <div class="emergency-box">
                <h3>Важно!</h3>
                <p>После эвакуации обязательно зарегистрируйтесь у ответственного за учет персонала. Это необходимо для выяснения, все ли покинули опасную зону.</p>
            </div>

            <h2>4. Особенности на объектах Газпрома</h2>
            
            <h3>4.1. Дополнительные меры на производственных объектах</h3>
            <ul>
                <li>При пожаре на технологической установке - немедленная остановка оборудования по аварийному алгоритму</li>
                <li>Перекрытие подачи газа на аварийном участке</li>
                <li>Особое внимание системам вентиляции и дымоудаления</li>
                <li>Использование специальных средств защиты при тушении</li>
            </ul>
            
            <h3>4.2. Работа с подрядчиками</h3>
            <ul>
                <li>Все подрядные организации должны быть ознакомлены с планом эвакуации</li>
                <li>Ответственный за подрядчиков обязан обеспечить их учет при эвакуации</li>
                <li>Специальные инструкции для водителей автотранспорта</li>
            </ul>
            
            <h2>5. Профилактические мероприятия</h2>
            
            <table>
                <tr>
                    <th>Мероприятие</th>
                    <th>Периодичность</th>
                    <th>Ответственный</th>
                </tr>
                <tr>
                    <td>Проверка огнетушителей</td>
                    <td>Ежемесячно</td>
                    <td>Служба ОТиПБ</td>
                </tr>
                <tr>
                    <td>Тренировочные эвакуации</td>
                    <td>Раз в квартал</td>
                    <td>Руководители подразделений</td>
                </tr>
                <tr>
                    <td>Проверка эвакуационных путей</td>
                    <td>Еженедельно</td>
                    <td>Дежурный персонал</td>
                </tr>
                <tr>
                    <td>Обучение пожарно-техническому минимуму</td>
                    <td>Ежегодно</td>
                    <td>Служба ОТиПБ</td>
                </tr>
            </table>
            
            <div class="emergency-box">
                <h3>Запрещено!</h3>
                <ul>
                    <li>Загромождать эвакуационные пути и выходы</li>
                    <li>Использовать неисправные электроприборы</li>
                    <li>Курить в неотведенных местах</li>
                    <li>Проводить огневые работы без наряда-допуска</li>
                </ul>
            </div>
        </div>
    </div>
</article>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>