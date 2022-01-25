<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Monarobase\CountryList\CountryListFacade;
use App\PillarProject;

use App\User;
use App\Pillar;
use App\Department;
use App\DManagerRoles;
use App\Facilitator;
use App\Imprest;
use App\PillarActivities;
use App\PillarSubActivities;

use Auth;
use Facade\FlareClient\Http\Response;

class DSpillarManager extends Controller
{

    public function index()
    {
        $cuid = Auth::user()->user_id;
        $cpid = Auth::user()->pillar_id;
     
        //data to be passed when the data science dashboard is loaded
        // $pillarprojects = PillarProject::all();

        $pillarprojects = DB::table('pillar_projects')
        ->where('pillar_ref_id', '=', $cpid)
        ->get();

        //pillar manager get project created by them
        $myprojects = DB::table('pillar_projects')
                            ->where('created_by', '=', $cuid)
                            ->where('pillar_ref_id', '=', $cpid)
                            ->where('review_status', '=', 'pending review')
                            ->get();

        //pillar manager get activities created by them
        $myactivities=PillarActivities::where('pillar_ref_id', '=', $cpid)->get();
        $mysubactivities=PillarSubActivities::where('pillar_ref_id', '=', $cpid)->get();

         //my approved projects
         $myapprovedprojects = DB::table('pillar_projects')
                            ->where('created_by', '=', $cuid)
                            ->where('pillar_ref_id', '=', $cpid)
                            ->where('review_status', '=', 'approved')
                            ->get();


                //pillar manager get project created by them
        $imprests = DB::table('imprests')
                            ->where('pillar_id', '=', $cpid)
                            ->get();

         //my denied projects
          $mydeniedprojects = DB::table('pillar_projects')
                            ->where('created_by', '=', $cuid)
                            ->where('pillar_ref_id', '=', $cpid)
                            ->where('review_status', '=', 'denied')
                            ->get();


        return view('lmds.index', compact('pillarprojects', 'myapprovedprojects', 'mydeniedprojects'))->with('myprojects',$myprojects)->with('myactivities',$myactivities)->with('mysubactivities',$mysubactivities)->with("imprests",$imprests);

    }


    public function facilitatorpost(Request $request){

        $fac=new Facilitator();
        $fac->name=$request->facil_name;
        $fac->save();
        $facil=Facilitator::all();

        return Response()->json($facil);
    }
      //create new imprest
    public function createImprest(){



        return view('lmds.imprestds.create-new-imprest');
    }
    public function showImprest($id){
        $imprest = Imprest::find($id);

        return view('lmds.dsactivities.imprest_show')->with("imprest",$imprest);
    }



    public function createNewSubActivity(){
        $users=User::all();
        $countries=CountryListFacade::getlist('en');
        $regions=array(
            'Mjini Magharibi',
            'Dar es Salaam',
            'Kilimanjaro',
            'Unguja South',
            'Pemba South',
            'Unguja North',
            'Iringa',
            'Njombe',
            'Tanga',
            'Arusha',
            'Manyara',
            'Pemba North',
            'Ruvuma',
            'Morogoro',
            'Singida',
            'Mbeya',
            'Mara',
            'Pwani',
            'Geita',
            'Mwanza',
            'Kagera',
            'Kigoma',
            'Lindi',
            'Shinyanga',
            'Simiyu',
            'Mtwara',
            'Dodoma',
            'Katavi',
            'Rukwa',
            'Tabora'
        );
        $acties=PillarActivities::all();
        return view('lmds.dsactivities.ds-create-new-subactivity')->with('acties',$acties)
        ->with('users',$users)->with('countries',$countries)->with('regions',$regions);
    }

    public function createNewProjectActivity(){

        // $cprojid = Crypt::decrypt($id);
        return view('lmds.dsactivities.ds-create-project-activity');
    }

    public function Tanzaniaregions(){
    return array(
    'Mjini Magharibi',
    'Dar es Salaam',
    'Kilimanjaro',
    'Unguja South',
    'Pemba South',
    'Unguja North',
    'Iringa',
    'Njombe',
    'Tanga',
    'Arusha',
    'Manyara',
    'Pemba North',
    'Ruvuma',
    'Morogoro',
    'Singida',
    'Mbeya',
    'Mara',
    'Pwani',
    'Geita',
    'Mwanza',
    'Kagera',
    'Kigoma',
    'Lindi',
    'Shinyanga',
    'Simiyu',
    'Mtwara',
    'Dodoma',
    'Katavi',
    'Rukwa',
    'Tabora'
);

    }
}
