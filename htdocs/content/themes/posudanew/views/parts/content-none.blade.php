<section class="no-results not-found">
    <header class="page-header">
        <h1 class="page-title">{{ esc_html__('По вашему запросу ничего не найдено', THEME_TD) }}</h1>
    </header><!-- .page-header -->
    <div class="page-content">
        @if(is_home() && current_user_can('publish_posts'))
            <p>
                {!! sprintf(
                    wp_kses(
                        __('Ready to publish your first post? <a href="%1$s">Get started here</a>.', THEME_TD),
                        [
                            'a' => [
                                'href' => []
                            ]
                        ]
                    ),
                    esc_url(admin_url('post-new.php'))
                ) !!}
            </p>
        @elseif(is_search())
            <p>{{ esc_html__('Попробуйте ввести другой поисковый запрос.', THEME_TD) }}</p>
            {!! get_search_form(false) !!}
        @else
            <p>{{ esc_html__('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', THEME_TD) }}</p>
            {!! get_search_form(false) !!}
        @endif
    </div><!-- .page-content -->
</section><!-- .no-results -->