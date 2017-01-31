<?php

namespace App\Models;

interface HasEmail
{
    /**
     * Методб возвращающий адрес e-mail
     * @deprecated 
     * @return string Адрес электронной почты
     */
    public function getEmail();
}