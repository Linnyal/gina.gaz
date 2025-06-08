$page_title = "Командная строка, консоль, PowerShell";
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
    
    .command-block {
        background-color: #2d3748;
        color: #e2e8f0;
        padding: 15px;
        border-radius: 6px;
        font-family: monospace;
        margin: 15px 0;
        overflow-x: auto;
    }
    
    .command {
        color: #81e6d9;
    }
    
    .comment {
        color: #a0aec0;
        font-style: italic;
    }
    
    .config-example {
        background-color: #f8fafc;
        border-left: 4px solid #3182ce;
        padding: 15px;
        margin: 15px 0;
        border-radius: 0 4px 4px 0;
    }
    
    .troubleshooting-step {
        margin-bottom: 20px;
        padding: 15px;
        background-color: #f0fff4;
        border-left: 4px solid #38a169;
        border-radius: 0 4px 4px 0;
    }
    
    .os-tabs {
        display: flex;
        margin-bottom: 20px;
        border-bottom: 1px solid #e2e8f0;
    }
    
    .os-tab {
        padding: 10px 20px;
        cursor: pointer;
        border-bottom: 3px solid transparent;
    }
    
    .os-tab.active {
        border-bottom: 3px solid #3182ce;
        font-weight: 600;
    }
    
    .os-content {
        display: none;
    }
    
    .os-content.active {
        display: block;
    }
</style>
</head>
<body>
<article class="kb-article">
    <div class="centered-content">
        <h1><?= $page_title ?></h1>
        <div class="meta">
            <span>Категория: <a href="/knowledge-base/os/">Операционные системы</a></span>
            <span>Обновлено: <?= date('d.m.Y') ?></span>
        </div>

        <div class="content">
            <h2>Введение в командные оболочки</h2>
            <p>Командная строка (консоль) - это текстовый интерфейс для взаимодействия с операционной системой. PowerShell - это современная командная оболочка и язык сценариев от Microsoft с мощными возможностями автоматизации.</p>

            <div class="os-tabs">
                <div class="os-tab active" onclick="showOsTab('cmd')">CMD</div>
                <div class="os-tab" onclick="showOsTab('powershell')">PowerShell</div>
                <div class="os-tab" onclick="showOsTab('bash')">Bash (Linux/macOS)</div>
            </div>

            <div id="cmd" class="os-content active">
                <h3>Командная строка CMD (Windows)</h3>
                
                <h4>1. Основные команды</h4>
                <div class="command-block">
                    <span class="command">dir</span> <span class="comment"># список файлов и папок</span><br>
                    <span class="command">cd C:\Folder</span> <span class="comment"># переход в папку</span><br>
                    <span class="command">mkdir NewFolder</span> <span class="comment"># создать папку</span><br>
                    <span class="command">copy file.txt newfile.txt</span> <span class="comment"># копирование файла</span><br>
                    <span class="command">del file.txt</span> <span class="comment"># удаление файла</span>
                </div>
                
                <h4>2. Работа с сетью</h4>
                <div class="command-block">
                    <span class="command">ipconfig /all</span> <span class="comment"># информация о сетевых интерфейсах</span><br>
                    <span class="command">ping google.com</span> <span class="comment"># проверка соединения</span><br>
                    <span class="command">tracert google.com</span> <span class="comment"># трассировка маршрута</span>
                </div>
                
                <h4>3. Системные команды</h4>
                <div class="command-block">
                    <span class="command">systeminfo</span> <span class="comment"># информация о системе</span><br>
                    <span class="command">tasklist</span> <span class="comment"># список процессов</span><br>
                    <span class="command">taskkill /IM notepad.exe /F</span> <span class="comment"># завершить процесс</span>
                </div>
                
                <h4>4. Пакетные файлы (.bat)</h4>
                <div class="config-example">
                    <p>Пример простого скрипта backup.bat:</p>
                    <pre>@echo off
echo Начало резервного копирования...
xcopy C:\Source D:\Backup /E /H /C /I
echo Резервное копирование завершено
pause</pre>
                </div>
            </div>

            <div id="powershell" class="os-content">
                <h3>Windows PowerShell</h3>
                
                <h4>1. Основы PowerShell</h4>
                <div class="command-block">
                    <span class="command">Get-Command</span> <span class="comment"># список доступных команд</span><br>
                    <span class="command">Get-Help Get-Process -Full</span> <span class="comment"># справка по команде</span><br>
                    <span class="command">Get-Alias</span> <span class="comment"># список псевдонимов</span>
                </div>
                
                <h4>2. Работа с файлами</h4>
                <div class="command-block">
                    <span class="command">Get-ChildItem</span> <span class="comment"># аналог dir</span><br>
                    <span class="command">Copy-Item file.txt -Destination newfile.txt</span><br>
                    <span class="command">Remove-Item file.txt</span><br>
                    <span class="command">Get-Content file.txt</span> <span class="comment"># просмотр содержимого</span>
                </div>
                
                <h4>3. Работа с процессами</h4>
                <div class="command-block">
                    <span class="command">Get-Process</span> <span class="comment"># список процессов</span><br>
                    <span class="command">Stop-Process -Name notepad</span><br>
                    <span class="command">Start-Process notepad</span>
                </div>
                
                <h4>4. Продвинутые возможности</h4>
                <div class="command-block">
                    <span class="command">Get-Service | Where-Object {$_.Status -eq "Running"}</span><br>
                    <span class="command">1..10 | ForEach-Object {$_ * 2}</span><br>
                    <span class="command">Get-EventLog -LogName System -Newest 10</span>
                </div>
                
                <h4>5. Скрипты PowerShell (.ps1)</h4>
                <div class="config-example">
                    <p>Пример скрипта для мониторинга дискового пространства:</p>
                    <pre># Проверка свободного места на дисках
$disks = Get-PSDrive -PSProvider FileSystem
foreach ($disk in $disks) {
    $freePercent = ($disk.Free / $disk.Used) * 100
    Write-Host "Диск $($disk.Name): $($freePercent.ToString('0.00'))% свободно"
    
    if ($freePercent -lt 10) {
        Write-Warning "На диске $($disk.Name) осталось мало места!"
    }
}</pre>
                </div>
            </div>

            <div id="bash" class="os-content">
                <h3>Bash (Linux/macOS)</h3>
                
                <h4>1. Основные команды</h4>
                <div class="command-block">
                    <span class="command">ls -la</span> <span class="comment"># список файлов с деталями</span><br>
                    <span class="command">cd /path/to/dir</span><br>
                    <span class="command">mkdir new_dir</span><br>
                    <span class="command">cp file1 file2</span><br>
                    <span class="command">rm file</span><br>
                    <span class="command">grep "pattern" file.txt</span> <span class="comment"># поиск текста</span>
                </div>
                
                <h4>2. Работа с процессами</h4>
                <div class="command-block">
                    <span class="command">ps aux</span> <span class="comment"># список процессов</span><br>
                    <span class="command">kill -9 PID</span> <span class="comment"># завершить процесс</span><br>
                    <span class="command">top</span> <span class="comment"># монитор процессов</span>
                </div>
                
                <h4>3. Перенаправление ввода/вывода</h4>
                <div class="command-block">
                    <span class="command">command > file.txt</span> <span class="comment"># вывод в файл</span><br>
                    <span class="command">command >> file.txt</span> <span class="comment"># дописать в файл</span><br>
                    <span class="command">command1 | command2</span> <span class="comment"># передать вывод</span><br>
                    <span class="command">command &lt; input.txt</span> <span class="comment"># ввод из файла</span>
                </div>
                
                <h4>4. Bash-скрипты</h4>
                <div class="config-example">
                    <p>Пример простого bash-скрипта:</p>
                    <pre>#!/bin/bash
# Скрипт для резервного копирования

BACKUP_DIR="/backups"
SOURCE_DIR="/var/www"

if [ ! -d "$BACKUP_DIR" ]; then
    mkdir -p "$BACKUP_DIR"
fi

TIMESTAMP=$(date +%Y%m%d_%H%M%S)
tar -czf "$BACKUP_DIR/backup_$TIMESTAMP.tar.gz" "$SOURCE_DIR"

echo "Резервная копия создана: $BACKUP_DIR/backup_$TIMESTAMP.tar.gz"</pre>
                </div>
            </div>

            <h2>Сравнение оболочек</h2>
            
            <table style="width:100%; border-collapse: collapse; margin: 20px 0;">
                <tr style="background-color: #f8f9fa;">
                    <th style="padding: 10px; border: 1px solid #ddd;">Функция</th>
                    <th style="padding: 10px; border: 1px solid #ddd;">CMD</th>
                    <th style="padding: 10px; border: 1px solid #ddd;">PowerShell</th>
                    <th style="padding: 10px; border: 1px solid #ddd;">Bash</th>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;">Тип оболочки</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Простая командная строка</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Объектно-ориентированная</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Текстовая</td>
                </tr>
                <tr style="background-color: #f8f9fa;">
                    <td style="padding: 10px; border: 1px solid #ddd;">Обработка объектов</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Нет</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Да (объекты .NET)</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Нет (текстовый ввод/вывод)</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;">Конвейер (pipeline)</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Ограниченный (текст)</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Мощный (объекты)</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Мощный (текст)</td>
                </tr>
                <tr style="background-color: #f8f9fa;">
                    <td style="padding: 10px; border: 1px solid #ddd;">Скрипты</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">.bat (ограниченные)</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">.ps1 (полноценный язык)</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">.sh (полноценный язык)</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;">Кроссплатформенность</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Только Windows</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Windows, Linux, macOS</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Linux, macOS, Windows (WSL)</td>
                </tr>
            </table>

            <h2>Советы по работе с командной строкой</h2>
            
            <div class="troubleshooting-step">
                <h3>1. Автодополнение команд</h3>
                <p><strong>CMD:</strong> Tab для автодополнения имен файлов</p>
                <p><strong>PowerShell:</strong> Tab для автодополнения команд, параметров, имен файлов</p>
                <p><strong>Bash:</strong> Tab для автодополнения, двойной Tab для показа вариантов</p>
            </div>
            
            <div class="troubleshooting-step">
                <h3>2. История команд</h3>
                <p><strong>CMD:</strong> F7 для просмотра истории, стрелки вверх/вниз</p>
                <p><strong>PowerShell:</strong> стрелки вверх/вниз, Ctrl+R для поиска в истории</p>
                <p><strong>Bash:</strong> стрелки вверх/вниз, history для просмотра, !номер для выполнения</p>
            </div>
            
            <div class="troubleshooting-step">
                <h3>3. Пользовательские алиасы</h3>
                <p><strong>CMD:</strong> doskey ls=dir $*</p>
                <p><strong>PowerShell:</strong> Set-Alias ls Get-ChildItem</p>
                <p><strong>Bash:</strong> alias ll='ls -la' (добавить в ~/.bashrc)</p>
            </div>
            
            <div class="troubleshooting-step">
                <h3>4. Перенаправление вывода</h3>
                <div class="command-block">
                    <span class="command">command > file.txt</span> <span class="comment"># перезаписать файл</span><br>
                    <span class="command">command >> file.txt</span> <span class="comment"># дописать в файл</span><br>
                    <span class="command">command 2> errors.log</span> <span class="comment"># перенаправить stderr</span><br>
                    <span class="command">command > output.log 2>&1</span> <span class="comment"># перенаправить stdout и stderr</span>
                </div>
            </div>

            <div class="test-container">
                <h2>Проверьте свои знания</h2>
                <form id="shellTest">
                    
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Какая команда в PowerShell выводит список запущенных процессов?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q1" id="q1a" value="a">
                                <label for="q1a">Get-Process</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1b" value="b">
                                <label for="q1b">ps</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1c" value="c">
                                <label for="q1c">tasklist</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1d" value="d">
                                <label for="q1d">Show-Processes</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="a">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. Как создать алиас в bash для команды 'ls -la' с именем 'll'?</strong></p>
                        <input type="text" id="q2_answer" class="text-answer" placeholder="Введите команду">
                        <input type="hidden" id="correct_q2" value="alias ll='ls -la'">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Какие из перечисленных возможностей есть в PowerShell, но отсутствуют в CMD? (Выберите все верные варианты)</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="checkbox" name="q3" id="q3a" value="a">
                                <label for="q3a">Работа с объектами .NET</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q3" id="q3b" value="b">
                                <label for="q3b">Конвейер (pipeline)</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q3" id="q3c" value="c">
                                <label for="q3c">Удаленное выполнение команд</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q3" id="q3d" value="d">
                                <label for="q3d">Поддержка регулярных выражений</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q3" value="a,c,d">
                    </div>
                    
                    <!-- Вопрос 4 -->
                    <div class="question">
                        <p><strong>4. Опишите, как в bash перенаправить стандартный вывод и ошибки в один файл</strong></p>
                        <input type="text" id="q4_answer" class="text-answer" placeholder="Введите команду">
                        <input type="hidden" id="correct_q4" value="command > file.log 2>&1">
                    </div>
                    
                    <!-- Вопрос 5 -->
                    <div class="question">
                        <p><strong>5. Какой командой в CMD можно просмотреть содержимое папки?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q5" id="q5a" value="a">
                                <label for="q5a">dir</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5b" value="b">
                                <label for="q5b">ls</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5c" value="c">
                                <label for="q5c">list</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5d" value="d">
                                <label for="q5d">show</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q5" value="a">
                    </div>
                    
                    <button type="button" onclick="checkShellTest()">Проверить ответы</button>
                </form>
                
                <div id="testResults" class="results"></div>
            </div>
        </div>
    </div>
