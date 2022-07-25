<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">{{__('admin/common.form.name')}} <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
        <input type="text" id="name" name="name"  class="form-control" value="{{isset($category) ? $category->name : ''}}">
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="code">{{__('admin/common.form.code')}} <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
        <input type="text" id="code" name="code" required="required" class="form-control" value="{{isset($category) ? $category->code : ''}}">
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="parent_id">{{__('admin/common.form.parentCategory')}}</label>
    <div class="col-md-6 col-sm-6 ">
        <select class="form-control" name="parent_id">
            <option value="0">{{__('admin/common.form.upperLevel')}}</option>
            @foreach($categories as $categoryOption)
                @if($categoryOption->id === (isset($category) ? $category->id : -1))
                    @continue
                @elseif($categoryOption->id === (isset($category) ? ($category->parentCategory ? $category->parentCategory->id : 0) : -1))
                    <option selected value="{{$categoryOption->id}}">{{$categoryOption->name}}</option>
                @else
                    <option value="{{$categoryOption->id}}">{{$categoryOption->name}}</option>
                @endif
            @endforeach
        </select>
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="description">{{__('admin/common.form.description')}}</label>
    <div class="col-md-6 col-sm-6 ">
        <textarea class="form-control" name="description" rows="3">{{isset($category) ? $category->description : ''}}</textarea>
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">{{__('admin/common.form.image')}}</label>
    <div class="col-md-6 col-sm-6 ">
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="image" accept="image/png, image/jpeg" />
            <label class="custom-file-label" for="image">{{__('admin/common.form.imageType')}}</label>
        </div>
    </div>
</div>
<div class="ln_solid"></div>
<div class="item form-group">
    <div class="col-md-6 col-sm-6 offset-md-3">
        <button type="submit" class="btn btn-success">{{__('admin/common.button.save')}}</button>
    </div>
</div>

