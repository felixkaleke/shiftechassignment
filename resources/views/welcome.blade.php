@extends('layouts.app')
@section('content')
<body>

  @include('sweetalert::alert')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>Learn Liverwire</h2>
                    </div>
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        @livewire('posts')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</body>
</html>
<script type="text/javascript">
    window.live.on('userStore',()=>{
        $('#exampleModal').modal('hide');
    })
</script>
@endsection