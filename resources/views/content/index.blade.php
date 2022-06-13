@extends('template')

@section('title', 'Content')

@section('content')
    <h1>Content</h1>
    <div class="mb-2">
        <a href="{{ url('content/create') }}" role="button" class="btn btn-sm btn-success">Create</a>

    </div>
    <table id="tbContent" class="table table-border">
        <thead>
            <tr>
                <th>id</th>
                <th>topic</th>
                <th>detail</th>
                <th>tag</th>
                <th>writer</th>
                <th>create at</th>
                <th style="width: 150px"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contents as $content)
                <tr>
                    <td>{{ $content->id }}</td>
                    <td>{{ $content->topic }}</td>
                    <td>{{ $content->detail }}</td>
                    <td>{{ $content->tag }}</td>
                    <td>{{ $content->user->name }}</td>
                    <td>{{ $content->created_at->format('d/m/y H:i') }}</td>
                    <td>
                        <a href="{{ url("content/$content->id/edit") }}" role="button"
                            class="btn btn-sm btn-warning">Edit</a>
                        <button type="button" class="btn btn-sm btn-danger delete-item"
                            data-id='{{ $content->id }}'>Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $contents->links() }}
@endsection

@push('script')
    <script>
        document.querySelector('#tbContent').addEventListener('click', (e) => {
            if (e.target.matches('.delete-item')) {
                console.log(e.target.dataset.id);
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        axios.delete($url + '/content/' + e.target.dataset.id).then((response) => {
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                            setTimeout(() => {
                                window.location.href = $url + '/content';
                            }, 2000);
                        })
                    }
                })
            }
        })
    </script>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush
