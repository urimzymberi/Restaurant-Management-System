@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
@if (session('info'))
    <div class="alert alert-info">
        {{ session('status') }}
    </div>
@endif
