<?php

namespace At\Theme\Resolver;

use At\Theme\Helper\ServerRequestHelper;

/**
 * Class HttpRequestResolver
 * @package Application\Theme\Resolver
 */
class HttpRequestResolver implements ResolverInterface
{
    const THEME_PARAM_NAME = 'tmpl';

    /**
     * @var ServerRequestHelper
     */
    protected $requestHelper;

    /**
     * HttpRequestResolver constructor.
     * @param ServerRequestHelper $helper
     */
    public function __construct(ServerRequestHelper $helper)
    {
        $this->requestHelper = $helper;
    }

    /**
     * @return mixed|\Zend\Stdlib\ParametersInterface
     */
    public function resolve()
    {
        parse_str($this->requestHelper->getUri()->getQuery(self::THEME_PARAM_NAME));

        if (isset(${self::THEME_PARAM_NAME})) {
            return ${self::THEME_PARAM_NAME};
        }
    }
}