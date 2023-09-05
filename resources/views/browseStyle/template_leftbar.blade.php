
<div class="span3" >
    <div class="sidebar" >
        <ul class="widget widget-menu unstyled">
            <li>
                <a href="{{ URL('browse/showAllBook') }}">
                    <i class="menu-icon icon-list-ul"></i>show all book
                </a>
            </li>
            <li>
                <a href="{{ URL('browse/showAllAuthor') }}">
                    <i class="menu-icon icon-list-ul"></i> Show all author
                </a>
            </li>
            <li>
                <a href="{{ URL('browse/showAllPublishHouse') }}" >
                    <i class="menu-icon icon-list-ul"></i>show all publish house
                </a>
            </li>
            <li>
                <a href="{{ URL('browse/showAllRanking') }}" >
                    <i class="menu-icon icon-list-ul"></i>show all category
                </a>
            </li>
            <li>
                <a href="{{ URL('browse/showAuthorWithBooks') }}">
                    <i class="menu-icon icon-list-ul"></i>view book by author
                </a>
            </li>
            <li>
                <a href="{{ URL('browse/showPublishHouseWithBooks') }}">
                    <i class="menu-icon icon-list-ul"></i>view book by publish house
                </a>
            </li>
            <li>
                <a href="{{ URL('browse/showRankingWithBooks') }}">
                    <i class="menu-icon icon-list-ul"></i>view book by category
                </a>
            </li>

            <li>
                <a href="{{ URL('browse/base') }}">
                    <i class="menu-icon icon-signout"></i>search
                </a>
            </li>
        </ul>
        
        <ul class="widget widget-menu unstyled">
            <li><a href="{{URL('loginAdmain')}}"><i class="menu-icon icon-wrench"></i>Logout </a></li>
        </ul>
    </div>
</div>