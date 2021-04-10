@php
    $question =\App\Models\question::all();
@endphp
@extends('layouts.employee')
<head>
    <title>FindJobs - Câu hỏi thường gặp</title>
</head>
@section('additional-Style')
    <link href="{{ asset("css/faq.css")}}" rel="stylesheet" type="text/css">

@endsection
@section('content')
    <div class="container pl-0">
        <h4 class="text-dark title-faq pt-4 pb-2 mb-3 pl-0 font-weight-bold"><u><i class="far fa-question-circle"></i> CÂU
                HỎI
                THƯỜNG GẶP:</u></h4>
    </div>
    <div class="container bg-img-faq p-0 mb-1">
        <div class="bg-title-faq p-3" id="accordion">
            <?php foreach ($question as $value): ?>
            <div class="content-faq">
                <div class="card card-header p-0 px-3" id="heading<?= $value['id'] ?>">
                    <a class="text-decoration-none row change-content-faq" href="#" data-toggle="collapse"
                       data-target="#collapse<?= $value['id'] ?>" aria-expanded="false" aria-controls="collapse">
                        <p class="py-3 mb-0  col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 font-weight-bold">
                            <?= $value['id'] ?>. <?= $value['question_html'] ?></p>
                        <p class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 py-3 mb-0 m-auto  font-weight-bold text-center">
                            <i
                                class="fas fa-chevron-down rorate"></i></p>
                    </a>
                </div>
                <div class="collapse" id="collapse<?= $value['id'] ?>" class="collapse show"
                     aria-labelledby="heading<?= $value['id'] ?>" data-parent="#accordion">
                    <div class="card card-body border-top pl-4 p-1">
                        <?= $value['answer_html'] ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
@endsection
@section('additional-Scripts')
    <script>
        $(document).ready(function () {
            $(".change-content-faq").click(function () {
                $(this).css("color", "#03abff");
            });
        });
    </script>
@endsection