</article>

<script>
function showOsTab(tabName) {
    // Скрыть все вкладки
    document.querySelectorAll('.os-content').forEach(tab => {
        tab.classList.remove('active');
    });
    
    // Убрать активный класс у всех кнопок
    document.querySelectorAll('.os-tab').forEach(tab => {
        tab.classList.remove('active');
    });
    
    // Показать выбранную вкладку
    document.getElementById(tabName).classList.add('active');
    
    // Сделать кнопку активной
    event.currentTarget.classList.add('active');
}

function checkShellTest() {
    let score = 0;
    let resultsHTML = "<h3>Результаты теста:</h3><ol>";
    
    // Вопрос 1
    const q1Selected = document.querySelector('input[name="q1"]:checked');
    if (q1Selected && q1Selected.value === document.getElementById('correct_q1').value) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 1: Верно! Get-Process показывает список процессов в PowerShell.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 1: Неверно. Правильный ответ: Get-Process.</li>`;
    }
    
    // Вопрос 2
    const q2Answer = document.getElementById('q2_answer').value.trim();
    if (q2Answer.toLowerCase().includes("alias ll='ls -la'") || q2Answer.toLowerCase().includes('alias ll="ls -la"')) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 2: Правильно! Именно так создаются алиасы в bash.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 2: Неверно. Правильный ответ: alias ll='ls -la'.</li>`;
    }
    
    // Вопрос 3 (множественный выбор)
    const q3Selected = Array.from(document.querySelectorAll('input[name="q3"]:checked')).map(el => el.value).sort().join(',');
    const q3Correct = document.getElementById('correct_q3').value.split(',').sort().join(',');
    if (q3Selected === q3Correct) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 3: Абсолютно верно! PowerShell поддерживает объекты .NET, удаленное выполнение и регулярные выражения.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 3: Неполный ответ. PowerShell поддерживает объекты .NET, удаленное выполнение и регулярные выражения.</li>`;
    }
    
    // Вопрос 4
    const q4Answer = document.getElementById('q4_answer').value.trim();
    if (q4Answer.includes('> file.log 2>&1') || q4Answer.includes('&> file.log')) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 4: Верно! Это стандартный способ перенаправления вывода и ошибок в bash.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 4: Неверно. Правильный ответ: command > file.log 2>&1.</li>`;
    }
    
    // Вопрос 5
    const q5Selected = document.querySelector('input[name="q5"]:checked');
    if (q5Selected && q5Selected.value === document.getElementById('correct_q5').value) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 5: Правильно! В CMD для просмотра содержимого папки используется команда dir.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 5: Неверно. Правильный ответ: dir.</li>`;
    }
    
    resultsHTML += `</ol><p><strong>Итоговый результат: ${score} из 5 (${Math.round(score/5*100)}%)</strong></p>`;
    document.getElementById('testResults').innerHTML = resultsHTML;
    document.getElementById('testResults').style.display = 'block';
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>