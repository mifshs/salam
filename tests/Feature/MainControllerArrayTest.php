<?php

namespace Tests\Feature;

use Tests\TestCase;

class MainControllerArrayTest extends TestCase
{
    public function test_array_page_displays_all_products_and_array_actions(): void
    {
        $response = $this->withoutVite()->get(route('array'));

        $response->assertOk()
            ->assertViewHas('array', fn (array $array): bool => count($array) === 8)
            ->assertSee('Перемешать массив')
            ->assertSee('Сортировать массив (по цене по возрастанию)')
            ->assertSee('Отфильтровать массив (оставить только товары, у которых цена больше 1000)');
    }

    public function test_array_can_be_sorted_by_price_in_ascending_order(): void
    {
        $response = $this->withoutVite()->get(route('array.sort'));

        $response->assertOk()
            ->assertViewHas('array', function (array $array): bool {
                $prices = array_column($array, 'price');
                $sortedPrices = $prices;
                sort($sortedPrices);

                return $prices === $sortedPrices;
            });
    }

    public function test_array_can_be_filtered_to_products_over_one_thousand(): void
    {
        $response = $this->withoutVite()->get(route('array.filter'));

        $response->assertOk()
            ->assertViewHas('array', fn (array $array): bool => count($array) === 7
                && array_reduce(
                    $array,
                    fn (bool $allAboveThreshold, array $item): bool => $allAboveThreshold && $item['price'] > 1000,
                    true,
                ));
    }

    public function test_array_can_be_shuffled_without_losing_products(): void
    {
        $response = $this->withoutVite()->get(route('array.shuffle'));

        $response->assertOk()
            ->assertViewHas('array', function (array $array): bool {
                $ids = array_column($array, 'id');
                sort($ids);

                return count($ids) === 8 && $ids === range(1, 8);
            });
    }
}
