@extends('layouts.layout')

@section('title', 'Главная страница')

@section('content')

    @include('layouts.header')

    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">About</h1>
                <h1 class="position-absolute text-uppercase text-primary">О себе</h1>
            </div>
            <!--				<div class="row align-items-center">-->
            <div class="row">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid rounded w-100" src="{{ asset('img/prime_folder/livak_photo.jpg') }}" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="row mb-3">
                        <p>Ливак Елена Николаевна -
                        декан факультета математики и информатики
                        Гродненского государственного университета имени Янки Купалы.</p>
                        <p>Родилась 9 июля 1965 года в городе Витебске (Республика Беларусь).
                        В 1982 году с отличием окончила СШ № 1 города Гродно.</p>
                        <p>В этом же году поступила в Московский государственный университет имени М.В. Ломоносова на факультет вычислительной математики и кибернетики. Специализировалась по кафедре системного программирования. Занималась экспертными и информационно-поисковыми системами, проблемами искусственного интеллекта.
                        В 1987 году окончила факультет вычислительной математики и кибернетики МГУ имени М.В. Ломоносова, получила диплом с отличием.</p>
                        <p>По распределению три года работала инженером-программистом в НПО "Энергия" в г. Калининград (ныне г. Королёв) Московской области.</p>
                        <p>Затем переехала в г.Гродно. Работала инженером-программистом лаборатории компьютеризации образования кафедры математического обеспечения ГАП, САПР, АСУ Гродненского государственного университета имени Янки Купалы. Одновременно работала в должности ассистента, а затем старшего преподавателя этой же кафедры.
                        <p>В 2002 году окончила аспирантуру Белорусского государственного университета (факультет прикладной математики и информатики, кафедра математического обеспечения ЭВМ) по специальности 05.13.13 - Телекоммуникационные системы и компьютерные сети.
                        В 2003 году защитила кандидатскую диссертацию по теме "Разработка автоматизированной системы идентификации программного обеспечения в компьютерных сетях".
                        <br>
                        Научный руководитель - профессор, доктор технических наук, заведующий кафедрой математического обеспечения ЭВМ БГУ Буза Михаил Константинович
                        <br>
                        В феврале 2003 года решением Совета по защите диссертаций Д 02.02.02 при Белорусском государственном университете присуждена ученая степень кандидата технических наук.</p>
                        <p>C 2003 года работала в должности доцента кафедры информатики и вычислительной техники.</p>
                        <p>С сентября 2008 года – декан факультета математики и информатики Гродненского государственного университета имени Янки Купалы.
                        <br>
                        Одновременно доцент кафедры программного обеспечения интеллектуальных и компьютерных систем (по совместительству).</p>
                        <p>В феврале 2009 года постановлением Президиума высшей аттестационной комиссии Республики Беларусь присвоено звание доцента по специальности "Информатика и вычислительная техника".</p>
                        <p>С декабря 2009 по сентябрь 2010 являлась заместителем первого проректора ГрГУ им. Я.Купалы.</p>
                        <p>С октября 2010 года работу в должности декана совмещаю с работой в должности доцента кафедры системного программирования и компьютерной безопасности (по совместительству).</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <div class="container-fluid py-5" id="quality">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Quality</h1>
                <h1 class="position-absolute text-uppercase text-primary">Образование, интересы &amp; опыт</h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="mb-4">Научные интересы</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">обеспечение безопасности компьютерных систем и информационных технологий</h5>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">защита компьютерной информации</h5>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">защита интеллектуальной собственности в Internet</h5>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">защита авторских прав в области программного обеспечения</h5>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">безопасность электронного бизнеса</h5>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">психология программирования</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4">Под научным руководством Е.Н. Ливак защищены</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">48 дипломных работ</h5>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">6 магистерских диссертаций</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="mb-4">Опубликовано</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">более 30 научных работ</h5>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">15 научно-методических работ, в том числе 4 учебных пособия и электронный учебно-методический комплекс</h5>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">2 статьи в специализированном практическом журнале для субъектов хозяйствования "К вам пришла проверка" (г. Минск)</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4">В настоящее время</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Декан факультета математики и информатики</h5>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Председатель Совета факультета математики и информатики</h5>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Председатель Совета по информатизации ГрГУ им. Я. Купалы</h5>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Член Ученого совета ГрГУ им. Я. Купалы</h5>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Член Научно-методического совета ГрГУ им. Я. Купалы</h5>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Член Художественного совета ГрГУ им. Я. Купалы</h5>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Член Координационного совета по качеству ГрГУ им. Я. Купалы</h5>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Член Комитета Ассоциации "Инфопарк" по профессиональному образованию и трудовым ресурсам (г. Минск)</h5>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Член Учебно-методического совета (при учебно-методическом объединении по естественнонаучному образованию) по специальности "Компьютерная безопасность" (БГУ, г. Минск)</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(isset($poem_categories) && isset($poems))
        <!-- Blog Start -->
        <div class="container-fluid pt-5" id="poems">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Poems</h1>
                    <h1 class="position-absolute text-uppercase text-primary">Поэтическая страничка</h1>
                </div>

                <div class="row">
                    @foreach($poem_categories as $poem_category)
                        <div class="col-lg-4 mb-5">
                            <h5 class="font-weight-medium mb-4">{{ $poem_category->title }}</h5>
                            <a class="btn btn-sm btn-outline-primary py-2"
                               href="{{ route('poems.category', ['slug' => $poem_category->slug]) }}">
                                Подробнее...
                            </a>
                        </div>
                    @endforeach

                    @foreach($poems as $poem)
                        <div class="col-lg-4 mb-5">
                            <h5 class="font-weight-medium mb-4">{{ $poem->title }}</h5>
                            <a class="btn btn-sm btn-outline-primary py-2"
                               href="{{ route('poems.show', ['slug' => $poem->slug]) }}">
                                Подробнее...
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Blog End -->
    @endif

@endsection
