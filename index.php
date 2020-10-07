<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&family=Yantramanav:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Document</title>
</head>
<body>
    <main id="app">
        <header class="mainHeader">
            <nav class="topNav">
                <div>
                    <img alt="Logo">
                    <img alt="dropdown button" @click="toggleNav()">
                </div>
                <ul>
                    <li><router-link :to="{path: '/'}" @click.native="toggleNav(); locationAbout()">About</router-link></li>
                    <li><router-link :to="{path: '/'}" @click.native="toggleNav(); locationWork()">Work</router-link></li>
                    <li><router-link :to="{path: '/'}" @click.native="toggleNav(); locationSkills()">Skills</router-link></li>
                    <li><router-link :to="{path: '/'}" @click.native="toggleNav(); locationContact()">Contact</router-link></li>
                </ul>
            </nav>
        </header>
        <div class="container mainCon">
            <router-view></router-view>
        </div>
    </main>
    <script src="https://unpkg.com/vue"></script>
    <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="../js/main.js" type="module"></script>
</body>
</html>