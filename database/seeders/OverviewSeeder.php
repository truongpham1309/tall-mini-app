<?php

namespace Database\Seeders;

use App\Models\Overview;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OverviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $listOverview = [
            ['icon' => '/images/Icon.svg', 'title' => 'Collection', 'background' => 'bg-[#FFEA98]', 'description' => 'Wira Collection – Common, Rare, Legendary'],
            ['icon' => '/images/Icon-1.svg', 'title' => 'Supply', 'background' => 'bg-[#FFDBC0]', 'description' => 'Common: 3000, Rare: 1250, Legendary: 750 (FCFS)'],
            ['icon' => '/images/Icon-2.svg', 'title' => 'Limit', 'background' => 'bg-[#EEE1FF]', 'description' => 'Max 3 NFTs/account (1 per type)'],
            ['icon' => '/images/Icon-3.svg', 'title' => 'Mint Condition', 'background' => 'bg-[#C4F5FF]', 'description' => 'Complete the required tasks'],
            ['icon' => '/images/Icon-4.svg', 'title' => 'Benefits', 'background' => 'bg-[#BCEECE]', 'description' => 'Revealed after the campaign ends'],
        ];

        foreach($listOverview as $item) {
            if (Overview::where('title', $item['title'])->exists()) {
                continue;
            }
            Overview::create([
                'title' => $item['title'],
                'icon' => $item['icon'],
                'background' => $item['background'],
                'description' => $item['description'],
            ]);
        };
    }
}
