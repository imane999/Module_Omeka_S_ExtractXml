<?php
return [
    'file_renderers' => [
        'invokables' => [
            'xml_embed' => 'XmlEmbed\XmlRenderer',
        ],
        'aliases' => [
            'application/pdf' => 'Xml_embed',
            'Xml' => 'Xml_embed',
        ],
    ],
];
