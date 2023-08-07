
<?php

class Auth
{
    public static function isValid($apiKey)
    {
        $validKeys = ["abc123", "123abc", "qwerty"];
        return in_array($apiKey, $validKeys);
    }
}
