<?php

namespace App\Http\Controllers\Alumno;

use App\Alumno;
use App\Charts\Bar;
use App\Charts\LineChart;
use App\Charts\pie;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ChartsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $alu_id = Auth::user()->id;

        $habilidadesT =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> wherein('eva_calificacion', [3]) ->  where('alu_id', '=',$alu_id) -> get() ->count();

        $habilidades = new LineChart();
        $habilidades->displayLegend(true);
        $habilidades->labels(['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']);

        $enero1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '1')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();
        $febrero1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '2')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();
        $marzo1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '3')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();
        $abril1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '4')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();
        $mayo1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '5')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();
        $junio1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '6')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();
        $julio1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '7')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();
        $agosto1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '8')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();
        $septiembre1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '9')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();
        $octubre1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '10')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();
        $noviembre1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '11')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();
        $diciembre1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '12')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();

        $enero2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '1')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();
        $febrero2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '2')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();
        $marzo2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '3')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();
        $abril2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '4')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();
        $mayo2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '5')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();
        $junio2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '6')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();
        $julio2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '7')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();
        $agosto2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '8')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();
        $septiembre2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '9')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();
        $octubre2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '10')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();
        $noviembre2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '11')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();
        $diciembre2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '12')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();

        $enero3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '1')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();
        $febrero3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '2')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();
        $marzo3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '3')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();
        $abril3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '4')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();
        $mayo3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '5')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();
        $junio3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '6')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();
        $julio3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '7')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();
        $agosto3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '8')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();
        $septiembre3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '9')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();
        $octubre3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '10')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();
        $noviembre3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '11')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();
        $diciembre3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '12')  -> wherein('eva_calificacion', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();

        $habilidades->dataset('1 estrella', 'line', [$enero1,$febrero1,$marzo1,$abril1,$mayo1,$junio1,$julio1,$agosto1,$septiembre1,$octubre1,$noviembre1,$diciembre1])
            ->color("#2748B9");
        $habilidades->dataset('2 estrellas', 'line', [$enero2,$febrero2,$marzo2,$abril2,$mayo2,$junio2,$julio2,$agosto2,$septiembre2,$octubre2,$noviembre2,$diciembre2])
            ->color("#F3A410");
        $habilidades->dataset('3 estrellas', 'line', [$enero3,$febrero3,$marzo3,$abril3,$mayo3,$junio3,$julio3,$agosto3,$septiembre3,$octubre3,$noviembre3,$diciembre3])
            ->color("#D3227B");

        #GRAFICA HABILIDADES//CALIFICACION
        $clasificacion = new pie();
        $clasificacion->displayLegend(true);
        $clasificacion->labels(['Principiante', 'Intermedio', 'Avanzado']);

        $onestars =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> wherein('hab_dificultad', [1]) ->  where('alu_id', '=',$alu_id) -> get() ->count();
        $twostars =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> wherein('hab_dificultad', [2]) ->  where('alu_id', '=',$alu_id) -> get() ->count();
        $threestars =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> wherein('hab_dificultad', [3]) ->  where('alu_id', '=',$alu_id) -> get() ->count();

        $clasificacion->dataset('Dificultad', 'pie', [$onestars,$twostars,$threestars])
        ->Backgroundcolor(["#2748B9","#F3A410","#D3227B"]);

        return view('Alumno.dashboard', compact('habilidades','clasificacion','habilidadesT'));

        }
}
