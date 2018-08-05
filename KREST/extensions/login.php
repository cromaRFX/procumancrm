<?php

/*
 * This File is part of KREST is a Restful service extension for SugarCRM
 * 
 * Copyright (C) 2015 AAC SERVICES K.S., DOSTOJEVSKÉHO RAD 5, 811 09 BRATISLAVA, SLOVAKIA
 * 
 * you can contat us at info@spicecrm.io
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
 */

$KRESTManager->registerExtension('login', '1.0');
$app->group('/login', function () use ($app, $KRESTManager) {
    $app->post('/', function () use ($app, $KRESTManager) {
        echo json_encode($KRESTManager->getLoginData());
        $KRESTManager->tmpSessionId = null;
    });
    $app->get('/', function () use ($app, $KRESTManager) {
        echo json_encode($KRESTManager->getLoginData());
    });
    $app->delete('/', function () use ($app, $KRESTManager) {
        session_destroy();
    });
});

require_once('KREST/handlers/user.php');

$KRESTUserHandler = new KRESTUserHandler($app);
$KRESTManager->registerExtension('forgotPassword', '1.0');
$KRESTManager->excludeFromAuthentication('/forgotPassword');
$app->group('/forgotPassword', function () use ($app, $KRESTManager, $KRESTUserHandler) {
    $app->post('/:email/:token', function ($email,$token) use ($app, $KRESTManager, $KRESTUserHandler) {
        echo json_encode($KRESTUserHandler->checkToken($email,$token));
    });
    $app->post('/resetPass', function () use ($app, $KRESTManager, $KRESTUserHandler) {
        $postBody = $body = json_decode($app->request->getBody(), true);
        echo json_encode($KRESTUserHandler->resetPass($postBody));
    });
    $app->get('/:email', function ($email) use ($app, $KRESTManager, $KRESTUserHandler) {
        echo json_encode($KRESTUserHandler->sendTokenToUser($email));
    });
    $app->delete('/', function () use ($app, $KRESTManager, $KRESTUserHandler) {
        session_destroy();
    });
});
