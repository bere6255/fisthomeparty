<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Auth;
use App\table;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

     public function logout(){
       Auth::logout();
     return back();
     }
    public function index()
    {
      if (Auth::user()->status=="paid" && Auth::user()->selection=="unselect") {

        $playe2 = DB::table('Users')->where('club', '=', Auth::user()->club)->where('status', '=', 'paid')->where('selection', '=', 'unselect')->inRandomOrder(1)->get();
        if (!empty($playe2)) {
          $team = new table;
          $team->users_id =Auth::user()->id;
          $team->club_name =Auth::user()->club;
          $team->player2 = $playe2[0]->id;
          $team->club_name2 = 0;
          $team->player3 = 0;
          $team->player4 = 0;
          $team->level = Auth::user()->level;
          $team->save();

/////////////////////////////////////////////////////////

          $team2 = new table;
          $team2->users_id =$playe2[0]->id;
          $team2->club_name =$playe2[0]->club;
          $team2->player2 = Auth::user()->id;
          $team2->club_name2 = 0;
          $team2->player3 = 0;
          $team2->player4 = 0;
          $team2->level = Auth::user()->level;
          $team2->save();

          DB::table('Users')->where('id', Auth::user()->id)->update(['selection' => "selected", 'part' => $playe2[0]->id]);
          DB::table('Users')->where('id', $playe2[0]->id)->update(['selection' => "selected", 'part' => Auth::user()->id]);

        }

      }

      if (Auth::user()->status=="paid" && Auth::user()->selection=="selected" && Auth::user()->_set =="waiting") {
        $check = DB::table('tables')->where('users_id', '=', Auth::user()->id)->get();
          if ($check[0]->club_name2==0) {
            $vs1 = DB::table('Users')->where('club', '!=', Auth::user()->club)->where('status', '=', 'paid')->where('selection', '=', 'selected')->where('_set', '=', 'waiting')->inRandomOrder(1)->get();
            if (!empty($vs1)) {
              DB::table('tables')->where('id', Auth::user()->id)->update(['club_name2' => $vs1[0]->club, 'player3' => $vs1[0]->id, 'player4' => $vs1[0]->part]);
              DB::table('tables')->where('id', Auth::user()->part)->update(['club_name2' => $vs1[0]->club, 'player3' => $vs1[0]->id, 'player4' => $vs1[0]->part]);
              DB::table('tables')->where('id', $vs1[0]->id)->update(['club_name2' => Auth::user()->club, 'player3' => Auth::user()->id, 'player4' => Auth::user()->part]);
              DB::table('tables')->where('id', $vs1[0]->part)->update(['club_name2' => Auth::user()->club, 'player3' => Auth::user()->part, 'player4' => Auth::user()->id]);
              DB::table('Users')->where('id', Auth::user()->id)->update(['_set' => "don",]);
              DB::table('Users')->where('id', Auth::user()->part)->update(['_set' => "don",]);
              DB::table('Users')->where('id', $vs1[0]->id)->update(['_set' => "don",]);
              DB::table('Users')->where('id', $vs1[0]->part)->update(['_set' => "don",]);


            }

          }

      }



///////// level change /////////////////////////

        if (Auth::user()->level>1 && Auth::user()->selection=="unselect") {

          $team_lev_playe2 = DB::table('Users')->where('club', '=', Auth::user()->club)->where('selection', '=', 'unselect')->where('level', '=', Auth::user()->level)->inRandomOrder(1)->get();
          if (!empty($playe2)) {
            $team_lev = new table;
            $team_lev->users_id =Auth::user()->id;
            $team_lev->club_name =Auth::user()->club;
            $team_lev->player2 = $team_lev_playe2[0]->id;
            $team_lev->club_name2 = 0;
            $team_lev->player3 = 0;
            $team_lev->player4 = 0;
            $team_lev->level = Auth::user()->level;
            $team_lev->save();

  /////////////////////////////////////////////////////////

            $team_lev2 = new table;
            $team_lev2->users_id =$team_lev_playe2[0]->id;
            $team_lev2->club_name =$team_lev_playe2[0]->club;
            $team_lev2->player2 = Auth::user()->id;
            $team_lev2->club_name2 = 0;
            $team_lev2->player3 = 0;
            $team_lev2->player4 = 0;
            $team_lev2->level = Auth::user()->level;
            $team_lev2->save();

            DB::table('Users')->where('id', Auth::user()->id)->update(['selection' => "selected", 'part' => $team_lev_playe2[0]->id]);
            DB::table('Users')->where('id', $team_lev_playe2[0]->id)->update(['selection' => "selected", 'part' => Auth::user()->id]);

          }

        }

        if (Auth::user()->level>1 && Auth::user()->selection=="selected" && Auth::user()->_set =="waiting") {
          $check_lev = DB::table('tables')->where('users_id', '=', Auth::user()->id)->latest(1)->first();
            if ($check_lev[0]->club_name2==0) {
              $lev_vs1 = DB::table('Users')->where('club', '!=', Auth::user()->club)->where('level', '=', Auth::user()->level)->where('selection', '=', 'selected')->where('_set', '=', 'waiting')->inRandomOrder(1)->get();
              if (!empty($lev_vs1)) {
                DB::table('tables')->where('id', Auth::user()->id)->update(['club_name2' => $lev_vs1[0]->club, 'player3' => $lev_vs1[0]->id, 'player4' => $lev_vs1[0]->part]);
                DB::table('tables')->where('id', Auth::user()->part)->update(['club_name2' => $lev_vs1[0]->club, 'player3' => $lev_vs1[0]->id, 'player4' => $lev_vs1[0]->part]);
                DB::table('tables')->where('id', $lev_vs1[0]->id)->update(['club_name2' => Auth::user()->club, 'player3' => Auth::user()->id, 'player4' => Auth::user()->part]);
                DB::table('tables')->where('id', $lev_vs1[0]->part)->update(['club_name2' => Auth::user()->club, 'player3' => Auth::user()->part, 'player4' => Auth::user()->id]);
                DB::table('Users')->where('id', Auth::user()->id)->update(['_set' => "don",]);
                DB::table('Users')->where('id', Auth::user()->part)->update(['_set' => "don",]);
                DB::table('Users')->where('id', $lev_vs1[0]->id)->update(['_set' => "don",]);
                DB::table('Users')->where('id', $lev_vs1[0]->part)->update(['_set' => "don",]);


              }

            }

        }

/////////////// $last3 = DB::table('items')->latest('id')->first();



if (Auth::user()->status=="unpaid") {
  return view('home');
}elseif (Auth::user()->level==2) {
  $getplayers = DB::table('tables')->where('users_id', '=', Auth::user()->id)->last();
  $getplayer2 = DB::table('Users')->where('id', '=', $getplayers[0]->users_id)->get();
  $getplayer3 = DB::table('Users')->where('id', '=', $getplayers[0]->player3)->get();
  $getplayer4 = DB::table('Users')->where('id', '=', $getplayers[0]->player4)->get();
  return view('home', ['players2'=> $getplayer2, 'players3'=> $getplayer3, 'players4'=> $getplayer4]);
}




    }



}
