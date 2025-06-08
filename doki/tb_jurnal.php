<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Журнал учета инструктажей по ТБ</title>
    <style>
        body {
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            font-family: 'Times New Roman', serif;
        }
        
        .paper-sheet {
            width: 297mm; /* Горизонтальный A4 */
            min-height: 210mm;
            background: white;
            padding: 15mm;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            position: relative;
            border: 1px solid #e0e0e0;
            transform: rotate(0deg);
        }
        
        .document-header {
            text-align: center;
            margin-bottom: 15px;
        }
        
        .document-title {
            font-size: 16pt;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 5px;
        }
        
        .document-subtitle {
            font-size: 14pt;
            margin-bottom: 20px;
        }
        
        .organization-info {
            text-align: left;
            margin-bottom: 20px;
        }
        
        .dates-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            font-size: 10pt;
        }
        
        th, td {
            border: 1px solid #000;
            padding: 5px;
            text-align: center;
            vertical-align: middle;
        }
        
        th {
            font-weight: bold;
            background-color: #f0f0f0;
        }
        
        .form-field {
            border-bottom: 1px dotted #000;
            min-width: 30px;
            display: inline-block;
            padding: 0 3px;
        }
        
        .signature-block {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }
        
        .signature-line {
            display: inline-block;
            width: 200px;
            border-bottom: 1px solid #000;
            margin: 0 10px;
        }
        
        @media screen and (max-width: 297mm) {
            .paper-sheet {
                width: 100%;
                padding: 10px;
                min-height: auto;
            }
        }
        
        @page {
            size: A4 landscape;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="paper-sheet">
        <div class="document-header">
            <div class="document-title">журнал</div>
            <div class="document-subtitle">учета инструктажей по технике безопасности</div>
        </div>

        <div class="organization-info">
            Организация: <span class="form-field" contenteditable="true" style="width: 300px;"></span><br>
            Структурное подразделение: <span class="form-field" contenteditable="true" style="width: 250px;"></span>
        </div>

        <div class="dates-info">
            <div>Начат: <span class="form-field" contenteditable="true" style="width: 80px;"></span> 20<span class="form-field" contenteditable="true" style="width: 25px;"></span> г.</div>
            <div>Окончен: <span class="form-field" contenteditable="true" style="width: 80px;"></span> 20<span class="form-field" contenteditable="true" style="width: 25px;"></span> г.</div>
        </div>

        <table>
            <thead>
                <tr>
                    <th rowspan="2">№ п/п</th>
                    <th rowspan="2">Дата</th>
                    <th rowspan="2">ФИО инструктируемого</th>
                    <th rowspan="2">Должность, профессия</th>
                    <th rowspan="2">Вид инструктажа</th>
                    <th rowspan="2">Причина проведения</th>
                    <th colspan="2">Инструктаж провел</th>
                    <th rowspan="2">Подпись инструктируемого</th>
                    <th rowspan="2">Подпись инструктора</th>
                </tr>
                <tr>
                    <th>ФИО</th>
                    <th>Должность</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><span class="form-field" contenteditable="true"></span></td>
                    <td><span class="form-field" contenteditable="true"></span></td>
                    <td><span class="form-field" contenteditable="true"></span></td>
                    <td><span class="form-field" contenteditable="true"></span></td>
                    <td><span class="form-field" contenteditable="true"></span></td>
                    <td><span class="form-field" contenteditable="true"></span></td>
                    <td><span class="form-field" contenteditable="true"></span></td>
                    <td><span class="form-field" contenteditable="true"></span></td>
                    <td><span class="form-field" contenteditable="true"></span></td>
                </tr>
                <!-- Добавьте больше строк по аналогии -->
            </tbody>
        </table>

        <div class="signature-block">
            <div>
                Ответственный за ведение журнала:<br>
                <span class="signature-line"></span> /<span class="form-field" contenteditable="true" style="width: 150px;"></span>/
            </div>
            <div>
                Дата проверки журнала:<br>
                <span class="form-field" contenteditable="true" style="width: 80px;"></span> 20<span class="form-field" contenteditable="true" style="width: 25px;"></span> г.
            </div>
        </div>
    </div>
</body>
</html>