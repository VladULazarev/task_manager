<?php

namespace Core;

trait Validator
{

    /** @var pattern for name */
    private static $namePattern = '/^[\w. \-]+$/u';

    /** @var pattern for email */
    private static $emailPattern = '/^[\w.\-]+@[\w.\-]+\.[A-Za-z]{2,6}$/';

    /** @var pattern for password */
    private static $passwordPattern = '/^[\w\-]{6,16}$/';

    /**
     * Checks user's name
     * @param string $name The user's name
     */
    public static function checkName(string $name): int
    {
        return preg_match(self::$namePattern, trim($name));
    }

    /**
     * Checks the email
     * @param string $email The email address
     */
    public static function checkEmail(string $email): int
    {
        return preg_match(self::$emailPattern, trim($email));
    }

    /**
     * Checks the password
     * @param string $password The user's password
     */
    public static function checkPassword(string $password): int
    {
        return preg_match(self::$passwordPattern, trim($password));
    }

    /**
     * Checks the length of a string
     * @param string $text A string
     * @param int $length Desired length of the string
     * @return boolean True if length is OK, otherwise false
     */
    public static function checkLength(string $text, $length): bool
    {
        return mb_strlen(trim($text)) > 2 && mb_strlen(trim($text)) <= $length;
    }
}
