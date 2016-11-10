<?php

function getRadioCode($text,$type="otan") {

    $radioCode = array(
        "anglais"           => array("Able","Baker","Charlie","Dog","Easy","Fox","George","How","Item","Jig","King","Love","Mike","Nan","Oboe","Peter","Queen","Roger","Sugar","Tare","Uncle","Victor","William","X-ray","Yoke","Zebra"),
        "international"     => array("Amsterdam","Baltimore","Casablanca","Danemark","Edison","Florida","Gallipoli","Havanna","Italia","Jerusalem","Kilogram","Liverpool","Madagascar","New York","Oslo","Paris","Québec","Roma","Santiago","Tripoli","Uppsala","Valence","Washington","Xanthippe","Yokohama","Zurich"),
        "otan"              => array("Alpha","Bravo","Charlie","Delta","Echo","Foxtrot","Golf","Hotel","India","Juliett","Kilo","Lima","Mike","November","Oscar","Papa","Québec","Romeo","Sierra","Tango","Uniform","Victor","Whisky","X-ray","Yankee","Zulu"),
        "français"          => array("Anatole","Berthe","Célestine","Désiré","Eugène","François","Gaston","Henri","Irma","Joseph","Kléber","Louis","Marcel","Nicolas","Oscar","Pierre","Quintal","Raoul","Suzanne","Thérèse","Ursule","Victor","William","Xavier","Yvonne","Zoé"),
        "italien"           => array("Ancona","Bologna","Como","Domodossola","Empoli","Firenze","Genova","Acca","Imola","I lunga","Cappa","Livorno","Milano","Napoli","Otranto","Palermo","Quarto","Roma","Savona","Torino","Udine","Venezia","Vu Doppia","Ics","Ipsilon","Zara"),
        "néerlandais"       => array("Anna","Bernard","Cornelis","Dirk","Eduard","Ferdinand","Gerard","Hendrik","Izaak","Jan","Karel","Lodewijk","Marie","Nico","Otto","Pieter","Quotiënt","Rudolf","Simon","Teunis","Utrecht","Victor","Willem","Xanthippe","Ypsilon","Zaandam"),
        "suédois"           => array("Adam","Bertil","Cesar","David","Erik","Filip","Gustav","Helge","Ivar","Johan","Kalle","Ludvig","Martin","Niklas","Olof","Petter","Qvintus","Rudolf","Sigurd","Tore","Urban","Viktor","Wilhelm","Xerxes","Yngve","Zäta"),
        "radioamateur"      => array("Adam","Baker","Charlie","David","Edward","Frank","George","Henry","Ida","John","King","Lewis","Mary","Nancy","Otto","Peter","Queen","Robert","Sugar","Thomas","Uniform","Victor","William","X-ray","Young","Zebra"),
        "européen"          => array("Amérique","Baltimore","Canada","Danemark","England","France","Guatemala","Honolulu","Italie","Japon","Kilowatt","Luxembourg","Mexico","Norwegen","Ontario","Portugal","Québec","Radio","Santiago","Texas","Uruguay","Venezuela","Washington","Xylophon","Yokohama","Zebra"),
        "finnois"           => array("Aarne","Bertta","Celsius","Daavid","Eemeli","Faarao","Gideon","Heikki","Iivari","Jussi","Kalle","Lauri","Matti","Niilo","Otto","Paavo","Kuu","Risto","Sakari","Tyyne","Urho","Vihtori","Wiski","Äksä","Yrjö","Tseta"),
        "tchèque"           => array("Adam","Božena","Cyril","David","Emil","František","Gustav","Helena","Ivan","Josef","Karel","Ludvík","Marie","Norbert","Oto","Petr","Quido","Rudolf","Svatopluk","Tomáš","Urban","Václav","Dvojité","Xaver","Ypsilon","Zuzana"),
    );

    // transliterate to ASCII, remove non alpha, split and iterate
    foreach (str_split( preg_replace("/[^A-Za-z ]/", '', transliterator_transliterate('Any-Latin; Latin-ASCII; [\u0080-\u7fff] remove', $text) ) ) as $letter) {
        if ($letter == " ")     echo "- ";
        else                    echo $radioCode[$type][ ord(strtoupper($letter)) - ord('A') ].' ';
    }
}

getRadioCode("super saucisse",'otan');

?>