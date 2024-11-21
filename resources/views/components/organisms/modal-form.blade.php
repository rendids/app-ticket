<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-labelledby="{{ $id }}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="{{ $id }}Label">{{ $title ?? 'Modal Title' }}</h5>
                <!-- Using AdminLTE's close button with icon -->
                <button type="button" class="btn btn-sm btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{-- Check if $action is passed and default to a placeholder if not --}}
                <form method="POST" action="{{ $action ?? '#' }}">
                    @csrf
                    @method($method ?? 'POST')

                    {{-- Slot for custom modal content --}}
                    {{ $slot }}

                    <div class="modal-footer">
                        {{-- Close button --}}
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Tutup</button>

                        {{-- Submit button with customizable text passed via $buttonText --}}
                        <x-atoms.button type="submit" color="{{ $btnColor ?? 'primary' }}" class="btn-sm">
                            {{ $buttonText ?? 'Submit' }}
                        </x-atoms.button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
