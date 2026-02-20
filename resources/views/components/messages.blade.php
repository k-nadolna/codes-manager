@if (session('success'))
    <p class="text-green-600">
        {{ session('success') }}
    </p>
@endif

@if (session('error'))
    <p class="text-red-500">
        {{ session('error') }}
    </p>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif