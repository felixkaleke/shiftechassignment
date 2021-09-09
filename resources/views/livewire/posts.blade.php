<div>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
  
    @if($updateMode)
        @include('livewire.update')
    @else
        @include('livewire.create')
    @endif
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Create Post
</button>
 <div class="card-body">
        <livewire:app\Http\Livewire\Posts 
            searchable="title, body"
            exportable
         />
  
      </div>
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Title</th>
                <th>Body</th>
                <th width="150px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
                <td>
                <button wire:click="edit({{ $post->id }})" data-toggle="modal" data-target="#updateModal" class="btn btn-primary btn-sm">Edit</button>
                    <button wire:click="delete({{ $post->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>