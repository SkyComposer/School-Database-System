<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class livesearchController extends Controller
{
    public function index(){
        return view('allstudents.livesearch');
    }
    public function action(Request $request)
    {
   //requested the ajax fucntion
        if($request->ajax())
        {
            //putting query got from query variable in the view
            $query = $request->get('query');
            if ($query != '')
            {
                $data = DB::table('allstudents')
                ->where('f_name', 'like', '%'.$query.'%')
                ->orWhere('l_name', 'like', '%'.$query.'%')
                ->get();

            } else 
            {
                $data = DB::table('allstudents');
            }
            //counting the number of rows returned
            $total_rows = $data->count();
            //appending the data in the table
            if($total_rows > 0){
                foreach($data as $row)
                {
                    $output = '
                    <tr>
                        <td>'.$row->f_name.'</td>
                        <td>'.$row->m_name.'</td>
                        <td>'.$row->l_name.'</td>
                    </tr>
                    ';
                }

            }else{
                $output = '
                <tr>
                    <td align="center"> No Data Found </td>
                </tr>    
                ';
            }
            //arragning the data to be sent in json format
            $data=array(
                'table_data' => $output,
                'total_data' => $total_data
            );
            //sending the data to ajax request using json
            echo json_encode($data);
        }
    }
}
