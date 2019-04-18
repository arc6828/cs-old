<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($event->title) ? $event->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('guest_name') ? 'has-error' : ''}}">
    <label for="guest_name" class="control-label">{{ 'Guest Name' }}</label>
    <input class="form-control" name="guest_name" type="text" id="guest_name" value="{{ isset($event->guest_name) ? $event->guest_name : ''}}" >
    {!! $errors->first('guest_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('place_type') ? 'has-error' : ''}}">
    <label for="place_type" class="control-label">{{ 'Place Type' }}</label>
    <select name="place_type" class="form-control" id="place_type" >
    @foreach (json_decode('{"\u0e20\u0e32\u0e22\u0e43\u0e19":"\u0e20\u0e32\u0e22\u0e43\u0e19\u0e21\u0e2b\u0e32\u0e27\u0e34\u0e17\u0e22\u0e32\u0e25\u0e31\u0e22","\u0e20\u0e32\u0e22\u0e19\u0e2d\u0e01":"\u0e20\u0e32\u0e22\u0e19\u0e2d\u0e01\u0e21\u0e2b\u0e32\u0e27\u0e34\u0e17\u0e22\u0e32\u0e25\u0e31\u0e22"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($event->place_type) && $event->place_type == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('place_type', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('place') ? 'has-error' : ''}}">
    <label for="place" class="control-label">{{ 'Place' }}</label>
    <input class="form-control" name="place" type="text" id="place" value="{{ isset($event->place) ? $event->place : ''}}" >
    {!! $errors->first('place', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('date') ? 'has-error' : ''}}">
    <label for="date" class="control-label">{{ 'Date' }}</label>
    <input class="form-control" name="date" type="date" id="date" value="{{ isset($event->date) ? $event->date : ''}}" >
    {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('filename') ? 'has-error' : ''}}">
    <label for="filename" class="control-label">{{ 'Filename' }}</label>
    <input class="form-control" name="filename" type="text" id="filename" value="{{ isset($event->filename) ? $event->filename : ''}}" >
    {!! $errors->first('filename', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
