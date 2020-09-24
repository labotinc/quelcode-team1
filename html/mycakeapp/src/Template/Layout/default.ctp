<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<?php
echo $this->Html->css('stylesheet');
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>index</title>
    </head>
    <header>
        <div class="header-container">
            <p class="header-left"><span>QUEL</span> CINEMAS</p>
            <nav>
                <ul class="header-center">
                    <li><a href="#" class="header-top">トップ</a></li>
                    <li>
                        <a href="#" class="header-cinema">上映スケジュール</a>
                    </li>
                    <li><a href="#" class="header-pay">料金・割引</a></li>
                </ul>
            </nav>
            <nav class="header-right">
                <a href="#">ログイン</a>
            </nav>
        </div>
    </header>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
        <div class="footer-container">
            <p class="footer-left">QUEL CINEMAS</p>
            <ul class="footer-right">
                <li>
                    <a href="#" class="footer-top">トップ<span>|</span></a>
                </li>
                <li>
                    <a href="#" class="footer-cinema"
                        >上映スケジュール<span>|</span></a>
                </li>
                <li><a href="#" class="footer-pay">料金・割引</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>
