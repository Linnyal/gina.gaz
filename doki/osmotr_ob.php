<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Акт осмотра оборудования | Газпром</title>
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
            width: 180mm;
            min-height: 250mm;
            background: white;
            padding: 20mm;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            position: relative;
            border: 1px solid #e0e0e0;
        }
        
        .document-header {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .document-title {
            font-size: 16pt;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 5px;
        }
        
        .document-number {
            text-align: right;
            font-weight: bold;
            margin-bottom: 15px;
        }
        
        .document-body {
            margin-bottom: 15px;
        }
        
        .document-section {
            margin-bottom: 12px;
        }
        
        .document-section-title {
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .signature-line {
            display: inline-block;
            width: 200px;
            border-bottom: 1px solid #000;
            margin: 0 10px;
        }
        
        .checkbox {
            display: inline-block;
            width: 14px;
            height: 14px;
            border: 1px solid #000;
            margin-right: 5px;
            vertical-align: middle;
        }
        
        .form-field {
            border-bottom: 1px dotted #000;
            min-width: 150px;
            display: inline-block;
            padding: 0 5px;
        }
        
        @media screen and (max-width: 180mm) {
            .paper-sheet {
                width: 100%;
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="paper-sheet">
        <div class="document-header">
            <div class="document-number">АКТ № <span class="form-field" contenteditable="true"></span></div>
            <div class="document-title">осмотра оборудования</div>
        </div>

        <div class="document-body">
            <div class="document-section">
                Дата: «<span class="form-field" contenteditable="true"></span>»<span class="form-field" contenteditable="true"></span> 2024 г.
            </div>

            <div class="document-section">
                <div class="document-section-title">Состав комиссии:</div>
                1. <span class="form-field" contenteditable="true" style="width: 350px;"></span> (должность, ФИО)<br>
                2. <span class="form-field" contenteditable="true" style="width: 350px;"></span> (должность, ФИО)
            </div>

            <div class="document-section">
                <div class="document-section-title">Объект осмотра:</div>
                Наименование: <span class="form-field" contenteditable="true"></span><br>
                Тип оборудования: <span class="form-field" contenteditable="true"></span><br>
                Заводской номер: <span class="form-field" contenteditable="true"></span><br>
                Место установки: <span class="form-field" contenteditable="true"></span>
            </div>

            <div class="document-section">
                <div class="document-section-title">Результаты осмотра:</div>
                1. Внешнее состояние: <span class="form-field" contenteditable="true"></span><br>
                2. Выявленные неисправности: <span class="form-field" contenteditable="true"></span><br>
                3. Рекомендации: <span class="form-field" contenteditable="true"></span>
            </div>

            <div class="document-section">
                <div class="document-section-title">Заключение:</div>
                <div class="checkbox"></div> Оборудование исправно<br>
                <div class="checkbox"></div> Требуется ремонт (указать сроки: <span class="form-field" contenteditable="true"></span>)<br>
                <div class="checkbox"></div> Требуется замена
            </div>

            <div class="document-section" style="margin-top: 40px;">
                Подписи членов комиссии:<br><br>
                1. <span class="signature-line"></span> /<span class="form-field" contenteditable="true" style="width: 120px;"></span>/<br>
                2. <span class="signature-line"></span> /<span class="form-field" contenteditable="true" style="width: 120px;"></span>/
            </div>
        </div>
    </div>
</body>
</html>