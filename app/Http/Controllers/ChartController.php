<?php

namespace App\Http\Controllers;

use ConsoleTVs\Charts\Facades\Charts;

use App\User;

class ChartController extends Controller

{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function makeChart($type)
    {
        switch ($type) {
            case 'line':

                $chart = Charts::database(User::all(), 'line', 'highcharts')
                    ->title("Monthly new Registered Users")
                    ->elementLabel("Total Users")
                    ->dimensions(1000, 500)
                    ->responsive(true)
                    ->groupByMonth(date('Y'), true);

                break;

            case 'bar':

                $maleUsers = User::where('gender', '=', 'male')
                    ->count();
                $oldMaleUsers = User::where('age', '>', '50')->where('gender', '=', 'male')
                    ->count();
                $yongMaleUsers = User::where('age', '<', '50')->where('gender', '=', 'male')
                    ->count();

                $femaleUsers = User::where('gender', '=', 'female')
                    ->count();
                $oldFemaleUsers = User::where('age', '>', '50')->where('gender', '=', 'male')
                    ->count();
                $yongFemaleUsers = User::where('age', '<', '50')->where('gender', '=', 'male')
                    ->count();


                $chart = Charts::multi('bar', 'highcharts')
                    ->title("Registered Users by gender and Age")
                    ->elementLabel('Users')
                    ->dimensions(0, 400) // Width x Height
                    ->template("material")
                    ->dataset('Users', [$maleUsers, $femaleUsers])
                    ->dataset('Age > 50', [$oldMaleUsers, $oldFemaleUsers])
                    ->dataset('Age < 50', [$yongMaleUsers, $yongFemaleUsers])
                    ->labels(['Male', 'Female', 'Age']);

                break;

            default:

                # code...

                break;

        }

        return view('pages.chart', compact('chart'));

    }

}