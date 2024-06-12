<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function store(Request $request)
    {
        $newReport = new Report();

        $newReport->user_id = Auth::id();
        $newReport->post_id = $request->post;
        $newReport->reason = $request->reason;

        $newReport->save();

        return redirect()->back()->with('success', 'El reporte ha sido enviado.');
    }

    public function destroy(Report $report)
    {
        $report->delete();

        return back();
    }
}