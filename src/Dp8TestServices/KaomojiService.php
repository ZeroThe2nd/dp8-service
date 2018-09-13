<?php namespace pepijnzegveld\Dp8TestServices;

/**
 *
 */
class KaomojiService
{

    /** @var array */
    private $kaomojis = [
        "\(^Д^)/",
        "(·.·)",
        "(˚Δ˚)b",
        "(·_·)",
        "(^_^)b",
        "(>_<)",
        "(o^^)o",
        "(;-;)",
        "(≥o≤)",
        "\(o_o)/",
        "(^-^*)",
        "(='X'=)",
    ];

    /**
     * Returns a random Kaomoji from a pre-defined array
     *
     * @throws \Exception
     * @return string
     */
    public function getKaomoji()
    {
        $kaomojiCount = count($this->kaomojis);
        if ($kaomojiCount < 1) {
            throw new \Exception('No Kaomoji defined.');
        }

        return $this->kaomojis[rand(0, $kaomojiCount)];
    }
}
