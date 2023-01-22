<?php

namespace Tests\Feature;

use App\Contracts\BrandListActionContract;
use App\Contracts\CategoryListActionContract;
use App\Contracts\ProductListActionContract;
use Illuminate\Support\Collection;
use Mockery;
use Tests\TestCase;

class IndexControllerTest extends TestCase
{
    /**
    * @test
    */
    public function it_main_page_success_status(): void
    {
        $response = $this->get(route('index'));

        $response->assertOk();
    }

    /**
     * @test
     * @dataProvider actionsForViewIndex
     */
    public function it_call_method_for_get_data_in_view($objAction): void
    {
        $service = Mockery::mock($objAction);
        app()->instance($objAction, $service);
        $service->shouldReceive('__invoke')->once()->andReturn(new Collection());

        $this->get(route('index'));
    }

    public function actionsForViewIndex(): array
    {
        return [
            [CategoryListActionContract::class],
            [ProductListActionContract::class],
            [BrandListActionContract::class]
        ];
    }

    /**
    * @test
    */
    public function it_necessary_variables_are_in_view(): void
    {
        $response = $this->get(route('index'));
        $response->assertViewHas('categories', $value = null);
        $response->assertViewHas('products', $value = null);
        $response->assertViewHas('brands', $value = null);
    }
}
