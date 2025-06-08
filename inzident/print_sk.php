<?php 
$page_title = "Инциденты и решения: Проблемы с печатью и сканированием";
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
        background-color: #ffffff;
    }
    
    .centered-content {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        text-align: left;
        background-color: #ffffff;
    }
    
    .solution-box {
        margin: 25px 0;
        padding: 20px;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        background-color: #f8fafc;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }
    
    .kb-article h1 {
        color: #000000;
        border-bottom: 2px solid #3498db;
        padding-bottom: 10px;
    }
    
    .kb-article h2 {
        color: #3498db;
        margin-top: 30px;
    }
    
    .kb-article h3 {
        color: #2c3e50;
        margin-top: 20px;
    }
    
    .step {
        margin-bottom: 15px;
        padding-left: 20px;
        position: relative;
    }
    
    .step-number {
        position: absolute;
        left: 0;
        font-weight: bold;
        color: #3498db;
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
    
    .notice.success {
        background-color: #f0fff4;
        border-color: #38a169;
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
    
    @media (max-width: 768px) {
        .centered-content {
            padding: 15px;
        }
    }
    </style>
</head>
<body>
<article class="kb-article">
    <div class="centered-content">
        <h1><?= $page_title ?></h1>
        <div class="meta">
            <span>Категория: <a href="/knowledge-base/incidents/">Инциденты и решения</a></span>
            <span>Обновлено: <?= date('d.m.Y') ?></span>
        </div>

        <div class="content">
            <h2>Проблемы с печатью: диагностика и решение</h2>
            <p>Проблемы с печатью - одни из самых распространенных инцидентов в корпоративной среде. В этой статье рассмотрим системный подход к диагностике и устранению неполадок с принтерами.</p>
            
            <div class="solution-box">
                <h3>Принтер не печатает: пошаговая диагностика</h3>
                
                <div class="step">
                    <span class="step-number">1</span>
                    <div class="step-content">
                        <strong>Проверка очереди печати</strong>
                        <p>Откройте панель управления → Устройства и принтеры → Найдите нужный принтер → Откройте "Просмотр очереди печати".</p>
                        <div class="notice info">
                            <p>Если в очереди есть зависшие задания, очистите очередь (правая кнопка → "Отменить все документы"). Перезапустите службу печати через services.msc ("Диспетчер печати").</p>
                        </div>
                    </div>
                </div>
                
                <div class="step">
                    <span class="step-number">2</span>
                    <div class="step-content">
                        <strong>Проверка подключения</strong>
                        <p>Для сетевых принтеров:</p>
                        <ul>
                            <li>Проверьте ping до IP-адреса принтера</li>
                            <li>Попробуйте открыть веб-интерфейс принтера в браузере</li>
                            <li>Убедитесь, что порт 9100 (или указанный в настройках) открыт</li>
                        </ul>
                        <p>Для USB-принтеров:</p>
                        <ul>
                            <li>Попробуйте другой USB-порт</li>
                            <li>Проверьте кабель на повреждения</li>
                        </ul>
                    </div>
                </div>
                
                <div class="step">
                    <span class="step-number">3</span>
                    <div class="step-content">
                        <strong>Проверка драйверов</strong>
                        <p>В диспетчере устройств найдите принтер и проверьте:</p>
                        <ul>
                            <li>Нет ли желтого восклицательного знака</li>
                            <li>Совпадает ли название драйвера с моделью принтера</li>
                        </ul>
                        <div class="notice warning">
                            <p>Если драйвер поврежден, удалите устройство (с отметкой "Удалить драйверы"), затем установите заново с официального сайта производителя.</p>
                        </div>
                    </div>
                </div>
                
                <div class="step">
                    <span class="step-number">4</span>
                    <div class="step-content">
                        <strong>Проверка на другом компьютере</strong>
                        <p>Подключите принтер к другому компьютеру в той же сети. Если печать работает - проблема в настройках исходного ПК.</p>
                    </div>
                </div>
                
                <div class="notice success">
                    <p><strong>Решение найдено?</strong> Если после всех проверок проблема сохраняется, проверьте состояние картриджей и бумаги, а также наличие ошибок на дисплее принтера.</p>
                </div>
            </div>
            
            <h2>Проблемы со сканером: типовые ошибки</h2>
            <p>Неисправности сканеров часто связаны с проблемами подключения или программного обеспечения.</p>
            
            <div class="solution-box">
                <h3>Сканер не работает: диагностика</h3>
                
                <div class="step">
                    <span class="step-number">1</span>
                    <div class="step-content">
                        <strong>Проверка физического подключения</strong>
                        <p>Для сетевых сканеров:</p>
                        <ul>
                            <li>Убедитесь, что сканер включен и подключен к сети</li>
                            <li>Проверьте ping до IP-адреса сканера</li>
                        </ul>
                        <p>Для USB-сканеров:</p>
                        <ul>
                            <li>Попробуйте другой USB-порт</li>
                            <li>Проверьте кабель (желательно использовать оригинальный)</li>
                        </ul>
                    </div>
                </div>
                
                <div class="step">
                    <span class="step-number">2</span>
                    <div class="step-content">
                        <strong>Проверка драйверов</strong>
                        <p>Откройте диспетчер устройств и найдите сканер в разделах:</p>
                        <ul>
                            <li>Устройства обработки изображений</li>
                            <li>Сканеры</li>
                            <li>Универсальные последовательные шины</li>
                        </ul>
                        <p>При отсутствии драйвера установите его с официального сайта производителя.</p>
                    </div>
                </div>
                
                <div class="step">
                    <span class="step-number">3</span>
                    <div class="step-content">
                        <strong>Проверка службы Windows Image Acquisition (WIA)</strong>
                        <p>Откройте services.msc и найдите службу "Служба загрузки изображений Windows". Убедитесь, что она запущена и установлен тип запуска "Автоматически".</p>
                    </div>
                </div>
                
                <div class="step">
                    <span class="step-number">4</span>
                    <div class="step-content">
                        <strong>Проверка совместимости ПО</strong>
                        <p>Если сканер используется со специализированным ПО (например, ABBYY FineReader):</p>
                        <ul>
                            <li>Убедитесь, что программа поддерживает вашу модель сканера</li>
                            <li>Попробуйте использовать стандартное приложение "Сканер" в Windows</li>
                        </ul>
                    </div>
                </div>
                
                <div class="notice info">
                    <p><strong>Совет:</strong> Для сетевых сканеров MFP проверьте настройки SNMP в свойствах устройства (если используется управление по SNMP).</p>
                </div>
            </div>
            
            <h2>Профилактика проблем</h2>
            <p>Чтобы минимизировать проблемы с печатью и сканированием, рекомендуется:</p>
            <ul>
                <li>Регулярно обновлять драйверы устройств</li>
                <li>Использовать оригинальные кабели для подключения</li>
                <li>Настраивать мониторинг состояния сетевых принтеров и сканеров</li>
                <li>Вести журнал инцидентов для выявления повторяющихся проблем</li>
                <li>Организовать централизованное управление принтерами через сервер печати</li>
            </ul>
            
            <div class="solution-box">
                <h3>Полезные команды для диагностики</h3>
                <p><strong>Очистка очереди печати:</strong><br>
                <code>net stop spooler</code><br>
                <code>del %systemroot%\System32\spool\printers\* /Q</code><br>
                <code>net start spooler</code></p>
                
                <p><strong>Проверка сетевого принтера:</strong><br>
                <code>ping [IP_принтера]</code><br>
                <code>telnet [IP_принтера] 9100</code> (проверка открытого порта)</p>
                
                <p><strong>Переустановка драйвера принтера:</strong><br>
                <code>printui /s /t2</code> (открывает вкладку "Драйверы" в настройках печати)</p>
            </div>
        </div>
    </div>
</article>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>