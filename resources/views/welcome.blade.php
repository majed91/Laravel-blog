
@extends('layouts.default')
 @section('body')

	<div id="page" class="hfeed site">
	<div id="main" class="wrapper">	
		<div id="content-top-widget-area" class="content-top-widget-area" role="complementary">
		<div class="content-top-widget"><h2 class="title-widget">Popular Posts that you don’t miss it!</h2>
		<div class="textwidget">
		<div class="sp_wpspwpost_static wpspw-design-1 wpspw-grid-3 wpspw-clearfix ">

	@foreach($articles as $article)		
<div class="wpspw-post-grid wpspw-medium-4 wpspw-columns  first">
	<div class="wpspw-post-grid-content  ">

					<div class="wpspw-post-image-bg">
				<a href="#">
					<img src="{{url('/uploads'.$article->thumbnail)}}" alt="#" />
				</a>
			</div>
		<h2 class="wpspw-post-title">
			<a href="{{url('/article/'.$article->id)}}">{{$article->title}}</a>
		</h2>
			<div class="wpspw-post-content">
				{{article->created_at}}
			</div>
</div>
@endforeach
				</div>
			</div>
		</div>
	</div>

		
		<div class="wpspw_pagination wpspw-numeric wpspw-clearfix">

            <span aria-current="page" class="page-numbers current">1</span>
            <a class="page-numbers" href="/rubbersoul/?blog_post_page=2">2</a>
            <a class="page-numbers" href="/rubbersoul/?blog_post_page=3">3</a>
            <a class="page-numbers" href="/rubbersoul/?blog_post_page=4">4</a>
            <a class="next page-numbers" href="/rubbersoul/?blog_post_page=2">Next &raquo;</a>			</div><!-- end .blog_pagination -->
			
		</div>

	</div>
</div>

	
			
    @endsection

