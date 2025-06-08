<?php 
$page_title = "Полный глоссарий терминов системного администратора";
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
    .term-spacer {
    height: 30px; /* или любое другое значение по вашему усмотрению */
    width: 100%;
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
    <h2>Введение в терминологию</h2>
    <p>Системное администрирование - это сложная профессиональная область с собственной терминологией. Данный глоссарий содержит более 50 ключевых терминов, которые должен знать каждый системный администратор, работающий в корпоративной среде, особенно в нефтегазовой отрасли.</p>

    <h2>Основные термины системного администрирования</h2>
    
    <div class="term-list">
        <!-- Сетевые технологии -->
        <div class="term-item">
            <div class="term-name">Active Directory - это служба каталогов от Microsoft, представляющая собой распределенную иерархическую базу данных, которая используется для централизованного управления пользователями, компьютерами, принтерами и другими сетевыми ресурсами в доменной среде Windows. AD обеспечивает аутентификацию и авторизацию пользователей, применяет групповые политики (GPO), организует единый вход (SSO) и позволяет администраторам эффективно управлять большими корпоративными сетями. В нефтегазовых компаниях AD часто интегрируется с промышленными системами управления для обеспечения безопасного доступа.</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <div class="term-item">
            <div class="term-name">DNS - это распределенная система преобразования удобных для человека доменных имен (например, gazprom.ru) в машиночитаемые IP-адреса. DNS работает по иерархической схеме с корневыми серверами, серверами доменов верхнего уровня и авторитативными серверами отдельных доменов. Системные администраторы должны уметь настраивать DNS-серверы (BIND, Windows DNS), создавать и управлять DNS-зонами (прямыми и обратными), настраивать записи (A, AAAA, MX, CNAME и др.), а также устранять проблемы разрешения имен.</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <div class="term-item">
            <div class="term-name">DHCP - это сетевой протокол, который автоматически назначает IP-адреса и другие сетевые параметры (маску подсети, шлюз по умолчанию, DNS-серверы) устройствам в сети. DHCP работает по модели клиент-сервер и использует четыре этапа взаимодействия (DISCOVER, OFFER, REQUEST, ACK). Администраторы должны уметь настраивать DHCP-серверы, создавать и управлять областями (scopes), резервировать адреса для критичных устройств, а также устранять конфликты IP-адресов.</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <div class="term-item">
            <div class="term-name">VPN - это технология создания защищенных частных сетевых соединений через публичные сети (например, интернет). VPN использует шифрование (IPsec, SSL/TLS) и туннелирование для обеспечения конфиденциальности и целостности передаваемых данных. В корпоративной среде используются различные типы VPN: Remote Access VPN для удаленных сотрудников, Site-to-Site VPN для соединения филиалов, SSL VPN для безопасного доступа к веб-приложениям. В нефтегазовых компаниях часто применяются специализированные VPN-решения для защиты данных при работе на удаленных объектах.</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <div class="term-item">
            <div class="term-name">LAN (Local Area Network) - это локальная вычислительная сеть, ограниченная небольшим географическим пространством (офис, здание, кампус). WAN (Wide Area Network) - это глобальная сеть, соединяющая географически распределенные локации. LAN характеризуются высокой скоростью передачи данных (1-100 Гбит/с), использованием Ethernet-технологий и относительно низкой стоимостью. WAN используют арендованные линии, MPLS, VPN и другие технологии для соединения удаленных узлов, имеют более высокую задержку и стоимость передачи данных.</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <div class="term-item">
            <div class="term-name">VLAN - это технология логической сегментации сети на уровне коммутаторов, позволяющая создавать изолированные широковещательные домены независимо от физической топологии. VLAN повышают безопасность, улучшают управление трафиком и упрощают администрирование крупных сетей. Администраторы должны уметь настраивать VLAN на коммутаторах (тегирование 802.1Q), настраивать магистральные (trunk) и абонентские (access) порты, а также организовывать маршрутизацию между VLAN (router-on-a-stick).</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <div class="term-item">
            <div class="term-name">NAT - это технология преобразования сетевых адресов, позволяющая устройствам в частной сети (RFC 1918) получать доступ к ресурсам в интернете через один или несколько публичных IP-адресов. Основные типы NAT: Static NAT (статическое преобразование), Dynamic NAT (динамический пул адресов), PAT/NAPT (преобразование портов). NAT повышает безопасность (скрывает внутреннюю структуру сети) и экономит публичные IP-адреса. В современных сетях часто используется в сочетании с межсетевыми экранами.</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <div class="term-item">
            <div class="term-name">QoS - это набор технологий управления сетевым трафиком, обеспечивающий приоритезацию критически важных данных (голос, видео) перед менее важным трафиком. QoS использует механизмы классификации (DSCP, 802.1p), маркировки, очередей (FIFO, PQ, CQ, WFQ), ограничения скорости (policing, shaping) и предотвращения перегрузок (RED, WRED). Особенно важен в конвергентных сетях, где передаются данные разного типа с различными требованиями к задержке и джиттеру.</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <!-- Безопасность -->
        <div class="term-item">
            <div class="term-name">SIEM - это класс систем для сбора, анализа, корреляции и визуализации данных о событиях безопасности из различных источников (журналы, сетевые устройства, конечные точки). SIEM позволяет выявлять кибератаки, подозрительную активность и соответствие требованиям регуляторов. Популярные решения: Splunk, IBM QRadar, ArcSight, Microsoft Sentinel. В нефтегазовой отрасли SIEM часто являются обязательным компонентом системы защиты критической информационной инфраструктуры.</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <div class="term-item">
            <div class="term-name">IDS (система обнаружения вторжений) и IPS (система предотвращения вторжений) - это решения для мониторинга сетевого трафика или активности хостов с целью выявления и блокирования атак. IDS работают в пассивном режиме (только обнаружение), IPS - в активном (блокировка). Различают сетевые (NIDS/NIPS) и хостовые (HIDS/HIPS) системы. Используют сигнатурный анализ (известные атаки) и аномалий (отклонения от нормального поведения). В промышленных сетях требуют особой настройки, чтобы не нарушить работу критических систем.</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <div class="term-item">
            <div class="term-name">DMZ (Demilitarized Zone) - буферная зона между внутренней и внешней сетями</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <div class="term-item">
            <div class="term-name">2FA/MFA (Two/Multi-Factor Authentication) - двух/многофакторная аутентификация</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <div class="term-item">
            <div class="term-name">PKI (Public Key Infrastructure) - инфраструктура открытых ключей</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <!-- Системное администрирование -->
        <div class="term-item">
            <div class="term-name">RAID (Redundant Array of Independent Disks) - отказоустойчивый массив дисков</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <div class="term-item">
            <div class="term-name">High Availability (HA) - высокая доступность систем</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <div class="term-item">
            <div class="term-name">Load Balancing - балансировка нагрузки</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <div class="term-item">
            <div class="term-name">Backup/Disaster Recovery - резервное копирование/аварийное восстановление</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <div class="term-item">
            <div class="term-name">Patching - установка обновлений безопасности</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <div class="term-item">
            <div class="term-name">GPO (Group Policy Object) - групповые политики в Active Directory</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <div class="term-item">
            <div class="term-name">SSO (Single Sign-On) - единый вход в системы</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <div class="term-item">
            <div class="term-name">LDAP (Lightweight Directory Access Protocol) - протокол доступа к службам каталогов</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <!-- Виртуализация и облака -->
        <div class="term-item">
            <div class="term-name">Hypervisor - программное обеспечение для виртуализации</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <div class="term-item">
            <div class="term-name">IaaS/PaaS/SaaS= - модели облачных сервисов</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <div class="term-item">
            <div class="term-name">Containerization - технология контейнеризации приложений</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <div class="term-item">
            <div class="term-name">Kubernetes - система оркестрации контейнеров</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <!-- Мониторинг и управление -->
        <div class="term-item">
            <div class="term-name">SNMP (Simple Network Management Protocol) - протокол управления сетевыми устройствами</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <div class="term-item">
            <div class="term-name">Syslog - стандарт передачи логов</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <div class="term-item">
            <div class="term-name">ITSM (IT Service Management) - управление IT-услугами</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <div class="term-item">
            <div class="term-name">CMDB (Configuration Management Database) - база данных управления конфигурациями</div>
        </div>
    </div>

    <h2>Специальные термины нефтегазовой отрасли</h2>
    
    <div class="term-list">
        <div class="term-item">
            <div class="term-name">АСУ ТП (Автоматизированная Система Управления Технологическими Процессами)
            АСУ ТП - это комплекс аппаратных и программных средств для автоматизированного управления производственными процессами в реальном времени. Включает датчики, контроллеры (PLC), исполнительные механизмы, SCADA-системы и средства визуализации. Особенности администрирования: требования к отказоустойчивости, детерминированному времени отклика, длительному жизненному циклу оборудования, защите от киберугроз. Часто работают на специализированных ОС (QNX, VxWorks) и используют промышленные протоколы (Modbus, OPC UA).</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <div class="term-item">
            <div class="term-name">SCADA - это программно-аппаратные системы диспетчерского управления и сбора данных с распределенных промышленных объектов. Основные компоненты: RTU (удаленные терминальные устройства), телекоммуникационная инфраструктура, серверы сбора данных, HMI (интерфейсы оператора), исторические архивы. Современные SCADA-системы (WinCC, Ignition, ClearSCADA) поддерживают web-интерфейсы, облачную аналитику и интеграцию с корпоративными IT-системами. Требуют особых мер защиты из-за критичности управляемых процессов.</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <div class="term-item">
            <div class="term-name">МЭК 62443 - это международный стандарт безопасности промышленных систем управления и АСУ ТП. Состоит из серии документов, охватывающих все аспекты жизненного цикла защищенных систем: требования к компонентам, процессам проектирования, эксплуатации и аудита. Определяет уровни защиты (SL), зоны и каналы, требования к управлению доступом, обновлениям, мониторингу. В нефтегазовой отрасли является основным стандартом для сертификации защищенных промышленных систем.</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <div class="term-item">
            <div class="term-name">ГРИД - это специализированные системы для хранения, обработки и анализа геолого-геофизических данных (сейсмика, каротаж, моделирование месторождений). Характеризуются огромными объемами данных (петабайты), сложными вычислительными алгоритмами, требованиями к высокой производительности и отказоустойчивости. Используют кластерные файловые системы (Lustre, GPFS), системы управления распределенными вычислениями (Hadoop, Spark), специализированное ПО для интерпретации данных (Petrel, Eclipse).</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <div class="term-item">
            <div class="term-name">PLC - это программируемый логический контроллер, специализированный компьютер для автоматизации промышленных процессов. Отличается высокой надежностью, детерминированным временем отклика, устойчивостью к harsh-условиям (температура, вибрация, EMI). Программируется на языках МЭК 61131-3 (LD, FBD, SFC, ST, IL). Основные производители: Siemens (S7), Rockwell (ControlLogix), Schneider (Modicon). Администрирование включает программирование, конфигурирование сетевых интерфейсов (Profinet, EtherNet/IP), диагностику и обновление firmware.</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <div class="term-item">
            <div class="term-name">HMI - это интерфейсы оператора технологического оборудования, обеспечивающие визуализацию процессов и управление ими. Современные HMI представляют собой сенсорные панели или программные решения (WinCC Flexible, FactoryTalk View) с возможностями тревожной сигнализации, трендов, рецептурного управления. Интегрируются с SCADA и MES-системами. Требования: интуитивность, отказоустойчивость, контекстно-зависимая помощь, защита от ошибочных действий оператора.</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <div class="term-item">
            <div class="term-name">OT - это операционные технологии, включающие аппаратные и программные средства для мониторинга и управления физическими устройствами, процессами и событиями на промышленных предприятиях. В отличие от IT, OT ориентированы на надежность и безопасность процессов, а не данных. Основные компоненты: ICS, SCADA, DCS, PLC, сенсоры и исполнительные механизмы. Современный тренд - конвергенция IT и OT с сохранением требований к кибербезопасности и отказоустойчивости.</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <div class="term-item">
            <div class="term-name">IIoT - это промышленный интернет вещей, сеть подключенных устройств (датчики, контроллеры, машины) с возможностями сбора, обмена и анализа данных для оптимизации производственных процессов. В нефтегазовой отрасли применяется для мониторинга трубопроводов (утечки, коррозия), прогнозного обслуживания оборудования, управления удаленными объектами. Технологии: промышленные протоколы (OPC UA, MQTT), edge computing, облачная аналитика, цифровые двойники.</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <div class="term-item">
            <div class="term-name">DCS - это распределенная система управления для сложных технологических процессов (нефтепереработка, химическое производство). Состоит из множества локальных контроллеров, соединенных высоконадежной сетью, с централизованным мониторингом и управлением. Отличается от SCADA большей степенью распределенности и интеграции функций управления. Популярные платформы: Yokogawa Centum VP, Emerson DeltaV, Honeywell Experion. Требует глубоких знаний технологических процессов для эффективного администрирования.</div>
        </div>
        
        <div class="term-spacer"></div>
        
        <div class="term-item">
            <div class="term-name">RTU - это удаленный терминальный блок, микроконтроллерное устройство для сбора данных и управления оборудованием на распределенных промышленных объектах (кусты скважин, компрессорные станции). Отличается от PLC упрощенной логикой, но большей автономностью и устойчивостью к экстремальным условиям. Обеспечивает сбор телеметрии, локальное управление, связь с центром (радио, GSM, спутник). Современные RTU поддерживают программируемую логику, веб-интерфейсы и киберзащиту.</div>
        </div>
    </div>
</div>

            <h2>Тест на знание терминологии</h2>
            
            <div class="test-container">
                <form id="termsTest">
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Какая технология используется для логической изоляции сетевых сегментов?</strong></p>
                        <input type="text" id="q1_answer" class="text-answer" placeholder="Введите термин">
                        <input type="hidden" id="correct_q1" value="VLAN">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. Какие из перечисленных систем относятся к промышленным? (Выберите 3 варианта)</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2a" value="a">
                                <label for="q2a">SCADA</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2b" value="b">
                                <label for="q2b">Active Directory</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2c" value="c">
                                <label for="q2c">DCS</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2d" value="d">
                                <label for="q2d">PLC</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q2" value="a,c,d">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Как называется база данных управления конфигурациями?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q3" id="q3a" value="a">
                                <label for="q3a">DNS</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3b" value="b">
                                <label for="q3b">CMDB</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3c" value="c">
                                <label for="q3c">SIEM</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q3" value="b">
                    </div>
                    
                    <!-- Вопрос 4 -->
                    <div class="question">
                        <p><strong>4. Для чего используется протокол SNMP?</strong></p>
                        <textarea id="q4_answer" class="text-answer" rows="3" placeholder="Опишите назначение протокола"></textarea>
                        <input type="hidden" id="correct_q4_keywords" value="управление,мониторинг,сетевые,устройства">
                    </div>
                    
                    <button type="button" onclick="checkTermsTest()">Проверить ответы</button>
                </form>
                
                <div id="testResults" class="results"></div>
            </div>
        </div>
    </div>
</article>

<script>
function checkTermsTest() {
    let score = 0;
    let resultsHTML = "<h3>Результаты теста:</h3><ol>";
    const keywordThreshold = 2; // Минимальное количество ключевых слов
    
    // Вопрос 1
    const q1Answer = document.getElementById('q1_answer').value.trim().toUpperCase();
    if (q1Answer === 'VLAN') {
        score++;
        resultsHTML += `<li class="correct">Вопрос 1: Верно! VLAN используется для логической изоляции сетевых сегментов.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 1: Неверно. Правильный ответ: VLAN.</li>`;
    }
    
    // Вопрос 2 (множественный выбор)
    const q2Selected = Array.from(document.querySelectorAll('input[name="q2"]:checked')).map(el => el.value).sort().join(',');
    const q2Correct = document.getElementById('correct_q2').value.split(',').sort().join(',');
    if (q2Selected === q2Correct) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 2: Правильно! SCADA, DCS и PLC - промышленные системы.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 2: Ошибка. SCADA, DCS и PLC относятся к промышленным системам.</li>`;
    }
    
    // Вопрос 3
    const q3Selected = document.querySelector('input[name="q3"]:checked');
    if (q3Selected && q3Selected.value === document.getElementById('correct_q3').value) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 3: Верно! CMDB - база данных управления конфигурациями.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 3: Неверно. Правильный ответ: CMDB.</li>`;
    }
    
    // Вопрос 4 (анализ ключевых слов)
    const q4Answer = document.getElementById('q4_answer').value.toLowerCase();
    const keywords = document.getElementById('correct_q4_keywords').value.split(',');
    let foundKeywords = keywords.filter(word => q4Answer.includes(word));
    
    if (foundKeywords.length >= keywordThreshold) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 4: Принято! Вы указали ключевые аспекты: ${foundKeywords.join(', ')}.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 4: Неполный ответ. SNMP используется для управления и мониторинга сетевых устройств.</li>`;
    }
    
    resultsHTML += `</ol><p><strong>Итоговый результат: ${score} из 4 (${Math.round(score/4*100)}%)</strong></p>`;
    document.getElementById('testResults').innerHTML = resultsHTML;
    document.getElementById('testResults').style.display = 'block';
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>