<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('contract.name') ? 'invalid' : '' }}">
        <label class="form-label" for="name">{{ trans('cruds.contract.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" wire:model.defer="contract.name">
        <div class="validation-message">
            {{ $errors->first('contract.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contract.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('mediaCollections.contract_attachment') ? 'invalid' : '' }}">
        <label class="form-label" for="attachment">{{ trans('cruds.contract.fields.attachment') }}</label>
        <x-dropzone id="attachment" name="attachment" action="{{ route('admin.contracts.storeMedia') }}" collection-name="contract_attachment" max-file-size="8" max-files="1" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.contract_attachment') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contract.fields.attachment_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contract.location') ? 'invalid' : '' }}">
        <label class="form-label" for="location">{{ trans('cruds.contract.fields.location') }}</label>
        <input class="form-control" type="text" name="location" id="location" wire:model.defer="contract.location">
        <div class="validation-message">
            {{ $errors->first('contract.location') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contract.fields.location_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contract.cup') ? 'invalid' : '' }}">
        <label class="form-label" for="cup">{{ trans('cruds.contract.fields.cup') }}</label>
        <input class="form-control" type="text" name="cup" id="cup" wire:model.defer="contract.cup">
        <div class="validation-message">
            {{ $errors->first('contract.cup') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contract.fields.cup_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contract.cig') ? 'invalid' : '' }}">
        <label class="form-label" for="cig">{{ trans('cruds.contract.fields.cig') }}</label>
        <input class="form-control" type="text" name="cig" id="cig" wire:model.defer="contract.cig">
        <div class="validation-message">
            {{ $errors->first('contract.cig') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contract.fields.cig_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contract.title') ? 'invalid' : '' }}">
        <label class="form-label" for="title">{{ trans('cruds.contract.fields.title') }}</label>
        <input class="form-control" type="text" name="title" id="title" wire:model.defer="contract.title">
        <div class="validation-message">
            {{ $errors->first('contract.title') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contract.fields.title_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contract.date') ? 'invalid' : '' }}">
        <label class="form-label" for="date">{{ trans('cruds.contract.fields.date') }}</label>
        <x-date-picker class="form-control" wire:model="contract.date" id="date" name="date" />
        <div class="validation-message">
            {{ $errors->first('contract.date') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contract.fields.date_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contract.price') ? 'invalid' : '' }}">
        <label class="form-label" for="price">{{ trans('cruds.contract.fields.price') }}</label>
        <input class="form-control" type="number" name="price" id="price" wire:model.defer="contract.price" step="0.01">
        <div class="validation-message">
            {{ $errors->first('contract.price') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contract.fields.price_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.contracts.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>