<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Locality;

class ShowController extends Controller
{
    public function index()
    {
        return view('show.index');
    }

    public function showPagination(Request $request)
    {
        $columns = array(
            0 => 'id',
            1 => 'value',
            2 => 'pincode',
            3 => 'id',
            4 => 'active'
        );
        $totalData = Locality::count();
        $totalFiltered = $totalData;
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
        try {
            $search = $request->input('search.value');

            $locality = Locality::orWhere('id', 'LIKE', "%{$search}%")
                ->orWhere('value', 'LIKE', "%{$search}%")
                ->orWhere('pincode', 'LIKE', "%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();

            $totalFiltered = Locality::orWhere('id', 'LIKE', "%{$search}%")
                ->orWhere('value', 'LIKE', "%{$search}%")
                ->orWhere('pincode', 'LIKE', "%{$search}%")
                ->count();
            $data = array();
            if (!empty($locality)) {
                foreach ($locality as $local) {
                    $edit = route('showLocalityEdit', ['id' => Crypt::encrypt($local->id)]);
                    $id = $local->id;
                    if ($local->active == 'N') {
                        $atvn = $local->active;
                        $acive = "<div id='div_$id'><a href=javascript:void(0); onClick='changeStatus(\"$atvn\",$id);' title='Activate'><span class='badge bg-danger'>Deactive</span></a></div>";
                    } else {
                        $atvy = $local->active;
                        $acive = "<div id='div_$id'><a href=javascript:void(0); onClick='changeStatus(\"$atvy\",$id);' title='Deactivate'><span class='badge bg-success'>Active</span></a></div>";
                    }
                    $delete = "<a id='deleteDiv_$id' href=javascript:void(0); onClick='deleteRecord($id);' title='Delete' class='link-danger fs-15'><i class='ri-delete-bin-line fs-20 lh-1'></i></a>";

                    $nestedData['id'] = $local->id;
                    $nestedData['value'] = $local->value;
                    $nestedData['pincode'] = $local->pincode;
                    $nestedData['options'] = "&emsp;<a href='{$edit}' title='Edit' class='link-success fs-15'><i class='ri-edit-2-line fs-20 lh-1'></i></a>&emsp;" . $delete;
                    $nestedData['status'] = $acive;
                    $data[] = $nestedData;
                }
            }
        } catch (\Throwable $th) {
            // echo $th->getMessage();
        }
        $json_data = array(
            "draw" => intval($request->input('draw')),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data
        );
        echo json_encode($json_data);
    }
}
