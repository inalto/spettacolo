<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('template.name') ? 'invalid' : '' }}">
        <label class="form-label" for="name">{{ trans('cruds.template.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" wire:model.defer="template.name">
        <div class="validation-message">
            {{ $errors->first('template.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.template.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('template.template') ? 'invalid' : '' }}">

<div wire:ignore>
        <textarea
        id="template"
        x-data="richEditor()"
        x-init="init($dispatch)"
        wire:key="richEditor"
        x-ref="richEditor"
        wire:model.debounce.9999999ms="template.template">
  
    </textarea>
</div>
    {{-- 
        <label class="form-label" for="template">{{ trans('cruds.template.fields.template') }}</label>
        <textarea  id="template" class="form-control" name="template" id="template" wire:model.defer="template.template" rows="4"></textarea>
        --}}
        <div class="validation-message">
            {{ $errors->first('template.template') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.template.fields.template_helper') }}
        </div>
    </div>
{{--
    <div class="form-group {{ $errors->has('template.template') ? 'invalid' : '' }}">
        <label class="form-label" for="template">{{ trans('cruds.template.fields.template') }}</label>
        <textarea class="form-control" name="template" id="template" wire:model.defer="template.template" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('template.template') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.template.fields.template_helper') }}
        </div>
    </div>
--}}

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.templates.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>
@push('scripts')
<script type="text/javascript">
    /**
     * An alpinejs app that handles CKEditor's lifecycle
     */
    function richEditor() {
        return {
            /**
             * The function creates the editor and returns its instance
             * @param $dispatch Alpine's magic property
             */
            create: async function($dispatch) {
                // Create the editor with the x-ref
                //const editor = await ClassicEditor.create(this.$refs.ckEditor);
                //window.rte.appendTo('#template');
                //const editor =  window.rte;
                await window.rte.appendTo('#template');
                // Handle data updates
                //console.log (editor);
                /*
                editor.model.document.on('change:data', function() {
                    $dispatch('input', editor.value)
                });
                */
                // return the editor
                return window.rte;
            },
            /**
             * Initilizes the editor and creates a listener to recreate it after a rerender
             * @param $dispatch Alpine's magic property
             */
            init: async function($dispatch) {
                // Get an editor instance
                const editor = await this.create($dispatch);
                // Set the initial data

                /*
                {{--editor.setData('{{ old('template') }}')--}}
                // Pass Alpine context to Livewire's
                const $this = this;
                // On reinit, destroy the old instance and create a new one
                Livewire.on('reinit', async function(e) {
                    editor.setData('');
                    editor.destroy()
                        .catch( error => {
                            console.log( error );
                        } );
                    await $this.create($dispatch);
                });
                */
            }
        }
    }

/*
window.rte.appendTo('#template');
window.addEventListener('submit',function() {
    
    //document.getElementById('template').value = window.rte.value;
    @this.template="pippo";
    //@this.template.template=window.rte.value;
    console.log(window.rte.value);
})
*/
</script>
@endpush