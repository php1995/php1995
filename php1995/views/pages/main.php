<?php require_once "public/blocks/head.html" ?>
</head>
<body>
<header>
    <div id="logo" onclick="slowScroll('#top')">
        <span>Victor Kaspersky &reg;</span>
    </div>
    <div id="about">
        <a href="#contacts" onclick="slowScroll('#contacts')">Contacts</a>
        <a href="#professions" onclick="slowScroll('#main')">Professions</a>
        <a href="#overview" onclick="slowScroll('#main')">About me</a>
    </div>
</header>

<div id="top">
    <h1><?php echo htmlspecialchars("<h1>")?><span style="color: olivedrab">Programing</span><?php echo htmlspecialchars("</h1>")?></h1>
    <h3>is like way to live</h3>
</div>

<div id="main">
    <div class="intro">
        <h2>Let`s develop, lazy ass!</h2>
        <span>or still decreasing... https://tictok.com </span>
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
<?php require_once "public/blocks/professions.html" ?>
</body>
</html>