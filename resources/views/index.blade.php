@extends('layout.skeleton')

@section('title')
Blackmine
@endsection

@section('content')
<div class="p-3 h-100 shade d-flex flex-column justify-content-center align-items-center">
    <p class="text-center h3 p-3">
        Анархический сервер Minecraft с GregTech 6 и TechGuns.<br>
        Максимум технологий, минимум правил.
    </p>
    <div class="p-3 text-center">
        <img class="w-75 animate__animated animate__infinite animate__pulse animate__slower"
            src="/images/blackmine_logo.png" alt="">
    </div>

    <h4 class="text-center text-black m-3">ETA: Q2 2020, текущий прогресс:</h4>

    <div class="card w-100 p-3">
        <div class="d-flex w-100">
            <div class="d-flex flex-column h-100 mx-1">
                <div class="flex-fill d-flex m-1">
                    <div class="my-auto mr-auto h4">Сайт</div>
                </div>
                <div class="flex-fill d-flex m-1">
                    <div class="my-auto mr-auto h4">Лаунчер</div>
                </div>
                <div class="flex-fill d-flex m-1">
                    <div class="my-auto mr-auto h4">Выбор модов</div>
                </div>
                <div class="flex-fill d-flex m-1">
                    <div class="my-auto mr-auto h4">Рецепты</div>
                </div>
                <div class="flex-fill d-flex m-1">
                    <div class="my-auto mr-auto h4">Квестбук</div>
                </div>
                <div class="flex-fill d-flex m-1">
                    <div class="my-auto mr-auto h4">Сервер</div>
                </div>
                <div class="flex-fill d-flex m-1">
                    <div class="my-auto mr-auto h4">Застройка</div>
                </div>
            </div>
            <div class="d-flex flex-column h-100 mx-1">
                <div class="flex-fill d-flex m-1">
                    <div class="my-auto mr-auto h4">100%</div>
                </div>
                <div class="flex-fill d-flex m-1">
                    <div class="my-auto mr-auto h4">75%</div>
                </div>
                <div class="flex-fill d-flex m-1">
                    <div class="my-auto mr-auto h4">50%</div>
                </div>
                <div class="flex-fill d-flex m-1">
                    <div class="my-auto mr-auto h4">0%</div>
                </div>
                <div class="flex-fill d-flex m-1">
                    <div class="my-auto mr-auto h4">0%</div>
                </div>
                <div class="flex-fill d-flex m-1">
                    <div class="my-auto mr-auto h4">0%</div>
                </div>
                <div class="flex-fill d-flex m-1">
                    <div class="my-auto mr-auto h4">0%</div>
                </div>
            </div>
            <div class="d-flex flex-column mx-1 flex-fill">
                <div class="progress flex-fill m-1">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-green" role="progressbar"
                        style="width: 100%">
                    </div>
                </div>
                <div class="progress flex-fill m-1">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-green" role="progressbar"
                        style="width: 75%">
                    </div>
                </div>
                <div class="progress flex-fill m-1">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-green" role="progressbar"
                        style="width: 50%">
                    </div>
                </div>
                <div class="progress flex-fill m-1">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-green" role="progressbar"
                        style="width: 0%">
                    </div>
                </div>
                <div class="progress flex-fill m-1">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-green" role="progressbar"
                        style="width: 0%">
                    </div>
                </div>
                <div class="progress flex-fill m-1">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-green" role="progressbar"
                        style="width: 0%">
                    </div>
                </div>
                <div class="progress flex-fill m-1">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-green" role="progressbar"
                        style="width: 0%">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('customjs')
<script>
    $(document).snowfall({
        flakeCount : 50,
        maxSpeed : 10,
        minSize: 1,
        maxSize: 3
    });
</script>
@endsection