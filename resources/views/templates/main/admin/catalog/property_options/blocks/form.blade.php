<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">{{__('admin/common.form.value')}} <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
        <input type="text" id="name" name="name"  class="form-control" value="{{isset($propertyOption) ? $propertyOption->name : ''}}">
    </div>
</div>
<div class="ln_solid"></div>
<div class="item form-group">
    <div class="col-md-6 col-sm-6 offset-md-3">
        <button type="submit" class="btn btn-success">{{__('admin/common.button.save')}}</button>
    </div>
</div>

