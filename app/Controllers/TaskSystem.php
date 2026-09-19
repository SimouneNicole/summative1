<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class TaskSystem extends BaseController
{
    protected $taskModel;
    protected $userModel;
    protected $helpers = ['url'];

    public function __construct()
    {
        $this->taskModel = new TaskModel();
        $this->userModel = new UserModel();
    }

    // Welcome Page (/)
    public function welcome()
{
    $data['title'] = "Today's Agenda Workspace";
    $data['tasks'] = $this->taskModel->getTasksForToday();
    
    // Ensure this says 'welcome_page' and NOT 'welcome_message'
    return view('welcome_message', $data); 
}


    // Task List Page (/tasks)
    public function taskList()
    {
        $data = [
            'title' => "Comprehensive Archive Master List",
            'tasks' => $this->taskModel->getAllTasksOrdered() ?? []
        ];
        return view('task_list_page', $data);
    }

    // Profile Page (/profile)
    public function profile()
    {
        $data = [
            'title' => "User Account Profile View",
            'user'  => $this->userModel->getDemoUser() ?? null
        ];
        return view('profile_page', $data);
    }

    // About Page (/about)
    public function about()
    {
        $data = [
            'title' => "System Engineering Developer Credits"
        ];
        return view('about_page', $data);
    }
}
