@extends("layouts.main")

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Index</th>
                        <th>ID</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($students ?? '' as $student)
                    @if($loop->first)
                    <tr>
                        <td>{{ $loop->index }}</td>
                        <td class="text-danger">{{ $student['id'] }}</td>
                        <td class="text-danger">{{ $student['name'] }}</td>
                    </tr>
                    @else
                    <tr>
                        <td>{{ $loop->index }}</td>
                        <td>{{ $student['id'] }}</td>
                        <td>{{ $student['name'] }}</td>
                    </tr>
                    @endif
                    @empty
                    <tr>
                        <td>null</td>
                        <td>null</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection