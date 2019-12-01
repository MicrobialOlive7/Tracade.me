<?php

namespace App\Http\Controllers;


use App\Evento;
use App\Grupo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;
use function GuzzleHttp\Promise\all;

class EventoController extends Controller
{

    public function show(){
        $grupos = Grupo::all();
        return view('Instructor.CrearEventos', compact('grupos'));
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

    public function modevento($eve_nombre,$eve_fecha,$eve_descripcion, $gru_id,$id){

        $client = $this->getClient();
        $service = new \Google_Service_Calendar($client);
        list($fecha1,$fecha2) = explode(" ",$eve_fecha);
        $fecha1 = str_replace("/","-",$fecha1);

        $start = new \Google_Service_Calendar_EventDateTime();
        $start -> setDateTime($fecha1.'T'.$fecha2.'-06:00');
        $start -> setTimeZone('America/Mexico_City');

        $evento = $service->events->get('1h5c74a7vccmvf9hl2omu6ajgk@group.calendar.google.com',$id);
        $evento -> setSummary($eve_nombre);
        $evento -> setDescription($eve_descripcion);
        $evento -> setStart($start);
        $evento -> setEnd($start);
        $evento -> setStatus('confirmed');
        $updatedEvent = $service->events->update('1h5c74a7vccmvf9hl2omu6ajgk@group.calendar.google.com',$id,$evento);
    }

    public function elimevento($id){

        $client = $this->getClient();
        $service = new \Google_Service_Calendar($client);
        $service->events->delete('1h5c74a7vccmvf9hl2omu6ajgk@group.calendar.google.com',$id);
    }

    //PARA CREAR EVENTOS
    public function quickstart($eve_nombre,$eve_fecha,$eve_descripcion, $gru_id){
        require 'C:/xampp/htdocs/Tracade.me/vendor/autoload.php';

// Get the API client and construct the service object.
        $client = $this->getClient();
        $service = new \Google_Service_Calendar($client);

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

        $eventoAPI = ["htmlLink" => $event->htmlLink, "id" => $event->id, "caledarId" => $calendarId];
        //printf('Event created: %s\n', $event->htmlLink);
        return $eventoAPI;

    }
    public function create(Request $request){
        $evento = new Evento();
        $evento->eve_nombre = $request->name;
        $evento->eve_fecha = $request->fecha." ".$request->hora.":".$request->min.":00";
        $evento->eve_descripcion = $request->descripcion;
        $evento->gru_id = $request->grupo;
        $grupo = Grupo::all()->find($request->grupo);
        $descripcion = "Grupo: ".$grupo->gru_nombre."\n".$evento->eve_descripcion;
        $eventoAPI = $this->quickstart($evento->eve_nombre,$evento->eve_fecha,$descripcion, $evento->gru_id);

        $evento->api_htmllink = $eventoAPI["htmlLink"];
        $evento->api_id = $eventoAPI["id"];
        
        $evento->save();
        return redirect()->route('calendario');

    }

    public function update(Request $request){
        $evento = Evento::all()->find($request->id);
        if(isset($request->name)) {
            $evento->eve_nombre = $request->name;
        }
        if(isset($request->fecha) && isset($request->min)){
            $evento->eve_fecha = $request->fecha." ".$request->hora.":".$request->min.":00";
        }

        if(isset($request->eve_descripcion)){
            $evento->eve_descripcion = $request->grupo;
        }
        if($request->grupo != ""){
            $evento->gru_id = $request->grupo;
            $grupo = Grupo::all()->find($request->grupo);
            $descripcion = "Grupo: ".$grupo->gru_nombre."\n".$evento->eve_descripcion;
        }
        else{
            $descripcion = $evento->gru_descripcion;
        }
        $evento->save();
        $this->modevento($evento->eve_nombre,$evento->eve_fecha,$descripcion, $evento->gru_id, $evento->api_id);
        return redirect()->route('calendario');
    }

    public function showUpdate(){
        $eventos =  Evento::all();
        $grupos = Grupo::all();
        return view('Instructor.ModEventos', compact('eventos','grupos'));
    }
    public function showDelete(){
        $eventos =  Evento::all();
        return view('Instructor.EliminarEvento', compact('eventos'));
    }
    public function delete(Request $request){
        $evento = Evento::all()->find($request->id);
        $this->elimevento($evento->api_id);
        $evento->delete();
        return redirect()->route('calendario');
    }


}
