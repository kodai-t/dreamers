<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Achieved List -Dreamers-</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  </head>
  <body>
<!-- navbar -->
    @include('layouts.navbar')

<!-- profile -->
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="d-flex pt-4">
            <div>
              <img src="{{Auth::user()->icon_url}}" alt="Avatar" class="avatar">
            </div>
            <div class="no_edit pl-3" style="display: block;">
              <h4 id="name">{{Auth::user()->name}}</h4>
              @if(isset(Auth::user()->description))
              <p id="description">{{Auth::user()->description}}</p>
              @endif
              <a href="/mypage/achivedlist"><p>叶えた夢の数：{{$achievementNum}}</p></a>
            </div>
            <div class="ml-auto no_edit">
              <a class="btn btn-outline-secondary" id="edit">Edit Profile</a>
            </div>
            <!-- for edit profile -->
            <form action="/update_profile" method="post" style="display: none;" id="edit_form">
              {{ csrf_field() }}
              <div class="d-flex pb-0">
                <div class="mr-auto p-2">
                  <div class="form-group">
                    <label>Name</label>
                      <input class="form-control" name="name" value="{{Auth::user()->name}}" id="name_update">
                  </div>
                </div>
                <div class="p-2 ml-auto">
                  <button class="btn btn-outline-secondary" type="submit" id="update">Save</button>
                </div>
              </div>
              <div class="form-group">
                <label>Bio</label>
                @if(isset(Auth::user()->description))
                <textarea class="form-control" name="description" rows="3" cols="80" id="description_update">{{Auth::user()->description}}</textarea>
                @else
                <textarea class="form-control" name="description" rows="3" cols="80" id="description_update"></textarea>
                @endif
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

<!-- achievedDreams -->
    <div class="container p-0">
      <h2 class="list-name">ACHIEVED LIST</h2>
    </div>
    <div class="container">
      @foreach($achievedDreams as $achievedDream)
      <div class="row">
        <div class="card mx-auto">
          <div class="card-body pb-0">
            <a href="/mypage/mydream?dream_id={{$achievedDream->id}}" class="text-dark float-left"><p>{{$achievedDream->title}}</p></a>
            <div class="float-right">
              <div class="good-button">
                <p class="float-right">{{$achievedDream->good}}</p>
                <img src="{{ asset('img/fire.png') }}" style="width">
              </div>
            </div>
          </div>
          <p class="text-right mb-0" style="font-size: .5rem;">{{$achievedDream->updated_at}}に達成しました。</p>
        </div>
      </div>
      @endforeach
    </div>
  </body>
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/update_profile.js') }}"></script>
</html>
