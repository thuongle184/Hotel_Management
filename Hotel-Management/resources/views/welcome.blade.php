@extends('_layouts.app')

@section('content')

  <div id="my-welcome-slides-hidden" class="d-none">
    @foreach(mySlideHelperWelcomePage() as $slide)
      <img class="w-100" src="{!! $slide['url'] !!}">
    @endforeach
  </div>

  <div id="my-welcome-slides" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      @foreach(mySlideHelperWelcomePage() as $slide)
        
        @if($loop->first)
          <li 
            data-target="#my-welcome-slides"
            data-slide-to="{!! $loop->index !!}"
            class="active"
          ></li>
        
        @else
          <li 
            data-target="#my-welcome-slides"
            data-slide-to="{!! $loop->index !!}"
          ></li>
        
        @endif
        
      @endforeach
    </ol>
    
    <div class="carousel-inner">
      @foreach(mySlideHelperWelcomePage() as $slide)
        
        @if($loop->first)

          <figure class="carousel-item active">
            <img class="d-block w-100" src="{!! $slide['url'] !!}">
            
            <figcaption class="carousel-caption d-none d-md-block bg-white text-dark">
              <h5 class="font-weight-bold">{!! strtoupper($slide['title']) !!}</h5>
              <span class="font-italic">{!! $slide['text'] !!}</span>
            </figcaption>
          </figure>
        

        @else
        
          <figure class="carousel-item">
            <img class="d-block w-100" src="{!! $slide['url'] !!}">
            
            <figcaption class="carousel-caption d-none d-md-block bg-white text-dark">
              <h5 class="font-weight-bold">{!! strtoupper($slide['title']) !!}</h5>
              <span class="font-italic">{!! $slide['text'] !!}</span>
            </figcaption>
          </figure>
        

        @endif

      @endforeach
    </div>
    
    <a class="carousel-control-prev" href="#my-welcome-slides" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    
    <a class="carousel-control-next" href="#my-welcome-slides" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="col-md-7">
    <h1>Contact Me</h1>
    <hr>
    <form action="" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label name="email">Email:</label>
            <input id="email" name="email" class="form-control" placeholder="Email">
        </div>

        <div class="form-group">
            <label name="subject">Subject:</label>
            <input id="subject" name="subject" class="form-control" placeholder="Subject">
        </div>

        <div class="form-group">
            <label name="message">Message:</label>
            <textarea id="message" name="message" class="form-control" placeholder="Type your message here..."></textarea>
        </div>

        <input type="submit" value="Send Message" class="btn btn-success">
    </form>
</div>
@endsection
