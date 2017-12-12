<?php
    /**
     * Created by PhpStorm.
     * User: GABRIEL
     * Date: 1/14/2017
     * Time: 1:08 PM
     */

function flash($msg, $type = 'info')
{
    session()->flash('flash_msg', $msg);
    session()->flash('flash_msg_type', $type);
}