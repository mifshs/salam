<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $sort =$request->input('sort');
        if($sort != 'asc' && $sort != 'desc')
        {
            $sort = 'desc'; 
        }

        $status = $request->input('status');
        $validate = $request->validate([
            'status' => "exists:statuses,id"
        ]);
        if ($validate)
        {
            $reports = Report::where('status_id', $status)->where('user_id', Auth::user()->id)->orderBy('created_at', $sort)->paginate(8);
        } else {
            $reports = Report::where('user_id', Auth::user()->id)->orderBy('created_at', $sort)->paginate(8);
        }

        $statuses = Status::all();
        return view('report.index', compact('reports','statuses', 'sort', 'status'));
    }

    public function destroy(Report $report)
    {
        if (Auth::user()->id === $report->user_id)
        {
            $report->delete();
        }
        return redirect()->back();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'number' => 'string',
            'description' => 'string',
        ]);

        $data['user_id'] = Auth::user()->id;
        $data['status_id'] = Status::first()?->id ?? 1;

        Report::create($data);
        return redirect()->route('reports.index');
    }

    public function showCreate(): View
    {
        return view('report/create');
    }

    public function edit(Report $report)
    {
        if (Auth::user()->id === $report->user_id)
        {
            return view('report.edit', compact('report'));
        }
        else {
            abort(403, 'У вас нет прав на редактирование этой записи');
        }
    }

    public function update(Request $request, Report $report)
    {
        $data = $request -> validate([
            'number' => 'string',
            'description' => 'string',
        ]);

        if (Auth::user()->id === $report->user_id)
        {
            $report->update($data);
        }
        return redirect()->route('reports.index');
    }
}
