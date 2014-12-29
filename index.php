<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script src="js/libs/angular.js/angular.js"></script>
        <title></title>
    </head>
    <body>
        <?php
            echo "php generated";
        ?>
        <div data-ng-app="">
            <input type="text" data-ng-model="name" />
            <p data-ng-bind="name"></p>
        </div>
    </body>
</html>
