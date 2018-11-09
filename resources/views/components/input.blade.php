<div class="form-group">
    <label for="exampleInputEmail1">{{$label}}</label>
    <input type="{{$type}}" id="{{isset($id) ? $id : ''}}" class="form-control" name="{{strtolower(str_replace(' ','_',$label))}}" placeholder="{{$label}}">
</div>