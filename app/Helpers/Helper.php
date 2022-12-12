<?php
namespace App\Helpers;

class Helper{

    public function SuccessResponse($msg,$data)
    {
        return response()->json([
            'success'=>1,
            'msg'=>$msg,
            'data'=>$data
        ],200);
    }

    public function ErrorResponse($msg)
    {
        return response()->json([
            'success'=>1,
            'msg'=>$msg,
            'data'=>[]
        ],400);
    }
}