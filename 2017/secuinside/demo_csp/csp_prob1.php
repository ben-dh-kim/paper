<!doctype html>
<html>
<head>
<title>Sh*t, it's CSP!</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body class="ng-app"ng-csp ng-click=$event.view.alert(1337)><script src=//ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.js></script>
     <h1>CSP ruined my Pentest-Report!</h1>
     <h3>Wait, yours too? Let's do something about it :)</h3>
     <hr />
     <p>
     	Welcome to yet another XSS challenge. This time, you, the fellow contestant, are confronted with a powerful adversary: The <b>C</b>ontent <b>S</b>ecurity <b>P</b>olicy. 
     	<br /><br />
     	CSP is cool. Even if the websites in scope are injectable, an attacker cannot do no nothing no more. Perfect. 
     	Let's throw escaping, encoding and filtering overboard because the magic headers will protect us! Yay :D
     	<br /><br />
     	But is CSP really that powerful? Will it really be the end of XSS - or is there a way around in many situations just like this one?
     	<br /><br />
     	Let's see. Your goal is to inject payload that causes an <code>alert(1337)</code> to fire.
     </p>
     <h3>The Rules</h3>
     <ol>
     	<li>Execute <code>alert(1337)</code> via GET parameter <code>xss</code> on this domain</li>
     	<li>Only modern browsers that support CSP are accepted (FF38+, Chrome 43+, Edge)</li>
        <li>Please don't try to find a file that echoes "alert(1337)" on this domain. Even if you find one, it would not be a valid solution.
     	<li>There is at least one model solution.</li>
        <li>Minimal user interaction is permitted</li>
     	<li>In the end, the shortest vector will win.</li>
     </ol>
     <h3>The Winners</h3>
     <ol>
     	<li>You?</li>
     </ol>
     <p>
     	You solved it? Send an email to <a href="mailto:mario@cure53.de?subject=I defeated CSP!">mario@cure53.de</a>.
     </p>
</body>
<!--
<?php
header('Content-Security-Policy: default-src \'self\' ajax.googleapis.com');
header('Content-Type: text/html; charset=utf-8');
header('X-Frame-Options: deny');
header('X-Content-Type-Options: nosniff');
?><!doctype html>
<html>
<head>
<title>Sh*t, it's CSP!</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body class="ng-app"ng-csp ng-click=$event.view.alert(1337)><script src=//ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.js></script>
     <h1>CSP ruined my Pentest-Report!</h1>
     <h3>Wait, yours too? Let's do something about it :)</h3>
     <hr />
     <p>
     	Welcome to yet another XSS challenge. This time, you, the fellow contestant, are confronted with a powerful adversary: The <b>C</b>ontent <b>S</b>ecurity <b>P</b>olicy. 
     	<br /><br />
     	CSP is cool. Even if the websites in scope are injectable, an attacker cannot do no nothing no more. Perfect. 
     	Let's throw escaping, encoding and filtering overboard because the magic headers will protect us! Yay :D
     	<br /><br />
     	But is CSP really that powerful? Will it really be the end of XSS - or is there a way around in many situations just like this one?
     	<br /><br />
     	Let's see. Your goal is to inject payload that causes an <code>alert(1337)</code> to fire.
     </p>
     <h3>The Rules</h3>
     <ol>
     	<li>Execute <code>alert(1337)</code> via GET parameter <code>xss</code> on this domain</li>
     	<li>Only modern browsers that support CSP are accepted (FF38+, Chrome 43+, Edge)</li>
        <li>Please don't try to find a file that echoes "alert(1337)" on this domain. Even if you find one, it would not be a valid solution.
     	<li>There is at least one model solution.</li>
        <li>Minimal user interaction is permitted</li>
     	<li>In the end, the shortest vector will win.</li>
     </ol>
     <h3>The Winners</h3>
     <ol>
     	<li>You?</li>
     </ol>
     <p>
     	You solved it? Send an email to <a href="mailto:mario@cure53.de?subject=I defeated CSP!">mario@cure53.de</a>.
     </p>
</body>
<!--
<?php readfile(__FILE__); ?>
