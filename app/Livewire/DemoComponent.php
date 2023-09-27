<?php

namespace App\Livewire;

use Ramsey\Uuid\Uuid;
use Livewire\Component;
use Illuminate\Support\Collection;

class DemoComponent extends Component
{
    public Collection $items;

    public function mount() : void
    {
        $this->items = collect([
            ['id' => 1, 'name' => 'John Doe', 'configuration' => ['foo' => 'bar']],
            ['id' => 2, 'name' => 'Jane Doe', 'configuration' => []]
        ]);
    }

    public function addItem()
    {
        $this->items['_' . ($id = (string) Uuid::uuid4()) . '_'] = [
            'id' => $id,
            'name' => 'New Item',
            'configuration' => [],
        ];
    }

    public function removeItem($id)
    {
        $this->items = $this->items->reject(fn ($item) => $item['id'] == $id);
    }

    public function update()
    {
        dd($this->items);
    }

    public function render()
    {
        return view('livewire.demo-component');
    }
}
