<?php

namespace Database\Seeders;


use Dipokhalder\EnvEditor\EnvEditor;
use Illuminate\Database\Seeder;
use App\Enums\Status;
use App\Models\ItemVariation;

class ItemVariationTableSeeder extends Seeder
{

    public function run()
    {
        $envService = new EnvEditor();
        if ($envService->getValue('DEMO')) {
            ItemVariation::insert([
                [
                    'item_id'           => 1,
                    'item_attribute_id' => 1,
                    'name'              => 'Regular - 8 pcs',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 1,
                    'item_attribute_id' => 1,
                    'name'              => 'Big - 12 pcs',
                    'price'             => '1.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 2,
                    'item_attribute_id' => 5,
                    'name'              => 'Chicken',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 2,
                    'item_attribute_id' => 5,
                    'name'              => 'Beef',
                    'price'             => '1.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 3,
                    'item_attribute_id' => 1,
                    'name'              => 'Regular - 8 pcs',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 3,
                    'item_attribute_id' => 1,
                    'name'              => 'Big - 12 pcs',
                    'price'             => '1.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 4,
                    'item_attribute_id' => 1,
                    'name'              => 'Half - 6 pcs',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 4,
                    'item_attribute_id' => 1,
                    'name'              => 'Full - 12 pcs',
                    'price'             => '1.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 6,
                    'item_attribute_id' => 1,
                    'name'              => 'Regular',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 6,
                    'item_attribute_id' => 1,
                    'name'              => 'Large',
                    'price'             => '1.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 7,
                    'item_attribute_id' => 1,
                    'name'              => 'Regular',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 7,
                    'item_attribute_id' => 1,
                    'name'              => 'Large',
                    'price'             => '1.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 8,
                    'item_attribute_id' => 1,
                    'name'              => 'Regular',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 8,
                    'item_attribute_id' => 1,
                    'name'              => 'Large',
                    'price'             => '1.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 9,
                    'item_attribute_id' => 1,
                    'name'              => 'Regular',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 9,
                    'item_attribute_id' => 1,
                    'name'              => 'Large',
                    'price'             => '1.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 10,
                    'item_attribute_id' => 1,
                    'name'              => 'Regular',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 10,
                    'item_attribute_id' => 1,
                    'name'              => 'Large',
                    'price'             => '1.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 11,
                    'item_attribute_id' => 1,
                    'name'              => 'Regular',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 11,
                    'item_attribute_id' => 1,
                    'name'              => 'Large',
                    'price'             => '1.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 12,
                    'item_attribute_id' => 1,
                    'name'              => 'Regular',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 12,
                    'item_attribute_id' => 1,
                    'name'              => 'Large',
                    'price'             => '1.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 13,
                    'item_attribute_id' => 1,
                    'name'              => 'Regular',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 13,
                    'item_attribute_id' => 1,
                    'name'              => 'Large',
                    'price'             => '1.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 14,
                    'item_attribute_id' => 1,
                    'name'              => 'Regular',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 14,
                    'item_attribute_id' => 1,
                    'name'              => 'Large',
                    'price'             => '1.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 15,
                    'item_attribute_id' => 1,
                    'name'              => 'Regular',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 15,
                    'item_attribute_id' => 1,
                    'name'              => 'Large',
                    'price'             => '1.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 16,
                    'item_attribute_id' => 1,
                    'name'              => 'Regular - 6',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 16,
                    'item_attribute_id' => 1,
                    'name'              => 'Large - 10',
                    'price'             => '1.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 17,
                    'item_attribute_id' => 1,
                    'name'              => 'Regular - 6',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 17,
                    'item_attribute_id' => 1,
                    'name'              => 'Large - 10',
                    'price'             => '1.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 18,
                    'item_attribute_id' => 1,
                    'name'              => 'Regular - 6',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 18,
                    'item_attribute_id' => 1,
                    'name'              => 'Large - 10',
                    'price'             => '1.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 19,
                    'item_attribute_id' => 1,
                    'name'              => 'Regular - 6',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 19,
                    'item_attribute_id' => 1,
                    'name'              => 'Large - 10',
                    'price'             => '1.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 20,
                    'item_attribute_id' => 1,
                    'name'              => 'Regular - 6',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 20,
                    'item_attribute_id' => 1,
                    'name'              => 'Large - 10',
                    'price'             => '1.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 21,
                    'item_attribute_id' => 2,
                    'name'              => '6 pcs',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 21,
                    'item_attribute_id' => 2,
                    'name'              => '8 pcs',
                    'price'             => '1.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 21,
                    'item_attribute_id' => 2,
                    'name'              => '12 pcs',
                    'price'             => '1.50',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 22,
                    'item_attribute_id' => 2,
                    'name'              => '6 pcs',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 22,
                    'item_attribute_id' => 2,
                    'name'              => '8 pcs',
                    'price'             => '1.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 22,
                    'item_attribute_id' => 2,
                    'name'              => '12 pcs',
                    'price'             => '1.50',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 23,
                    'item_attribute_id' => 2,
                    'name'              => '6 pcs',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 23,
                    'item_attribute_id' => 2,
                    'name'              => '8 pcs',
                    'price'             => '1.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 23,
                    'item_attribute_id' => 2,
                    'name'              => '12 pcs',
                    'price'             => '1.50',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 24,
                    'item_attribute_id' => 2,
                    'name'              => '6 pcs',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 24,
                    'item_attribute_id' => 2,
                    'name'              => '8 pcs',
                    'price'             => '1.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 24,
                    'item_attribute_id' => 2,
                    'name'              => '12 pcs',
                    'price'             => '1.50',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 25,
                    'item_attribute_id' => 2,
                    'name'              => '6 pcs',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 25,
                    'item_attribute_id' => 2,
                    'name'              => '8 pcs',
                    'price'             => '1.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 25,
                    'item_attribute_id' => 2,
                    'name'              => '12 pcs',
                    'price'             => '1.50',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 26,
                    'item_attribute_id' => 3,
                    'name'              => 'Regular',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 26,
                    'item_attribute_id' => 3,
                    'name'              => 'Large',
                    'price'             => '1.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 26,
                    'item_attribute_id' => 4,
                    'name'              => 'Rare',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 26,
                    'item_attribute_id' => 4,
                    'name'              => 'Medium',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 26,
                    'item_attribute_id' => 4,
                    'name'              => 'Well',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 27,
                    'item_attribute_id' => 3,
                    'name'              => 'Regular',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 27,
                    'item_attribute_id' => 3,
                    'name'              => 'Large',
                    'price'             => '1.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 27,
                    'item_attribute_id' => 4,
                    'name'              => 'Rare',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 27,
                    'item_attribute_id' => 4,
                    'name'              => 'Medium',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 27,
                    'item_attribute_id' => 4,
                    'name'              => 'Well',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 28,
                    'item_attribute_id' => 3,
                    'name'              => 'Regular',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 28,
                    'item_attribute_id' => 3,
                    'name'              => 'Large',
                    'price'             => '1.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 28,
                    'item_attribute_id' => 4,
                    'name'              => 'Rare',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 28,
                    'item_attribute_id' => 4,
                    'name'              => 'Medium',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 28,
                    'item_attribute_id' => 4,
                    'name'              => 'Well',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 29,
                    'item_attribute_id' => 3,
                    'name'              => 'Regular',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 29,
                    'item_attribute_id' => 3,
                    'name'              => 'Large',
                    'price'             => '1.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 29,
                    'item_attribute_id' => 4,
                    'name'              => 'Rare',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 29,
                    'item_attribute_id' => 4,
                    'name'              => 'Medium',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 29,
                    'item_attribute_id' => 4,
                    'name'              => 'Well',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 32,
                    'item_attribute_id' => 2,
                    'name'              => 'Pack of 6',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 32,
                    'item_attribute_id' => 2,
                    'name'              => 'Pack of 12',
                    'price'             => '1.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 33,
                    'item_attribute_id' => 2,
                    'name'              => 'Pack of 6',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 33,
                    'item_attribute_id' => 2,
                    'name'              => 'Pack of 12',
                    'price'             => '1.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 34,
                    'item_attribute_id' => 6,
                    'name'              => 'No egg',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 34,
                    'item_attribute_id' => 6,
                    'name'              => 'Poached egg',
                    'price'             => '1.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 44,
                    'item_attribute_id' => 1,
                    'name'              => 'Regular',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 44,
                    'item_attribute_id' => 1,
                    'name'              => 'Large',
                    'price'             => '1.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 46,
                    'item_attribute_id' => 1,
                    'name'              => 'Regular',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 46,
                    'item_attribute_id' => 1,
                    'name'              => 'Large',
                    'price'             => '1.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 51,
                    'item_attribute_id' => 1,
                    'name'              => 'Regular',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 51,
                    'item_attribute_id' => 1,
                    'name'              => 'Large',
                    'price'             => '1.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 52,
                    'item_attribute_id' => 1,
                    'name'              => 'Regular',
                    'price'             => '0.00',
                    'status'            => Status::ACTIVE,
                ],
                [
                    'item_id'           => 52,
                    'item_attribute_id' => 1,
                    'name'              => 'Large',
                    'price'             => '1.00',
                    'status'            => Status::ACTIVE,
                ],
            ]);
        }
    }
}
