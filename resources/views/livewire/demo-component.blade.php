<div class="flex w-full bg-zinc-900 h-full items-center justify-center text-gray-300 px-16">
    <div class="bg-white rounded p-10">
        <h2 class="text-base font-semibold leading-7 text-gray-900">My Items</h2>

        <div class="space-y-3 mt-4">
        @foreach($items as $key => $item)
            <div class="relative flex items-start">
                <div class="ml-3 text-sm leading-6">
                    <label for="todo-{{ $loop->index }}" class="font-medium text-gray-900">{{ $item['name'] }}</label>
                </div>

                <div x-data="{ configuration: @entangle("items.{$key}.configuration") }"></div>

                <button type="button" wire:click="removeItem('{{ $item['id'] }}')" class="outline-none flex items-center px-4 py-2 w-full hover:bg-gray-100">
                    <svg class="h-4 w-4 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                    <p class="text-sm text-gray-700 ml-2">Remove</p>
                </button>
            </div>
        @endforeach
        </div>

        <button type="button" wire:click="addItem" class="w-full flex justify-between items-center px-3 py-2 text-left text-sm leading-5 rounded-t-md text-gray-700 hover:bg-gray-50 hover:text-gray-900 focus:outline-none focus:bg-gray-50 focus:text-gray-900" role="menuitem" >
            Add Item
        </button>

        <button type="button" wire:click="update" class="w-full flex justify-between items-center px-3 py-2 text-left text-sm leading-5 rounded-t-md text-gray-700 hover:bg-gray-50 hover:text-gray-900 focus:outline-none focus:bg-gray-50 focus:text-gray-900" role="menuitem" >
            Update
        </button>
    </div>
</div>
