<?php

namespace App\Http\Controllers;

class FunderController extends Controller
{
    public function getData($id = 0): array
    {
        $data = [
            1 => [
                'site' => 'https://www.mvgm.nl/',
                'company' => 'MVGM',
                'address' => 'Burgemeester Roelenweg 22',
                'postcode' => '8021 EW',
                'place' => 'Zwolle',
                'phone' => '1378-347689',
                'image' => 'https://www.mvgm.nl/wp-content/themes/mvgm/build/assets/86fce4755d10009dbc289e1658fcd288.png',
            ],
            2 => [
                'site' => 'https://www.nederwoon.nl/',
                'company' => 'nederwoon',
                'address' => 'Brinkgreverweg 38',
                'postcode' => '7413 AC',
                'place' => 'Deventer',
                'phone' => '0570-620899',
                'image' => 'https://www.nederwoon.nl/images/logo.png',
            ],
            3 => [
                'site' => 'https://www.vestia.nl/',
                'company' => 'Vestia',
                'address' => 'Hilledijk 71',
                'postcode' => '3001 GA',
                'place' => 'Rotterdam',
                'phone' => '1287-677689',
                'image' => 'https://www.vestia.nl/ui_custom/images_vestia/vestia-logo.png',
            ],
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
}
