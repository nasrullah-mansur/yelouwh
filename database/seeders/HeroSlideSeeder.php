<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HeroSlide;

class HeroSlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $slides = [
            [
                'title' => 'Creators',
                'subtitle' => 'Support your favorite',
                'description' => 'Join thousands of creators and supporters in the ultimate content creation platform.',
                'background_image' => 'banner.jpg',
                'hero_image' => '3man.png',
                'badge_icon' => 'fas fa-star',
                'badge_text' => 'Featured Platform',
                'primary_button_text' => 'Start Creating',
                'primary_button_url' => '/register',
                'primary_button_icon' => 'fas fa-rocket',
                'secondary_button_text' => 'Explore Creators',
                'secondary_button_url' => '/creators',
                'secondary_button_icon' => 'fas fa-play',
                'stats' => [
                    ['number' => '50K+', 'label' => 'Creators'],
                    ['number' => '1M+', 'label' => 'Supporters'],
                    ['number' => '$10M+', 'label' => 'Earned']
                ],
                'features' => null,
                'testimonial' => null,
                'sort_order' => 0,
                'is_active' => true
            ],
            [
                'title' => 'Passion',
                'subtitle' => 'Monetize your',
                'description' => 'Turn your creativity into a sustainable income with our comprehensive monetization tools.',
                'background_image' => 'banner.jpg',
                'hero_image' => '3man.png',
                'badge_icon' => 'fas fa-trophy',
                'badge_text' => 'Premium Experience',
                'primary_button_text' => 'Go Premium',
                'primary_button_url' => '/register',
                'primary_button_icon' => 'fas fa-crown',
                'secondary_button_text' => 'Learn More',
                'secondary_button_url' => '#',
                'secondary_button_icon' => 'fas fa-info-circle',
                'stats' => null,
                'features' => [
                    ['icon' => 'fas fa-check-circle', 'text' => 'Multiple revenue streams'],
                    ['icon' => 'fas fa-check-circle', 'text' => 'Advanced analytics'],
                    ['icon' => 'fas fa-check-circle', 'text' => '24/7 support']
                ],
                'testimonial' => null,
                'sort_order' => 1,
                'is_active' => true
            ],
            [
                'title' => 'Revolution',
                'subtitle' => 'Join the',
                'description' => 'Be part of the content creation revolution that\'s changing how creators connect with their audience.',
                'background_image' => 'banner.jpg',
                'hero_image' => '3man.png',
                'badge_icon' => 'fas fa-globe',
                'badge_text' => 'Global Community',
                'primary_button_text' => 'Join Community',
                'primary_button_url' => '/register',
                'primary_button_icon' => 'fas fa-users',
                'secondary_button_text' => 'Watch Demo',
                'secondary_button_url' => '/creators',
                'secondary_button_icon' => 'fas fa-eye',
                'stats' => null,
                'features' => null,
                'testimonial' => [
                    'text' => 'This platform changed my life and allowed me to turn my passion into a thriving business.',
                    'author_name' => 'Sarah Johnson',
                    'author_title' => 'Top Creator',
                    'author_image' => ''
                ],
                'sort_order' => 2,
                'is_active' => true
            ]
        ];

        foreach ($slides as $slide) {
            HeroSlide::create($slide);
        }
    }
} 