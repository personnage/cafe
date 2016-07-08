<?php

namespace App\Models\Contracts;

interface Confirmable
{
    /**
     * Get the e-mail address where confirmation links are sent.
     *
     * @return string
     */
    public function getEmailForConfirmation();
}
