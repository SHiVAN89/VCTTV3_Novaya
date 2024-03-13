<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            @if ($error->any())
            <div class="alert alert-danger">
                @include('layout.layout.error')
                <ul class="list-unstyled">
                    @foreach ($error->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('seccess')}}
            </div>
            @endif
        </div>
    </div>
</div>