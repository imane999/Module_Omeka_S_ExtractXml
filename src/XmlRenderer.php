<?php

namespace XmlEmbed;

use Omeka\Api\Representation\MediaRepresentation;
use Omeka\Media\FileRenderer\RendererInterface;
use Zend\View\Renderer\PhpRenderer;

class XmlRenderer implements RendererInterface
{
    public function render(PhpRenderer $view, MediaRepresentation $media, array $options = [])
    {
        return sprintf(
            '<iframe src="%s" style="width: 100%%; height: 600px;" allowfullscreen></iframe>',
            $view->escapeHtml($media->originalUrl())
        );
    }

    function Extract_Xml ()
    {

    	$fichier = 'fichier_xml.xml';
		$xml = simplexml_load_file($fichier);

		print_r($xml);

// Va afficher:
		SimpleXMLElement Object
		(
   				 [personne] => Array
        (
            [0] => SimpleXMLElement Object
                (
                    [nom] => Adriana
                )
            [1] => SimpleXMLElement Object
                (
                    [nom] => Behati
                )
            [2] => SimpleXMLElement Object
                (
                    [nom] => Candice
                )
        )
)


		foreach($xml as $personne){
		echo $personne->nom.'<br>';	
    }
}
