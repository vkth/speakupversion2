<div>
    @include('livewire.update')
    {{-- Success is as dangerous as failure. --}}
    @if (session()->has('message'))
        <div class="alert alert-success" style="margin-top:30px;">x
          {{ session('message') }}
        </div>
    @endif
        
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>Status</th>
                <th>Type of PUV</th>
                <th>Body Plate</th>
                <th>Operator's Name</th>
                <th>Operator's Address</th>
                <th>Operator's Mobile Number/th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach($vehicles as $value)
            <tr>
                <td>{{ $value->status }}</td>
                <td>{{ $value->vehicle }}</td>
                <td>{{ $value->body_plate }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->address }}</td>
                <td>{{ $value->phone_number }}</td>
                <td>
                <button data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm">Edit</button>
                <button wire:click="delete({{ $value->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
