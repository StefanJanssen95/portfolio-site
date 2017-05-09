<nav class="nav no-select">
    <div class="nav__img"></div>
    <div class="nav__name">STEFAN JANSSEN</div>
    <ul class="nav__list">
        <li class="nav__item {{ $currentPage == "about" ? "nav__item--selected":""}}">
            <a href="/about" class="nav__tab">
                <i class="fa fa-user fa-2x"></i>
                ABOUT ME
            </a>
        </li>
        <li class="nav__item {{ $currentPage == "skills" ? "nav__item--selected":""}}">
            <a href="/skills" class="nav__tab">
	            <i class="fa fa-user fa-2x"></i>
	            SKILLS
            </a>
        </li>
        <li class="nav__item {{ $currentPage == "projects" ? "nav__item--selected":""}}">
            <a href="/projects" class="nav__tab">
	            <i class="fa fa-code-fork fa-2x"></i>
	            PROJECTS
            </a>
        </li>
        <li class="nav__item {{ $currentPage == "blog" ? "nav__item--selected":""}}">
            <a href="/blog" class="nav__tab">
	            <i class="fa fa-comment fa-2x"></i>
	            BLOG
            </a>
        </li>
    </ul>
    <div class="nav__footer">
        <a target="_blank" href="/linkedin"><i class="fa fa-linkedin fa-2x"></i></a>
        <a target="_blank" href="/github"><i class="fa fa-github fa-2x"></i></a>
        <a target="_blank" href="/gitlab"><i class="fa fa-gitlab fa-2x"></i></a>
    </div>
</nav>