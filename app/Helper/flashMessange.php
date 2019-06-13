<?php

function flashMessageSuccess($message)
{
    \Session::flash('flash_message', json_encode([
        'class' => 'success',
        'message' => $message
    ]));
}

function flashMessageError($message)
{
    \Session::flash('flash_message', json_encode([
        'class' => 'danger',
        'message' => $message
    ]));
}

function flashMessageWarning($message)
{
    \Session::flash('flash_message', json_encode([
        'class' => 'warning',
        'message' => $message
    ]));
}