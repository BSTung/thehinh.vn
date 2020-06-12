<div class="top-question">
            <div class="title">Bài viết Hot</div>
            <ul>
                @foreach($articles as $key => $item)
                <li>
                    <span class="stt">{{ $key + 1}}</span>
                    <a href="{{ route('get.blog.detail', $article->a_slug.'-'.$article->id)}}">{{ $item->a_name}}</a>
                </li>
                @endforeach
            </ul>
        </div>