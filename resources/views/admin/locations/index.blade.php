@extends('admin.layouts.layout')


@section('content')
{{--    @dd($amps->all())--}}
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <div class="box-body">

                            <a href="{{route('location.create')}}" class="btn btn-primary mb-3">Add location</a>

                            @if (count($locations))


                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <th>ID location</th>
                                        <th>Title</th>
                                        <th>Slug</th>
                                        <th>Actions</th>
                                    </tr>

                                    @foreach($locations as $location)

                                        <tr>
                                            <td>{{ $location->id }}</td>
                                            <td>{{ $location->title }}</td>
                                            <td>{{ $location->slug }}</td>
                                            <td>
                                                <a href="{{ route('location.edit', ['location' => $location->id]) }}" class="btn btn-info btn-sm float-left mr-1">
                                                    <i class="far fa-edit"></i>
{{--                                                    <i class="fas fa-pencil-alt"></i>--}}
                                                </a>
                                                <form
                                                    action="{{ route('location.destroy', ['location' => $location->id]) }}"
                                                    method="post" class="float-left">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Conform deleting')">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p>No locations, create a new one ...</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div>
            @if (count($locations))
            {{ $locations->links() }}
            @endif
        </div>
    </div>
@endsection
