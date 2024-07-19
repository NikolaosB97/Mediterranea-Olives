<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Olive Calcidica',
                'span' => ' Ripieno con peperone florina rosso',
                'image' => '/img/LAPA2558.jpg',
                'description'=> 'Le olive farcite con peperone Florina rosso offrono una combinazione di sapori ricca e armoniosa. La morbidezza e il gusto salato delle olive si uniscono alla dolcezza e al sapore aromatico dei peperoni Florina rossi, creando un’esperienza gustativa equilibrata e piacevole. Perfette come aperitivo, antipasto o per arricchire insalate e piatti freddi, queste olive sono ideali per chi cerca un tocco di dolcezza e colo re sulla propria tavola. Prodotto gourmet ideale per chi apprezza i sapori autentici e genuini della tradizione mediterranea.' 
                
            ],
            [
                'id' => 2,
                'name' => 'Olive Calcidica',
                'span' => ' Ripieno di mandorla',
                'image' => '/img/LAPA2567.jpg',
                'description'=> 'Le olive da tavola farcite con mandorla sono un raffinato prodotto gastronomico che combina la morbidezza e il sapore leggermente salato delle olive con la croccantezza e il gusto delicato delle mandorle.  
                Perfette come aperitivo, antipasto o per arricchire insalate e piatti freddi , queste olive offrono 
                un’esperienza gustativa unica, unendo sapori e consistenze diverse in un solo boccone. Un prodotto ideale per chi cerca un tocco di eleganza e originalità sulla propria tavola. '
            ],
            [
                'id' => 3,
                'name' => 'Olive Calcidica ',
                'span' => ' Ripieno di aglio',
                'image' => '/img/LAPA2571.jpg',
                'description'=> 'Le olive farcite con aglio greco sono una delizia per gli amanti dei sapori decisi e aromatici. Queste olive combinano la ricchezza e la salinità naturale delle olive con l’intensità e il profumo inconfondibile dell’aglio greco. Questa unione crea un’esperienza gustativa robusta e saporita, ideale per arricchire aperitivi, antipasti o piatti freddi. Perfette da gustare da sole o abbinate a formaggi e salumi, queste olive sono una scelta raffinata per chi cerca un tocco di autenticità mediterranea. Un prodotto gourmet che esalta i sapori tradizionali. '
            ],
            [
                'id' => 4,
                'name' => 'Olive Calcidica',
                'span' => '  Ripieno con jalapeno',
                'image' => '/img/LAPA2601.jpg',
                'description'=> 'Le olive da tavola farcite con jalapeno offrono una combinazione intrigante tra il sapore robusto e salato delle olive e il piccante deciso dei peperoncini jalapeno. Questa fusione di sapori crea un’esperienza gustativa vivace e audace, perfetta per chi ama gli aperitivi dal carattere forte. Ideali da gustare da sole, come antipasto o per aggiungere un tocco piccante a insalate e piatti freddi, queste olive farcite sono un’esplosione di gusto che conquista al primo assaggio. Un prodotto gourmet adatto ai palati esigenti '
            ],
            [
                'id' => 5,
                'name' => 'Olive Calcidica',
                'span' => 'Ripieno con peperoncino piri piri',
                'image' => '/img/LAPA2591.jpg',
                'description'=> 'Le olive farcite con peperoncino Piri Piri sono un’esplosione di sapori forti e decisi. La morbidezza delle olive e il sapore salato delle olive si sposano perfettamente con il carattere piccante e aromatico del peperoncino Piri Piri. Questa combinazione crea un’esperienza gustativa intensa e stimolante, ideale per chi ama il brivido del piccante. Perfette come aperitivo o per dare una sferzata di gusto a insalate e piatti freddi, queste olive sono una scelta audace e originale. Prodotto perfetto per gli amanti dei sapori forti. '
            ],
            [
                'id' => 6,
                'name' => 'Olive Calcidica',
                'span' => 'Ripieno con cetriolini',
                'image' => '/img/LAPA2585.jpg',
                'description'=> 'Le olive farcite con cetriolini sono un delizioso antipasto, ideale per accompagnare aperitivi e buffet.Il contrasto tra il gusto salato e leggermente amaro delle olive e il sapore acidulo e croccante dei cetriolini crea una combinazione di sapori molto piacevole e stuzzicante.Questa preparazione è semplice ma molto apprezzata, perfetta per chi ama i sapori decisi e vuole offrire ai propri ospiti uno snack originale e sfizioso'
            ],
            [
                'id' => 7,
                'name' => 'Olive Verdi Calcidica ',
                'span' => 'Intere',
                'image' => '/img/LAPA2563.jpg',
                'description'=> 'Le olive verdi kolossal della Calcidica sono un’ autentica specialità greca, note per le loro dimensioni generose e la loro consistenza succosa. Originarie della regione della Calcidica, queste olive di un verde brillante offrono un sapore delicato e leggermente fruttato, con una piacevole nota salina. Perfette da gustare come antipasto, in insalate o accompagnate  a formaggi e salumi, le olive verdi Kolossal sono ideali per chi apprezza i sapori genuini e robusti. Prodotto di alta qualità che porta in tavola tutto il gusto autentico della Grecia mediterranea. '
            ],
            [
                'id' => 8,
                'name' => 'Olive Verdi Calcidica',
                'span' => 'Snocciolate',
                'image' => '/img/LAPA2554.jpg',
                'description'=> 'Le olive verdi kolossal della Calcidica sono un’ autentica specialità greca, note per le loro dimensioni generose e la loro consistenza succosa. Originarie della regione della Calcidica, queste olive di un verde brillante offrono un sapore delicato e leggermente fruttato, con una piacevole nota salina. Perfette da gustare come antipasto, in insalate o accompagnate  a formaggi e salumi, le olive verdi Kolossal sono ideali per chi apprezza i sapori genuini e robusti. Prodotto di alta qualità che porta in tavola tutto il gusto autentico della Grecia mediterranea. '
            ],
            [
                'id' => 9,
                'name' => 'Olive Verdi Calcidica',
                'span' => 'A rondelle',
                'image' => '/img/LAPA2597.jpg',
                'description'=> 'Le olive verdi kolossal della Calcidica sono un’ autentica specialità greca, note per le loro dimensioni generose e la loro consistenza succosa. Originarie della regione della Calcidica, queste olive di un verde brillante offrono un sapore delicato e leggermente fruttato, con una piacevole nota salina. Perfette da gustare come antipasto, in insalate o accompagnate  a formaggi e salumi, le olive verdi Kolossal sono ideali per chi apprezza i sapori genuini e robusti. Prodotto di alta qualità che porta in tavola tutto il gusto autentico della Grecia mediterranea. '
            ],
            [
                'id' => 10,
                'name' => 'Olive Kalamata',
                'span' => 'Intere',
                'image' => '/img/LAPA2582.jpg',
                'description'=> 'Le olive Kalamata della Grecia sono un’autentica delizia mediterranea, rinomate per il loro sapore ricco e la loro consistenza carnosa. Raccolte a mano nelle regioni soleggiate della Grecia, queste olive di colore viola scuro si distinguono per il loro gusto unico, leggermente fruttato e vinoso, con note di mandorla. Ideali da gustare da sole, come parte di antipasti, insalate o piatti caldi, le olive Kalamata aggiungono profondità e carattere a ogni pietanza. Prodotto di eccellenza, perfetto per chi apprezza i sapori autentici e genuini della cucina greca. '
            ],
            [
                'id' => 11,
                'name' => 'Olive Kalamata',
                'span' => 'Snocciolate',
                'image' => '/img/LAPA2574.jpg',
                'description'=> 'Le olive Kalamata della Grecia sono un’autentica delizia mediterranea, rinomate per il loro sapore ricco e la loro consistenza carnosa. Raccolte a mano nelle regioni soleggiate della Grecia, queste olive di colore viola scuro si distinguono per il loro gusto unico, leggermente fruttato e vinoso, con note di mandorla. Ideali da gustare da sole, come parte di antipasti, insalate o piatti caldi, le olive Kalamata aggiungono profondità e carattere a ogni pietanza. Prodotto di eccellenza, perfetto per chi apprezza i sapori autentici e genuini della cucina greca. '
            ],
            [
                'id' => 12,
                'name' => 'Olive Kalamata',
                'span' => ' A rondelle',
                'image' => '/img/LAPA2578.jpg',
                'description'=> 'Le olive Kalamata della Grecia sono un’autentica delizia mediterranea, rinomate per il loro sapore ricco e la loro consistenza carnosa. Raccolte a mano nelle regioni soleggiate della Grecia, queste olive di colore viola scuro si distinguono per il loro gusto unico, leggermente fruttato e vinoso, con note di mandorla. Ideali da gustare da sole, come parte di antipasti, insalate o piatti caldi, le olive Kalamata aggiungono profondità e carattere a ogni pietanza. Prodotto di eccellenza, perfetto per chi apprezza i sapori autentici e genuini della cucina greca. '
            ],
            [
                'id' => 13,
                'name' => 'Olive Verdi Calcidica',
                'span' => ' S.S.Mammouth',
                'image' => '/img/LAPA2563.jpg',
                'description' => 'Le olive Super Super Mammouth della Grecia sono una vera eccellenza gastronomica, apprezzate per le loro dimensioni imponenti e la loro consistenza carnosa. Queste olive giganti, di un verde brillante, offrono un sapore delicato e leggermente salato, con una nota finale burrosa e piacevolmente persistente. Perfette per essere gustate da sole, come antipasto o per arricchire piatti di salumi e formaggi, queste olive sono ideali per chi cerca un prodotto unico e di alta qualità . Raccolte a mano e lavorate secondo le tradizioni greche, le olive Super Super Mammut portano sulla tua tavola l’autenticità e la bontà   dei sapori mediterranei. '
            ]
        ];

        $packages = [
            [
                'id' => 5,
                'name' => 'Ripieno con peperoncino piri piri',
                'image' => '/img/02.jpg',
                'type' => 'barattolo'
            ],
            [
                'id' => 4,
                'name' => 'Ripieno con jalapeno',
                'image' => '/img/03.jpg',
                'type' => 'barattolo'
            ],
            [
                'id' => 11,
                'name' => 'Olive Kalamata snocciolate',
                'image' => '/img/04.jpg',
                'type' => 'barattolo'
            ],
            [
                'id' => 2,
                'name' => 'Ripieno di mandorla',
                'image' => '/img/05.jpg',
                'type' => 'barattolo'
            ],
            [
                'id' => 7,
                'name' => 'Olive Verdi Calcidica intere',
                'image' => '/img/06.jpg',
                'type' => 'barattolo'
            ],
            [
                'id' => 3,
                'name' => 'Ripieno di aglio',
                'image' => '/img/07.jpg',
                'type' => 'barattolo'
            ],
            [
                'id' => 12,
                'name' => 'Olive Kalamata A rondelle',
                'image' => '/img/08.jpg',
                'type' => 'barattolo'
            ],
            [
                'id' => 6,
                'name' => 'Ripieno con cetriolini',
                'image' => '/img/09.jpg',
                'type' => 'barattolo'
            ],
            [
                'id' => 1,
                'name' => 'Ripieno con peperone florina rosso',
                'image' => '/img/011.jpg',
                'type' => 'barattolo'
            ],
            [
                'id' => 9,
                'name' => 'Olive Verdi Calcidica A rondelle',
                'image' => '/img/0009.jpg',
                'type' => 'barattolo'
            ],
            [
                'id' => 8,
                'name' => 'Olive Verdi Calcidica snocciolate',
                'image' => '/img/01.jpg',
                'type' => 'barattolo'
            ],

            [
                'id' => 10,
                'name' => 'Olive Kalamata intere',
                'image' => '/img/012.jpg',
                'type' => 'barattolo'
            ],
            
            [
                'id' => 5,
                'name' => 'Ripieno con peperoncino piri piri',
                'image' => '/img/013.jpg',
                'type' => 'pkg-1_5kg'
            ],
            [
                'id' => 1,
                'name' => 'Ripieno con peperone florina rosso',
                'image' => '/img/014.jpg',
                'type' => 'pkg-1_5kg'
            ],
            [
                'id' => 13,
                'name' => 'S.S.Mammouth',
                'image' => '/img/015.jpg',
                'type' => 'pkg-1_5kg'
            ],
            [
                'id' => 10,
                'name' => 'Olive Kalamata intere',
                'image' => '/img/016.jpg',
                'type' => 'pkg-1_5kg'
            ],
            [
                'id' => 4,
                'name' => 'Ripieno con jalapeno',
                'image' => '/img/017.jpg',
                'type' => ' pkg-1_5kg'
            ],
            [
                'id' => 2,
                'name' => 'Ripieno di mandorla',
                'image' => '/img/018.jpg',
                'type' => 'pkg-1_5kg'
            ],
            [
                'id' => 6,
                'name' => 'Ripieno con cetriolini',
                'image' => '/img/019.jpg',
                'type' => 'pkg-1_5kg'
            ],
            [
                'id' => 7,
                'name' => 'Olive Verdi Calcidica intere',
                'image' => '/img/020.jpg',
                'type' => ' pkg-1_5kg'
            ],
            
        ];

        return view('prodotti', ['products' => $products, 'packages' => $packages]);
    }

    public function show($id)
    {
        $products = [
            1 => [
                'id' => 1,
                'name' => 'Olive Calcidica',
                'span' => ' Ripieno con peperone fiorina rosso',
                'image' => '/img/LAPA2558.jpg',
                'description' => 'Le olive farcite con peperone Florina rosso offrono una combinazione di sapori ricca e armoniosa. La morbidezza e il gusto salato delle olive si uniscono alla dolcezza e al sapore aromatico dei peperoni Florina rossi, creando un’esperienza gustativa equilibrata e piacevole. Perfette come aperitivo, antipasto o per arricchire insalate e piatti freddi, queste olive sono ideali per chi cerca un tocco di dolcezza e colore sulla propria tavola. Prodotto gourmet ideale per chi apprezza i sapori autentici e genuini della tradizione mediterranea.',
                'nutrition' => [
                    'Energia' => '675 kj / 164 kcal',
                    'Grasso' => '17,5g',
                    'di cui Saturi' => '2,4g',
                    'Carboidrato' => '1,4g',
                    'di cui Zuccheri' => '0g',
                    'Fibra' => '2,9g',
                    'Proteina' => '1g',
                    'Sale' => '3,8g'
                ]
            ],
            2 => [
                'id' => 2,
                'name' => 'Olive Calcidica',
                'span' => ' Ripieno di mandorla',
                'image' => '/img/LAPA2567.jpg',
                'description' => 'Le olive da tavola farcite con mandorla sono un raffinato prodotto gastronomico che combina la morbidezza e il sapore leggermente salato delle olive con la croccantezza e il gusto delicato delle mandorle. Perfette come aperitivo, antipasto o per arricchire insalate e piatti freddi, queste olive offrono un’esperienza gustativa unica, unendo sapori e consistenze diverse in un solo boccone. Un prodotto ideale per chi cerca un tocco di eleganza e originalità sulla propria tavola.',
                'nutrition' => [
                    'Energia' => '879 kj / 210 kcal',
                    'Grasso' => '20g',
                    'di cui Saturi' => '2,8g',
                    'Carboidrato' => '2,7g',
                    'di cui Zuccheri' => '0,3g',
                    'Fibra' => '2,5g',
                    'Proteina' => '4,4g',
                    'Sale' => '3,2g'
                ]
            ],
            3 => [
                'id' => 3,
                'name' => 'Olive Calcidica',
                'span' => ' Ripieno di aglio',
                'image' => '/img/LAPA2571.jpg',
                'description' => 'Le olive farcite con aglio greco sono una delizia per gli amanti dei sapori decisi e aromatici. Queste olive combinano la ricchezza e la salinità naturale delle olive con l’intensità e il profumo inconfondibile dell’aglio greco. Questa unione crea un’esperienza gustativa robusta e saporita, ideale per arricchire aperitivi, antipasti o piatti freddi. Perfette da gustare da sole o abbinate a formaggi e salumi, queste olive sono una scelta raffinata per chi cerca un tocco di autenticità mediterranea. Un prodotto gourmet che esalta i sapori tradizionali.',
                'nutrition' => [
                    'Energia' => '803 kj / 192 kcal',
                    'Grasso' => '19,5g',
                    'di cui Saturi' => '2,7g',
                    'Carboidrato' => '2,2g',
                    'di cui Zuccheri' => '0,2g',
                    'Fibra' => '2,9g',
                    'Proteina' => '2g',
                    'Sale' => '3,7g'
                ]
            ],
            4 => [
                'id' => 4,
                'name' => 'Olive Calcidica',
                'span' => ' Ripieno con jalapeno',
                'image' => '/img/LAPA2601.jpg',
                'description' => 'Le olive da tavola farcite con jalapeno offrono una combinazione intrigante tra il sapore robusto e salato delle olive e il piccante deciso dei peperoncini jalapeno. Questa fusione di sapori crea un’esperienza gustativa vivace e audace, perfetta per chi ama gli aperitivi dal carattere forte. Ideali da gustare da sole, come antipasto o per aggiungere un tocco piccante a insalate e piatti freddi, queste olive farcite sono un’esplosione di gusto che conquista al primo assaggio. Un prodotto gourmet adatto ai palati esigenti.',
                'nutrition' => [
                    'Energia' => '720 kj / 175 kcal',
                    'Grasso' => '18,7g',
                    'di cui Saturi' => '2,5g',
                    'Carboidrato' => '0,9g',
                    'di cui Zuccheri' => '0,5g',
                    'Fibra' => '2,6g',
                    'Proteina' => '1,2g',
                    'Sale' => '3,7g'
                ]
            ],
            5 => [
                'id' => 5,
                'name' => 'Olive Calcidica',
                'span' => ' Ripieno con peperoncino piri piri',
                'image' => '/img/LAPA2591.jpg',
                'description' => 'Le olive farcite con peperoncino Piri Piri sono un’esplosione di sapori forti e decisi. La morbidezza delle olive e il sapore salato delle olive si sposano perfettamente con il carattere piccante e aromatico del peperoncino Piri Piri. Questa combinazione crea un’esperienza gustativa intensa e stimolante, ideale per chi ama il brivido del piccante. Perfette come aperitivo o per dare una sferzata di gusto a insalate e piatti freddi, queste olive sono una scelta audace e originale. Prodotto perfetto per gli amanti dei sapori forti.',
                'nutrition' => [
                    'Energia' => '657 kj / 156 kcal',
                    'Grasso' => '19,5g',
                    'di cui Saturi' => '2,9g',
                    'Carboidrato' => '1,6g',
                    'di cui Zuccheri' => '0,5g',
                    'Fibra' => '3,4g',
                    'Proteina' => '1g',
                    'Sale' => '3,6g'
                ]
            ],
            6 => [
                'id' => 6,
                'name' => 'Olive Calcidica',
                'span' => '  Ripieno con cetriolini',
                'image' => '/img/LAPA2585.jpg',
                'description' => 'Le olive farcite con cetriolini sono un delizioso antipasto, ideale per accompagnare aperitivi e buffet.Il contrasto tra il gusto salato e leggermente amaro delle olive e il sapore acidulo e croccante dei cetriolini crea una combinazione di sapori molto piacevole e stuzzicante.Questa preparazione è semplice ma molto apprezzata, perfetta per chi ama i sapori decisi e vuole offrire ai propri ospiti uno snack originale e sfizioso',
                'nutrition' => [
                    'Energia' => '763 kj / 180 kcal',
                    'Grasso' => '17g',
                    'di cui Saturi' => '2,5g',
                    'Carboidrato' => '2g',
                    'di cui Zuccheri' => '0,3g',
                    'Fibra' => '1,8g',
                    'Proteina' => '1g',
                    'Sale' => '2,6g'
                ]
            ],
            7 => [
                'id' => 7,
                'name' => 'Olive Verdi Calcidica',
                'span' => ' Intere',
                'image' => '/img/LAPA2563.jpg',
                'description' => 'Le olive verdi kolossal della Calcidica sono un’autentica specialità greca, note per le loro dimensioni generose e la loro consistenza succosa. Originarie della regione della Calcidica, queste olive di un verde brillante offrono un sapore delicato e leggermente fruttato, con una piacevole nota salina. Perfette da gustare come antipasto, in insalate o accompagnate a formaggi e salumi, le olive verdi Kolossal sono ideali per chi apprezza i sapori genuini e robusti. Prodotto di alta qualità che porta in tavola tutto il gusto autentico della Grecia mediterranea.',
                'nutrition' => [
                    'Energia' => '657 kj / 157 kcal',
                    'Grasso' => '16g',
                    'di cui Saturi' => '2,6g',
                    'Carboidrato' => '1,3g',
                    'di cui Zuccheri' => '0,1g',
                    'Fibra' => '2,1g',
                    'Proteina' => '1,1g',
                    'Sale' => '2,7g'
                ]
            ],
            8 => [
                'id' => 8,
                'name' => 'Olive Verdi Calcidica',
                'span' => ' Snocciolate',
                'image' => '/img/LAPA2554.jpg',
                'description' => 'Le olive verdi kolossal della Calcidica sono un’autentica specialità greca, note per le loro dimensioni generose e la loro consistenza succosa. Originarie della regione della Calcidica, queste olive di un verde brillante offrono un sapore delicato e leggermente fruttato, con una piacevole nota salina. Perfette da gustare come antipasto, in insalate o accompagnate a formaggi e salumi, le olive verdi Kolossal sono ideali per chi apprezza i sapori genuini e robusti. Prodotto di alta qualità che porta in tavola tutto il gusto autentico della Grecia mediterranea.',
                'nutrition' => [
                    'Energia' => '657 kj / 157 kcal',
                    'Grasso' => '16g',
                    'di cui Saturi' => '2,6g',
                    'Carboidrato' => '1,3g',
                    'di cui Zuccheri' => '0,1g',
                    'Fibra' => '2,1g',
                    'Proteina' => '1,1g',
                    'Sale' => '2,7g'
                ]
            ],
            9 => [
                'id' => 9,
                'name' => 'Olive Verdi Calcidica ',
                'span' => ' A rondelle',
                'image' => '/img/LAPA2597.jpg',
                'description' => 'Le olive verdi kolossal della Calcidica sono un’autentica specialità greca, note per le loro dimensioni generose e la loro consistenza succosa. Originarie della regione della Calcidica, queste olive di un verde brillante offrono un sapore delicato e leggermente fruttato, con una piacevole nota salina. Perfette da gustare come antipasto, in insalate o accompagnate a formaggi e salumi, le olive verdi Kolossal sono ideali per chi apprezza i sapori genuini e robusti. Prodotto di alta qualità che porta in tavola tutto il gusto autentico della Grecia mediterranea.',
                'nutrition' => [
                    'Energia' => '657 kj / 157 kcal',
                    'Grasso' => '16g',
                    'di cui Saturi' => '2,6g',
                    'Carboidrato' => '1,3g',
                    'di cui Zuccheri' => '0,1g',
                    'Fibra' => '2,1g',
                    'Proteina' => '1,1g',
                    'Sale' => '2,7g'
                ]
            ],
            10 => [
                'id' => 10,
                'name' => 'Olive Kalamata',
                'span' => ' Intere',
                'image' => '/img/LAPA2582.jpg',
                'description' => 'Le olive Kalamata della Grecia sono un’autentica delizia mediterranea, rinomate per il loro sapore ricco e la loro consistenza carnosa. Raccolte a mano nelle regioni soleggiate della Grecia, queste olive di colore viola scuro si distinguono per il loro gusto unico, leggermente fruttato e vinoso, con note di mandorla. Ideali da gustare da sole, come parte di antipasti, insalate o piatti caldi, le olive Kalamata aggiungono profondità e carattere a ogni pietanza. Prodotto di eccellenza, perfetto per chi apprezza i sapori autentici e genuini della cucina greca.',
                'nutrition' => [
                    'Energia' => '835 kj / 200 kcal',
                    'Grasso' => '20g',
                    'di cui Saturi' => '2,5g',
                    'Carboidrato' => '3,6g',
                    'di cui Zuccheri' => '0g',
                    'Fibra' => '2,4g',
                    'Proteina' => '1,2g',
                    'Sale' => '2,6g'
                ]
            ],
            11 => [
                'id' => 11,
                'name' => 'Olive Kalamata',
                'span' => 'Snocciolate',
                'image' => '/img/LAPA2574.jpg',
                'description' => 'Le olive Kalamata della Grecia sono un’autentica delizia mediterranea, rinomate per il loro sapore ricco e la loro consistenza carnosa. Raccolte a mano nelle regioni soleggiate della Grecia, queste olive di colore viola scuro si distinguono per il loro gusto unico, leggermente fruttato e vinoso, con note di mandorla. Ideali da gustare da sole, come parte di antipasti, insalate o piatti caldi, le olive Kalamata aggiungono profondità e carattere a ogni pietanza. Prodotto di eccellenza, perfetto per chi apprezza i sapori autentici e genuini della cucina greca.',
                'nutrition' => [
                    'Energia' => '835 kj / 200 kcal',
                    'Grasso' => '20g',
                    'di cui Saturi' => '2,5g',
                    'Carboidrato' => '3,6g',
                    'di cui Zuccheri' => '0g',
                    'Fibra' => '2,4g',
                    'Proteina' => '1,2g',
                    'Sale' => '2,6g'
                ]
            ],
            12 => [
                'id' => 12,
                'name' => 'Olive Kalamata',
                'span' => ' A rondelle',
                'image' => '/img/LAPA2578.jpg',
                'description' => 'Le olive Kalamata della Grecia sono un’autentica delizia mediterranea, rinomate per il loro sapore ricco e la loro consistenza carnosa. Raccolte a mano nelle regioni soleggiate della Grecia, queste olive di colore viola scuro si distinguono per il loro gusto unico, leggermente fruttato e vinoso, con note di mandorla. Ideali da gustare da sole, come parte di antipasti, insalate o piatti caldi, le olive Kalamata aggiungono profondità e carattere a ogni pietanza. Prodotto di eccellenza, perfetto per chi apprezza i sapori autentici e genuini della cucina greca.',
                'nutrition' => [
                    'Energia' => '835 kj / 200 kcal',
                    'Grasso' => '20g',
                    'di cui Saturi' => '2,5g',
                    'Carboidrato' => '3,6g',
                    'di cui Zuccheri' => '0g',
                    'Fibra' => '2,4g',
                    'Proteina' => '1,2g',
                    'Sale' => '2,6g'
                ]
            ],
            13 => [
                'id' => 13,
                'name' => 'Olive Verdi Calcidica',
                'span' => ' S.S.Mammouth',
                'image' => '/img/LAPA2563.jpg',
                'description' => 'Le olive Super Super Mammouth della Grecia sono una vera eccellenza gastronomica, apprezzate per le loro dimensioni imponenti e la loro consistenza carnosa. Queste olive giganti, di un verde brillante, offrono un sapore delicato e leggermente salato, con una nota finale burrosa e piacevolmente persistente. Perfette per essere gustate da sole, come antipasto o per arricchire piatti di salumi e formaggi, queste olive sono ideali per chi cerca un prodotto unico e di alta qualità. Raccolte a mano e lavorate secondo le tradizioni greche, le olive Super Super Mammut portano sulla tua tavola l’autenticità e la bontà dei sapori mediterranei.',
                'nutrition' => [
                    'Energia' => '802 kj / 192 kcal',
                    'Grasso' => '18g',
                    'di cui Saturi' => '3,4g',
                    'Carboidrato' => '5,9g',
                    'di cui Zuccheri' => '4,6g',
                    'Fibra' => '2,5g',
                    'Proteina' => '0,5g',
                    'Sale' => '4,2g'
                ]
            ]
        ];

        $packages = [
            1 => ['id' => 5, 'name' => 'Ripieno con peperoncino piri piri', 'image' => '/img/02.jpg', 'type' => 'barattolo'],
            2 => ['id' => 4, 'name' => 'Ripieno con jalapeno', 'image' => '/img/03.jpg', 'type' => 'barattolo'],
            3 => ['id' => 11, 'name' => 'Olive Kalamata snocciolate', 'image' => '/img/04.jpg', 'type' => 'barattolo'],
            4 => ['id' => 2, 'name' => 'Ripieno di mandorla', 'image' => '/img/05.jpg', 'type' => 'barattolo'],
            5 => ['id' => 7, 'name' => 'Olive Verdi Calcidica intere', 'image' => '/img/06.jpg', 'type' => 'barattolo'],
            6 => ['id' => 3, 'name' => 'Ripieno di aglio', 'image' => '/img/07.jpg', 'type' => 'barattolo'],
            7 => ['id' => 12, 'name' => 'Olive Kalamata A rondelle', 'image' => '/img/08.jpg', 'type' => 'barattolo'],
            8 => ['id' => 6, 'name' => 'Ripieno con cetriolini', 'image' => '/img/09.jpg', 'type' => 'barattolo'],
            9 => ['id' => 9, 'name' => 'Olive Verdi Calcidica a rondelle', 'image' => '/img/0009.jpg', 'type' => 'barattolo'],
            10 => ['id' => 1, 'name' => 'Ripieno con peperone florina rosso', 'image' => '/img/011.jpg', 'type' => 'barattolo'],
            11 => ['id' => 8, 'name' => 'Olive Verdi Calcidica snocciolate', 'image' => '/img/01.jpg', 'type' => 'barattolo'],
            12 => ['id' => 10, 'name' => 'Olive Kalamata intere', 'image' => '/img/012.jpg', 'type' => 'barattolo'],
            12 => ['id' => 5, 'name' => 'Ripieno con peperoncino piri piri', 'image' => '/img/013.jpg', 'type' => 'pkg-1_5kg'],
            13 => ['id' => 1, 'name' => 'Ripieno con peperone florina rosso', 'image' => '/img/014.jpg', 'type' => 'pkg-1_5kg'],
            14 => ['id' => 13, 'name' => 'S.S.Mammouth', 'image' => '/img/015.jpg', 'type' => 'pkg-1_5kg'],
            15 => ['id' => 10, 'name' => 'Olive Kalamata intere', 'image' => '/img/016.jpg', 'type' => 'pkg-1_5kg'],
            16=> ['id' => 4, 'name' => 'Ripieno con jalapeno', 'image' => '/img/017.jpg', 'type' => 'pkg-1_5kg'],
            17=> ['id' => 2, 'name' => 'Ripieno di mandorla', 'image' => '/img/018.jpg', 'type' => 'pkg-1_5kg'],
            18=> ['id' => 6, 'name' => 'Ripieno con cetriolini', 'image' => '/img/019.jpg', 'type' => 'pkg-1_5kg'],
            19=> ['id' => 7, 'name' => 'Olive Verdi Calcidica', 'image' => '/img/020.jpg', 'type' => 'pkg-1_5kg'],
        ];

        $item = $products[$id] ?? $packages[$id] ?? null;

        if ($item === null) {
            abort(404);
        }

     
    return view('dettagli', ['product' => $item]);
    
    }
    
}

