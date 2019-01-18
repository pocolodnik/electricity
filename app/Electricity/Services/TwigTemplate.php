<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 18.01.19
 * Time: 4:27
 */

namespace Electricity\Services;


use Electricity\Services\Persistence\NotFoundExeption;

class TwigTemplate
{
    const TEMP_PATH = 'app/templates';
    const CACHE_PATH = 'app/compilation_cache';

//    private $loader ;

//    public function __construct()
//    {
//        $this->loader = new \Twig_Loader_Filesystem(self::TEMP_PATH);
//    }
    /**
     * @param string $template
     * @param array $content
     * @return string
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function render($template,array $content)
    {
        try {
            $loader = new \Twig_Loader_Filesystem(self::TEMP_PATH);
            $twig = new \Twig_Environment($loader,[
                'cache' => self::CACHE_PATH,
                'auto_reload' => true
            ]);
            return $twig->render($template,$content);
        } catch (NotFoundExeption $e) {
            return "Sorry, the product not found";
        } catch (\Electricity\Services\SystemException $e) {
            $logger = DiContainer::getInstance()->make('Electricity\Services\Logger');
            $logger->debug($e->getMessage(), $e->getTrace());

            return "Oops, something went wrong, Our team is looking for solution";
        }
    }
}