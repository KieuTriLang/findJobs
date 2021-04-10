@extends('layouts/employer')
@section('content')
<div class="container-fluid mt-5">
    <div class="d-flex justify-content-between align-items-center bg-warning">
        <p class="h6 m-2 font-weight-bold">Job Management ({{ $count }})</p>
        <a href="{{ route('job.create') }}" class="text-dark font-weight-bold mr-2 mr-md-4"><i
                class="fas fa-plus-square mr-2"></i>Create <span class="d-none d-sm-inline">New Job</span></a>
    </div>
    <div class="d-flex mt-4 row justify-content-around">
        @foreach ($postJobs as $job)
        <div class="col-10 col-md-5 border shadow d-flex align-items-center mb-3">
            <div class="col-2 my-3 p-0">
                <img src="{{ asset("company_logo/$company_logo->company_logo") }}" alt="" width="100%" height="100%" class="rounded">
            </div>
            <div class="col-10 my-2">
                <p class="h6 font-weight-bold">{{ $job->hire_position }}</p>
                <p class="h6">{{ $job->company_name }}</p>
                <p class="h6 text-truncate">{{ $job->description }}</p>
                <p class="h6"><i class="far fa-calendar-alt mr-2"></i>{{ $job->created_at }}</p>
                <a href="{{ route('job.show',"$job->id") }}" class="text-decoration-none text-dark mr-3"><i
                        class="fas fa-info-circle mr-2"></i>Info Job</a>
                <a href="{{ route('job.edit',"$job->id") }}" class="text-decoration-none text-dark mr-3"><i
                        class="fas fa-edit mr-2"></i>Edit</a>
                <a href="{{ route('job.destroy',"$job->id") }}" class="text-decoration-none text-dark" onclick="event.preventDefault();
                                                    document.getElementById('delete-resume').submit();"><i
                        class="fas fa-trash mr-2"></i>Delete</a>
                <form id="delete-resume" action="{{ route('job.destroy',"$job->id") }}" method="post"
                    style="display: none;">
                    @method('DELETE')
                    @csrf
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
