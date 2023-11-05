<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;

/**
 * Class DashboardController
 * @package App\Http\Controllers
 */
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dashboards = Dashboard::paginate();

        return view('dashboard.index', compact('dashboards'))
            ->with('i', (request()->input('page', 1) - 1) * $dashboards->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dashboard = new Dashboard();
        return view('dashboard.create', compact('dashboard'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //request()->validate(Dashboard::$rules);

        $dashboard = Dashboard::create($request->all());

        return redirect()->route('dashboards.index')
            ->with('success', 'Dashboard created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dashboard = Dashboard::find($id);

        return view('dashboard.show', compact('dashboard'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dashboard = Dashboard::find($id);

        return view('dashboard.edit', compact('dashboard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Dashboard $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //request()->validate(Dashboard::$rules);

        $dashboard->update($request->all());

        return redirect()->route('dashboards.index')
            ->with('success', 'Dashboard updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $dashboard = Dashboard::find($id)->delete();

        return redirect()->route('dashboards.index')
            ->with('success', 'Dashboard deleted successfully');
    }
}
