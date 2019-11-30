<?php

namespace App\Http\Controllers;
use App\Alumno;
use App\Charts\Bar;
use App\Charts\LineChart;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\IsFalse;
use SebastianBergmann\Diff\Line;

class LineController extends Controller
{
    public function index(){
        $line = new LineChart();
        $line -> displayLegens(false);
        $line -> labels(['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']);

        $line->dataset('My dataset', 'line', [1, 2, 3, 4]);
        $line->dataset('My dataset 2', 'line', [4, 3, 2, 1]);

        $barras = new Bar();
        $barras -> displayLegend(false);
        $barras->labels(['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']);
        $enero = Alumno::all() -> whereBetween('created_at',[Carbon::now()->subYears(1).'-01-31',Carbon::now()->year.'-02-01']) -> count();
        $febrero = Alumno::all() -> whereBetween('created_at',[Carbon::now()->year.'-01-31',Carbon::now()->year.'-03-01']) -> count();
        $marzo = Alumno::all() -> whereBetween('created_at',[Carbon::now()->year.'-02-31',Carbon::now()->year.'-04-01']) -> count();
        $abril = Alumno::all() -> whereBetween('created_at',[Carbon::now()->year.'-03-31',Carbon::now()->year.'-05-01']) -> count();
        $mayo = Alumno::all() -> whereBetween('created_at',[Carbon::now()->year.'-04-31',Carbon::now()->year.'-06-01']) -> count();
        $junio = Alumno::all() -> whereBetween('created_at',[Carbon::now()->year.'-05-31',Carbon::now()->year.'-07-01']) -> count();
        $julio = Alumno::all() -> whereBetween('created_at',[Carbon::now()->year.'-06-31',Carbon::now()->year.'-08-01']) -> count();
        $agosto = Alumno::all() -> whereBetween('created_at',[Carbon::now()->year.'-07-31',Carbon::now()->year.'-09-01']) -> count();
        $septiembre = Alumno::all() -> whereBetween('created_at',[Carbon::now()->year.'-08-31',Carbon::now()->year.'-10-01']) -> count();
        $octubre = Alumno::all() -> whereBetween('created_at',[Carbon::now()->year.'-09-31',Carbon::now()->year.'-11-01']) -> count();
        $noviembre = Alumno::all() -> whereBetween('created_at',[Carbon::now()->year.'-10-31',Carbon::now()->year.'-12-01']) -> count();
        $diciembre = Alumno::all() -> whereBetween('created_at',[Carbon::now()->year.'-11-31',Carbon::now()->addYears(1).'-01-01']) -> count();

        $barras->dataset('Progreso', 'bar', [$enero, $febrero, $marzo,$abril,$mayo,$junio,$julio,$agosto,$septiembre,$octubre,$noviembre,$diciembre])
                ->color("#27B958")
                ->backgroundColor("#27B958");


        return view('instructor.dashboard', compact('line','barras'));

