

@extends('layouts.mainlayout')
@section('title',"Request page")

@section('content')

<div class="container-fluid" style="padding-top: 30px; padding-left: 20px; padding-bottom: 30px;">
<div class="card">
  <div class="card-header" style="text-align-center">
  
  <strong> රාජකාරි ගමන් යාම සඳහා වාහනයක් ඉල්ලුම් කිරීම</strong>
      
  </div>
  <div>
    <form>
    <div class="form-group" style="padding-right: 20px; padding-left: 20px; padding-top: 20px;">
        <label for="exampleInputEmail1">අයදුම්කරුගේ නම</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        
    </div>
    <div class="row" style="padding-right: 20px; padding-left: 20px;">
    <div class="form-group" style="padding-right: 20px; padding-left: 20px;">
        <label for="exampleInputEmail1">වාහනය අවශ්‍ය දිනය</label>
        <input type="date" name="date" max="3000-12-31" min="1000-01-01" class="form-control">
        
    </div>

    <div class="form-group" style="padding-right: 20px; padding-left: 20px;">
        <label for="exampleInputEmail1">වේලාව</label>
        <input type="time" name="time"  class="form-control">
        </div>

        <div class="form-group col-md-4" style="padding-right: 20px; padding-left: 20px;">
            <label for="duration">අවශ්‍ය කාල පරාසය</label>
            <select class="form-control" id="duration" name="duration">
            <option value="" selected disabled hidden>Choose here</option>
            <option>පැය 1</option>
            <option>පැය 2</option>
            <option>පැය 3</option>
            <option>දින 1</option>
            <option>දින 2</option>
            <option>දින 3</option>
            </select>
            </div>
    
    </div>
    <div class="form-group" style="padding-right: 20px; padding-left: 20px;">
        <label for="exampleInputEmail1">ගමන් කරන ස්ථානය </label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        
    </div>
    <div class="form-group" style="padding-right: 20px; padding-left: 20px;">
        <label for="exampleInputEmail1">ඉටු කිරීමට ඇති රාජකාරියේ ස්භාවය</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        
    </div>
    
    <div class="row" style="padding-right: 20px; padding-left: 20px;">
    <div class="form-group" style="padding-right: 20px; padding-left: 20px;">
        <label for="exampleInputEmail1"> දිනය</label>
        <input type="date" name="date" max="3000-12-31" min="1000-01-01" class="form-control">
        
    </div>

    <div class="form-group" style="padding-right: 20px; padding-left: 20px;">
        <label for="exampleInputEmail1">වේලාව</label>
        <input type="time" name="time"  class="form-control">
        </div>
    
    </div>
    <div style="padding-right: 20px; padding-left: 20px;padding-bottom: 20px;">
    <button type="submit" class="btn btn-primary">Request Vehicle</button>
    </div>
    </form>
    </div>
</div>   
</div>   
@endsection