@extends('welcome')

@section('content')
<div class="tab-menu">
  <ul>
    <li id="left" class="selected">左タブ</li>
    <li id="right">右タブ</li>
  </ul>

  <div class="contents">
    <div class="left">
      <p>お花コンテンツ</p>
    </div>
    <div class="right">
      <p>お魚コンテンツ</p>
    </div>
  </div>
</div>
@endsection