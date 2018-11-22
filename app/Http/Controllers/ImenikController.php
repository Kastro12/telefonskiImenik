<?php

namespace App\Http\Controllers;

use App\Podaci;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImenikController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $podaci = Podaci::all()->groupBy(['grad',
            function($item){return $item['prezime'];}
            ]);

        return view('index')->with('podaci',$podaci);
    }

    public function grafikon()
    {

        $podaci = Podaci::all()->groupBy('grad');

        $ar=[];


foreach ($podaci as $g=>$podatak)
{
    $obj=new \stdClass();
      $num = Podaci::where('grad',$g)->count();
        $obj->label=$g;
        $obj->y = $num;
        array_push($ar,$obj);


}


    //    dd($ar);die;

        return view('grafikon')->with('podaci',$ar);
    }

//    public function pretraga()
//    {
//        return view('pretraga');
//    }

    public function mapa()
    {

        $adrese = Podaci::all();

        $arr=[];
        foreach ($adrese as $adresa)
        {
            $obj=new \stdClass();
            $obj->grad=$adresa->grad;
            $obj->ulica=$adresa->ulica;
            $obj->broj=$adresa->broj;
            array_push($arr,$obj);
        }

      //  dd($arr);die;


        return view('mapa')->with('adrese',$arr);
    }

    public function search(Request $request)
    {
        if($request->ajax()){
            $search_result=DB::table('podaci')
                ->where('ime','LIKE', '%'.$request->search.'%')
                ->orWhere('prezime','LIKE','%'.$request->search.'%')
                ->orWhere('grad','LIKE','%'.$request->search.'%')
                ->orWhere('ulica','LIKE','%'.$request->search.'%')
                ->get();
        }


        if($search_result){
            return $search_result;
        }
    }
}
