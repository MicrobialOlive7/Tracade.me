<?php

namespace App\Http\Controllers;


use App\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{

    public function show(){

    }

    public function getClient()
    {
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
    public function quickstart(Request $request){
        require 'C:/xampp/htdocs/Tracade.me/vendor/autoload.php';
        /**
         * Returns an authorized API client.
         * @return Google_Client the authorized client object
         */

        $this->getClient();

// Get the API client and construct the service object.
        $client = $this->getClient();
        $service = new \Google_Service_Calendar($client);

// Print the next 10 events on the user's calendar.
        $calendarId = 'primary';
        $optParams = array(
            'maxResults' => 10,
            'orderBy' => 'startTime',
            'singleEvents' => true,
            'timeMin' => "2019-01-01T22:20:17+01:00",
        );
        $results = $service->events->listEvents($calendarId, $optParams);
        $events = $results->getItems();

// Refer to the PHP quickstart on how to setup the environment:
// https://developers.google.com/calendar/quickstart/php
// Change the scope to Google_Service_Calendar::CALENDAR and delete any stored
// credentials.

        $event = new \Google_Service_Calendar_Event(array(
            'summary' => 'Google I/O 2015',
            'location' => '800 Howard St., San Francisco, CA 94103',
            'description' => 'A chance to hear more about Google\'s developer products.',
            'start' => array(
                'dateTime' => '2015-05-28T09:00:00-07:00',
                'timeZone' => 'America/Los_Angeles',
            ),
            'end' => array(
                'dateTime' => '2015-05-28T17:00:00-07:00',
                'timeZone' => 'America/Los_Angeles',
            ),
            'recurrence' => array(
                'RRULE:FREQ=DAILY;COUNT=1'
            ),
            'attendees' => array(
                array('email' => 'lpage@example.com'),
                array('email' => 'sbrin@example.com'),
            ),
            'reminders' => array(
                'useDefault' => FALSE,
                'overrides' => array(
                    array('method' => 'email', 'minutes' => 24 * 60),
                    array('method' => 'popup', 'minutes' => 10),
                ),
            ),
        ));

        $calendarId = 'primary';
        $event = $service->events->insert($calendarId, $event);
        printf('Event created: %s\n', $event->htmlLink);

        if (empty($events)) {
            print "No se encontró ningún evento.\n";
        } else {
            print "Eventos siguientes:\n";
            foreach ($events as $event) {
                $start = $event->start->dateTime;
                if (empty($start)) {
                    $start = $event->start->date;
                }
                printf("%s (%s)\n", $event->getSummary(), $start);
            }
        }
    }
    public function create(Request $request){

        $evento = new Evento();
        $evento->eve_nombre = $request->name;
        $evento->eve_fecha = $request->fecha." ".$request->hora.":".$request->min.":00";
        $evento->eve_descripcion = $request->descripcion;
        $evento->gru_id = 1;
        $evento->save();
        return redirect()->route('calendario');
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
