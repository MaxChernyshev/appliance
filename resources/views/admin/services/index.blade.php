@extends('admin.layouts.layout')


@section('content')
{{--    @dd($amps->all())--}}
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <div class="box-body">

                            <a href="{{route('service.create')}}" class="btn btn-primary mb-3">Add service</a>

                            @if (count($services))


                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <th>ID service</th>
                                        <th>Title</th>
                                        <th>Slug</th>
                                        <th>Actions</th>
                                    </tr>

                                    @foreach($services as $service)

                                        <tr>
                                            <td>{{ $service->id }}</td>
                                            <td>{{ $service->title }}</td>
                                            <td>{{ $service->slug }}</td>
                                            <td>
                                                <a href="{{ route('service.edit', ['service' => $service->id]) }}" class="btn btn-info btn-sm float-left mr-1">
                                                    <i class="far fa-edit"></i>
{{--                                                    <i class="fas fa-pencil-alt"></i>--}}
                                                </a>
                                                <form
                                                    action="{{ route('service.destroy', ['service' => $service->id]) }}"
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
                                <p>No services, create a new one ...</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div>
            @if (count($services))
            {{ $services->links() }}
            @endif
        </div>
    </div>
@endsection
