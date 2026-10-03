<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Members extends BaseController
{
    private array $members = [
        'jazee' => [
            'slug'        => 'jazee',
            'name'        => 'Jazee Kyl A. Abregondo',
            'role'        => 'Backend & Frontend Developer',
            'initials'    => 'JA',
            'image'       => 'jazee.jpg',
            'short_desc'  => 'Focused on backend development, system functionality, database integration, and frontend implementation.',
            'bio'         => 'Jazee is our backend and frontend developer who ensures that every system we build is functional, efficient, and reliable. She handles database design, API integration, and bridges the gap between design and functionality.',
            'skills'      => ['PHP', 'MySQL', 'CodeIgniter', 'JavaScript', 'HTML/CSS', 'Backend', 'Frontend'],
            'experience'  => [
                [
                    'title' => 'Backend Developer – Capstone Project',
                    'org'   => 'BSIT Capstone System',
                    'year'  => '2024 - Present',
                    'desc'  => 'Developed database-driven web system using PHP, MySQL and CodeIgniter. Implemented authentication, CRUD, and REST API integration.'
                ],
                [
                    'title' => 'Frontend Integration – Group Portfolio',
                    'org'   => 'Our Portfolio Project',
                    'year'  => '2025',
                    'desc'  => 'Implemented responsive frontend, integrated backend APIs, and optimized performance for production deployment.'
                ],
            ],
            'education'   => [
                ['degree' => 'BS in Information Technology', 'school' => "ST. PETER'S COLLEGE", 'year' => '2022 - Present'],
                ['degree' => 'Senior High School', 'school' => 'Xavier University Senior High School - Ateneo de Cagayan', 'year' => '2020 - 2022'],
                ['degree' => 'Junior High School', 'school' => 'Iligan City National High School', 'year' => '2016 - 2020'],
            ],
            'email'       => 'jazeekyla@gmail.com',
            'phone'       => '09976049076',
            'location'    => 'Philippines',
            'stats'       => [
                ['value' => '3', 'label' => 'Personal Projects', 'sub' => 'JK Motorparts + 2 more', 'href' => '#projects'],
                ['value' => '1', 'label' => 'Team Project', 'sub' => 'Team-Portfolio', 'href' => 'project/team-portfolio'],
                ['value' => '7', 'label' => 'Skills Listed', 'sub' => 'PHP · MySQL + 5 more', 'href' => '#background'],
                ['value' => 'GH', 'label' => 'View Code', 'sub' => 'abregondo on GitHub →', 'href' => 'https://github.com/abregondo'],
            ],
            'services'    => [
                ['icon' => '⚙', 'title' => 'Backend Development', 'desc' => 'Building robust systems with PHP, MySQL and CodeIgniter.'],
                ['icon' => '◈', 'title' => 'Database Design', 'desc' => 'Efficient schema and integration for real-world applications.'],
                ['icon' => '▣', 'title' => 'Frontend Integration', 'desc' => 'Bridging design and functionality with clean code.'],
            ],
            'projects'    => [
                ['slug' => 'jazee-capstone', 'title' => 'JK Motorparts Inventory System', 'label' => 'Inventory · System', 'desc' => 'Track motorparts stock, sales, and suppliers with full CRUD', 'gradient' => 'linear-gradient(135deg, #0f172a 0%, #1e293b 100%)', 'github' => 'https://github.com/abregondo/jk-motorparts-inventory-system'],
                ['slug' => 'jazee-portfolio', 'title' => 'Gym Workout Planner', 'label' => 'Fitness · Planner', 'desc' => 'Create routines, track exercises, and plan gym sessions', 'gradient' => 'linear-gradient(135deg, #ff6a00 0%, #ff8c42 100%)', 'github' => 'https://github.com/abregondo/-gym-workout-planner'],
                ['slug' => 'jazee-api', 'title' => 'Bible Generator', 'label' => 'App · Generator', 'desc' => 'Generate daily Bible verses with clean UI and lookup', 'gradient' => 'linear-gradient(135deg, #1e293b 0%, #334155 100%)', 'github' => 'https://github.com/abregondo/Bible-Generator'],
            ],
        ],
        'junard' => [
            'slug'        => 'junard',
            'name'        => 'Junard V. Bendoy',
            'role'        => 'UI Designer & Frontend Developer',
            'initials'    => 'JB',
            'image'       => 'junard.jpg',
            'short_desc'  => 'Focused on creating user interfaces and developing clean, responsive, and user-friendly frontend designs.',
            'bio'         => 'Junard specializes in UI design and frontend development. He transforms wireframes into clean, responsive interfaces that prioritize user experience and accessibility.',
            'skills'      => ['UI Design', 'Frontend', 'HTML/CSS', 'JavaScript', 'Responsive Design', 'Figma'],
            'experience'  => [
                [
                    'title' => 'UI Designer – Group Projects',
                    'org'   => 'BSIT Collaborative Projects',
                    'year'  => '2023 - Present',
                    'desc'  => 'Designed user interfaces for web systems, created prototypes, and implemented pixel-perfect frontend code.'
                ],
                [
                    'title' => 'Frontend Developer – Student Systems',
                    'org'   => 'Academic Projects',
                    'year'  => '2024',
                    'desc'  => 'Built responsive web pages, improved UX, and collaborated with backend developers for seamless integration.'
                ],
            ],
            'education'   => [
                ['degree' => 'BS in Information Technology', 'school' => "ST. PETER'S COLLEGE", 'year' => '2022 - Present'],
                ['degree' => 'Senior High School', 'school' => 'Iligan City National High School', 'year' => '2020 - 2022'],
                ['degree' => 'Junior High School', 'school' => 'Iligan City National High School', 'year' => '2016 - 2020'],
            ],
            'email'       => 'junardbendoy73@gmail.com',
            'phone'       => '09853216099',
            'location'    => 'Philippines',
            'stats'       => [
                ['value' => '3', 'label' => 'Personal Projects', 'sub' => 'Movie List App + 2 more', 'href' => '#projects'],
                ['value' => '1', 'label' => 'Team Project', 'sub' => 'Team-Portfolio', 'href' => 'project/team-portfolio'],
                ['value' => '6', 'label' => 'Skills Listed', 'sub' => 'UI Design · JS + 4 more', 'href' => '#background'],
                ['value' => 'GH', 'label' => 'View Code', 'sub' => 'Junard34 on GitHub →', 'href' => 'https://github.com/Junard34'],
            ],
            'services'    => [
                ['icon' => '✦', 'title' => 'UI Design', 'desc' => 'Clean, modern interfaces focused on user experience.'],
                ['icon' => '⬔', 'title' => 'Frontend Development', 'desc' => 'Responsive, pixel-perfect implementation.'],
                ['icon' => '⬣', 'title' => 'Prototyping', 'desc' => 'Interactive prototypes that bring ideas to life.'],
            ],
            'projects'    => [
                ['slug' => 'junard-ui', 'title' => 'Movie List App', 'label' => 'Movies · App', 'desc' => 'Browse, search, and manage your favorite movies', 'gradient' => 'linear-gradient(135deg, #0f172a 0%, #1e293b 100%)', 'github' => 'https://github.com/Junard34/movie-list-app-bendoys'],
                ['slug' => 'junard-portfolio', 'title' => 'Rick & Morty SPA', 'label' => 'SPA · API', 'desc' => 'Explore characters via Rick & Morty API with search', 'gradient' => 'linear-gradient(135deg, #ff6a00 0%, #ff8c42 100%)', 'github' => 'https://github.com/Junard34/rickymorty-spa'],
                ['slug' => 'junard-system', 'title' => 'Weather App IPT', 'label' => 'Weather · App', 'desc' => 'Real-time forecasts with clean, responsive UI', 'gradient' => 'linear-gradient(135deg, #1e293b 0%, #334155 100%)', 'github' => 'https://github.com/Junard34/Junard---weather-IPT'],
            ],
        ],
        'lloyd' => [
            'slug'        => 'lloyd',
            'name'        => 'Lloyd A. Lato',
            'role'        => 'UI Designer & Frontend Developer',
            'initials'    => 'LL',
            'image'       => 'lloyd.jpg',
            'short_desc'  => 'Focused on UI design using Figma and developing modern, responsive, and visually engaging interfaces.',
            'bio'         => 'Lloyd is passionate about Figma and modern UI trends. He crafts visually engaging, user-centered designs and brings them to life with responsive frontend development.',
            'skills'      => ['Figma', 'UI Design', 'Frontend', 'HTML/CSS', 'JavaScript', 'Responsive Design'],
            'experience'  => [
                [
                    'title' => 'Figma UI Designer – Portfolio & Systems',
                    'org'   => 'BSIT Design Projects',
                    'year'  => '2023 - Present',
                    'desc'  => 'Created high-fidelity designs in Figma, built design systems, and developed modern responsive interfaces.'
                ],
                [
                    'title' => 'Frontend Developer – Group Portfolio',
                    'org'   => 'Our Portfolio',
                    'year'  => '2025',
                    'desc'  => 'Implemented designs into code, ensured cross-browser compatibility, and focused on visual polish and animations.'
                ],
            ],
            'education'   => [
                ['degree' => 'BS in Information Technology', 'school' => "ST. PETER'S COLLEGE", 'year' => '2022 - Present'],
                ['degree' => 'Senior High School', 'school' => 'Abuno National High School', 'year' => '2020 - 2022'],
                ['degree' => 'Junior High School', 'school' => 'Abuno National High School', 'year' => '2016 - 2020'],
            ],
            'email'       => 'lloydlato19@gmail.com',
            'phone'       => '+63 912 345 6789',
            'location'    => 'Philippines',
            'stats'       => [
                ['value' => '3', 'label' => 'Personal Projects', 'sub' => 'Lloyd Portfolio + 2 more', 'href' => '#projects'],
                ['value' => '1', 'label' => 'Team Project', 'sub' => 'Team-Portfolio', 'href' => 'project/team-portfolio'],
                ['value' => '6', 'label' => 'Skills Listed', 'sub' => 'Figma · UI + 4 more', 'href' => '#background'],
                ['value' => 'GH', 'label' => 'View Code', 'sub' => 'lloydlato on GitHub →', 'href' => 'https://github.com/lloydlato'],
            ],
            'services'    => [
                ['icon' => '⬢', 'title' => 'Figma Design', 'desc' => 'High-fidelity systems and design libraries in Figma.'],
                ['icon' => '▤', 'title' => 'Visual Design', 'desc' => 'Modern, engaging visuals with strong hierarchy.'],
                ['icon' => '⬔', 'title' => 'Frontend Magic', 'desc' => 'Bringing designs to life with responsive code.'],
            ],
            'projects'    => [
                ['slug' => 'lloyd-figma', 'title' => 'Lloyd Lato Portfolio', 'label' => 'Portfolio · Personal', 'desc' => 'Personal portfolio showcasing projects and skills', 'gradient' => 'linear-gradient(135deg, #0f172a 0%, #1e293b 100%)', 'github' => 'https://github.com/lloydlato/lloyd-lato-portfolio'],
                ['slug' => 'lloyd-portfolio', 'title' => 'My Final Output', 'label' => 'Project · Final', 'desc' => 'Final output project with polished UI and features', 'gradient' => 'linear-gradient(135deg, #ff6a00 0%, #ff8c42 100%)', 'github' => 'https://github.com/lloydlato/MY-FINAL-OUTPUT'],
                ['slug' => 'lloyd-responsive', 'title' => 'Contact Form EmailJS', 'label' => 'Form · EmailJS', 'desc' => 'Contact form that sends real emails via EmailJS', 'gradient' => 'linear-gradient(135deg, #1e293b 0%, #334155 100%)', 'github' => 'https://github.com/lloydlato/Contact-Form-EmailJS-'],
            ],
        ],
    ];

    public function index()
    {
        return view('members/index', [
            'active'  => 'members',
            'title'   => 'Members | Our Portfolio',
            'members' => $this->members,
        ]);
    }

    public function detail(string $slug)
    {
        $slug = strtolower($slug);
        if (! isset($this->members[$slug])) {
            throw PageNotFoundException::forPageNotFound("Member '{$slug}' not found.");
        }

        return view('members/detail', [
            'active' => 'members',
            'title'  => $this->members[$slug]['name'] . ' | Our Portfolio',
            'member' => $this->members[$slug],
        ]);
    }

    public function resume(string $slug)
    {
        $slug = strtolower($slug);
        if (! isset($this->members[$slug])) {
            throw PageNotFoundException::forPageNotFound("Resume for '{$slug}' not found.");
        }

        // Try slug-specific resume view first, fallback to generic
        $view = 'resumes/' . $slug;
        if (! is_file(APPPATH . 'Views/' . $view . '.php')) {
            $view = 'resumes/template';
        }

        return view($view, [
            'title'  => $this->members[$slug]['name'] . ' - Resume',
            'member' => $this->members[$slug],
        ]);
    }
}
