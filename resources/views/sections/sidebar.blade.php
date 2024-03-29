<!-- Sidebar -->
<section id="sidebar">
    <!-- Intro -->
    <section id="intro">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo" rel="home">
            @if (has_custom_logo())
                <img src="<?php echo wp_get_attachment_image_url(get_theme_mod('custom_logo'), 'full'); ?>" alt="logo" />
            @else
                <img src="@asset('images/avatar.jpg')" alt="logo" />
            @endif
        </a>

        <header>
            <h2>{!! bloginfo('name') !!}</h2>
            @if (get_bloginfo('description', 'display') || is_customize_preview())
                <p>
                    {!! get_bloginfo('description', 'display') !!}
                </p>
            @endif
        </header>
    </section>

    <!-- Mini Posts -->
    @if (class_exists('Recent_Sidebar_Mini_Posts_Widget'))
        {!! the_widget('Recent_Sidebar_Mini_Posts_Widget', [
            'before_widget' => '<section class="widget %1$s %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
            'title' => 'Recent Posts',
            'number' => 5,
        ]) !!}
    @endif

    <!-- Posts List -->

    {{-- Check if the widget is available --}}
    @if (class_exists('Recent_Sidebar_Posts_Widget'))
        {{-- {!! the_widget('Recent_Sidebar_Posts_Widget', [
            'before_widget' => '<section class="widget %1$s %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
            'title' => 'Recent Posts',
            'number' => 5,
        ]) !!} --}}
    @endif

    <!-- About -->
    <section class="blurb">
        <h2>About</h2>
        <p>
            Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed
            mattis nunc id lorem euismod amet placerat. Vivamus porttitor magna
            enim, ac accumsan tortor cursus at phasellus sed ultricies.
        </p>
        <ul class="actions">
            <li><a href="#" class="button">Learn More</a></li>
        </ul>
    </section>


    <!-- Footer -->
    <section id="footer">
        @php(dynamic_sidebar('socials'))

        {{-- <ul class="icons">
        <li>
            <a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a>
        </li>
        <li>
            <a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a>
        </li>
        <li>
            <a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a>
        </li>
        <li>
            <a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a>
        </li>
        <li>
            <a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a>
        </li>
    </ul> --}}
        <p class="copyright">
            &copy; Rahul Pranami. Design: <a href="http://html5up.net">HTML5 UP</a>.
            Images: <a href="http://unsplash.com">Unsplash</a>.
        </p>
    </section>

</section>
