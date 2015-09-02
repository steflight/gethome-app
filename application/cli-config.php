<?php
/**
 * Created by PhpStorm.
 * User: developpeur
 * Date: 26/08/2015
 * Time: 11:56
 */


define('APPPATH', dirname(__FILE__) . '/');
define('BASEPATH', APPPATH . '/../system/');
define('ENVIRONMENT', 'development');

chdir(APPPATH);

require __DIR__ . '/libraries/Doctrine.php';

foreach ($GLOBALS as $helperSetCandidate) {
    if ($helperSetCandidate instanceof \Symfony\Console\Helper\HelperSet) {
        $helperSet = $helperSetCandidate;
        break;
    }
}

$doctrine = new Doctrine;
$em = $doctrine->em;

$helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
    'db' => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($em->getConnection()),
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($em)
));

\Doctrine\ORM\Tools\Console\ConsoleRunner::run($helperSet);