// Загружаем новости из JSON
fetch('data/news.json')
    .then(response => response.json())
    .then(data => {
        const newsContainer = document.getElementById('news-container');
        data.news.forEach(item => {
            newsContainer.innerHTML += `
                <div class="news-item">
                    <h3>${item.title}</h3>
                    <p>${item.date}</p>
                    <p>${item.summary}</p>
                </div>
            `;
        });
    });

// Пример данных: /data/news.json