@extends('layouts.master')

@section('content')

    @forelse ($posts as $key => $value)
        <div>
            <div>
                <div>
                    <a class="ads-href" href="{{{action('PostsController@show', $value->id)}}}">
                   <strong><u>{{{ $value->title }}}</u></strong>
                   </a>
                    <ul>
                        {{{ substr($value->body, 0, 164) . "..." }}}
                    </ul>
                    <a class="ads-href" href="posts/?user={{{ $value->user->first_name }}}">
                   <u>{{{ $value->user->first_name }}}</u>
                   </a>
                </div>
            </div><br>
        </div>
    @empty
        <h1>No results for your search. =(</h1>
    @endforelse

    {{ $posts->links() }}

@stop