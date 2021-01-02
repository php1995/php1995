<?php require_once "public/blocks/head.html" ?>
</head>
<body>
<header>
    <div id="logo" onclick="slowScroll('#top')">
        <span>Victor Kaspersky</span>
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
        <span>or go watch stupid videos on tic-tok</span>
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

<div id="contacts">
    <center><h5>Contact me</h5></center>
    <form id="form_input" action="main.php" method="post">

        <label for="about_you">Who are you?</label><span> *</span>
        <textarea rows="6" cols="50" placeholder="Write something about yourself" name="about_you"></textarea>
        <br>

        <label for="your_contacts">Leave your contacts!</label><span> *</span>
        <input type="text" placeholder="email, social networks etc.">
        <br>

        <div id="send" class="btn">Send message</div>
    </form>
</div>
</body>
</html>