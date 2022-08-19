<section class="page__portfolio portfolio portfolio_section_2" data-aos="fade-right">
    <div class="portfolio__container">
        <div class="portfolio__body">
            <h2 class="portfolio__title title">Многостраничная верстка</h2>
            <h4 class="portfolio__subtitle subtitle">
                Многостраничные сайты, JavaScript, CSS, HTML.<br>Все сайты полностью адаптированы под мобильные устройства.
            </h4>
            <div class="portfolio__grid">
                @foreach ($projects as $project)
                    @if($project->category_id == 2 && $project->visability == 1)
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