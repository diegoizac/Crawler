<?php
require_once 'simplehtmldom_1_9_1/simple_html_dom.php';
class Seminovos
{
    public function __construct()
    {
        $this->getSeminovos('https://seminovos.com.br/mitsubishi-l200-triton-hpe-3.2-cd-tb-int.diesel-aut-3.2-16v-4portas-2012--2636047');
    }
    public function getSeminovos($url)
    {
        $html = file_get_html($url);
        preg_match_all('/<h1 class="mb-0" itemprop="name">(.*?)<\/h1>/', $html, $modelo);
        echo 'Modelo ' . $modelo[0][0];
        preg_match_all('/<p class="desc">(.*?)<\/p>/', $html, $desc_modelo);
        echo 'Descrição do modelo ' . $desc_modelo[0][0];
        preg_match_all('/<img data-id="0" src=("|\'|)(.*?)("|\'| )(.*?)>/s', $html, $images);
        echo 'Foto do modelo </br>' . $images[0][0];
    }
}
$t = new Seminovos();
