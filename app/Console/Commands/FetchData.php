<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\DomCrawler\Crawler;
use App\Flight;
use App\Airport;
use Log;
class FetchData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'flights:fetch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is the command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Log::info("inside handle");
        Flight::truncate();

        $airports = Airport::all();
        foreach($airports as $airport)
        {
            switch ($airport->id) {
                case '1':
                    $this->Beirut(1);
                    break;
                case '2':
                    $this->Kuwait(2);
                    break;
                
                default:
                    break;
            }
        }


    }

    public function Beirut($id)
    {
        $page_data =file_get_contents('http://www.beirutairport.gov.lb/_flight.php');
        $crawler = new Crawler($page_data);
        $flights = $crawler->filter('#date_1 > tbody >tr');

        foreach ($flights as $flight) {
            $crawler1 = new Crawler($flight);
            $flight = $crawler1->text(); 
            $flight = explode("\n", $flight);

            $obj = [
                'time'=>trim($flight[1]),
                'number'=>trim($flight[2]),
                'city'=>trim($flight[3]),
                'country'=>trim($flight[4]),
                'status'=>trim($flight[7]),
                'realTime'=>trim($flight[8]),
                'airportId'=>$id
            ];

            Flight::create($obj);
            
        }
    }

    public function Kuwait($id)
    {
        $page_data =file_get_contents('https://www.flightstats.com/go/weblet?guid=34b64945a69b9cac:46cf2cff:137a5643c65:-5b5f&imageColor=Grey&language=English&weblet=status&action=AirportFlightStatus&airportCode=KWI&airportQueryType=1');
        $crawler = new Crawler($page_data);
        $flights = $crawler->filter('.tableListingTable')->children();
        $result = [];

        foreach ($flights as $flight) {
            $crawler1 = new Crawler($flight);
            $flight = $crawler1->text(); 
            $flight = explode("\n", $flight);
            $obj = [
                'time'=>trim($flight[12]),
                'number'=>trim($flight[2]),
                'city'=>trim($flight[8]),
                'country'=>'',//trim($flight[4]),
                'status'=>isset($flight[16])?trim($flight[16]):'',
                'realTime'=>'',//trim($flight[8]),
                'airportId'=>$id
            ];

            Flight::create($obj);
            
        }


    }

}
