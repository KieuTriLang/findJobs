@extends('layouts/employee')
@section('content')
<div class="d-flex mt-4 row justify-content-around">
    <div class="d-flex bg-warning col-11 mx-auto">
        <p class="h6 m-2 font-weight-bold">Công việc đã lưu</p>
    </div>
    @foreach ($jobs as $job)
    <div class="col-10 col-md-5 border shadow d-flex align-items-center mb-3">
        <div class="col-2 my-3 p-0">
            <img src="{{ asset("company_logo/$job->company_logo") }}" alt="" width="100%" height="100%" class="rounded">
        </div>
        <div class="col-10 my-2">

            <a href="{{ route('employee.detailJob',["$job->id","$job->employer_id"]) }}" class="text-danger"><h6 class="mb-1 text-hiden mt-3">{{ $job->hire_position }}</h6></a>
            <p class="h6">{{ $job->company_name }}</p>
            <p class="h6 text-truncate">{{ $job->description }}</p>
            <p class="h6"><i class="far fa-calendar-alt mr-2"></i>{{ date('d-m-Y',strtotime($job->created_at)) }}</p>
            <a href="{{ route('employee.unbookmark',["$job->id","$job->employee_id"]) }}" class="text-decoration-none text-dark" onclick="event.preventDefault();
                                                document.getElementById('unbookmark{{ $job->post_job_id }}').submit();"><i
                    class="fas fa-trash mr-2"></i>Bỏ lưu</a>
            <form id="unbookmark{{ $job->post_job_id }}" action="{{ route('employee.unbookmark',["$job->post_job_id","$job->employee_id"]) }}" method="post"
                style="display: none;">
                @method('DELETE')
                @csrf
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection
