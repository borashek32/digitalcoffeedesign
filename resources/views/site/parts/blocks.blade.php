<section class="page__portfolio portfolio portfolio_section_2" data-aos="fade-left">
    <div class="portfolio__container">
        <div class="portfolio__body">
            <h2 class="portfolio__title title">Отдельные блоки</h2>
            <h4 class="portfolio__subtitle subtitle">
                Элементы, без которых не обходится ни один сайт.<br>Все элементы адаптированы под мобильные устройства.
            </h4>
            <div class="portfolio__grid">
                @foreach ($projects as $project)
                    @if($project->category_id == 3 && $project->visability == 1)
                        <div class="portfolio__item portfolio__grid_section_2">
                            <div class="item" data-aos="flip-up">
                                <div>
                                    <div class="item__title item__title_section_2">
                                        @if($project->link)
                                            <a href="{{ $project->link}}">
                                                {{ $project->title }}
                                            </a>
                                        @endif
                                        @if(empty($project->link))
                                            <a href="{{ route($project->slug) }}">
                                                {{ $project->title }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                {{-- <div class="item__description item__description_section_2">
                                    <div class="item__text text">{!! $project->description !!}</div>
                                </div> --}}
                                <div class="item__img">
                                    @if($project->link)
                                        <a href="{{ $project->link}}">
                                            <img src="{{ $project->img }}" alt="{{ $project->title }}">
                                        </a>
                                    @endif
                                    @if(empty($project->link))
                                        <a href="{{ route($project->slug) }}">
                                            <img src="{{ $project->img }}" alt="{{ $project->title }}">
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>