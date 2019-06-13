<div class="container">
    @if(session()->has('success'))
        <div class="alert alert-success">
            <strong>{{ ('message.message') }}:</strong>
            {{session()->get('success')}}
        </div>
    @endif
    @if(session()->has('danger'))
        <div class="alert alert-danger">
            <strong>{{ ('message.message') }}:</strong>
            {{session()->get('danger')}}
        </div>
    @endif
    @if(session()->has('warning'))
        <div class="alert alert-warning">
            <strong>{{ __('message.message') }}:</strong>
            {{session()->get('warning')}}
        </div>
    @endif
</div>