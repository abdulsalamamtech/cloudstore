<?php

namespace App\Filament\Admin\Widgets;

use App\Models\Orders;
use Flowframe\Trend\Trend;
use Illuminate\Support\Carbon;
use Flowframe\Trend\TrendValue;
use Filament\Widgets\ChartWidget;

class OrdersChart extends ChartWidget
{
    protected static ?string $heading = 'Orders';

    protected static ?string $pollingInterval = '30s';

    protected function getFilters(): ?array
    {
        return [
            'today' => 'Today',
            'yesterday' => 'yesterday',
            'last week' => 'Last week',
            'last month' => 'Last month',
            'last year' => 'Last year',
        ];
    }

    public function getDescription(): ?string
    {
        return 'The number of ordered items.';
    }

    protected function getData(): array
    {
            $activeFilter = $this->filter;

            $data = Trend::model(Orders::class)
            ->between(
                start: now()->subYear(),
                end: Carbon::parse($activeFilter) ?? now(),
            )
            ->perMonth()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Orders',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

}
