
<div class="span3" >
    <div class="sidebar" >
        <ul class="widget widget-menu unstyled">
            <li>
                <a href="{{ URL('book/create') }}">
                    <i class="menu-icon icon-folder-open-alt"></i>Add Book
                </a>
            </li>
            <li>
                <a href="{{ URL('Book') }}">
                    <i class="menu-icon icon-list-ul"></i> Show Book
                </a>
            </li>
            <li>
                <a href="{{ URL('author/create') }}" >
                    <i class="menu-icon icon-folder-open-alt"></i>Add Author
                </a>
            </li>
            <li>
                <a href="{{ URL('author') }}" >
                    <i class="menu-icon icon-list-ul"></i>show author
                </a>
            </li>
            <li>
                <a href="{{ URL('bookRanking/create') }}">
                    <i class="menu-icon icon-folder-open-alt"></i>add category
                </a>
            </li>
            <li>
                <a href="{{ URL('bookRanking') }}">
                    <i class="menu-icon icon-list-ul"></i>show ctegory
                </a>
            </li>
            <li>
                <a href="{{ URL('publishHouse/create') }}">
                    <i class="menu-icon icon-folder-open-alt"></i>Add publish house
                </a>
            </li>

            <li>
                <a href="{{ URL('publishHouse') }}">
                    <i class="menu-icon icon-list-ul"></i>show publish house
                </a>
            </li>
        </ul>
        <ul class="widget widget-menu unstyled">
            <li><a href="{{ URL('loginAdmain') }}" ><i class="menu-icon icon-wrench"></i>Logout </a></li>
        </ul>
    </div>
</div>