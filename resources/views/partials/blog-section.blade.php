            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-4 col-sm-6">
                        <div class="image">
                            <img src="{{ url($post->image) }}" class="img-responsive" alt="">
                            <a
                                href="{{ url('blog/post', $post->id) }}">
                                <span>{{ $post->created_at->format('d F Y') }}</span>
                                <br>
                                <span>{{ $post->title }}</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center">
                {{ $posts->links() }}
            </div>
