<?php

namespace App\Livewire;

use Livewire\Component;

class ProjectGallery extends Component
{
    public $projects = [];

    public function mount()
    {
        $this->projects = [
            [
                'title' => 'Xala Premium',
                'description' => 'Online hotel booking and reservation platform featured room availability, booking management, and a robust admin dashboard.',
                'tags' => ['Laravel', 'Livewire', 'MySQL', 'Tailwind'],
                'image' => asset('build/image/xala.png'),
                'link' => 'https://xalapremium.com.ng/',
                'category' => 'Hospitality'
            ],
            [
                'title' => 'Loan Management System',
                'description' => 'Comprehensive fintech platform supporting fiat and crypto loans, automated repayments, late fee logic, and deep analytics.',
                'tags' => ['Laravel', 'Web3', 'PostgreSQL', 'Alpine.js'],
                'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=800',
                'link' => '#',
                'category' => 'Fintech'
            ],
            [
                'title' => 'POS System',
                'description' => 'Enterprise-grade Point of Sale system for real-time transaction recording, secure payment validation, and inventory management.',
                'tags' => ['Laravel', 'REST API', 'Redis', 'Tailwind'],
                'image' => asset('build/image/Admin pos dashboard .png'),
                'link' => '#',
                'category' => 'Enterprise'
            ],
            [
                'title' => 'DoctorOnTap',
                'description' => 'Healthcare platform optimizing patient intake and role-based access for medical professionals with an emphasis on UI/UX.',
                'tags' => ['Laravel', 'React', 'Docker', 'Healthcare'],
                'image' => asset('build/image/doctorontap.png'),
                'link' => 'https://new.doctorontap.com.ng/',
                'category' => 'Healthtech'
            ],
        ];
    }

    public function render()
    {
        return view('livewire.project-gallery');
    }
}
