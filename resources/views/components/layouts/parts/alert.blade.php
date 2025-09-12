{{-- Success Messages --}}
@if (session('status'))
    <div class="bg-info/50 border border-info rounded-md p-4">
        <div class="flex">
            <div class="flex-shrink-0">
                <x-heroicon-o-check-circle class="h-5 w-5 text-success"/>
            </div>
            <div class="ml-3">
                <p class="text-sm text-success">{{ session('status') }}</p>
            </div>
        </div>
    </div>
@endif

{{-- Error messages --}}
@if ($errors->any())
    <div class="fixed top-4 right-4 bg-danger/25 border border-danger/50 rounded-sm p-2 py-1.5">
        <div class="flex">
            <div class="flex-shrink-0">
                <x-heroicon-o-x-circle class="h-5 w-5 text-danger"/>
            </div>
            <div class="ml-1.5">
                @foreach($errors->all() as $error)
                    <p class="text-xs text-danger leading-normal">{{ $error }}</p>
                @endforeach
            </div>
        </div>
    </div>
@endif
