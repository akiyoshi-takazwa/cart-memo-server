<?php

namespace Packages\Domain\User;

class User
{
    /**
     * @var string
     */
    private $password;

    /**
     * GoogleCalendar constructor.
     * @param string $password
     */
    public function __construct(string $password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
}
