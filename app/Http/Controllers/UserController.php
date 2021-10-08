<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function getData($id = 0): array
    {
        $data = [
            1 =>
                [
                    'first_name' => 'Eustacia',
                    'last_name' => 'Precious',
                    'email' => 'eprecious1@ed.gov',
                    'company' => 'Flashpoint',
                    'address' => '780 Commercial Plaza',
                    'place' => 'Shaba',
                    'postcode' => '5487 IK',
                    'phone' => '537-839-0664',
                    'image' => 'https://i.pravatar.cc/150',
                ],
            2 =>
                [
                    'first_name' => 'Charmine',
                    'last_name' => 'Pittam',
                    'email' => 'cpittam2@ustream.tv',
                    'company' => 'Ailane',
                    'address' => '78 Dorton Court',
                    'place' => 'Parral',
                    'postcode' => '2389 NY',
                    'phone' => '156-407-9057',
                    'image' => 'https://i.pravatar.cc/150',
                ],
            3 =>
                [
                    'first_name' => 'Kippar',
                    'last_name' => 'Aird',
                    'email' => 'kaird3@redcross.org',
                    'company' => 'Avamba',
                    'address' => '9 Sugar Trail',
                    'place' => 'Muromtsevo',
                    'postcode' => '6013 DK',
                    'phone' => '734-550-7149',
                    'image' => 'https://i.pravatar.cc/150',
                ],
            4 =>
                [
                    'first_name' => 'Der',
                    'last_name' => 'Amorts',
                    'email' => 'damorts4@bravesites.com',
                    'company' => 'Bluezoom',
                    'address' => '11789 Transport Trail',
                    'place' => 'Golynki',
                    'postcode' => '2167 KM',
                    'phone' => '209-827-9814',
                    'image' => 'https://i.pravatar.cc/150',
                ],
            5 =>
                [
                    'first_name' => 'Germayne',
                    'last_name' => 'Tessier',
                    'email' => 'gtessier5@smugmug.com',
                    'company' => 'Kare',
                    'address' => '0046 Center Hill',
                    'place' => 'Kamenka',
                    'postcode' => '4123 VK',
                    'phone' => '890-470-5195',
                    'image' => 'https://i.pravatar.cc/150',
                ],
            6 =>
                [
                    'first_name' => 'Oralee',
                    'last_name' => 'MacNelly',
                    'email' => 'omacnelly6@newyorker.com',
                    'company' => 'Zooxo',
                    'address' => '45495 Manley Lane',
                    'place' => 'Arnhem',
                    'postcode' => '6834 BK',
                    'phone' => '347-931-0773',
                    'image' => 'https://i.pravatar.cc/150',
                ],
            7 =>
                [
                    'first_name' => 'Lia',
                    'last_name' => 'Drinkall',
                    'email' => 'ldrinkall7@goo.ne.jp',
                    'company' => 'Viva',
                    'address' => '89902 Pearson Junction',
                    'place' => 'Cheongju-si',
                    'postcode' => '3456 MK',
                    'phone' => '277-847-9094',
                    'image' => 'https://i.pravatar.cc/150',
                ],
            8 =>
                [
                    'first_name' => 'Bram',
                    'last_name' => 'Walczak',
                    'email' => 'bwalczak8@cbc.ca',
                    'company' => 'Twitterbeat',
                    'address' => '6 Oakridge Junction',
                    'place' => 'Três Lagoas',
                    'postcode' => '7960 KC',
                    'phone' => '704-427-3864',
                    'image' => 'https://i.pravatar.cc/150',
                ],
            9 =>
                [
                    'first_name' => 'Averyl',
                    'last_name' => 'Leverette',
                    'email' => 'aleverette9@umich.edu',
                    'company' => 'Cogilith',
                    'address' => '4 Novick Drive',
                    'place' => 'Baklashi',
                    'postcode' => '6660 HK',
                    'phone' => '668-205-6109',
                    'image' => 'https://i.pravatar.cc/150',
                ],
            10 =>
                [
                    'first_name' => 'Dedie',
                    'last_name' => 'Augustin',
                    'email' => 'daugustin0@nps.gov',
                    'company' => 'Avamm',
                    'address' => '24 Ilene Parkway',
                    'place' => 'Tame',
                    'postcode' => '8140 DK',
                    'phone' => '558-305-6898',
                    'image' => 'https://i.pravatar.cc/150',
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
