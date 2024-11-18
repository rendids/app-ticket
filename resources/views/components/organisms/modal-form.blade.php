<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-labelledby="{{ $id }}Label"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center">
                <h5 class="modal-title" id="{{ $id }}Label">{{ $title ?? 'Modal Title' }}</h5>
                <button type="button" class="btn btn-sm" data-bs-dismiss="modal" aria-label="Close"><svg
                        xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M20 6.91L17.09 4L12 9.09L6.91 4L4 6.91L9.09 12L4 17.09L6.91 20L12 14.91L17.09 20L20 17.09L14.91 12z" />
                    </svg></button>
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

                        {{-- Submit button, customizable text passed via $buttonText --}}
                        <x-atoms.button type="submit" color="{{ $btnColor ?? 'primary' }}" class="btn-sm">
                            {{ $buttonText ?? 'Submit' }}
                        </x-atoms.button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
