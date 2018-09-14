<?php namespace pepijnzegveld\Dp8TestServices;

/**
 * Class TokenService
 *
 * @package pepijnzegveld\Dp8TestServices
 */
class TokenService
{
    /** @var string */
    private $tokenChars = '';

    /** @var string */
    private $token = '';

    /**
     * TokenService constructor.
     */
    public function __construct()
    {
        $this->tokenChars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $this->tokenChars .= "abcdefghijklmnopqrstuvwxyz";
        $this->tokenChars .= "0123456789";
    }

    /**
     * Generates a cryptographically safe random string with a given length
     * Returns `null` on error
     *
     * @param int $length Length of the token to generate
     *
     * @return string|null
     */
    public function generateToken($length = 64)
    {
        $charCount = strlen($this->tokenChars);

        try {
            for ($i = 0; $i < $length; $i++) {
                $this->token .= $this->tokenChars[random_int(0, $charCount - 1)];
            }
        } catch (\Exception $e) {
            echo '<pre>' . print_r($e->getMessage(), true) . '</pre>';

            return null;
        }

        return $this->token;
    }

    /* GETTERS // SETTERS */
    /**
     * @param $string
     */
    public function setTokenChars($string)
    {
        $this->tokenChars = $string;
    }
}
