<?php

namespace App\Http\Controllers;
use App\Models\Tache_Publique;
use Illuminate\Http\Request;
use App\Http\Requests\Tache_PubliqueRequest;
use Illuminate\Support\Facades\Auth;
class TacheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        //get all fillable from table
        
        /* $taches =new Tache_Publique();

        $data=Tache_Publique::where('classe')->get();; */

        $data=Tache_Publique::all();
        /* $data->attributesToArray(); */
        $table=[];
        /* if (Auth::guard('eleve')->check()) { */
            foreach($data as $tache){
                $table[]=[
                    'id'=>$tache->id,
                    'type'=>$tache->type,
                    'date_debut'=>$tache->date_debut,
                    'duree'=>$tache->duree,
                    'description'=>$tache->description,
                    'titre'=>$tache->titre,
                    'classe'=>$tache->classe,
                    'localisation'=>$tache->localisation,
                    
                    
                    
                ];

                

                
            }
            /* dd($table[1]); */
           /* dd((string) Tache_Publique::find(1)); */
           $i=1;
           $inputs=[];
           foreach($data as $table){

            $inputs[$i]=[
                
                'type'=>$table->type,
                'debut'=>$table->date_debut,
                'fin'=>$table->duree+$table->date_debut,
                'description'=>$table->description,
                'titre'=>$table->titre,
                'classe'=>$table->classe,
                'localisation'=>$table->localisation,
                
                
                
            ];
            /* $inputs =  [
                'fin' => $table[$i]['date_debut']+$table[1]['duree'],
                'titre'=>$table[$i]['titre'],
                'classe'=>$table[$i]['classe'],
                'localisation'=>$table[$i]['localisation'],
                'debut'=>$table[$i]['date_debut'],
                'description'=>$table[$i]['description'],
                'type'=>$table[$i]['type']
            ];
             */
            $i++;
           }
           $i=1;
           
           /*  dd($inputs); */
            $tachJson=json_encode($inputs);
            
        //}
       return   $tachJson;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */ /* $data['id_eleve']=auth()->guard('eleve')->user()->id;
            $data['id_enseignant']=null;
            $data['id_matiere']=null;
            $date['duree']= */
    public function store(Tache_PubliqueRequest $request)
    {
       
        /* dd($request->all()); */
        
        $data=$request->all();
        /* if (Auth::guard('eleve')->check()) { */
           
            $inputs = array_merge($request->all(), [
                /* 'user_id' => auth()->guard('eleve')->user()->id, */
                /* 'id_eleve'=>auth()->guard('eleve')->user()->id, */
                'id_eleve'=>$data['id_eleve'],
                'duree' => $data['fin']-$data['debut'],
                'titre'=>$data['titre'],
                'classe'=>$data['classe'],
                'localisation'=>$data['localisation'],
                'date_debut'=>$data['debut'],
                'description'=>$data['description'],
                'type'=>$data['typeEvent']
            ]);
            /* dd($inputs); */
            $tache = Tache_Publique::create($inputs);

        
        

        
        return Tache_Publique::create($request->all());
        //response()->json([Tache_Publique::create($request->all())]);
       /*  return Tache_Publique::create($request->all()); */
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Tache_Publique::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /* public function edit($id)
    {
       
    } */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tache=Tache_Publique::find($id);
        $tache->update($request->all());
        return $tache;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function search($name)
    {
        return Tache_Publique::where('nom', 'like', '%'.$name.'%')->get();
    }
}
       // $tache = $this->traiteReponses($request);


        /* $inputs=array_merge($request->all(), [
            'titre'=>$tache['titre'],
            'description'=>$tache['description'],
            ]); */
       /*  $tache = Tache_Publique::create($request->all()); */
        /* dd($tache); */
        /* return redirect('tache')->withOk("La " . $tache->titre . " a été ajoutée."); */
        /* protected $fillable=['type','date_debut','duree','description','titre,classe' */
        /* $request->validate([
            'date_debut' => 'required',
            'duree' => 'required',
            'titre' => 'required',
            'type' => 'required',
            'classe' => 'required',
            'description' => 'required',
            'id_enseignant' => 'required',
            'id_matiere' => 'required',
            'id_eleve' => 'required',
            

            
            
        ]); */