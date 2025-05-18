<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;

class WorkerController extends Controller
{
    // Display form to create new worker
    public function create() {
        return view('worker.insertworker');
    }

    // Store new worker
    public function store(Request $request) {
        $data = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        Worker::create($data);
        return redirect()->route('worker.index');
    }

    // List all workers
    public function index() {
        $workers = Worker::all();
        return view('worker.index', compact('workers'));
    }

    // Show form to edit a worker
    public function edit(Worker $worker) {
        return view('worker.edit', compact('worker'));
    }

    // Update worker
    public function update(Request $request, Worker $worker) {
        $data = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $worker->update($data);
        return redirect()->route('worker.index');
    }

    // Delete worker
    public function destroy(Worker $worker) {
        $worker->delete();
        return redirect()->route('worker.index');
    }
   
}
