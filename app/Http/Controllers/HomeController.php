<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Support\Facades\Http;




class HomeController extends Controller implements HasMiddleware
{
    
    
    public function index(Request $request)
    {
        // Retrieve all projects and tasks
        $projects = Project::getAllProjects();
        $tasks = Task::getAllTasks();
        
        // Get filters from request
        $projectFilter = $request->input('projectFilter', 0);
        $statusFilter = $request->input('statusFilter', '');
        
        // Apply filters if provided
        if ($projectFilter != 0 || $statusFilter != '') {
            $tasksFilter = [];
            
            // Apply project filter if not set to all
            if ($projectFilter != 'all') {
                $tasksFilter['project'] = $projectFilter;
            }
            
            // Apply status filter if not set to all
            if ($statusFilter != 'all') {
                $tasksFilter['is_completed'] = ($statusFilter == 'completed') ? 1 : 0;
            }
            
            // Get tasks with applied filters
            $tasks = Task::getAllTasksWithFilters($tasksFilter);
        }
        
        // ✅ Conta le task incomplete
        
        $incompleteTasksCount = 0;
        if (auth()->check()) {
            $incompleteTasksCount = collect($tasks)->where('is_completed', false)->count();
        }
        
        
        // ✅ Aggiungilo alla vista
        return view('home.home')->with([
            'projects' => $projects,
            'tasks' => $tasks,
            'projectFilter' => $projectFilter,
            'statusFilter' => $statusFilter,
            'incompleteTasksCount' => $incompleteTasksCount,
        ]);
    }
    
    
    // pagina iniziale del sito web senza login
    
    public function home(){
        
        $quotes = Http::get('https://api.adviceslip.com/advice')->json('slip');
        // dd($quotes);
        //!return view('prodotti', [$products=>'product']);
        return view('home.index', compact('quotes'));
    }
    
    
    
    public static function middleware():array{
        return [
            new Middleware('auth', only: ['home', 'index'])
        ];
    }
}