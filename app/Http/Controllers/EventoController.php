<?php

namespace App\Http\Controllers;


use App\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{

    public function show(){

    }
    //PARA INICIALIZAR EL CLIENTE
    public function getClient(){
        $client = new \Google_Client();
        $client->setApplicationName('Google Calendar API PHP Quickstart');
        $client->setScopes(\Google_Service_Calendar::CALENDAR_READONLY);
        $client->setAuthConfig('C:/xampp/htdocs/Tracade.me/credentials.json');
        $client->setAccessType('offline');
        $client->setPrompt('select_account consent');

        // Load previously authorized token from a file, if it exists.
        // The file token.json stores the user's access and refresh tokens, and is
        // created automatically when the authorization flow completes for the first
        // time.
        $tokenPath = 'C:/xampp/htdocs/Tracade.me/token.json';
        if (file_exists($tokenPath)) {
            $accessToken = json_decode(file_get_contents($tokenPath), true);
            $client->setAccessToken($accessToken);
        }

        // If there is no previous token or it's expired.
        if ($client->isAccessTokenExpired()) {
            // Refresh the token if possible, else fetch a new one.
            if ($client->getRefreshToken()) {
                $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
            } else {
                // Request authorization from the user.
                $authUrl = $client->createAuthUrl();
                printf("Open the following link in your browser:\n%s\n", $authUrl);
                print 'Enter verification code: ';
                $authCode = trim(fgets('STDIN'));

                // Exchange authorization code for an access token.
                $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
                $client->setAccessToken($accessToken);

                // Check to see if there was an error.
                if (array_key_exists('error', $accessToken)) {
                    throw new Exception(join(', ', $accessToken));
                }
            }
            // Save the token to a file.
            if (!file_exists(dirname($tokenPath))) {
                mkdir(dirname($tokenPath), 0700, true);
            }
            file_put_contents($tokenPath, json_encode($client->getAccessToken()));
        }
        return $client;
    }
    //PARA MODIFICAR EVENTOS
    public function modevento(){
        $client = $this->getClient();
        $service = new \Google_Service_Calendar($client);

        $event = $service->events->get('1h5c74a7vccmvf9hl2omu6ajgk@group.calendar.google.com', 'eventId');
    }

    //PARA CREAR EVENTOS
    public function quickstart($eve_nombre,$eve_fecha,$eve_descripcion, $gru_id){
        require 'C:/xampp/htdocs/Tracade.me/vendor/autoload.php';

// Get the API client and construct the service object.
        $client = $this->getClient();
        $service = new \Google_Service_Calendar($client);

// Print the next 10 events on the user's calendar.
        $calendarId = '1h5c74a7vccmvf9hl2omu6ajgk@group.calendar.google.com';
        $optParams = array(
            'maxResults' => 10,
            'orderBy' => 'startTime',
            'singleEvents' => true,
            'timeMin' => "2019-01-01T22:20:17+01:00",
        );
        $results = $service->events->listEvents($calendarId, $optParams);
        $events = $results->getItems();

        list($fecha1,$fecha2) = explode(" ",$eve_fecha);
        $fecha1 = str_replace("/","-",$fecha1);
        //dd($hour);
        //dd($fecha2);

        $event = new \Google_Service_Calendar_Event(array(
            'summary' => $eve_nombre,
            'description' => $eve_descripcion,
            'start' => array(
                'dateTime' => $fecha1.'T'.$fecha2.'-06:00',
                'timeZone' => 'America/Mexico_City',
            ),
            'end' => array(
                'dateTime' => $fecha1.'T'.$fecha2.'-06:00',
                'timeZone' => 'America/Mexico_City',
            ),
            'recurrence' => array(
                'RRULE:FREQ=DAILY;COUNT=1'
            ),
        ));

        $calendarId = '1h5c74a7vccmvf9hl2omu6ajgk@group.calendar.google.com';
        $event = $service->events->insert($calendarId, $event);
        $id = $service->events->get($calendarId,"eventId");
        printf('Event created: %s %s\n', $event->htmlLink,$id);

    }
    public function create(Request $request){

        $evento = new Evento();
        $evento->eve_nombre = $request->name;
        $evento->eve_fecha = $request->fecha." ".$request->hora.":".$request->min.":00";
        $evento->eve_descripcion = $request->descripcion;
        $evento->gru_id = 1;
        $evento->save();
        $this->quickstart($evento->eve_nombre,$evento->eve_fecha,$evento->eve_descripcion, $evento->gru_id);
       // return redirect()->route('calendario');
    }

    public function update(Request $request, $id){
        $evento = Evento::all()->find($id);
        $evento->eve_nombre = $request->name;
        $evento->eve_fecha = $request->fecha." ".$request->hora.":".$request->min.":00";
        $evento->eve_descripcion = $request->descripcion;
        $evento->gru_id = 1;
        $evento->save();
        return $evento;
    }

    public function delete($id){
        Evento::all()->find($id)->delete();
        //return redirect()->route('alumnos');
    }


}
