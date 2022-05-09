<?php
require_once 'header.php';
echo '<body>';
require_once 'nav.php';

$container='
<!--CONTAINER STARTS-->


<div class="container">
    <div id="section1" class="container-fluid">
        <h4>WEB Details:</h4>
        <div>
            &nbsp; &nbsp; 1. Appache\Conf\httpd.conf. <br>
            &nbsp; &nbsp; 2. MYSQL\my.ini. <br>
            &nbsp; &nbsp; 3. PHP\php.ini, PHP\phpForApache.ini, FILE_PATH. <br>
        </div>

        <h4>git Basics:</h4>
        <div>
            &nbsp; &nbsp; 1. git clone : new repository. <br>
            &nbsp; &nbsp; 2. git add: untacked files. <br>
            &nbsp; &nbsp; 3. commit -m"Message": locally commit. <br>
            &nbsp; &nbsp; 4. git push : push to cloud your all commits.
        </div>


        <h4>git - Composer - Bitbucket: {merge with next}</h4>
        <div>
            &nbsp; &nbsp; 1. git clone git url from bitbucket. <br>
            &nbsp; &nbsp; 2. Run composer install inside project directory. <br>
            &nbsp; &nbsp; 3. Create virtual host on wampp. <br>
        </div>

        <h4>Personal Login</h4>
        <div>
            &nbsp; &nbsp; 1. Infotech Email: - infotech@navnirmitieduquality.org <br>
            &nbsp; &nbsp; 2. LinkedIn: - christoemail@yahoo.com <br>
            &nbsp; &nbsp; 3. Face Book: - christoemail@yahoo.com <br>
            &nbsp; &nbsp; 4. Gmail: - christosahaya1234@gmail.com <br>
            &nbsp; &nbsp; 5. Yahoo: - christoemail@yahoo.com <br>
            &nbsp; &nbsp; 6. Zoho: - infotech@navnirmitieduquality.org <br>

        </div>
    </div>
</div>


<!--CONTAINER ENDS-->';

echo $container;
require_once 'footer.php';
