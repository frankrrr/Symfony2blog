<?php

/**
 * pluzUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class pluzUrlMatcher extends Symfony\Components\Routing\Matcher\UrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(array $context = array(), array $defaults = array())
    {
        $this->context = $context;
        $this->defaults = $defaults;
    }

    public function match($url)
    {
        $url = $this->normalizeUrl($url);

        if (preg_match('#^/$#x', $url, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'BlogBundle:Blog:index',)), array('_route' => 'homepage'));
        }

        if (0 === strpos($url, '/blog') && preg_match('#^/blog/(?P<blog_id>[^/\.]+?)$#x', $url, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'BlogBundle:Blog:view',)), array('_route' => 'blog_view'));
        }

        return false;
    }
}
