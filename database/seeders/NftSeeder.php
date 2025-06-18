<?php

namespace Database\Seeders;

use App\Models\Nft;
use Illuminate\Database\Seeder;

class NftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $listItem = [
            [
                ['content' => '/images/Sticker.svg', 'type' => 'image'],
                ['content' => '/images/Sticker-1.svg', 'type' => 'image'],
                ['content' => 'MINT NOW!', 'type' => 'button', 'background' => 'bg-[linear-gradient(93.74deg,#FE63BF_2.18%,#FFFFFF_99.55%)]'],
                ['content' => '/images/Sticker-2.svg', 'type' => 'image'],
                ['content' => '/images/Sticker-3.svg', 'type' => 'image'],
                ['content' => '/images/Sticker-4.svg', 'type' => 'image'],
                ['content' => '/images/Sticker-5.svg', 'type' => 'image'],
                ['content' => '/images/Sticker-6.svg', 'type' => 'image'],
                ['content' => '/images/Sticker-7.svg', 'type' => 'image'],
                ['content' => '/images/Sticker-8.svg', 'type' => 'image'],
                ['content' => '/images/Sticker-9.svg', 'type' => 'image'],
            ],
            [
                ['content' => '/images/Sticker-5.svg', 'type' => 'image'],
                ['content' => '/images/Sticker-3.svg', 'type' => 'image'],
                ['content' => '/images/Sticker-2.svg', 'type' => 'image'],
                ['content' => '/images/Sticker-4.svg', 'type' => 'image'],
                ['content' => '/images/Sticker-1.svg', 'type' => 'image'],
                ['content' => '/images/Sticker.svg', 'type' => 'image'],
                ['content' => '/images/Sticker-6.svg', 'type' => 'image'],
                ['content' => 'STACK!', 'type' => 'button', 'background' => 'bg-[linear-gradient(93.74deg,#1DDBFF_2.18%,#FFFFFF_99.55%)]'],
                ['content' => '/images/Sticker-7.svg', 'type' => 'image'],
                ['content' => '/images/Sticker-8.svg', 'type' => 'image'],
                ['content' => '/images/Sticker-9.svg', 'type' => 'image'],
            ],
            [
                ['content' => '/images/Sticker-2.svg', 'type' => 'image'],
                ['content' => '/images/Sticker-1.svg', 'type' => 'image'],
                ['content' => '/images/Sticker-3.svg', 'type' => 'image'],
                ['content' => 'COLLECT!', 'type' => 'button', 'background' => 'bg-[linear-gradient(93.74deg,#B67EFE_2.18%,#FFFFFF_99.55%)]'],
                ['content' => '/images/Sticker-4.svg', 'type' => 'image'],
                ['content' => '/images/Sticker-5.svg', 'type' => 'image'],
                ['content' => '/images/Sticker-6.svg', 'type' => 'image'],
                ['content' => '/images/Sticker-7.svg', 'type' => 'image'],
                ['content' => '/images/Sticker-9.svg', 'type' => 'image'],
                ['content' => '/images/Sticker.svg', 'type' => 'image'],
                ['content' => '/images/Sticker-8.svg', 'type' => 'image'],
            ],
        ];

        foreach ($listItem as $rowIndex => $row) {
            foreach ($row as $index => $item) {
                if (Nft::where('content', $item['content'])->exists()) {
                    continue;
                }
                Nft::create([
                    'content' => $item['content'],
                    'type' => $item['type'],
                    'background' => $item['background'] ?? null,
                    'row' => $rowIndex,
                    'location' => $index,
                ]);
            }
        }
    }
}
