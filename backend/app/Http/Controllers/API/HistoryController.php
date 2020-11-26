<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
use App\models\History;


class HistoryController extends BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $history = History::all();
        return $this->sendResponse($history->toArray(), 'History retrieved successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = \Validator::make($input, [
            'user_id' => 'required',
            'monthly_payment' => 'required',
            'principle_loan_amount' => 'required',
            'no_of_payments' => 'required',
            'date_time' => 'required|date',
            'interest_rate' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $history = History::create($input);

        return $this->sendResponse($history->toArray(), 'History created successfully.');
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $history = History::find($id);


        if (is_null($history)) {
            return $this->sendError('history not found.');
        }


        return $this->sendResponse($history->toArray(), 'History retrieved successfully.');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(History $history)
    {
        $history->delete();

        return $this->sendResponse($history->toArray(), 'history deleted successfully.');
    }


}
