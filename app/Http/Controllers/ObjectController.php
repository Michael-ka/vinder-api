<?php

namespace App\Http\Controllers;

class ObjectController extends Controller
{
    public function getData($id = 0): array
    {
        $data = [
            1 => [
                'owner_id' => 1,
                'street' => 'Marga Klompéstraat',
                'number' => 8,
                'postcode' => '7421 HA',
                'place' => 'Deventer',
                'surface' => 117,
                'plot' => 208,
                'bedrooms' => 3,
                'price_month' => 700,
                'price' => 100000,
                'content' => '',
                'images' => [
                    'overview' => [
                        'https://cloud.funda.nl/valentina_media/149/738/294_1080.jpg'
                    ],
                    'bathroom' => [
                        'https://cloud.funda.nl/valentina_media/149/738/301_1080.jpg'
                    ],
                    'livingroom' => [
                        'https://cloud.funda.nl/valentina_media/149/738/296_1080.jpg',
                        'https://cloud.funda.nl/valentina_media/149/738/297_1080.jpg'
                    ],
                    'kitchen' => [
                        'https://cloud.funda.nl/valentina_media/149/738/300_1080.jpg',
                        'https://cloud.funda.nl/valentina_media/149/738/302_1080.jpg'
                    ],
                    'bedroom' => [
                        'https://cloud.funda.nl/valentina_media/149/738/305_1080.jpg',
                    ]
                ],
            ],
            2 => [
                'owner_id' => 1,
                'street' => 'Walstraat',
                'number' => 7,
                'postcode' => '7411 GJ',
                'place' => 'Deventer',
                'surface' => 235,
                'plot' => '',
                'bedrooms' => 3,
                'price_month' => 1200,
                'price' => 250000,
                'content' => '',
                'images' => [
                    'overview' => [
                        'https://cloud.funda.nl/valentina_media/144/282/565_1080.jpg'
                    ],
                    'bathroom' => [
                        'https://cloud.funda.nl/valentina_media/144/077/739_1080.jpg'
                    ],
                    'livingroom' => [
                        'https://cloud.funda.nl/valentina_media/144/077/730_1080.jpg',
                        'https://cloud.funda.nl/valentina_media/144/077/731_1080.jpg'
                    ],
                    'kitchen' => [
                        'https://cloud.funda.nl/valentina_media/144/077/732_1080.jpg',
                    ],
                    'bedroom' => [
                        'https://cloud.funda.nl/valentina_media/144/077/752_1080.jpg',
                    ]
                ],
            ],
            3 => [
                'owner_id' => 1,
                'street' => 'Nieuwstraat',
                'number' => 26,
                'postcode' => '7411 LM',
                'place' => 'Deventer',
                'surface' => 130,
                'plot' => 338,
                'bedrooms' => 4,
                'price_month' => 1500,
                'price' => 275000,
                'content' => '',
                'images' => [
                    'overview' => [
                        'https://cloud.funda.nl/valentina_media/141/701/279_720.jpg'
                    ],
                    'bathroom' => [
                        'https://cloud.funda.nl/valentina_media/140/344/436_1080.jpg'
                    ],
                    'livingroom' => [
                        'https://cloud.funda.nl/valentina_media/140/344/416_1080.jpg',
                        'https://cloud.funda.nl/valentina_media/140/344/419_1080.jpg'
                    ],
                    'kitchen' => [
                        'https://cloud.funda.nl/valentina_media/140/344/421_1080.jpg',
                        'https://cloud.funda.nl/valentina_media/140/344/423_1080.jpg'
                    ],
                    'bedroom' => [
                        'https://cloud.funda.nl/valentina_media/140/344/434_1080.jpg',
                    ]
                ],
            ],
            4 => [
                'owner_id' => 2,
                'street' => 'Pelmolenweg',
                'number' => 1,
                'postcode' => '3511 XN',
                'place' => 'Utrecht',
                'surface' => 145,
                'plot' => 70,
                'bedrooms' => 4,
                'price_month' => 2000,
                'price' => 300000,
                'content' => '',
                'images' => [
                    'overview' => [
                        'https://cloud.funda.nl/valentina_media/149/837/655_720.jpg'
                    ],
                    'bathroom' => [
                        'https://cloud.funda.nl/valentina_media/149/837/672_1080.jpg'
                    ],
                    'livingroom' => [
                        'https://cloud.funda.nl/valentina_media/149/837/662_1080.jpg',
                        'https://cloud.funda.nl/valentina_media/149/837/665_1080.jpg'
                    ],
                    'kitchen' => [
                        'https://cloud.funda.nl/valentina_media/149/837/666_1080.jpg',
                        'https://cloud.funda.nl/valentina_media/149/837/667_1080.jpg'
                    ],
                    'bedroom' => [
                        'https://cloud.funda.nl/valentina_media/149/837/670_1080.jpg',
                    ]
                ],
            ],
            5 => [
                'owner_id' => 2,
                'street' => 'Lijsterstraat',
                'number' => 48,
                'postcode' => '3514 TE',
                'place' => 'Utrecht',
                'surface' => 105,
                'plot' => 68,
                'bedrooms' => 4,
                'price_month' => 1300,
                'price' => 150000,
                'content' => '',
                'images' => [
                    'overview' => [
                        'https://cloud.funda.nl/valentina_media/149/842/357_1080.jpg',
                    ],
                    'bathroom' => [
                        'https://cloud.funda.nl/valentina_media/149/842/407_1080.jpg',
                    ],
                    'livingroom' => [
                        'https://cloud.funda.nl/valentina_media/149/842/361_1080.jpg',
                        'https://cloud.funda.nl/valentina_media/149/842/362_1080.jpg',
                    ],
                    'kitchen' => [
                        'https://cloud.funda.nl/valentina_media/149/842/369_1080.jpg',
                        'https://cloud.funda.nl/valentina_media/149/842/370_1080.jpg',
                    ],
                    'bedroom' => [
                        'https://cloud.funda.nl/valentina_media/149/842/402_1080.jpg',
                        'https://cloud.funda.nl/valentina_media/149/842/401_1080.jpg',
                    ]
                ],
            ],
            6 => [
                'owner_id' => 2,
                'street' => 'Marco Pololaan',
                'number' => 132,
                'postcode' => '3526 GM',
                'place' => 'Utrecht',
                'surface' => 118,
                'plot' => 333,
                'bedrooms' => 3,
                'price_month' => 1100,
                'price' => 100000,
                'content' => '',
                'images' => [
                    'overview' => [
                        'https://cloud.funda.nl/valentina_media/149/721/010_720.jpg'
                    ],
                    'bathroom' => [
                        'https://cloud.funda.nl/valentina_media/149/721/029_2160.jpg'
                    ],
                    'livingroom' => [
                        'https://cloud.funda.nl/valentina_media/149/721/011_2160.jpg',
                        'https://cloud.funda.nl/valentina_media/149/721/012_2160.jpg',
                    ],
                    'kitchen' => [
                        'https://cloud.funda.nl/valentina_media/149/721/020_2160.jpg',
                    ],
                    'bedroom' => [
                        'https://cloud.funda.nl/valentina_media/149/721/032_2160.jpg',
                        'https://cloud.funda.nl/valentina_media/149/721/034_2160.jpg',
                    ]
                ],
            ],
            7 => [
                'owner_id' => 3,
                'street' => 'Vatternkade',
                'number' => 101,
                'postcode' => '7421 HA',
                'place' => 'Deventer',
                'surface' => 152,
                'plot' => 113,
                'bedrooms' => 5,
                'price_month' => 1400,
                'price' => 200000,
                'content' => '',
                'images' => [
                    'overview' => [
                        'https://cloud.funda.nl/valentina_media/149/657/551_720.jpg',
                    ],
                    'bathroom' => [
                        'https://cloud.funda.nl/valentina_media/149/657/513_2160.jpg',
                    ],
                    'livingroom' => [
                        'https://cloud.funda.nl/valentina_media/149/657/554_2160.jpg',
                        'https://cloud.funda.nl/valentina_media/149/657/498_2160.jpg',
                    ],
                    'kitchen' => [
                        'https://cloud.funda.nl/valentina_media/149/657/501_2160.jpg',
                        'https://cloud.funda.nl/valentina_media/149/657/502_2160.jpg',
                    ],
                    'bedroom' => [
                        'https://cloud.funda.nl/valentina_media/149/657/507_2160.jpg',
                        'https://cloud.funda.nl/valentina_media/149/657/508_2160.jpg',
                    ]
                ],
            ]
        ];

        if ($id) {
            $data = $data[$id];
        }
        return $data;
    }

    public function index()
    {
        return response($this->getData());
    }

    public function show($id)
    {
        return response($this->getData($id));
    }

    public function showByOwnerId($id)
    {
        $objects = $this->getData();

        $ownerObjects = [];
        foreach ($objects as $key => $object) {
            if ((int)$object['owner_id'] === (int)$id) {
                $ownerObjects[$key] = $object;
            }
        }
        return response($ownerObjects);
    }
}
