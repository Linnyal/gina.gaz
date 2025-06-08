<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заявление о переводе | Газпром</title>
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
            margin-bottom: 20px;
        }
        
        .document-body {
            margin-bottom: 15px;
        }
        
        .document-section {
            margin-bottom: 12px;
            text-align: justify;
        }
        
        .align-right {
            text-align: right;
            margin-top: 40px;
        }
        
        .signature-line {
            display: inline-block;
            width: 200px;
            border-bottom: 1px solid #000;
            margin: 0 10px;
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
            <div class="document-title">заявление</div>
        </div>

        <div class="document-body">
            <div class="document-section">
                Генеральному директору<br>
                <span class="form-field" contenteditable="true" style="width: 350px;">ООО "Газпром"</span><br>
                От: <span class="form-field" contenteditable="true" style="width: 350px;"></span><br>
                Должность: <span class="form-field" contenteditable="true" style="width: 250px;"></span>
            </div>

            <div class="document-section" style="margin-top: 20px;">
                Прошу перевести меня с должности <span class="form-field" contenteditable="true" style="width: 200px;"></span><br>
                на должность <span class="form-field" contenteditable="true" style="width: 200px;"></span><br>
                в отдел <span class="form-field" contenteditable="true" style="width: 200px;"></span><br>
                с <span class="form-field" contenteditable="true" style="width: 80px;"></span> 20<span class="form-field" contenteditable="true" style="width: 25px;"></span> года.
            </div>

            <div class="document-section">
                Основание для перевода: <span class="form-field" contenteditable="true" style="width: 400px;"></span>
            </div>

            <div class="align-right">
                Дата: <span class="form-field" contenteditable="true" style="width: 80px;"></span> 20<span class="form-field" contenteditable="true" style="width: 25px;"></span> г.<br>
                <span class="signature-line"></span> /<span class="form-field" contenteditable="true" style="width: 120px;"></span>/
            </div>
        </div>
    </div>
</body>
</html>