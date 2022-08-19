<section class="page__portfolio portfolio portfolio_section_2" id="portfolio" data-aos="fade-left">
    <div class="portfolio__container">
        <div class="portfolio__body">
            <h2 class="portfolio__title title">Одностраничные лэндинги</h2>
            <h4 class="portfolio__subtitle subtitle">
                Лэндинги, JavaScript, CSS, HTML.<br>Все страницы адаптированы под мобильные устройства.
            </h4>
            <div class="portfolio__grid">
                @foreach ($projects as $project)
                    @if($project->category_id == 1 && $project->visability == 1)
                        <div class="portfolio__item" data-aos="flip-up">
                            <div class="item">
                                <div class="item__title">
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
                                {{-- <div class="item__description">
                                    <div class="item__text text">{{ $project->description }}</div>
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