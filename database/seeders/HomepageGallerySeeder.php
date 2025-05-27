<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HomepageGallery;

class HomepageGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $galleries = [
            [
                'name' => 'Popular',
                'slug' => 'popular',
                'description' => 'Trending creators with amazing content',
                'icon' => 'fas fa-fire',
                'url' => '/creators',
                'badge_text' => null,
                'badge_type' => 'default',
                'category_type' => 'featured',
                'color_scheme' => 'popular',
                'sort_order' => 1,
                'is_active' => true,
                'stats' => [
                    ['icon' => 'fas fa-users', 'text' => '50K+ Creators']
                ]
            ],
            [
                'name' => 'Featured',
                'slug' => 'featured',
                'description' => 'Hand-picked premium content creators',
                'icon' => 'fas fa-star',
                'url' => '/featured',
                'badge_text' => 'Premium',
                'badge_type' => 'premium',
                'category_type' => 'featured',
                'color_scheme' => 'featured',
                'sort_order' => 2,
                'is_active' => true,
                'stats' => [
                    ['icon' => 'fas fa-crown', 'text' => 'VIP Access']
                ]
            ],
            [
                'name' => 'More Active',
                'slug' => 'more-active',
                'description' => 'Most active and engaging creators',
                'icon' => 'fas fa-bolt',
                'url' => '/active',
                'badge_text' => 'Hot',
                'badge_type' => 'hot',
                'category_type' => 'regular',
                'color_scheme' => 'active',
                'sort_order' => 3,
                'is_active' => true,
                'stats' => [
                    ['icon' => 'fas fa-chart-line', 'text' => 'High Activity']
                ]
            ],
            [
                'name' => 'New Creators',
                'slug' => 'new-creators',
                'description' => 'Fresh faces and new talent',
                'icon' => 'fas fa-seedling',
                'url' => '/new',
                'badge_text' => 'New',
                'badge_type' => 'new',
                'category_type' => 'regular',
                'color_scheme' => 'new',
                'sort_order' => 4,
                'is_active' => true,
                'stats' => [
                    ['icon' => 'fas fa-user-plus', 'text' => 'Fresh Content']
                ]
            ],
            [
                'name' => 'Free Content',
                'slug' => 'free-content',
                'description' => 'Amazing free content for everyone',
                'icon' => 'fas fa-gift',
                'url' => '/free',
                'badge_text' => 'Free',
                'badge_type' => 'free',
                'category_type' => 'regular',
                'color_scheme' => 'free',
                'sort_order' => 5,
                'is_active' => true,
                'stats' => [
                    ['icon' => 'fas fa-heart', 'text' => 'No Cost']
                ]
            ],
            [
                'name' => 'Explore More',
                'slug' => 'explore-more',
                'description' => 'Discover hidden gems and unique content',
                'icon' => 'fas fa-compass',
                'url' => '/explore',
                'badge_text' => null,
                'badge_type' => 'default',
                'category_type' => 'regular',
                'color_scheme' => 'others',
                'sort_order' => 6,
                'is_active' => true,
                'stats' => [
                    ['icon' => 'fas fa-search', 'text' => 'Discover']
                ]
            ]
        ];

        foreach ($galleries as $gallery) {
            HomepageGallery::create($gallery);
        }
    }
}
