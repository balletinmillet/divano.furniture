<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="price">{{__('admin/common.form.price')}} <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
        <input type="text" id="price" name="price"  class="form-control" value="{{isset($sku) ? $sku->price : ''}}">
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="count">{{__('admin/common.form.count')}} <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
        <input type="text" id="count" name="count" required="required" class="form-control" value="{{isset($sku) ? $sku->count : ''}}">
    </div>
</div>
@foreach ($product->properties as $property)
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="property_id[{{ $property->id }}]">
            {{ $property->name }}</label>
        <div class="col-md-6 col-sm-6 ">
            <select class="form-control" name="property_id[{{ $property->id }}]">
                <option value="0">{{__('admin/common.form.notSelected')}}</option>
                @foreach($property->propertyOptions as $propertyOption)
                    <option value="{{ $propertyOption->id }}"
                            @isset($sku)
                            @if($sku->propertyOptions->contains($propertyOption->id))
                            selected
                        @endif
                        @endisset
                    >{{ $propertyOption->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
@endforeach
<div class="ln_solid"></div>
<div class="item form-group">
    <div class="col-md-6 col-sm-6 offset-md-3">
        <button type="submit" class="btn btn-success">{{__('admin/common.button.save')}}</button>
    </div>
</div>

