<?php
    /**
     * Main Controller
     * 
     * @package     MagicPHP
     * @author      André Henrique da Rocha Ferreira <andrehrf@gmail.com>
     * @copyright   Copyright (c) 2013, T&M Network, Inc.
     * @link        https://github.com/andrehrf/magicphp MagicPHP(tm)
     * @license     MIT License (http://www.opensource.org/licenses/mit-license.php)
     */

    require_once(__DIR__ . DIRECTORY_SEPARATOR . "bootstrap.php");
    Bootstrap::Start();
    Bootstrap::AutoLoad("settings");
    Routes::Parse();   