<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Pages extends BaseController
{
    // Team projects (shown in navbar /projects) - made by the team together
    private array $teamProjects = [
        'team-portfolio' => ['slug' => 'team-portfolio', 'title' => 'Team Portfolio', 'owner' => 'Our Team', 'owner_slug' => '', 'label' => 'CodeIgniter · Portfolio', 'gradient' => 'linear-gradient(135deg, #ff6a00 0%, #ff8c42 100%)', 'desc' => 'Our group portfolio system built together with CodeIgniter 4 - members, projects, and resumes.', 'content' => 'Team collaboration: Jazee handled backend & database, Junard & Lloyd crafted UI and frontend. Group portfolio showcasing each member, their personal projects, and resumes in one system.', 'tags' => ['CodeIgniter', 'PHP', 'Team'], 'github' => 'https://github.com/abregondo/Team-Portfolio'],
    ];

    // Personal projects/websites per member (shown inside /members/{slug})
    private array $personalProjects = [
        'jazee-capstone'   => ['slug' => 'jazee-capstone', 'title' => 'JK Motorparts Inventory System', 'owner' => 'Jazee Kyl A. Abregondo', 'owner_slug' => 'jazee', 'label' => 'Inventory · System', 'gradient' => 'linear-gradient(135deg, #0f172a 0%, #1e293b 100%)', 'desc' => 'Track motorparts stock, sales, and suppliers with full CRUD.', 'content' => 'Jazee’s inventory system for motorparts: stock management, sales tracking, and CRUD. Solo build at ST. Peter’s College.', 'tags' => ['PHP', 'MySQL', 'Inventory'], 'github' => 'https://github.com/abregondo/jk-motorparts-inventory-system'],
        'jazee-portfolio'  => ['slug' => 'jazee-portfolio', 'title' => 'Gym Workout Planner', 'owner' => 'Jazee Kyl A. Abregondo', 'owner_slug' => 'jazee', 'label' => 'Fitness · Planner', 'gradient' => 'linear-gradient(135deg, #ff6a00 0%, #ff8c42 100%)', 'desc' => 'Create routines, track exercises, and plan gym sessions.', 'content' => 'A workout planner app to create routines, track exercises, and plan gym sessions.', 'tags' => ['JavaScript', 'Fitness', 'Planner'], 'github' => 'https://github.com/abregondo/-gym-workout-planner'],
        'jazee-api'        => ['slug' => 'jazee-api', 'title' => 'Bible Generator', 'owner' => 'Jazee Kyl A. Abregondo', 'owner_slug' => 'jazee', 'label' => 'App · Generator', 'gradient' => 'linear-gradient(135deg, #1e293b 0%, #334155 100%)', 'desc' => 'Generate daily Bible verses with clean UI and lookup.', 'content' => 'Generates Bible verses for daily inspiration with clean UI and verse lookup.', 'tags' => ['JavaScript', 'App', 'Generator'], 'github' => 'https://github.com/abregondo/Bible-Generator'],
        'junard-ui'        => ['slug' => 'junard-ui', 'title' => 'Movie List App', 'owner' => 'Junard V. Bendoy', 'owner_slug' => 'junard', 'label' => 'Movies · App', 'gradient' => 'linear-gradient(135deg, #0f172a 0%, #1e293b 100%)', 'desc' => 'Browse, search, and manage your favorite movies.', 'content' => 'Browse, search and manage movie lists with clean UI and responsive design.', 'tags' => ['JavaScript', 'Movies', 'Frontend'], 'github' => 'https://github.com/Junard34/movie-list-app-bendoys'],
        'junard-portfolio' => ['slug' => 'junard-portfolio', 'title' => 'Rick & Morty SPA', 'owner' => 'Junard V. Bendoy', 'owner_slug' => 'junard', 'label' => 'SPA · API', 'gradient' => 'linear-gradient(135deg, #ff6a00 0%, #ff8c42 100%)', 'desc' => 'Explore characters via Rick & Morty API with search.', 'content' => 'SPA using the Rick & Morty API to explore characters with search and filtering.', 'tags' => ['API', 'SPA', 'JavaScript'], 'github' => 'https://github.com/Junard34/rickymorty-spa'],
        'junard-system'    => ['slug' => 'junard-system', 'title' => 'Weather App IPT', 'owner' => 'Junard V. Bendoy', 'owner_slug' => 'junard', 'label' => 'Weather · App', 'gradient' => 'linear-gradient(135deg, #1e293b 0%, #334155 100%)', 'desc' => 'Real-time forecasts with clean, responsive UI.', 'content' => 'Weather app showing current conditions and forecasts via weather API.', 'tags' => ['API', 'Weather', 'Frontend'], 'github' => 'https://github.com/Junard34/Junard---weather-IPT'],
        'lloyd-figma'      => ['slug' => 'lloyd-figma', 'title' => 'Lloyd Lato Portfolio', 'owner' => 'Lloyd A. Lato', 'owner_slug' => 'lloyd', 'label' => 'Portfolio · Personal', 'gradient' => 'linear-gradient(135deg, #0f172a 0%, #1e293b 100%)', 'desc' => 'Personal portfolio showcasing projects and skills.', 'content' => 'Lloyd’s personal portfolio showcasing projects, skills and responsive builds.', 'tags' => ['Portfolio', 'Frontend', 'Personal'], 'github' => 'https://github.com/lloydlato/lloyd-lato-portfolio'],
        'lloyd-portfolio'  => ['slug' => 'lloyd-portfolio', 'title' => 'My Final Output', 'owner' => 'Lloyd A. Lato', 'owner_slug' => 'lloyd', 'label' => 'Project · Final', 'gradient' => 'linear-gradient(135deg, #ff6a00 0%, #ff8c42 100%)', 'desc' => 'Final output project with polished UI and features.', 'content' => 'Final output project demonstrating completed requirements and polished UI.', 'tags' => ['Project', 'Frontend', 'Final'], 'github' => 'https://github.com/lloydlato/MY-FINAL-OUTPUT'],
        'lloyd-responsive' => ['slug' => 'lloyd-responsive', 'title' => 'Contact Form EmailJS', 'owner' => 'Lloyd A. Lato', 'owner_slug' => 'lloyd', 'label' => 'Form · EmailJS', 'gradient' => 'linear-gradient(135deg, #1e293b 0%, #334155 100%)', 'desc' => 'Contact form that sends real emails via EmailJS.', 'content' => 'Contact form that sends emails directly via EmailJS with validation.', 'tags' => ['Form', 'EmailJS', 'JavaScript'], 'github' => 'https://github.com/lloydlato/Contact-Form-EmailJS-'],
    ];

    public function home()
    {
        return view('pages/home', [
            'active' => 'home',
            'title'  => 'Home | Our Portfolio - IT Students',
        ]);
    }

    public function about()
    {
        return view('pages/about', [
            'active' => 'about',
            'title'  => 'About Us | Our Portfolio',
        ]);
    }

    public function projects()
    {
        // Navbar /projects = TEAM projects only
        return view('pages/projects', [
            'active' => 'projects',
            'title'  => 'Team Projects | Our Portfolio',
            'projects' => $this->teamProjects,
            'label' => 'TEAM PROJECTS',
        ]);
    }

    public function project(string $slug)
    {
        $slug = strtolower($slug);
        // Check team first, then personal
        $all = array_merge($this->teamProjects, $this->personalProjects);
        if (! isset($all[$slug])) {
            throw PageNotFoundException::forPageNotFound("Project '{$slug}' not found.");
        }
        // Keep active as projects for navbar highlight
        $isTeam = isset($this->teamProjects[$slug]);
        return view('pages/project_detail', [
            'active' => 'projects',
            'title'  => $all[$slug]['title'] . ' | Our Portfolio',
            'project' => $all[$slug],
            'isTeam' => $isTeam,
        ]);
    }

    public function contact()
    {
        return view('pages/contact', [
            'active' => 'contact',
            'title'  => 'Contact | Our Portfolio',
        ]);
    }
}
