<?php
namespace Breadlesscode\LocalizedDate\Eel\Helper;

use Neos\Flow\Annotations as Flow;
use Neos\Eel\ProtectedContextAwareInterface;

class LocalizedDateHelper implements ProtectedContextAwareInterface {
    /**
     * @Flow\InjectConfiguration(path="defaultLocale", package="Breadlesscode.LocalizedDate")
     * @var string
     */
    protected $defaultLocale = null;
    /**
     * Wrap the incoming string in curly brackets
     *
     * @param \DateTime $date
     * @return string
     */
    public function format(\Datetime $date, $format, $locale = null) {
        $locale = $locale ?: $this->defaultLocale;
        $currentLocale = setlocale(LC_TIME, 0);

        if($locale !== null) {
            setlocale(LC_TIME, $locale);
        }

        $formatedDate = utf8_encode(strftime($format, $date->getTimestamp()));

        if($locale !== null) {
            setlocale(LC_TIME, $currentLocale);
        }

        return $formatedDate;
    }

    /**
     * All methods are considered safe, i.e. can be executed from within Eel
     *
     * @param string $methodName
     * @return boolean
     */
    public function allowsCallOfMethod($methodName) {
            return TRUE;
    }

}
