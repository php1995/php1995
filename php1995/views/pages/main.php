<?php require_once "public/blocks/head.html" ?>
</head>
<body>
<header>
    <div id="logo" onclick="slowScroll('#top')">
        <span>Victor Kaspersky &reg;</span>
    </div>
    <div id="about">
        <a href="" onclick="slowScroll('#contact')">Contacts</a>
        <a href="" onclick="slowScroll('#main')">Projects</a>
        <a href="" onclick="slowScroll('#main')">About me</a>
    </div>
</header>

<div id="top">
    <h1>Programing</h1>
    <h3>is like way to live</h3>
</div>

<div id="main">
    <div class="intro">
        <h2>Let`s develop, lazy ass!</h2>
        <span>or go watch stupid videos... https://youtube.com </span>
    </div>
    <div class="text">
        <span>
            Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem
            ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem
            ipsumLorem ipsumLorem ipsumLoremipsumLorem ipsumLorem ipsum
        </span>
    </div>
</div>
<?php require_once "public/blocks/overview.html" ?>
<?php require_once "public/blocks/contacts.html" ?>
<div id="professions">
    <div>
        <span lang="heading">Who are you?</span>
        <div class="profession_class"><span>WEB</span>
            <input type="radio" class="profession_item">Fullstack developer</input>
            <input type="radio" class="profession_item">Frontend developer</input>
            <input type="radio" class="profession_item">Backend developer</input>
        </div>

        <div class="profession_class"><span>Mobile</span>
            <input type="radio" class="profession_item">IOS developer</input>
            <input type="radio" class="profession_item">Android developer</input>
        </div>

        <div class="profession_class"><span>Enterprise</span>
            <input type="radio" class="profession_item">Java developer</input>
            <input type="radio" class="profession_item">C# developer</input>
        </div>

        <div class="profession_class"><span>Game dev</span>
            <input type="radio" class="profession_item">C++ developer</input>
            <input type="radio" class="profession_item">C# developer</input>
        </div>
    </div>
</div>
</body>
</html>