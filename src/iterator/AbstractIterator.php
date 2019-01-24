<?php
/**
 * Created by PhpStorm.
 * User: cristian.coelho
 * Date: 24/01/19
 * Time: 10:11
 */

namespace Forseti\Bot\Sesc\iterator;


use Symfony\Component\DomCrawler\Crawler;

abstract class AbstractIterator implements ForsetiIterator
{
    protected $iterator;

    public function __construct($html, $xpath)
    {
        $crawler = new Crawler();
        $crawler->addHtmlContent($html);
        $this->iterator = $crawler->filter($xpath)->getIterator();
    }

    public function next()
    {
        $this->iterator->next();
    }


    public function key()
    {
        return $this->iterator->key();
    }


    public function valid()
    {
        return $this->iterator->valid();
    }


    public function rewind()
    {
        $this->iterator->valid();
    }


    public function count()
    {
        return $this->iterator->count();
    }



}