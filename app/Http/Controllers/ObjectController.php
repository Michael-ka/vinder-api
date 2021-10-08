<?php

namespace App\Http\Controllers;

class ObjectController extends Controller
{
    public function getData($id = 0): array
    {
        $data = [
            [
                'id' => 12345,
                'owner_id' => 1,
                'owner' => [
                    'site' => 'https://www.mvgm.nl/',
                    'company' => 'MVGM',
                    'address' => 'Burgemeester Roelenweg 22',
                    'postcode' => '8021 EW',
                    'place' => 'Zwolle',
                    'phone' => '1378-347689',
                    'image' => 'https://www.mvgm.nl/wp-content/themes/mvgm/build/assets/86fce4755d10009dbc289e1658fcd288.png',
                ],
                'street' => 'Marga Klompéstraat',
                'number' => 8,
                'postcode' => '7421 HA',
                'place' => 'Deventer',
                'surface' => 117,
                'plot' => 208,
                'bedrooms' => 3,
                'price_month' => 700,
                'price' => 100000,
                'content' => "<p>In de Vogelenbuurt, direct tegen het oude centrum gelegen, ligt dit royale en lichte woonhuis met vier slaapkamers en een gezellige, groene stadstuin op het zuidwesten. Door de extra verdieping is een royaal woonhuis ontstaan. Het dakterras maakt het geheel af.</p><p>De woning kan zonder noemenswaardige aanpassingen door de nieuwe eigenaar betrokken worden, die zich hier direct thuis zal voelen.</p><p>De Lijsterstraat is één van de mooiste en meest groene straten in de Vogelenbuurt. Dit betreft een autoluwe straat dankzij het eenrichtingsverkeer. Daarnaast is het historische centrum op loopafstand en het Centraal Station op 5 minuten fietsen. De woning is ideaal gelegen! Op een steenworp afstand bevindt u zich tussen allerlei praktische winkels, leuke restaurantjes en cafés. Kortom, een goed onderhouden en ruime woning op een aantrekkelijke locatie.</p>",
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
            [
                'id' => 12346,
                'owner_id' => 1,
                'owner' => [
                    'site' => 'https://www.mvgm.nl/',
                    'company' => 'MVGM',
                    'address' => 'Burgemeester Roelenweg 22',
                    'postcode' => '8021 EW',
                    'place' => 'Zwolle',
                    'phone' => '1378-347689',
                    'image' => 'https://www.mvgm.nl/wp-content/themes/mvgm/build/assets/86fce4755d10009dbc289e1658fcd288.png',
                ],
                'street' => 'Walstraat',
                'number' => 7,
                'postcode' => '7411 GJ',
                'place' => 'Deventer',
                'surface' => 235,
                'plot' => '',
                'bedrooms' => 3,
                'price_month' => 1200,
                'price' => 250000,
                'content' => "<p>Wij konden niet wachten om met deze woning aan de slag te gaan: wat een super huis is dit! Met veel zorg ingedeeld en ingericht: mooie ruimtes, ruim, licht en praktisch.</p><p>Uniek gelegen, heerlijke familiewoning met garage en zonnige diepe achtertuin gelegen in een lommerrijk zijstraatje aan de Utrechtseweg op slechts een minuut lopen van het Maximapark. Deze twee-onder-een-kap is in 2021 nog verbouwd waardoor het 5 slaapkamers, twee badkamers, mooie houtkachel en een garage biedt. Dit alles gelegen in een rustige straat waar je je echt vrij voelt.</p><p>De mooie jaren '30 sfeer vind je terug in het aanzicht van de woning, door de stijlvolle erker aan de voorzijde van het huis. De gebruikte bakstenen en de dakoverstek doet denken aan die tijd maar op een moderne manier uitgevoerd met hoogwaardige materialen. De groene achtertuin is gelegen op het zuiden aan een klein slootje met gegarandeerd volop privacy! Achter de woning is een ruim terras aangelegd en de grote, ingegraven trampoline is een feestje voor jong en oud.</p>",
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
            [
                'id' => 12347,
                'owner_id' => 1,
                'owner' => [
                    'site' => 'https://www.mvgm.nl/',
                    'company' => 'MVGM',
                    'address' => 'Burgemeester Roelenweg 22',
                    'postcode' => '8021 EW',
                    'place' => 'Zwolle',
                    'phone' => '1378-347689',
                    'image' => 'https://www.mvgm.nl/wp-content/themes/mvgm/build/assets/86fce4755d10009dbc289e1658fcd288.png',
                ],
                'street' => 'Nieuwstraat',
                'number' => 26,
                'postcode' => '7411 LM',
                'place' => 'Deventer',
                'surface' => 130,
                'plot' => 338,
                'bedrooms' => 4,
                'price_month' => 1500,
                'price' => 275000,
                'content' => "<p>Zijn jullie op zoek naar je eigen plekje? Eentje in de gezellige wijk Terwijde? Dan is deze mooie 2 laags, uitgebouwde tussenwoning met heerlijke tuin op het westen, vrijstaande houten berging en eigen privé parkeerplek wellicht jullie droomwoning!</p><p>De locatie van deze woning is perfect. Binnen enkele minuten sta je middenin het Máximapark, waar je volop kan genieten van alle recreatiemogelijkheden (denk aan hardlopen, bootcampen, skaten, fietsen….). Dit park voert je langs de mooiste plekjes in de omgeving. Op loopafstand ligt de Haarrijnseplas waar je in de zomer op het strand waant. In de directe omgeving bevinden zich diverse scholen, sportverenigingen, winkelcentra, restaurants, Antonius Ziekenhuis. Toch liever een drankje drinken in Utrecht Centrum? Het centrum is bereikbaar binnen 5 minuten vanaf station Terwijde en 20 minuten op de fiets. Je rijdt zo de snelweg A2 en A12 op, de bus en het NS Station Utrecht Terwijde is op loopafstand.</p><p>Terwijde kenmerkt zich door de gezellige woonwijken, de verschillende bouwstijlen van de woningen en de aanwezigheid van water. Dat laatste komt doordat het gebied van Terwijde grotendeels lager ligt dan zijn omgeving. De wijk is ruim opgezet en heeft brede vaarten en kleine bruggetjes. Centraal in Terwijde ligt het Waterwinpark. Dit park is een openbare ruimte voor heel Leidsche Rijn vol groen en speelmogelijkheden.</p><p>We nemen je graag mee door deze gezellige woning…</p>",
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
            [
                'id' => 12348,
                'owner_id' => 2,
                'owner' => [
                    'site' => 'https://www.nederwoon.nl/',
                    'company' => 'nederwoon',
                    'address' => 'Brinkgreverweg 38',
                    'postcode' => '7413 AC',
                    'place' => 'Deventer',
                    'phone' => '0570-620899',
                    'image' => 'https://www.nederwoon.nl/images/logo.png',
                ],
                'street' => 'Pelmolenweg',
                'number' => 1,
                'postcode' => '3511 XN',
                'place' => 'Utrecht',
                'surface' => 145,
                'plot' => 70,
                'bedrooms' => 4,
                'price_month' => 2000,
                'price' => 300000,
                'content' => "<p>Wonen in een jaren '30 hoekwoning</p><p>Een zeer goed onderhouden woonhuis gelegen in de gewilde kindvriendelijke woonwijk Tuindorp aan de H. Copijnlaan 8. Tuindorp is een prachtige woonwijk met brede straten, veel groen en diverse basisscholen. Tevens zijn er voldoende buitenschoolse opvangmogelijkheden en crèches aanwezig. Daarnaast zijn alle voorzieningen in de nabije omgeving. De boodschappen kunt u doen in het overdekte winkelcentrum 'De Gaard' of aan het 'Willem van Noortplein' Diverse uitvalswegen, het “Griftpark”, recreatievoorzieningen en het centrum van Utrecht bevinden zich in de directe omgeving.</p><p>Deze woning heeft karakteristieke kenmerken, veel licht inval, gezellige woon- en eetkamer, een keuken met inbouwapparatuur, vier slaapkamers waarvan één met balkon, een badkamer, tuin, kelder en een garage.</p>",
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
            [
                'id' => 12349,
                'owner_id' => 2,
                'owner' => [
                    'site' => 'https://www.nederwoon.nl/',
                    'company' => 'nederwoon',
                    'address' => 'Brinkgreverweg 38',
                    'postcode' => '7413 AC',
                    'place' => 'Deventer',
                    'phone' => '0570-620899',
                    'image' => 'https://www.nederwoon.nl/images/logo.png',
                ],
                'street' => 'Lijsterstraat',
                'number' => 48,
                'postcode' => '3514 TE',
                'place' => 'Utrecht',
                'surface' => 105,
                'plot' => 68,
                'bedrooms' => 4,
                'price_month' => 1300,
                'price' => 150000,
                'content' => "<p>Karakteristieke bovenwoning met een zonnig dakterras van maar liefst 19 m² en een riant uitzicht op de Vecht! De woning ligt op een geweldige locatie in een sfeervol straatje op loopafstand van het centrum.</p><p>Wonen op een historische plek: Lauwerecht is ontstaan door lintbebouwing op de oostoever van de Vecht vanaf de Utrechtse binnenstad. In vroegere eeuwen was de Lauwerecht een buitengerecht in de stadsvrijheid. Tussen dit gerecht en de stad lag nog de ommuurde voorstad Bemuurde Weerd. Vanaf de middeleeuwen werd brandgevaarlijke bedrijvigheid buiten de stad geplaatst. Vooral de aardewerkindustrie kwam hierdoor in de Bemuurde Weerd en gaandeweg nog noordelijker in de Lauwerecht terecht. In de 16e en 17e eeuw werden er stenen tabakspijpen aan de Lauwerecht vervaardigd.</p><p>Begane grond: Entree, meterkast en trapopgang;</p>",
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
            [
                'id' => 12350,
                'owner_id' => 2,
                'owner' => [
                    'site' => 'https://www.mvgm.nl/',
                    'company' => 'MVGM',
                    'address' => 'Burgemeester Roelenweg 22',
                    'postcode' => '8021 EW',
                    'place' => 'Zwolle',
                    'phone' => '1378-347689',
                    'image' => 'https://www.mvgm.nl/wp-content/themes/mvgm/build/assets/86fce4755d10009dbc289e1658fcd288.png',
                ],
                'street' => 'Marco Pololaan',
                'number' => 132,
                'postcode' => '3526 GM',
                'place' => 'Utrecht',
                'surface' => 118,
                'plot' => 333,
                'bedrooms' => 3,
                'price_month' => 1100,
                'price' => 100000,
                'content' => "<p>Dit ruime, goed onderhouden 3-kamerappartement met groot zonnig balkon biedt prachtig vrij uitzicht op de groene woonomgeving met vele voorzieningen, waaronder een winkelcentrum om de hoek. Het appartement, gelegen op de 2e verdieping, beschikt over een grote, lichte woonkamer met schuifpui richting het balkon en moderne, open keuken in het midden. De badkamer is lekker ruim en voorzien van een wasmachine-aansluiting. Het appartement heeft 2 (slaap)kamers, waarvan een met dubbele openslaande deuren richting het balkon, waarop je heerlijk kunt genieten van de zon, buitenlucht en het schitterende uitzicht.</p><p>Omgeving:<br>Het appartement is gelegen vlakbij het Amaliapark en het Parkwijk winkelcentrum met daarin diverse supermarkten, eetgelegenheden, een drogist, fietsenwinkel en opticien. In de nabije omgeving bevinden zich ook diverse basisscholen, een gezondheidscentrum, tandartsenpraktijk, gymzaal en skatepark. Winkelcentra/treinstations Leidsche Rijn en Terwijde bevinden zich op ca. 5 minuten fietsen. Centrum Utrecht ligt op ca. 15 minuten fietsafstand. Via de snelwegen A2 en A12 bereik je steden, zoals Amsterdam, Den Haag, Arnhem en ’s-Hertogenbosch.</p>",
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
            [
                'id' => 12351,
                'owner_id' => 3,
                'owner' => [
                    'site' => 'https://www.vestia.nl/',
                    'company' => 'Vestia',
                    'address' => 'Hilledijk 71',
                    'postcode' => '3001 GA',
                    'place' => 'Rotterdam',
                    'phone' => '1287-677689',
                    'image' => 'https://www.vestia.nl/ui_custom/images_vestia/vestia-logo.png',
                ],
                'street' => 'Vatternkade',
                'number' => 101,
                'postcode' => '7421 HA',
                'place' => 'Deventer',
                'surface' => 152,
                'plot' => 113,
                'bedrooms' => 5,
                'price_month' => 1400,
                'price' => 200000,
                'content' => "<p>De Zeeheldenbuurt, een vooroorlogs gedeelte aan de oostkant van onze stad, heeft van oudsher een bijzondere aantrekkingskracht op leuke mensen. Karakteristieke herenhuizen en beneden- en bovenwoningen wisselen elkaar af. De grote familiehuizen, appartementen en hier en daar een kamer voor een student en een etage voor een young professional, zorgen voor een gezellige en vriendelijke mix.</p><p>Ons is gevraagd om nieuwe mensen te zoeken voor een van de mooiste souterrain woningen aan de Buys Ballotstraat. Een woning die zich kenmerkt door ruimte, licht en comfort. Een uiterst sfeervol benedenhuis van circa 135m2 verdeeld over twee prettig ingedeelde woonlagen en daarachter een grote vrije stadstuin waar je op mooie dagen veel zult zijn.</p><p>De huidige bewoners zijn toe aan een volgende stap. Wat zij achterlaten is een woning die zonder werkzaamheden direct betrokken kan worden. Of het nu gaat om de wanden, de vloeren en de plafonds, het binnen- en buitenschilderwerk of de uitvoering en staat van de keuken en het sanitair, alles is even smaakvol en verkeert in een uitmuntende staat van onderhoud. Zo zien we het niet zo vaak. Hier word je blij van.</p><p>De afbeeldingen en plattegronden van deze presentatie geven een aardig beeld van wat de woning je zoal te bieden heeft. We lichten een en ander toe.</p>",
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
