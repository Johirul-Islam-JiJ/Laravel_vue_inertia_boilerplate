<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index(Request $request)
    {
        return inertia('ActivityLog/Index', [
            'logs' => Log::withTrashed()
                ->with('activity')
                ->when($request->search, function ($query, $search) {
                    $query->whereHas('user', function ($q) use ($search) {
                        $q->where('name', 'LIKE', "%{$search}%");
                    })
                        ->orWhere('action', 'LIKE', "%{$search}%")
                        ->orWhere('loggable_type', 'LIKE', "%{$search}%")
                        ->orWhereDate('created_at', 'LIKE', "%{$search}%");
                })
                ->orderBy($request->sortBy ?? 'id', $request->boolean('sortDesc') ? 'desc' : 'asc')
                ->paginate($request->perPage)
                ->withQueryString(),
            'filters' => [
                'search' => $request->search,
                'sortBy' => $request->sortBy,
                'sortDesc' => $request->sortDesc,
                'perPage' => $request->perPage,
            ]
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Log $log)
    {
        //
    }

    public function edit(Log $log)
    {
        //
    }

    public function update(Request $request, Log $log)
    {
        //
    }

    public function destroy(Log $log)
    {
        //
    }
}
