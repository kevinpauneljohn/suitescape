<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\calendar as ModelsCalendar;

class CalenderController extends Controller
{
    public function index(Request $request) {
        if($request->ajax()) {
            $calendar = ModelsCalendar::whereDate('start_date', '>=', $request->start)->whereDate('end_date', '<=', $request->end)->get(['id', 'title', 'start_date', 'end_date']);
            return response()->json($calendar);
        }
        return view('calender');
    }
    public function ajax(Request $request) {
        switch ($request->type) {
            case 'add':
                $calendar = ModelsCalendar::create([
                    'title' => $request->title,
                    'start_date' => $request->start,
                    'end_date' => $request->end,
                ]);
                return response()->json($calendar);
                break;
            case 'update':
                $calendar = ModelsCalendar::find($request->id)->update([
                    'title' => $request->title,
                    'start_date' => $request->start,
                    'end_date' => $request->end,
                ]);
                return response()->json($calendar);
                break;
            case 'delete':
                $calendar = ModelsCalendar::find($request->id)->delete();
                return response()->json($calendar);
                break;
           default:
               break;
        }
    }
}
