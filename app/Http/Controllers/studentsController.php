<?php
/**
 * Created by PhpStorm.
 * User: CityComp
 * Date: 27/2/2019
 * Time: 13:02
 */

namespace App\Http\Controllers;


use App\Models\City;
use App\Models\students;

class studentsController extends Controller
{
public  function index()
{
return  view( 'students.index');
}
public  function  info($id)
{
    return "Student id is : $id";


}
    public  function  about()
    {

        $students = students::get();

        return view('students.about', ['message' => 'Here is the students information : ' , 'students'=>$students ]);

    }

}