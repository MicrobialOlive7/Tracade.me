<?php

namespace App\Http\Controllers;
use App\Alumno;
use App\Charts\Bar;
use App\Charts\LineChart;
use App\Charts\pie;
use App\Evaluacion;
use App\Habilidad;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\IsFalse;
use SebastianBergmann\Diff\Line;

class LineController extends Controller
{
    public function index()
    {

        #ESTADISTICAS
        $alumnos = Alumno::all() -> count();
        $habilidadesTA = Habilidad::all() -> where('dis_id','1') -> count();
        $habilidadesPF = Habilidad::all() -> where('dis_id','2') -> count();

        #GRAFICA POLE HABILIDADES/TIEMPO/CALIFICACION
        $pole = new LineChart();
        $pole->displayLegend(true);
        $pole->labels(['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']);

        $enero1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '1')  -> wherein('eva_calificacion', [1]) ->  wherein('dis_id', [1]) -> get() ->count();
        $febrero1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '2')  -> wherein('eva_calificacion', [1]) ->  wherein('dis_id', [1]) -> get() ->count();
        $marzo1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '3')  -> wherein('eva_calificacion', [1]) ->  wherein('dis_id', [1]) -> get() ->count();
        $abril1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '4')  -> wherein('eva_calificacion', [1]) ->  wherein('dis_id', [1]) -> get() ->count();
        $mayo1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '5')  -> wherein('eva_calificacion', [1]) ->  wherein('dis_id', [1]) -> get() ->count();
        $junio1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '6')  -> wherein('eva_calificacion', [1]) ->  wherein('dis_id', [1]) -> get() ->count();
        $julio1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '7')  -> wherein('eva_calificacion', [1]) ->  wherein('dis_id', [1]) -> get() ->count();
        $agosto1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '8')  -> wherein('eva_calificacion', [1]) ->  wherein('dis_id', [1]) -> get() ->count();
        $septiembre1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '9')  -> wherein('eva_calificacion', [1]) ->  wherein('dis_id', [1]) -> get() ->count();
        $octubre1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '10')  -> wherein('eva_calificacion', [1]) ->  wherein('dis_id', [1]) -> get() ->count();
        $noviembre1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '11')  -> wherein('eva_calificacion', [1]) ->  wherein('dis_id', [1]) -> get() ->count();
        $diciembre1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '12')  -> wherein('eva_calificacion', [1]) ->  wherein('dis_id', [1]) -> get() ->count();

        $enero2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '1')  -> wherein('eva_calificacion', [2]) ->  wherein('dis_id', [1]) -> get() ->count();
        $febrero2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '2')  -> wherein('eva_calificacion', [2]) ->  wherein('dis_id', [1]) -> get() ->count();
        $marzo2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '3')  -> wherein('eva_calificacion', [2]) ->  wherein('dis_id', [1]) -> get() ->count();
        $abril2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '4')  -> wherein('eva_calificacion', [2]) ->  wherein('dis_id', [1]) -> get() ->count();
        $mayo2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '5')  -> wherein('eva_calificacion', [2]) ->  wherein('dis_id', [1]) -> get() ->count();
        $junio2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '6')  -> wherein('eva_calificacion', [2]) ->  wherein('dis_id', [1]) -> get() ->count();
        $julio2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '7')  -> wherein('eva_calificacion', [2]) ->  wherein('dis_id', [1]) -> get() ->count();
        $agosto2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '8')  -> wherein('eva_calificacion', [2]) ->  wherein('dis_id', [1]) -> get() ->count();
        $septiembre2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '9')  -> wherein('eva_calificacion', [2]) ->  wherein('dis_id', [1]) -> get() ->count();
        $octubre2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '10')  -> wherein('eva_calificacion', [2]) ->  wherein('dis_id', [1]) -> get() ->count();
        $noviembre2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '11')  -> wherein('eva_calificacion', [2]) ->  wherein('dis_id', [1]) -> get() ->count();
        $diciembre2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '12')  -> wherein('eva_calificacion', [2]) ->  wherein('dis_id', [1]) -> get() ->count();

        $enero3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '1')  -> wherein('eva_calificacion', [3]) ->  wherein('dis_id', [1]) -> get() ->count();
        $febrero3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '2')  -> wherein('eva_calificacion', [3]) ->  wherein('dis_id', [1]) -> get() ->count();
        $marzo3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '3')  -> wherein('eva_calificacion', [3]) ->  wherein('dis_id', [1]) -> get() ->count();
        $abril3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '4')  -> wherein('eva_calificacion', [3]) ->  wherein('dis_id', [1]) -> get() ->count();
        $mayo3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '5')  -> wherein('eva_calificacion', [3]) ->  wherein('dis_id', [1]) -> get() ->count();
        $junio3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '6')  -> wherein('eva_calificacion', [3]) ->  wherein('dis_id', [1]) -> get() ->count();
        $julio3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '7')  -> wherein('eva_calificacion', [3]) ->  wherein('dis_id', [1]) -> get() ->count();
        $agosto3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '8')  -> wherein('eva_calificacion', [3]) ->  wherein('dis_id', [1]) -> get() ->count();
        $septiembre3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '9')  -> wherein('eva_calificacion', [3]) ->  wherein('dis_id', [1]) -> get() ->count();
        $octubre3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '10')  -> wherein('eva_calificacion', [3]) ->  wherein('dis_id', [1]) -> get() ->count();
        $noviembre3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '11')  -> wherein('eva_calificacion', [3]) ->  wherein('dis_id', [1]) -> get() ->count();
        $diciembre3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '12')  -> wherein('eva_calificacion', [3]) ->  wherein('dis_id', [1]) -> get() ->count();

        $pole->dataset('1 estrella', 'line', [$enero1,$febrero1,$marzo1,$abril1,$mayo1,$junio1,$julio1,$agosto1,$septiembre1,$octubre1,$noviembre1,$diciembre1])
            ->color("#2748B9");
        $pole->dataset('2 estrellas', 'line', [$enero2,$febrero2,$marzo2,$abril2,$mayo2,$junio2,$julio2,$agosto2,$septiembre2,$octubre2,$noviembre2,$diciembre2])
            ->color("#F3A410");
        $pole->dataset('3 estrellas', 'line', [$enero3,$febrero3,$marzo3,$abril3,$mayo3,$junio3,$julio3,$agosto3,$septiembre3,$octubre3,$noviembre3,$diciembre3])
            ->color("#D3227B");

        #GRAFICA TELAS HABILIDADES/TIEMPO/CALIFICACION
        $telas = new LineChart();
        $telas->displayLegend(true);
        $telas->labels(['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']);

        $enero1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '1')  -> wherein('eva_calificacion', [1]) ->  wherein('dis_id', [2]) -> get() ->count();
        $febrero1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '2')  -> wherein('eva_calificacion', [1]) ->  wherein('dis_id', [2]) -> get() ->count();
        $marzo1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '3')  -> wherein('eva_calificacion', [1]) ->  wherein('dis_id', [2]) -> get() ->count();
        $abril1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '4')  -> wherein('eva_calificacion', [1]) ->  wherein('dis_id', [2]) -> get() ->count();
        $mayo1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '5')  -> wherein('eva_calificacion', [1]) ->  wherein('dis_id', [2]) -> get() ->count();
        $junio1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '6')  -> wherein('eva_calificacion', [1]) ->  wherein('dis_id', [2]) -> get() ->count();
        $julio1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '7')  -> wherein('eva_calificacion', [1]) ->  wherein('dis_id', [2]) -> get() ->count();
        $agosto1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '8')  -> wherein('eva_calificacion', [1]) ->  wherein('dis_id', [2]) -> get() ->count();
        $septiembre1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '9')  -> wherein('eva_calificacion', [1]) ->  wherein('dis_id', [2]) -> get() ->count();
        $octubre1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '10')  -> wherein('eva_calificacion', [1]) ->  wherein('dis_id', [2]) -> get() ->count();
        $noviembre1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '11')  -> wherein('eva_calificacion', [1]) ->  wherein('dis_id', [2]) -> get() ->count();
        $diciembre1 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '12')  -> wherein('eva_calificacion', [1]) ->  wherein('dis_id', [2]) -> get() ->count();

        $enero2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '1')  -> wherein('eva_calificacion', [2]) ->  wherein('dis_id', [2]) -> get() ->count();
        $febrero2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '2')  -> wherein('eva_calificacion', [2]) ->  wherein('dis_id', [2]) -> get() ->count();
        $marzo2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '3')  -> wherein('eva_calificacion', [2]) ->  wherein('dis_id', [2]) -> get() ->count();
        $abril2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '4')  -> wherein('eva_calificacion', [2]) ->  wherein('dis_id', [2]) -> get() ->count();
        $mayo2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '5')  -> wherein('eva_calificacion', [2]) ->  wherein('dis_id', [2]) -> get() ->count();
        $junio2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '6')  -> wherein('eva_calificacion', [2]) ->  wherein('dis_id', [2]) -> get() ->count();
        $julio2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '7')  -> wherein('eva_calificacion', [2]) ->  wherein('dis_id', [2]) -> get() ->count();
        $agosto2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '8')  -> wherein('eva_calificacion', [2]) ->  wherein('dis_id', [2]) -> get() ->count();
        $septiembre2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '9')  -> wherein('eva_calificacion', [2]) ->  wherein('dis_id', [2]) -> get() ->count();
        $octubre2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '10')  -> wherein('eva_calificacion', [2]) ->  wherein('dis_id', [2]) -> get() ->count();
        $noviembre2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '11')  -> wherein('eva_calificacion', [2]) ->  wherein('dis_id', [2]) -> get() ->count();
        $diciembre2 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '12')  -> wherein('eva_calificacion', [2]) ->  wherein('dis_id', [2]) -> get() ->count();

        $enero3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '1')  -> wherein('eva_calificacion', [3]) ->  wherein('dis_id', [2]) -> get() ->count();
        $febrero3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '2')  -> wherein('eva_calificacion', [3]) ->  wherein('dis_id', [2]) -> get() ->count();
        $marzo3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '3')  -> wherein('eva_calificacion', [3]) ->  wherein('dis_id', [2]) -> get() ->count();
        $abril3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '4')  -> wherein('eva_calificacion', [3]) ->  wherein('dis_id', [2]) -> get() ->count();
        $mayo3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '5')  -> wherein('eva_calificacion', [3]) ->  wherein('dis_id', [2]) -> get() ->count();
        $junio3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '6')  -> wherein('eva_calificacion', [3]) ->  wherein('dis_id', [2]) -> get() ->count();
        $julio3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '7')  -> wherein('eva_calificacion', [3]) ->  wherein('dis_id', [2]) -> get() ->count();
        $agosto3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '8')  -> wherein('eva_calificacion', [3]) ->  wherein('dis_id', [2]) -> get() ->count();
        $septiembre3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '9')  -> wherein('eva_calificacion', [3]) ->  wherein('dis_id', [2]) -> get() ->count();
        $octubre3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '10')  -> wherein('eva_calificacion', [3]) ->  wherein('dis_id', [2]) -> get() ->count();
        $noviembre3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '11')  -> wherein('eva_calificacion', [3]) ->  wherein('dis_id', [2]) -> get() ->count();
        $diciembre3 =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> whereMonth('evaluacion.created_at', '12')  -> wherein('eva_calificacion', [3]) ->  wherein('dis_id', [2]) -> get() ->count();

        $telas->dataset('1 estrella', 'line', [$enero1,$febrero1,$marzo1,$abril1,$mayo1,$junio1,$julio1,$agosto1,$septiembre1,$octubre1,$noviembre1,$diciembre1])
            ->color("#2748B9");
        $telas->dataset('2 estrellas', 'line', [$enero2,$febrero2,$marzo2,$abril2,$mayo2,$junio2,$julio2,$agosto2,$septiembre2,$octubre2,$noviembre2,$diciembre2])
            ->color("#F3A410");
        $telas->dataset('3 estrellas', 'line', [$enero3,$febrero3,$marzo3,$abril3,$mayo3,$junio3,$julio3,$agosto3,$septiembre3,$octubre3,$noviembre3,$diciembre3])
            ->color("#D3227B");

        #GRAFICA BARRAS NUMERO ALUMNOS
        $barras = new Bar();
        $barras->displayLegend(false);
        $barras->labels(['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']);
        $enero = Alumno::all()->whereBetween('created_at', [Carbon::now()->subYears(1) . '-01-31', Carbon::now()->year . '-02-01'])->count();
        $febrero = Alumno::all()->whereBetween('created_at', [Carbon::now()->year . '-01-31', Carbon::now()->year . '-03-01'])->count();
        $marzo = Alumno::all()->whereBetween('created_at', [Carbon::now()->year . '-02-31', Carbon::now()->year . '-04-01'])->count();
        $abril = Alumno::all()->whereBetween('created_at', [Carbon::now()->year . '-03-31', Carbon::now()->year . '-05-01'])->count();
        $mayo = Alumno::all()->whereBetween('created_at', [Carbon::now()->year . '-04-31', Carbon::now()->year . '-06-01'])->count();
        $junio = Alumno::all()->whereBetween('created_at', [Carbon::now()->year . '-05-31', Carbon::now()->year . '-07-01'])->count();
        $julio = Alumno::all()->whereBetween('created_at', [Carbon::now()->year . '-06-31', Carbon::now()->year . '-08-01'])->count();
        $agosto = Alumno::all()->whereBetween('created_at', [Carbon::now()->year . '-07-31', Carbon::now()->year . '-09-01'])->count();
        $septiembre = Alumno::all()->whereBetween('created_at', [Carbon::now()->year . '-08-31', Carbon::now()->year . '-10-01'])->count();
        $octubre = Alumno::all()->whereBetween('created_at', [Carbon::now()->year . '-09-31', Carbon::now()->year . '-11-01'])->count();
        $noviembre = Alumno::all()->whereBetween('created_at', [Carbon::now()->year . '-10-31', Carbon::now()->year . '-12-01'])->count();
        $diciembre = Alumno::all()->whereBetween('created_at', [Carbon::now()->year . '-11-31', Carbon::now()->addYears(1) . '-01-01'])->count();

        $barras->dataset('Progreso', 'bar', [$enero, $febrero, $marzo, $abril, $mayo, $junio, $julio, $agosto, $septiembre, $octubre, $noviembre, $diciembre])
            ->color("#27B958")
            ->backgroundColor("#27B958");

        #GRAFICA PIE HABILIDADES/DISCIPLINA
        $disciplinas = new pie();
        $disciplinas->displayLegend(true);
        $disciplinas->labels(['Pole Fitness', 'Telas Aéreas']);

        $polef =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> wherein('eva_calificacion', [3]) ->  wherein('dis_id', [1]) -> get() ->count();
        $telasa =DB::table('evaluacion')->join('habilidad', 'hab_id', '=', 'habilidad.id')-> wherein('eva_calificacion', [3]) ->  wherein('dis_id', [2]) -> get() ->count();

        $disciplinas->dataset('Disciplina', 'pie', [$polef,$telasa])
            ->Backgroundcolor(["#2748B9","#F3A410","#D3227B"]);
        return view('instructor.dashboard', compact('pole', 'disciplinas','barras','alumnos','habilidadesPF','habilidadesTA','telas'));
    }
}
