<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Admin_Dashboard_Controller extends Controller
{
    //

    public function Dashboard()
    {
        //
        $data['All_Active_Memberships']=DB::table('table_memberships')->select('mem_status','Activated')->count();
        $data['Sum_Active_Memberships']=DB::table('table_memberships')->select('mem_status','Activated')->select('mem_status','Expired')->sum('mem_price');
        //
        $data['Sum_All_Donations']=DB::table('table_donations')->sum('don_amount');
        $data['All_Donators']=DB::table('table_donations')->count();


        $data['Count_Puerto_Galera']=DB::table('table_donations')->select('don_municipal','Puerto Galera')->count();
        $data['Sum_Puerto_Galera']=DB::table('table_donations')->select('don_municipal','Puerto Galera')->sum('don_amount');

        $data['Count_San_Teodoro']=DB::table('table_donations')->select('don_municipal','San Teodoro')->count();
        $data['Sum_San_Teodoro']=DB::table('table_donations')->select('don_municipal','San Teodoro')->sum('don_amount');

        $data['Count_Baco']=DB::table('table_donations')->select('don_municipal','Baco')->count();
        $data['Sum_Baco']=DB::table('table_donations')->select('don_municipal','Baco')->sum('don_amount');

        $data['Count_Calapan']=DB::table('table_donations')->select('don_municipal','Calapan')->count();
        $data['Sum_Calapan']=DB::table('table_donations')->select('don_municipal','Calapan')->sum('don_amount');

        $data['Count_Naujan']=DB::table('table_donations')->select('don_municipal','Naujan')->count();
        $data['Sum_Naujan']=DB::table('table_donations')->select('don_municipal','Naujan')->sum('don_amount');

        $data['Count_Victoria']=DB::table('table_donations')->select('don_municipal','Victoria')->count();
        $data['Sum_Victoria']=DB::table('table_donations')->select('don_municipal','Victoria')->sum('don_amount');

        $data['Count_Socorro']=DB::table('table_donations')->select('don_municipal','Socorro')->count();
        $data['Sum_Socorro']=DB::table('table_donations')->select('don_municipal','Socorro')->sum('don_amount');

        $data['Count_Pola']=DB::table('table_donations')->select('don_municipal','Pola')->count();
        $data['Sum_Pola']=DB::table('table_donations')->select('don_municipal','Pola')->sum('don_amount');

        $data['Count_Pinamalayan']=DB::table('table_donations')->select('don_municipal','Pinamalayan')->count();
        $data['Sum_Pinamalayan']=DB::table('table_donations')->select('don_municipal','Pinamalayan')->sum('don_amount');

        $data['Count_Gloria']=DB::table('table_donations')->select('don_municipal','Gloria')->count();
        $data['Sum_Gloria']=DB::table('table_donations')->select('don_municipal','Gloria')->sum('don_amount');

        $data['Count_Bansud']=DB::table('table_donations')->select('don_municipal','Bansud')->count();
        $data['Sum_Bansud']=DB::table('table_donations')->select('don_municipal','Bansud')->sum('don_amount');

        $data['Count_Bongabong']=DB::table('table_donations')->select('don_municipal','Bongabong')->count();
        $data['Sum_Bongabong']=DB::table('table_donations')->select('don_municipal','Bongabong')->sum('don_amount');

        $data['Count_Roxas']=DB::table('table_donations')->select('don_municipal','Roxas')->count();
        $data['Sum_Roxas']=DB::table('table_donations')->select('don_municipal','Roxas')->sum('don_amount');

        $data['Count_Mansalay']=DB::table('table_donations')->select('don_municipal','Mansalay')->count();
        $data['Sum_Mansalay']=DB::table('table_donations')->select('don_municipal','Mansalay')->sum('don_amount');

        $data['Count_Bulalacao']=DB::table('table_donations')->select('don_municipal','Bulalacao')->count();
        $data['Sum_Bulalacao']=DB::table('table_donations')->select('don_municipal','Bulalacao')->sum('don_amount');


        $data['ToVorAll']=[
            [
                ['Category', 'Sales', 'Count'],
                ['Memberships',$data['Sum_Active_Memberships'],$data['All_Active_Memberships']],
                ['Fund Donations', $data['Sum_All_Donations'],$data['All_Donators']],
            ]
        ];


        $data['Municipality_Fund_Donors']=
        [
            ['Minicipality','Donations','Donors Count'],
            ['Puerto Galera',$data['Sum_Puerto_Galera'],$data['Count_Puerto_Galera']],
            ['San Teodoro',$data['Sum_San_Teodoro'],$data['Count_San_Teodoro']],
            ['Baco',$data['Sum_Baco'],$data['Count_Baco']],
            ['Calapan',$data['Sum_Calapan'],$data['Count_Calapan']],
            ['Naujan',$data['Sum_Naujan'],$data['Count_Naujan']],
            ['Victoria',$data['Sum_Victoria'],$data['Count_Victoria']],
            ['Socorro',$data['Sum_Socorro'],$data['Count_Socorro']],
            ['Pola',$data['Sum_Pola'],$data['Count_Pola']],
            ['Pinamalayan',$data['Sum_Pinamalayan'],$data['Count_Pinamalayan']],
            ['Gloria',$data['Sum_Gloria'],$data['Count_Gloria']],
            ['Bansud',$data['Sum_Bansud'],$data['Count_Bansud']],
            ['Bongabong',$data['Sum_Bongabong'],$data['Count_Bongabong']],
            ['Roxas',$data['Sum_Roxas'],$data['Count_Roxas']],
            ['Mansalay',$data['Sum_Mansalay'],$data['Count_Mansalay']],
            ['Bulalacao',$data['Sum_Bulalacao'],$data['Count_Bulalacao']],

        ];
        $data['Municipality_Donors']=
        [
            ['Minicipality','Donors Count'],
            ['',0],
            ['Puerto Galera',$data['Count_Puerto_Galera']],
            ['San Teodoro',$data['Count_San_Teodoro']],
            ['Baco',$data['Count_Baco']],
            ['Calapan',$data['Count_Calapan']],
            ['Naujan',$data['Count_Naujan']],
            ['Victoria',$data['Count_Victoria']],
            ['Socorro',$data['Count_Socorro']],
            ['Pola',$data['Count_Pola']],
            ['Pinamalayan',$data['Count_Pinamalayan']],
            ['Gloria',$data['Count_Gloria']],
            ['Bansud',$data['Count_Bansud']],
            ['Bongabong',$data['Count_Bongabong']],
            ['Roxas',$data['Count_Roxas']],
            ['Mansalay',$data['Count_Mansalay']],
            ['Bulalacao',$data['Count_Bulalacao']],

        ];


        return view('admin.dashboard',$data);
    }
}
