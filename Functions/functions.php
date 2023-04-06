<?php

function setAlertMessage($message, $type = 'info')
{
    if (!in_array($type, ['info', 'success', 'warning', 'error'])) {
        throw new InvalidArgumentException('Invalid alert type');
    }
    if (!isset($_SESSION['alerts'])) {
        $_SESSION['alerts'] = [];
    }
    $_SESSION['alerts'][] = [
        'type' => $type,
        'message' => $message
    ];
}

function getAlertMessages()
{
    if (isset($_SESSION['alerts'])) {
        $messages = $_SESSION['alerts'];
        unset($_SESSION['alerts']);
        return $messages;
    }
    return [];
}

// setAlertMessage('Ошибка! Неверный логин или пароль.', 'error');
$messages = getAlertMessages();
foreach ($messages as $alert) {
    echo '<div class="alert alert-' . $alert['type'] . '">' . $alert['message'] . '</div>';
}

function debbug($array)
{
    echo "<pre>";
    print_r($array);
    echo "<pre>";
    exit;
}




?>

