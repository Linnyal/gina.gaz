<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Газпром | Корпоративный обучающий портал</title>
    <style>
      /* Стили для подвала */
footer {
  background-color: var(--primary); /* Основной голубой цвет */
  color: var(--text-light);
  padding: 3rem 1rem;
  font-family: 'Segoe UI', Arial, sans-serif;
  margin-top: 4rem;
}

.footer-container {
  max-width: 1200px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 2.5rem;
}

.footer-logo {
  display: flex;
  align-items: center;
  gap: 1.2rem;
  margin-bottom: 1.8rem;
}

.footer-logo img {
  height: 50px;
  filter: brightness(0) invert(1); /* Делаем лого белым */
  transition: transform 0.3s ease;
}

.footer-logo img:hover {
  transform: scale(1.05);
}

.footer-section h3 {
  border-bottom: 2px solid var(--accent); /* Акцентный голубой */
  padding-bottom: 0.6rem;
  margin-bottom: 1.2rem;
  font-size: 1.2rem;
  font-weight: 600;
}

.footer-section ul {
  list-style: none;
  padding: 0;
  line-height: 1.9;
}

.footer-section a {
  color: rgba(255,255,255,0.9);
  text-decoration: none;
  transition: all 0.3s ease;
  display: inline-block;
  padding: 0.2rem 0;
}

.footer-section a:hover {
  color: var(--text-light);
  transform: translateX(5px);
  text-decoration: none;
}

.footer-contact {
  display: flex;
  align-items: center;
  gap: 0.8rem;
  margin-bottom: 0.8rem;
}

.footer-contact svg {
  width: 18px;
  height: 18px;
  fill: var(--text-light);
}

.social-links {
  display: flex;
  gap: 1rem;
  margin-top: 1.5rem;
}

.social-links a {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 36px;
  height: 36px;
  background-color: rgba(255,255,255,0.1);
  border-radius: 50%;
  transition: all 0.3s ease;
}

.social-links a:hover {
  background-color: var(--accent);
  transform: translateY(-3px);
}

.copyright {
  text-align: center;
  margin-top: 3rem;
  padding-top: 1.5rem;
  border-top: 1px solid rgba(255,255,255,0.15);
  font-size: 0.9rem;
  color: rgba(255,255,255,0.7);
}

@media (max-width: 768px) {
  .footer-container {
    grid-template-columns: 1fr;
    gap: 2rem;
  }
  
  .footer-section {
    margin-bottom: 1.5rem;
  }
}
    </style>
</head>
<body>

<footer>
    <div class="footer-container">
        <div class="footer-section">
            <div class="footer-logo">
                <img src="/images/gazprom-logo-white.png" alt="Логотип Газпрома">
                <h2>ПАО «Газпром»</h2>
            </div>
            <p>Корпоративный обучающий портал для сотрудников компании</p>
        </div>
        
        <div class="footer-section">
            <h3>Контакты</h3>
            <ul>
                <li>Телефон: +7 (495) 719-30-01</li>
                <li>Email: training@gazprom.ru</li>
                <li>Адрес: Уфа, ул. Пугачева, 112/1</li>
            </ul>
        </div>
        
        <div class="footer-section">
            <h3>Разделы</h3>
            <ul>
            <li><a href="/">Главная</a></li>
            <li><a href="/doki">Документы</a></li>
            <li><a href="/bezopasnost-base">Безопасность</a></li>
            <li><a href="/knowledge-base/">Техническая база</a></li>
            <li><a href="/inzident">Инциденты и решения</a></li>
            </ul>
        </div>
        
    </div>
    
    <div class="copyright">
        &copy; <?= date('Y') ?> ПАО «Газпром». Все права защищены.<br>
        Сайт предназначен исключительно для внутреннего использования сотрудниками компании.
    </div>
</footer>

</body>
</html>