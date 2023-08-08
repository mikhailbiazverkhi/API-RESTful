
<?php

class Auth
{
    public static function isValid($apiKey)
    {
        $validKeys = //la liste des "apiKeys"
        ["user_key", "admin_key"];

        return in_array($apiKey, $validKeys);
    }
}
