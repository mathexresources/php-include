<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.html'; ?>
    <h1>PHP - Include</h1>
    <h2>Include</h2>
    <ul>
        <li>&#60;?php include 'filename'; ?&#62;</li>
        <li>Vloží soubor na lokaci Include</li>
        <li>Může se jednat o HTML, PHP, text</li>
        <li>Užitečné pokud se mi na několika místech opakuje jeden kod/text</li>
        <li>V praxi se využívá především u navigace, hlavičky, patičky</li>
    </ul>
    <h2>Příklady</h2>
    <h3>index.php</h3>
    <pre>
        &#60;!DOCTYPE html&#62;
        &#60;html lang="en"&#62;
            &#60;head&#62;
                &#60;title&#62;Document&#60;/title&#62;
            &#60;/head&#62;
            &#60;body&#62;
                &#60;h1&#62;Header&#60;/h1&#62;
                &#60;p&#62;Text&#60;/p&#62;
                &#60;?php include 'footer.php'; ?&#62;
            &#60;/body&#62;
        &#60;/html&#62;
    </pre>
    <h3>footer.html</h3>
    <pre>
        &#60;div class="footer"&#62;
            &#60;ul&#62;
                &#60;li&#62;&#60;a&#62; href="#"&#62;Home&#60;/a&#62;&#60;/li&#62;
                &#60;li&#62;&#60;a&#62; href="#"&#62;About&#60;/a&#62;&#60;/li&#62;
                &#60;li&#62;&#60;a&#62; href="#"&#62;Support&#60;/a&#62;&#60;/li&#62;
                &#60;li&#62;&#60;a&#62; href="#"&#62;Contact&#60;/a&#62;&#60;/li&#62;
            &#60;/ul&#62;
            &#60;p&#62; Copyright 1999- &#60;?= date("Y") ?> Name&#60;/p&#62;
        &#60;/div&#62;
    </pre>
    <h2>Include VS Require</h2>
    <p>Include a Require se chovají identicky dokud nedojde na errory</p>
    <ul>
        <li><b>require</b> fatální error, script se nespustí.</li>
        <li><b>include</b> pouze vypíše varování, spustí se normálně.</li>
    </ul>
    <h2>Relativní adresy</h2>
    <p>Relativní adresu například obrázku vždy dáváme z adresy stránky na které máme příkaz include, né přímo ze souboru</p>
    <p>Například</p>
    <pre>
    index.html
    components/
        footer.php
        img.php
    </pre>
    <h3>index.php</h3>
    <pre>
        &#60;!DOCTYPE html&#62;
        &#60;html lang="en"&#62;
            &#60;head&#62;
                &#60;title&#62;Document&#60;/title&#62;
            &#60;/head&#62;
            &#60;body&#62;
                &#60;h1&#62;Header&#60;/h1&#62;
                &#60;p&#62;Text&#60;/p&#62;
                &#60;?php include 'footer.php'; ?&#62;
            &#60;/body&#62;
        &#60;/html&#62;
    </pre>
    <h3>footer.php</h3>
    <pre>
        &#60;div class="footer"&#62;
            &#60;ul&#62;
                &#60;li&#62;&#60;a&#62; href="#"&#62;Home&#60;/a&#62;&#60;/li&#62;
                &#60;li&#62;&#60;a&#62; href="#"&#62;About&#60;/a&#62;&#60;/li&#62;
                &#60;li&#62;&#60;a&#62; href="#"&#62;Support&#60;/a&#62;&#60;/li&#62;
                &#60;li&#62;&#60;a&#62; href="#"&#62;Contact&#60;/a&#62;&#60;/li&#62;
            &#60;/ul&#62;
            &#60;p&#62; Copyright 1999- &#60;?= date("Y") ?> Name&#60;/p&#62;
        &#60;/div&#62;
    </pre>
    <?php include 'footer.php'; ?>
</body>
</html>
