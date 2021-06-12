<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('person.first_name') ? 'invalid' : '' }}">
        <label class="form-label required" for="first_name">{{ trans('cruds.person.fields.first_name') }}</label>
        <input class="form-control" type="text" name="first_name" id="first_name" required wire:model.defer="person.first_name">
        <div class="validation-message">
            {{ $errors->first('person.first_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.person.fields.first_name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('person.last_name') ? 'invalid' : '' }}">
        <label class="form-label required" for="last_name">{{ trans('cruds.person.fields.last_name') }}</label>
        <input class="form-control" type="text" name="last_name" id="last_name" required wire:model.defer="person.last_name">
        <div class="validation-message">
            {{ $errors->first('person.last_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.person.fields.last_name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('person.qualita') ? 'invalid' : '' }}">
        <label class="form-label required">{{ trans('cruds.person.fields.qualita') }}</label>
        <select class="form-control" wire:model="person.qualita">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['qualita'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('person.qualita') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.person.fields.qualita_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('person.ref') ? 'invalid' : '' }}">
        <label class="form-label required" for="ref">{{ trans('cruds.person.fields.ref') }}</label>
        <input class="form-control" type="text" name="ref" id="ref" required wire:model.defer="person.ref">
        <div class="validation-message">
            {{ $errors->first('person.ref') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.person.fields.ref_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('person.address') ? 'invalid' : '' }}">
        <label class="form-label required" for="address">{{ trans('cruds.person.fields.address') }}</label>
        <input class="form-control" type="text" name="address" id="address" required wire:model.defer="person.address">
        <div class="validation-message">
            {{ $errors->first('person.address') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.person.fields.address_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('person.cap') ? 'invalid' : '' }}">
        <label class="form-label required" for="cap">{{ trans('cruds.person.fields.cap') }}</label>
        <input class="form-control" type="text" name="cap" id="cap" required wire:model.defer="person.cap">
        <div class="validation-message">
            {{ $errors->first('person.cap') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.person.fields.cap_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('person.city') ? 'invalid' : '' }}">
        <label class="form-label required" for="city">{{ trans('cruds.person.fields.city') }}</label>
        <input class="form-control" type="text" name="city" id="city" required wire:model.defer="person.city">
        <div class="validation-message">
            {{ $errors->first('person.city') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.person.fields.city_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('person.cf') ? 'invalid' : '' }}">
        <label class="form-label" for="cf">{{ trans('cruds.person.fields.cf') }}</label>
        <input class="form-control" type="text" name="cf" id="cf" wire:model.defer="person.cf">
        <div class="validation-message">
            {{ $errors->first('person.cf') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.person.fields.cf_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('person.piva') ? 'invalid' : '' }}">
        <label class="form-label" for="piva">{{ trans('cruds.person.fields.piva') }}</label>
        <input class="form-control" type="text" name="piva" id="piva" wire:model.defer="person.piva">
        <div class="validation-message">
            {{ $errors->first('person.piva') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.person.fields.piva_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contract') ? 'invalid' : '' }}">
        <label class="form-label" for="contract">{{ trans('cruds.person.fields.contract') }}</label>
        <x-select-list class="form-control" id="contract" name="contract" wire:model="contract" :options="$this->listsForFields['contract']" multiple />
        <div class="validation-message">
            {{ $errors->first('contract') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.person.fields.contract_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.people.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>