<?php
Yii::setAlias('@commands', dirname(dirname(__DIR__)) . '/console');
Yii::setAlias('@storage', dirname(dirname(__DIR__)) . '/storage');

$WebProtocol = $_SERVER['PROTOCOL'] = isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https' : 'http';

Yii::setAlias('@APP_NAME',env('APP_NAME'));

Yii::setAlias('@APP_NAME_P1',env('APP_NAME_P1'));
Yii::setAlias('@APP_NAME_P2',env('APP_NAME_P2'));

$WebSubDir=env('ENV_SUBDIR');
Yii::setAlias('@WebSubDir',$WebSubDir);
Yii::setAlias('@webUrl', $WebProtocol . "://" . $_SERVER['SERVER_NAME'] . $WebSubDir . "");
Yii::setAlias('@storageUrl', $WebProtocol . "://" . $_SERVER['SERVER_NAME'] . $WebSubDir . "/storage");
